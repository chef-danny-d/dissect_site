from flask import Flask, render_template, request, session, redirect, url_for
from functools import wraps
import requests
import os
import json


app = Flask(__name__, template_folder='templates')
base_url = "http://localhost:5000/"

def login_required(f):
    @wraps(f)
    def decorated_function(*args, **kwargs):
        try:
            session['token']
        except:
            return redirect(url_for('login', next=request.url))
        return f(*args, **kwargs)
    return decorated_function

def setSession(req, token):
    session['token'] = token
    session['ip'] = req.remote_addr

@app.route('/signup.php', methods=['POST', 'GET'])
def register():
    if request.method == "POST":
        #GET INFO FROi FORM HERE
        data = json.loads({
            "first_name": request.form.getlist('first-name'),
            "last_name": request.form.getlist('last-name'),
            "email": request.form.getlist('email'),
            "password": request.form.getlist('password')
        })
        response = requests.post(base_url+'users/register', data=data)
        r = json.loads(response.text)
        setSession(request, r['token'])
    return render_template('signup.php')
@app.route('/login.php', methods=['POST', 'GET'])
def login():
    #parse next arg to redirect them to link
    if request.method == "POST":
        data = json.dumps({
            "email": str(request.form.getlist('email')),
            "password": str(request.form.getlist('password'))
        })
        response = requests.post(base_url+'users/login', data=data)
        r = json.loads(response.text)
        print r
        #authenticate user
        #if auth is successfull it returns toen
        if response.status_code == 200:
            setSession(request, r['token'])

    if 'token' in session:
        redirect(url_for('home'))

    return render_template('login.php')

@app.route('/logout.php', methods=['POST', 'GET'])
@login_required
def logout():
    session.pop('token', None)
    return redirect(url_for('index'))

@app.route('/home.php')
@login_required
def home():
    return render_template('index.html')

@app.route('/user.php')
@login_required
def user():
    return render_template('profile.html')

@app.route('/shared.php')
@login_required
def shared():
    return render_template('shared.html')

@app.route('/trash.php')
@login_required
def trash():
    return render_template('trash.php')

@app.route('/settings.php')
@login_required
def settings():
    return render_template('settings.php')

@app.route('/upload.php')
@login_required
def upload():
    return render_template('upload.php')

@app.route('/profile.php')
@login_required
def profile():
    return render_template('profile.php')
app.secret_key = os.urandom(24)
app.run(host='localhost',port='4000')
