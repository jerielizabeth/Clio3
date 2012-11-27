#topicmodeling.py

import csv

with open('hymnalData.csv', 'rb') as csvfile:
	hymns = csv.reader(csvfile, delimiter = ',')
	for row in hymns:
		name = row[1]
		text = row[5]

		f = open("topicmodels/" + name + ".txt", 'w')
		f.write (text)
		f.close
