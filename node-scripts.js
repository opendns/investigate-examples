var request = require('request'),
    token   = process.env.INVESTIGATE_TOKEN
;

if (!token) {
  console.log("ERROR: environment variable 'INVESTIGATE_TOKEN' not set. Invoke script with 'INVESTIGATE_TOKEN=%YourToken% node node-scripts.js'");
  process.exit(1);
}
// domains/categorization

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/domains/categorization/amazon.com',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('domains/categorization:', body);
});


// domains/categorization (POST)

request({
  method: 'POST',
  url: 'https://investigate.api.opendns.com/domains/categorization/ ',
  headers: {
    'Authorization': 'Bearer ' + token
  },
  body: "[  \"google.com\",  \"yahoo.com\"]"
}, function (error, response, body) {
  console.log('domains/categorization(POST):', body);
});


// domains/categorization?showLabels

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/domains/categorization/amazon.com?showLabels',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('domains/categorization:', body);
});


// domains/categories

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/domains/categories',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('domains/categories:', body);
});


// domains/score

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/domains/score/example.com',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('domains/score:', body);
});


// domains/score (POST)

request({
  method: 'POST',
  url: 'https://investigate.api.opendns.com/domains/score/',
  headers: {
    'Authorization': 'Bearer ' + token
  },
  body: "[  \"example.org\",  \"example.net\",  \"example.com\"]"
}, function (error, response, body) {
  console.log('domains/score(POST):', body);
});


// recommendations/name

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/recommendations/name/www.internetbadguys.com.json',
  headers: {
    'Authorization': 'Bearer ' + token
  },
  body: "{  \"name\": \"example.com\"}"
}, function (error, response, body) {
  console.log('recommendations/name:', body);
});


// links/name

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/links/name/example.com.json',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('links/name:', body);
});


// security/name

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/security/name/www.internetbadguys.com.json',
  headers: {
    'Authorization': 'Bearer ' + token
  },
}, function (error, response, body) {
  console.log('security/name:', body);
});


// latest_tags

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/domains/www.internetbadguys.com/latest_tags',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('latest_tags:', body);
});


// dnsdb/name

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/dnsdb/name/a/homestarrunner.com.json',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('dnsdb/name:', body);
});


// dnsdb/ip

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/dnsdb/ip/a/208.67.222.222.json',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('dnsdb/ip:', body);
});


// latest_domains

request({
  method: 'GET',
  url: 'https://investigate.api.opendns.com/ips/208.67.222.222/latest_domains',
  headers: {
    'Authorization': 'Bearer ' + token
  }
}, function (error, response, body) {
  console.log('latest_domains:', body);
});
