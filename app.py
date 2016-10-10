from flask import Flask, render_template, request, session, redirect, url_for
from functools import wraps
import requests
import os
import json


app = Flask(__name__, template_folder='templates')
base_url = "http://76.21.34.185" #aws:"52.37.186.91"


def login_required(f):
    @wraps(f)
    def decorated_function(*args, **kwargs):
        try:
            print session['token']

        except:
            print 'token expired'
            return redirect(url_for('login', next=request.url))
        return f(*args, **kwargs)
    return decorated_function

def redirect_if_session(url):
    if 'token' in session:
        print 'redirecting'
        #redirect(url_for('home'))
        return redirect(url)

@app.route('/', methods=['GET'])
def index():
    return render_template('index.php')
@app.route('/signup', methods=['POST', 'GET'])
def register():
    if request.method == "POST":
        #GET INFO FROi FORM HERE
        data = json.loads({
            "first_name": request.form.getlist('first-name'),
            "last_name": request.form.getlist('last-name'),
            "email": request.form.getlist('email'),
            "password": request.form.getlist('password')
        })
        response = requests.post(base_url+'/user/register', data=data)
        r = json.loads(response.text)
        print r
        if response.status_code == 200:
            session['token'] = r['token']
            redirect_if_session(url_for('home'))

    return render_template('signup.php')


@app.route('/login', methods=['POST', 'GET'])
def login():
    redirect_if_session(url_for('home'))
    #parse next arg to redirect them to link
    if request.method == "POST":
        data = json.dumps({
            "email": str(request.form.getlist('email')[0]),
            "password": str(request.form.getlist('password')[0])
        })

        response = requests.post(base_url+'/user/login', data=data)
        r = json.loads(response.text)

        if response.status_code == 200:
            session['token'] = r['token']
            return redirect_if_session(url_for('home'))

        elif response.status_code == 401:
            print 'INCRRECT INFO'

    if request.method == "GET":
        return render_template('login.php')


@app.route('/logout', methods=['POST', 'GET'])
@login_required
def logout():
    session.pop('token', None)
    return redirect(url_for('index'))

@app.route('/home')
@login_required
def home():
    return render_template('home.php')

@app.route('/user')
@login_required
def user():
    return render_template('profile.html')

@app.route('/shared')
@login_required
def shared():
    return render_template('shared.html')

@app.route('/trash')
@login_required
def trash():
    return render_template('trash.php')

@app.route('/settings')
@login_required
def settings():
    return render_template('settings.php')

@app.route('/upload')
@login_required
def upload():
    return render_template('upload.php')

@app.route('/profile')
@login_required
def profile():
    return render_template('profile.php')

app.secret_key = os.urandom(24)
#app.run(host='0.0.0',port='80')
app.run(host='localhost', port=5000)
