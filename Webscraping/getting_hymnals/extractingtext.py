#extracting hymn-text

import os
import simplejson as json

path = 'hymn-files/'


listing = os.listdir(path)
for infile in listing:
	if not infile.startswith('.DS'):
		print "current file is: " + infile
		json_data = open('hymn-files/' + infile, 'r')
		infile = infile.rstrip(".json")
		data = json.load(json_data)
		for obj in data:
			hymnalID = obj['hymnalID']
			hymnText = obj['text']
			hymnDate = obj['date']

			f = open("hymnTexts/" + infile + hymnDate + ".txt", 'w')
			f.write(hymnalID + "\n" + hymnDate + "\n" + hymnText + "\n")
			f.close

		

	