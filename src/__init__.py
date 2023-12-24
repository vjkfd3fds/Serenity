from flask import Flask
import mysql.connector

app = Flask(__name__)
app.config['SECRET_KEY'] = 'VERYCOOLKEY'
conn = mysql.connector.connect(host='localhost', user='root', password='', db='stress.db.dev')

cursor = conn.cursor(dictionary=True)

from . import register
from . import login