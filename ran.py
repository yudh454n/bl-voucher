## /lib/usr/python
## Kirnath x ZeroByte.ID

import random
import string
import requests
import time
import urllib2

base = "BLMOIV"
berapa = int(raw_input("[+] Butuh Berapa Boss?: "))
def gene(size=4, chars=string.ascii_uppercase + string.digits):
	return ''.join(random.choice(chars) for _ in range(size))
for i in range(berapa):
	result = base+gene()
	print result
	file = open('Voc.txt', 'a')
	file.write(result+'\n')
cek = str(raw_input("[+] Sekalian Cek ga Boss?(y/n): "))
if cek == "y":
	print "[+] Laksanakeun Boss!"
	time.sleep(2)
	files = open('Voc.txt', 'r')
	for line in files:
		pisah = line.split('\n')
		a = pisah[0]
		cek = requests.get("http://api-siptruk.c9users.io/vocbl.php?code={}".format(a))
		reason = cek.text
		if "VALID" not in reason:
			print "DIE | ",a
		else:
			print "LIVE | ",a
else:
	print "[+] OK BABI! W KELUAR"
	exit(4)