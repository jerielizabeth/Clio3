#Python v2.6.2

import urllib2

url = 'http://www.hymnary.org/api/fulltext/'
pageNames =[]

#open file with url endings
file = open("hymn1-29.txt")

for line in file:
	pageName = line.rstrip('\n')
	pageNames.append(pageName)

for pageName in pageNames:
	response = urllib2.urlopen(url + pageName)
	webContent = response.read()

	f = open ("scraping/" + pageName + ".json", 'w')
	f.write(webContent)
	f.close
