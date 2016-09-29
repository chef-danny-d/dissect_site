# Official Dissect Web and desktop application
  This is where we put somekind of power statement about the project to get more attention.
# Structuring
  These are all the files and directories inside of the dissect app when you clone it

```
|-- Desktop
    |-- app.py
    |-- readme.md
    |-- video.appcache
    |-- login
    |-- app
    |   |-- dist
    |   |   |-- template-app
    |   |       |-- web-desktop-app
    |   |           |-- app.js
    |   |           |-- favorites.html
    |   |           |-- index.html
    |   |           |-- js.js
    |   |           |-- package.json
    |   |           |-- profile.html
    |   |           |-- settings.html
    |   |           |-- shared.html
    |   |           |-- template.html
    |   |           |-- trash.html
    |   |           |-- upgrade.html
    |   |           |-- upload.html
    |   |           |-- upload.php
    |   |           |-- bootstrap
    |   |           |   |-- css
    |   |           |   |   |-- bootstrap-theme.css
    |   |           |   |   |-- bootstrap-theme.css.map
    |   |           |   |   |-- bootstrap-theme.min.css
    |   |           |   |   |-- bootstrap-theme.min.css.map
    |   |           |   |   |-- bootstrap.css
    |   |           |   |   |-- bootstrap.css.map
    |   |           |   |   |-- bootstrap.min.css
    |   |           |   |   |-- bootstrap.min.css.map
    |   |           |   |-- fonts
    |   |           |   |   |-- glyphicons-halflings-regular.eot
    |   |           |   |   |-- glyphicons-halflings-regular.svg
    |   |           |   |   |-- glyphicons-halflings-regular.ttf
    |   |           |   |   |-- glyphicons-halflings-regular.woff
    |   |           |   |   |-- glyphicons-halflings-regular.woff2
    |   |           |   |-- js
    |   |           |       |-- bootstrap.js
    |   |           |       |-- bootstrap.min.js
    |   |           |       |-- npm.js
    |   |           |-- css
    |   |           |   |-- dropzone.css
    |   |           |   |-- font-awesome.min.css
    |   |           |   |-- photon.css
    |   |           |   |-- photon.min.css
    |   |           |   |-- style.css
    |   |           |-- fonts
    |   |           |   |-- photon-entypo.eot
    |   |           |   |-- photon-entypo.svg
    |   |           |   |-- photon-entypo.ttf
    |   |           |   |-- photon-entypo.woff
    |   |           |-- js
    |   |               |-- dropzone.js
    |   |               |-- jquery-3.1.0.min.js
    |   |               |-- menu.js
    |   |-- fonts
    |   |   |-- photon-entypo.eot
    |   |   |-- photon-entypo.svg
    |   |   |-- photon-entypo.ttf
    |   |   |-- photon-entypo.woff
    |   |-- sass
    |       |-- bars.scss
    |       |-- base.scss
    |       |-- button-groups.scss
    |       |-- buttons.scss
    |       |-- docs.scss
    |       |-- forms.scss
    |       |-- grid.scss
    |       |-- icons.scss
    |       |-- images.scss
    |       |-- lists.scss
    |       |-- mixins.scss
    |       |-- navs.scss
    |       |-- normalize.scss
    |       |-- photon.scss
    |       |-- tables.scss
    |       |-- tabs.scss
    |       |-- utilities.scss
    |       |-- variables.scss
    |-- css
    |   |-- acc_style.css
    |   |-- bootstrap.css
    |   |-- bootstrap.min.css
    |   |-- dropzone.css
    |   |-- hover.css
    |   |-- log_sign.css
    |   |-- modern-business.css
    |   |-- profile_style.css
    |   |-- style.css
    |-- desktop
    |   |-- dist
    |   |   |-- template-app
    |   |       |-- web-desktop-app
    |   |           |-- app.js
    |   |           |-- favorites.html
    |   |           |-- index.html
    |   |           |-- js.js
    |   |           |-- package.json
    |   |           |-- profile.html
    |   |           |-- settings.html
    |   |           |-- shared.html
    |   |           |-- template.html
    |   |           |-- trash.html
    |   |           |-- upgrade.html
    |   |           |-- upload.html
    |   |           |-- upload.php
    |   |           |-- bootstrap
    |   |           |   |-- css
    |   |           |   |   |-- bootstrap-theme.css
    |   |           |   |   |-- bootstrap-theme.css.map
    |   |           |   |   |-- bootstrap-theme.min.css
    |   |           |   |   |-- bootstrap-theme.min.css.map
    |   |           |   |   |-- bootstrap.css
    |   |           |   |   |-- bootstrap.css.map
    |   |           |   |   |-- bootstrap.min.css
    |   |           |   |   |-- bootstrap.min.css.map
    |   |           |   |-- fonts
    |   |           |   |   |-- glyphicons-halflings-regular.eot
    |   |           |   |   |-- glyphicons-halflings-regular.svg
    |   |           |   |   |-- glyphicons-halflings-regular.ttf
    |   |           |   |   |-- glyphicons-halflings-regular.woff
    |   |           |   |   |-- glyphicons-halflings-regular.woff2
    |   |           |   |-- js
    |   |           |       |-- bootstrap.js
    |   |           |       |-- bootstrap.min.js
    |   |           |       |-- npm.js
    |   |           |-- css
    |   |           |   |-- dropzone.css
    |   |           |   |-- font-awesome.min.css
    |   |           |   |-- photon.css
    |   |           |   |-- photon.min.css
    |   |           |   |-- style.css
    |   |           |-- fonts
    |   |           |   |-- photon-entypo.eot
    |   |           |   |-- photon-entypo.svg
    |   |           |   |-- photon-entypo.ttf
    |   |           |   |-- photon-entypo.woff
    |   |           |-- js
    |   |               |-- dropzone.js
    |   |               |-- jquery-3.1.0.min.js
    |   |               |-- menu.js
    |   |-- fonts
    |   |   |-- photon-entypo.eot
    |   |   |-- photon-entypo.svg
    |   |   |-- photon-entypo.ttf
    |   |   |-- photon-entypo.woff
    |   |-- sass
    |       |-- bars.scss
    |       |-- base.scss
    |       |-- button-groups.scss
    |       |-- buttons.scss
    |       |-- docs.scss
    |       |-- forms.scss
    |       |-- grid.scss
    |       |-- icons.scss
    |       |-- images.scss
    |       |-- lists.scss
    |       |-- mixins.scss
    |       |-- navs.scss
    |       |-- normalize.scss
    |       |-- photon.scss
    |       |-- tables.scss
    |       |-- tabs.scss
    |       |-- utilities.scss
    |       |-- variables.scss
    |-- fonts
    |   |-- glyphicons-halflings-regular.eot
    |   |-- glyphicons-halflings-regular.svg
    |   |-- glyphicons-halflings-regular.ttf
    |   |-- glyphicons-halflings-regular.woff
    |   |-- glyphicons-halflings-regular.woff2
    |   |-- font-awesome
    |       |-- css
    |       |   |-- font-awesome.css
    |       |   |-- font-awesome.min.css
    |       |-- fonts
    |       |   |-- FontAwesome.otf
    |       |   |-- fontawesome-webfont.eot
    |       |   |-- fontawesome-webfont.svg
    |       |   |-- fontawesome-webfont.ttf
    |       |   |-- fontawesome-webfont.woff
    |       |-- less
    |       |   |-- bordered-pulled.less
    |       |   |-- core.less
    |       |   |-- fixed-width.less
    |       |   |-- font-awesome.less
    |       |   |-- icons.less
    |       |   |-- larger.less
    |       |   |-- list.less
    |       |   |-- mixins.less
    |       |   |-- path.less
    |       |   |-- rotated-flipped.less
    |       |   |-- spinning.less
    |       |   |-- stacked.less
    |       |   |-- variables.less
    |       |-- scss
    |           |-- font-awesome.scss
    |-- img
    |   |-- SynkMonster-Updated-Logo_V2_no-name.png
    |   |-- boat.mp4
    |   |-- computers.png
    |   |-- facebook2.png
    |   |-- fade.JPG
    |   |-- github.png
    |   |-- group58.png
    |   |-- instagram19.png
    |   |-- login17.png
    |   |-- mpa.PNG
    |   |-- multiple25.png
    |   |-- photo-1429051883746-afd9d56fbdaf.jpg
    |   |-- photo-1448546120959-a4b0e3dd910d.jpg
    |   |-- photo-1448814100339-234df1d4005d.jpg
    |   |-- photo-1449182325215-d517de72c42d.jpg
    |   |-- photo-1450849608880-6f787542c88a.jpg
    |   |-- syncmonster.psd
    |   |-- syncmonster_mock-up.jpg
    |   |-- twitter.png
    |   |-- user168.png
    |   |-- verified9.png
    |-- js
    |   |-- bootstrap.js
    |   |-- bootstrap.min.js
    |   |-- contact_me.js
    |   |-- dropzone.js
    |   |-- jqBootstrapValidation.js
    |   |-- jquery.js
    |   |-- jquery.particleground.min.js
    |   |-- ui.js
    |   |-- video.js
    |-- templates
        |-- acc_nav.php
        |-- account.php
        |-- default.php
        |-- footer.php
        |-- header.php
        |-- home.php
        |-- index.php
        |-- login.php
        |-- nav.php
        |-- profile.php
        |-- profile_nav.php
        |-- result.php
        |-- script.php
        |-- security.php
        |-- settings.php
        |-- signup.php
        |-- upload.php
```
