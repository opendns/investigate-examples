#!/usr/bin/env ruby

require 'rubygems' if RUBY_VERSION < '1.9'
require 'rest_client'

token = ENV['INVESTIGATE_TOKEN']

if not token
  puts "ERROR: environment variable 'INVESTIGATE_TOKEN' not set. Invoke script with 'INVESTIGATE_TOKEN=%YourToken% ruby scripts.rb'"
  exit
end
# domains/categorization 

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/domains/categorization/amazon.com', headers
puts "domains/categorization: " + response


# domains/categorization (POST)

values = '[
  "google.com",
  "yahoo.com"
]'

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.post 'https://investigate.api.umbrella.com/domains/categorization/ ', values, headers
puts "domains/categorization(POST): " + response


# domains/categorization?showLabels

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/domains/categorization/amazon.com?showLabels', headers
puts "domains/categorization?showLabels: " + response


# domains/categories

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/domains/categories', headers
puts "domains/categories: " + response


# domains/score

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/domains/score/example.com', headers
puts "domains/score: " + response


# domains/score (POST)

values = '[
  "example.org",
  "example.net",
  "example.com"
]'

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.post 'https://investigate.api.umbrella.com/domains/score/', values, headers
puts "domains/score(POST): " + response


# recommendations/name

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/recommendations/name/www.internetbadguys.com.json', headers
puts "recommendations/name: " + response


# links/name

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/links/name/homestarrunner.com.json', headers
puts "links/name: " + response


# security/name

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/security/name/www.internetbadguys.com.json', headers
puts "security/name: " + response


# latest_tags

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/domains/www.internetbadguys.com/latest_tags', headers
puts "latest_tags: " + response


# dnsdb/name

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/dnsdb/name/a/homestarrunner.com.json', headers
puts "dnsdb/name: " + response


# dnsdb/ip

token = ENV['INVESTIGATE_TOKEN']

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/dnsdb/ip/a/208.67.222.222.json', headers
puts "dnsdb/ip: " + response


# latest_domains

headers = {
  :authorization => 'Bearer ' + token
}

response = RestClient.get 'https://investigate.api.umbrella.com/ips/208.67.222.222/latest_domains', headers
puts "latest_domains: " + response
