#!/usr/bin/env python

import requests, argparse, os

token = os.getenv('INVESTIGATE_TOKEN', False)

#takes a single domain as its argument


parser = argparse.ArgumentParser(description='Check a domain\'s coocurrences for malicious status')
parser.add_argument('domain', action='store', type=str, help='domain to query')
args = parser.parse_args()


print
print 'Querying Investigate for', args.domain+'\'s co-occurrences...'
print

initial_query = args.domain

url='https://investigate.api.opendns.com/recommendations/name/{0}.json'.format(initial_query)

auth_headers = {'Authorization' : 'Bearer '+ token} 

q = requests.get(url, headers=auth_headers) #get co-occurrences for domain

output = q.json() 

if output == {}: 
    print "No co-occurrences found."
    print

elif output['found'] == True:
    pfs2 = output['pfs2']
    
    for i in range(len(pfs2)): 
        
        final_cooccurrences = pfs2[i][0] #create final list of co-occurring domains
        url2 = 'https://investigate.api.opendns.com/domains/categorization/{0}'.format(final_cooccurrences)
        domain_status = requests.get(url2, headers=auth_headers)
        print "Co-occuring domain:", final_cooccurrences
        if domain_status.json()[final_cooccurrences]['status'] == 0:
            print "Domain score value:", domain_status.json()[final_cooccurrences]['status']
            print "No decision"
            print
        elif domain_status.json()[final_cooccurrences]['status'] == 1:
            print "Domain score value:", domain_status.json()[final_cooccurrences]['status']
            print "In the OpenDNS whitelist"
            print
        elif domain_status.json()[final_cooccurrences]['status'] == -1:
            print "Domain score value:", domain_status.json()[final_cooccurrences]['status']
            print "In the OpenDNS Security Labs block list"
            print
        else:
            print "something went wrong"
            