import requests
import csv
 
inputfile = open("my_country_locs.txt","r")
outputfile = csv.writer(open("geocoded-placelist2.txt","a"))
 
for row in inputfile:
	try:
		row = row.rstrip()
  		url = 'http://maps.googleapis.com/maps/api/geocode/json'
  		payload = {'address':row, 'sensor':'false'}
  		r = requests.get(url, params=payload)
  		json = r.json
 
  		lat = json['results'][0]['geometry']['location']['lat']
  		lng = json['results'][0]['geometry']['location']['lng']
 
  		newrow = [row,lat,lng]
  		outputfile.writerow(newrow)
  	except:
  		continue