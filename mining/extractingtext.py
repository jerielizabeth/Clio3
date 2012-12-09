#extractingtext.py

import csv

with open('combined_text_author_hymnal_women.csv', 'rb') as csvfile:
	hymns = csv.reader(csvfile, delimiter = ',')
	for row in hymns:
		name = row[0]
		text = row[12]

		f = open("hymns_women/" + name + ".txt", 'w')
		f.write (text)
		f.close
