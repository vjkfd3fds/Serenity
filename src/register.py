from . import app, conn, cursor
from flask import session, url_for, redirect, render_template, request
import base64

@app.route('/usr/register', methods = ['GET', 'POST'])
def register():
	if request.method == 'POST':
		first_name = request.form['first_name']
		last_name = request.form['last_name']
		email = request.form['email']
		phone_number = request.form['phone_number']
		dob = request.form['dob']
		gender = request.form['gender']

		encoding_string = request.form['password']
		encoded_string = encoding_string.encode('ascii')
		password = base64.b64encode(encoded_string)

		sql = "INSERT INTO users (firstname, lastname, email, phonenumber, dob, gender, password) VALUES (%s, %s, %s, %s, %s, %s, %s)"
		values = (first_name, last_name, email, phone_number, dob, gender, password,)
		cursor.execute(sql, values)
		conn.commit()
		return redirect(url_for('login'))
	return render_template('register.html')