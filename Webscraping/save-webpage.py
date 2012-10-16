# save-webpage.py

import urllib2

url = 'http://anglicanhistory.org/women/newcome_compleat/conclusion.html'

response = urllib2.urlopen(url)
webContent = response.read()

f = open('conclusion.txt', 'w')
f.write(webContent)
f.close