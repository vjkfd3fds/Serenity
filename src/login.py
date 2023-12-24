from . import app, conn, cursor
from flask import session, url_for, redirect, render_template, request, flash
import base64

@app.route('/usr/login', methods = ['GET', 'POST'])
def login():
	if request.method == 'POST':
		email = request.form['email']
		string = request.form['password']
		byte_string = string.encode('ascii')
		encoded_string = base64.b64encode(byte_string)

		sql = "SELECT * FROM users WHERE email = %s AND password = %s"
		values = (email, encoded_string)
		cursor.execute(sql, values)
		row = cursor.fetchone()

		if row:
			return '<script>alert("Successfully logged in "); </script>'
		else:
			flash("User does not exist")
			return redirect(url_for('login'))
	return render_template('login.html')