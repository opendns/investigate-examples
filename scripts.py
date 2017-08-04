#!/usr/bin/python

from urllib2 import Request, urlopen
import os, sys

token = os.getenv('INVESTIGATE_TOKEN', False)

if not token:
  print "ERROR: environment variable \'INVESTIGATE_TOKEN\' not set. Invoke script with \'INVESTIGATE_TOKEN=%YourToken% python scripts.py\'"
  sys.exit(1)

# domains/categorization

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/domains/categorization/amazon.com', headers=headers)

response_body = urlopen(request).read()
print "domains/categorization: " + response_body


# domains/categorization (POST)

values = """
  [
    "google.com",
    "yahoo.com"
  ]
"""

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/domains/categorization/ ', data=values, headers=headers)

response_body = urlopen(request).read()
print "domains/categorization(POST): " + response_body


# domains/categorization?showLabels

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/domains/categorization/amazon.com?showLabels', headers=headers)

response_body = urlopen(request).read()
print "domains/categorization?showLabels: " + response_body


# domains/categories

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/domains/categories', headers=headers)

response_body = urlopen(request).read()
print "domains/categories: " + response_body


# domains/score

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/domains/score/example.com', headers=headers)

response_body = urlopen(request).read()
print "domains/score: " + response_body


# domains/score (POST)

values = """
  [
    "example.org",
    "example.net",
    "example.com"
  ]
"""

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/domains/score/', data=values, headers=headers)

response_body = urlopen(request).read()
print "domains/score(POST): " + response_body


# recommendations/name

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/recommendations/name/www.internetbadguys.com.json', headers=headers)

response_body = urlopen(request).read()
print "recommendations/name: " + response_body


# links/name

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/links/name/homestarrunner.com.json', headers=headers)

response_body = urlopen(request).read()
print "links/name: " + response_body


# security/name

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/security/name/www.internetbadguys.com.json', headers=headers)

response_body = urlopen(request).read()
print "security/name: " + response_body


# latest_tags

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/domains/www.internetbadguys.com/latest_tags', headers=headers)

response_body = urlopen(request).read()
print "latest_tags: " + response_body


# dnsdb/name

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/dnsdb/name/a/homestarrunner.com.json', headers=headers)

response_body = urlopen(request).read()
print "dnsdb/name: " + response_body


# dnsdb/ip

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/dnsdb/ip/a/208.67.222.222.json', headers=headers)

response_body = urlopen(request).read()
print "dnsdb/ip: " + response_body


# latest_domains

headers = {
  'Authorization': 'Bearer ' + token
}
request = Request('https://investigate.api.umbrella.com/ips/208.67.222.222/latest_domains', headers=headers)

response_body = urlopen(request).read()
print "latest_domains: " + response_body
