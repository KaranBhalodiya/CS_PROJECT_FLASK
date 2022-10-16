from flask import Flask, render_template, request, redirect, url_for, session, Response
from werkzeug.utils import secure_filename
from werkzeug.datastructures import  FileStorage
import json
import re
import mysql.connector
import requests


app = Flask(__name__)
app.secret_key = 'T\xbf\x82ZdQ\x14\xc5rUb\x14\xcf*\x91P\x83\x92\x04\x0b\x81\x01\x18\xfc'



mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="project"
)

mycursor = mydb.cursor()






@app.route("/")
def main_page():
	return redirect(url_for('login'))



# ------------------ AUTH ---------------------------



@app.route("/login",methods=["GET","POST"])
def login():
	global session
	msg = ''

	if (request.method == 'POST'):
		mail = request.form.get('mail')
		passs = request.form.get('pass')

		elink = "http://127.0.0.1:5004/mono/encrypt?str="
		response_API = (requests.get(elink+mail)).text
		mail = json.loads(response_API)['str']
		response_API = (requests.get(elink+passs)).text
		passs = json.loads(response_API)['str']

		mycursor.execute("SELECT * FROM traveler_master where mail='"+mail+"' and pass='"+passs+"'")
		myresult = mycursor.fetchall()

		if len(myresult) < 1:
			msg='Maybe Mail or Password is wrong.'
		elif len(myresult) > 1:
			msg='There is multiple account found on same email .'
		else:
			msg='Welcome ...!'
			session['auth'] = 'user'
			session['id'] = myresult[0][0]
			return redirect(url_for('home'))

	return render_template("auth/login.html",alert=msg)



@app.route("/signup",methods=["GET","POST"])
def signup():
	global session
	msg = ''

	if (request.method == 'POST'):
		name = request.form.get('name')
		mail = request.form.get('mail')
		numb = request.form.get('number')
		passs = request.form.get('pass')
		repasss = request.form.get('repass')
		age = request.form.get('age')


		if passs == repasss:
			r_p = re.compile('^(?=\S{6,20}$)(?=.*?\d)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[^A-Za-z\s0-9])')
			mat = re.search(r_p, passs)

			if mat:
				elink = "http://127.0.0.1:5004/mono/encrypt?str="
				dlink = "http://127.0.0.1:5004/mono/decrypt?str="

				response_API = (requests.get(elink+mail)).text
				mail = json.loads(response_API)['str']

				response_API = (requests.get(elink+passs)).text
				passs = json.loads(response_API)['str']


			mycursor.execute("SELECT * FROM traveler_master where mail='"+mail+"'")
			myresult = mycursor.fetchall()
			if len(myresult) == 0:
				if mat:
					sql = "INSERT INTO traveler_master (name, mail, number_, pass, age) VALUES (%s,%s,%s,%s,%s)"
					val = (name,mail,numb,passs,age)
					mycursor.execute(sql, val)
					print(mycursor)
					mydb.commit()
					return redirect(url_for('login'))
				else:
					msg='Enter Valid Password'
			else:
				msg='Email Exist'

	return render_template("auth/register.html",alert=msg)




# ------------------ AUTH ---------------------------










# ------------------ Traveler ---------------------------


@app.route("/home",methods=["GET","POST"])
def home():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/index.html",name=myresult[0][1])



@app.route("/tours",methods=["GET","POST"])
def tours():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/tour-search.html",name=myresult[0][1])




@app.route("/tour-details",methods=["GET","POST"])
def tourdetails():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/tour-details.html",name=myresult[0][1])





@app.route("/tour-book",methods=["GET","POST"])
def tourbook():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/tour-booking-submission.html",name=myresult[0][1])



@app.route("/booking-confirmation",methods=["GET","POST"])
def bookingconfirmation():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/booking-confirmation.html",name=myresult[0][1])




@app.route("/about",methods=["GET","POST"])
def about():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/about.html",name=myresult[0][1])




@app.route("/contact",methods=["GET","POST"])
def contact():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/contact.html",name=myresult[0][1])




@app.route("/profile",methods=["GET","POST"])
def profile():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/my-profile.html",name=myresult[0][1])



@app.route("/profile/your-bookings",methods=["GET","POST"])
def yourbookings():
	global session

	if "auth" not in session:
		return redirect(url_for('login'))
	else:
		if session['auth'] != 'user':
			return redirect(url_for('login'))
	qryy = "SELECT * FROM traveler_master where t_id='"+str(session['id'])+"'"
	mycursor.execute(qryy)
	myresult = mycursor.fetchall()

	return render_template("traveler/booking-history.html",name=myresult[0][1])


# # ------------------ Traveler ---------------------------












# ------------------ ADMIN ---------------------------
# ------------------ ADMIN ---------------------------









@app.route("/logout")
def logout():
	global session
	session.pop('auth', None)
	session.pop('mail', None)
	return redirect(url_for('login'))
	



app.run(debug = True, threaded=True, host='0.0.0.0', port=5001)