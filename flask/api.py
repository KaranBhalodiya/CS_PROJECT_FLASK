from flask import Flask, jsonify, request, Response
import sys, random







def main(LETTERS,myKey,myMessage,myMode):

	checkValidKey(myKey,LETTERS)

	if myMode == 'encrypt':
		translated = encryptMessage(myKey, myMessage,LETTERS)
	elif myMode == 'decrypt':
		translated = decryptMessage(myKey, myMessage,LETTERS)
	print('Using key %s' % (myKey))
	print('The %sed message is:' % (myMode))
	print(translated)

	return translated


def checkValidKey(key,LETTERS):
	keyList = list(key)
	lettersList = list(LETTERS)
	keyList.sort()
	lettersList.sort()
	if keyList != lettersList:
		sys.exit('There is an error in the key or symbol set.')


def encryptMessage(key, message,LETTERS):
	return translateMessage(key, message, 'encrypt', LETTERS)


def decryptMessage(key, message,LETTERS):
	return translateMessage(key, message, 'decrypt', LETTERS)


def translateMessage(key, message, mode,LETTERS):
	translated = ''
	charsA = LETTERS
	charsB = key
	if mode == 'decrypt':
		charsA, charsB = charsB, charsA

	for symbol in message:
		if symbol.upper() in charsA:
			symIndex = charsA.find(symbol.upper())
			if symbol.isupper():
				translated += charsB[symIndex].upper()
			else:
				translated += charsB[symIndex].lower()
		else:
			translated += symbol

	return translated


def getRandomKey():
	key = list(LETTERS)
	random.shuffle(key)
	return ''.join(key)






app = Flask(__name__)


@app.route("/mono/encrypt")
def enc():
	gdata = request.args.get('str')
	
	LETTERS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
	myKey = 'QWERTYUIOPASDFGHJKLZXCVBNM'
	myMode = 'encrypt'

	str_data = main(LETTERS,myKey,gdata,myMode)

	return jsonify({'str': str_data})

@app.route("/mono/decrypt")
def dec():
	gdata = request.args.get('str')
	
	LETTERS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
	myKey = 'QWERTYUIOPASDFGHJKLZXCVBNM'
	myMode = 'decrypt'


	str_data = main(LETTERS,myKey,gdata,myMode)

	return jsonify({'str': str_data})



app.run(debug = True, threaded=True, host='0.0.0.0', port=5004)