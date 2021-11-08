from flask import Flask,request,render_template
import pickle

app = Flask(__name__)

@app.route('/')
def hello world():
    return render_template("index.php")
datebase={'syrga.usupova':'12345678','james':'aac','karthik':'asdsf'}

@app.route  ('/form login',methods=['POST','GET'])
def login():
    name1=request.form['username']
    pwd=request.form['password']
    if name1 not datebase:
        return render_template('login.html',info='Invalid User')

    else:
        if datebase[name1]!=pwd:
             return render_template('login.html',info='Invalid User')
    else:
        return render_template('dama.php',name=name1)
