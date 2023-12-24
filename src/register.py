from . import app, conn, cursor
from flask import session, url_for, redirect, render_template

@app.route('/usr/register')
def register():
	return render_template('register.html')