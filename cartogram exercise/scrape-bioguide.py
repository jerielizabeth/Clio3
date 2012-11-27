import requests
from bs4 import BeautifulSoup
import csv
import pprint
import simplejson as json

#capture number of delegrates per state and their affiliation

url = 'http://bioguide.congress.gov/biosearch/biosearch1.asp'

#define our search range by congress #
startCongress = 50
numCongresses = 5

#not ideal, but we have to manually say what years we are scraping.
startYear = 1887
currentYear = startYear

statesDefault = {
	"AL": 0,
	"AK": 0,
	"AS": 0,
	"AZ": 0,
	"AR": 0,
	"CA": 0,
	"CO": 0,
	"CT": 0,
	"DE": 0,
	"DC": 0,
	"FM": 0,
	"FL": 0,
	"GA": 0,
	"GU": 0,
	"HI": 0,
	"ID": 0,
	"IL": 0,
	"IN": 0,
	"IA": 0,
	"KS": 0,
	"KY": 0,
	"LA": 0,
	"ME": 0,
	"MH": 0,
	"MD": 0,
	"MA": 0,
	"MI": 0,
	"MN": 0,
	"MS": 0,
	"MO": 0,
	"MT": 0,
	"NE": 0,
	"NV": 0,
	"NH": 0,
	"NJ": 0,
	"NM": 0,
	"NY": 0,
	"NC": 0,
	"ND": 0,
	"MP": 0,
	"OH": 0,
	"OK": 0,
	"OR": 0,
	"PW": 0,
	"PA": 0,
	"PR": 0,
	"RI": 0,
	"SC": 0,
	"SD": 0,
	"TN": 0,
	"TX": 0,
	"UT": 0,
	"VT": 0,
	"VI": 0,
	"VA": 0,
	"WA": 0,
	"WV": 0,
	"WI": 0,
	"WY": 0
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
		except:
			print("invalid row, probably...")
			continue

		#print("found " + state)
		
		try:			
			stateData[state] += 1
		except:
			print("state not found...")
			continue

	#pprint.pprint(stateData)
	sumdelegates = 0
	normalized = {}

	# for each state in the dictionary, sum all delegate counts to find total number of delegates
	for key, value in stateData.items():
		sumdelegates += int(value)

	# loop through statedata again and normalize number of delegates as percent of total
	for key, value in stateData.items():
		normvalue = float(value) / float(sumdelegates)
		normalized[key] = '%.2f' % round(normvalue,2)
		
	# store our dictionary of states in the allData array, indexed by year
	print("saving data for congress " + str(i) + " and year " + str(currentYear))
	pprint.pprint(normalized)
	allData[currentYear] = normalized

	# advance year by 2, since that's how often elections are held, and we're searching by congress
	currentYear = currentYear + 2

outputfile = open("stateData.json","w")
outputfile.write(json.dumps(allData))
