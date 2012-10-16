#autoscrape function

import urllib2

url = 'http://www.hymnary.org/api/fulltext/'
pageNames =[]

#open file with url endings
file = open("hymn.txt")

for line in file:
	pageName = line.rstrip('\n')
	pageNames.append(pageName)

for zombie in pageNames:
	response = urllib2.urlopen(url + zombie)
	webContent = response.read()

	f = open ("scraping/" + zombie + ".json", 'w')
	f.write(webContent)
	f.close