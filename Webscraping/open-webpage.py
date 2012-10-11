#open-webpage.py

import urllib2

url = 'http://www.hymnary.org/api/fulltext/amazing_grace_how_sweet_the_sound'

response = urllib2.urlopen(url)
webContent = response.read()

print webContent[0:900]