import requests

inputfile = open("placelist.txt", "r")

url = "http://maps.googleapis.com/maps/api/geocode/json"

for row in inputfile:
	payload = {'sensor':false, 'address':row}
	print("Looking up:" +row+ "\n")
	r = requests.get(url, params=payload)
	json = r.json

	lat = json ['results'][0]['location']['lat']
	lng = json ['results'][0]['location']['lng']
	
	print lat,lng


