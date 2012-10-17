#extracting hymn-auth-keys

import url
import json

api = 'http://www.hymnary.org/api/fulltext/'
hymn-auths = []


#open file with url endings
file = open("hymn-auths.txt")

for line in file:
	hymn-auth = line.rstrip('\n')
	hymn-auths.append(hymn-auth)


for hymn-auth in hymn-auths:
	hymn-link = urllib2.urlopen(url + hymn-auth)
	objs = json.loads(hymn-link)

	for o in objs:



	f = open ("hymnal-data.txt", 'w+')
	f.write()
	f.close