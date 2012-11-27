import requests
from bs4 import BeautifulSoup
import csv
import pprint
import simplejson as json
from collections import Counter

#capture number of delegrates per state and their affiliation

url = 'http://bioguide.congress.gov/biosearch/biosearch1.asp'

#define our search range by congress #
startCongress = 50
numCongresses = 5

#not ideal, but we have to manually say what years we are scraping.
startYear = 1887
currentYear = startYear

statesDefault = {
	"AL": {"dems":0, "total":0},
	"AK": {"dems":0, "total":0},
	"AS": {"dems":0, "total":0},
	"AZ": {"dems":0, "total":0},
	"AR": {"dems":0, "total":0},
	"CA": {"dems":0, "total":0},
	"CO": {"dems":0, "total":0},
	"CT": {"dems":0, "total":0},
	"DE": {"dems":0, "total":0},
	"DC": {"dems":0, "total":0},
	"FM": {"dems":0, "total":0},
	"FL": {"dems":0, "total":0},
	"GA": {"dems":0, "total":0},
	"GU": {"dems":0, "total":0},
	"HI": {"dems":0, "total":0},
	"ID": {"dems":0, "total":0},
	"IL": {"dems":0, "total":0},
	"IN": {"dems":0, "total":0},
	"IA": {"dems":0, "total":0},
	"KS": {"dems":0, "total":0},
	"KY": {"dems":0, "total":0},
	"LA": {"dems":0, "total":0},
	"ME": {"dems":0, "total":0},
	"MH": {"dems":0, "total":0},
	"MD": {"dems":0, "total":0},
	"MA": {"dems":0, "total":0},
	"MI": {"dems":0, "total":0},
	"MN": {"dems":0, "total":0},
	"MS": {"dems":0, "total":0},
	"MO": {"dems":0, "total":0},
	"MT": {"dems":0, "total":0},
	"NE": {"dems":0, "total":0},
	"NV": {"dems":0, "total":0},
	"NH": {"dems":0, "total":0},
	"NJ": {"dems":0, "total":0},
	"NM": {"dems":0, "total":0},
	"NY": {"dems":0, "total":0},
	"NC": {"dems":0, "total":0},
	"ND": {"dems":0, "total":0},
	"MP": {"dems":0, "total":0},
	"OH": {"dems":0, "total":0},
	"OK": {"dems":0, "total":0},
	"OR": {"dems":0, "total":0},
	"PW": {"dems":0, "total":0},
	"PA": {"dems":0, "total":0},
	"PR": {"dems":0, "total":0},
	"RI": {"dems":0, "total":0},
	"SC": {"dems":0, "total":0},
	"SD": {"dems":0, "total":0},
	"TN": {"dems":0, "total":0},
	"TX": {"dems":0, "total":0},
	"UT": {"dems":0, "total":0},
	"VT": {"dems":0, "total":0},
	"VI": {"dems":0, "total":0},
	"VA": {"dems":0, "total":0},
	"WA": {"dems":0, "total":0},
	"WV": {"dems":0, "total":0},
	"WI": {"dems":0, "total":0},
	"WY": {"dems":0, "total":0}
}

allData = {}


for i in range(startCongress, (startCongress+numCongresses), 1):
	stateData = statesDefault
	payload = {'congress':i} # even though we search by year, the form uses 'congress'
	print("Looking up congrezs " + str(i) + "...")
	r = requests.post(url, data=payload)

	soup = BeautifulSoup(r.text)
	trs = soup.find_all('tr')

	for tr in trs: # for all the table rows 
		#pprint.pprint(tr.find_all('td'))
		try:
			state = str(tr.find_all('td')[4].string) # grab the state
			party = str(tr.find_all('td')[3].string) # grab the party
		except:
			print("invalid row, probably...")
			continue

		#print("found " + state)
		
		try:	
			if party == "Democrat":
				stateData[state]['dems'] += 1
				stateData[state]['total'] += 1
			if party == "Republican":
				stateData[state]['total'] += 1
		except:
			print("state not found...")
			continue

	pprint.pprint(stateData)

	for key in stateData:

	

	# store our dictionary of states in the allData array, indexed by year
	print("saving data for congress " + str(i) + " and year " + str(currentYear))
	allData[currentYear] = stateData

	# advance year by 2, since that's how often elections are held, and we're searching by congress
	currentYear = currentYear + 2

outputfile = open("mystateData.json","w")
outputfile.write(json.dumps(allData))

	