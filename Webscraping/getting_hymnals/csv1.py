import os
import simplejson as json
import csv

path = 'hymn-files/'

listing = os.listdir(path)
for infile in listing:
	if not infile.startswith('.DS'):
		print "current file is: " + infile
		json_data = open('hymn-files/' + infile, 'r')
		infile = infile.rstrip(".json")
		data = json.load(json_data)
		for obj in data:
			hymnalName = obj['title']
			hymnalID = obj['hymnalID']
			hymnText = obj['text']
			hymnDate = obj['date']
			classifications = obj['classifications']

			f = csv.writer(open("hymnalData.csv", "a"))
			f.writerow([hymnalID, infile, hymnalName, hymnDate, classifications, hymnText])
