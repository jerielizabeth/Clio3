#extracting hymn-auth-keys

import os
import simplejson as json

path = 'hymn-files/'

listing = os.listdir(path)
for infile in listing:
	if not infile.startswith('.DS'):
		print "current file is: " + infile
		json_data = open('hymn-files/' + infile, 'r')
		data = json.load(json_data)
		for obj in data:
			hymnalID = obj['hymnalID']
			f = open('hymn-keys.txt', 'a')
			f.write(hymnalID + "\n")
			f.close

	