#extractingtext.py

import csv

with open('my_country_tis_of_thee/hymnal_list_my_country_its.csv', 'rb') as csvfile:
	hymnals = csv.reader(csvfile, delimiter = ',')
	for row in hymnals:
		city = row[4]
		state = row[5]

		f = open("my_country_locs.txt", 'a')
		f.write (city + ", " + state + "\n")
		f.close
