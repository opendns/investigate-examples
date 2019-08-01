<?php

$token = getenv('INVESTIGATE_TOKEN');

if($token == false)
{
  exit("ERROR: environment variable 'INVESTIGATE_TOKEN' not set. Invoke script with 'INVESTIGATE_TOKEN=%YourToken% php scripts.php'");
}


# domains/categorization

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/domains/categorization/amazon.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("domains/categorization: " . "$response\n");


# domains/categorization (POST)

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/domains/categorization/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "[
  \"google.com\",
  \"yahoo.com\"
]");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("domains/categorization(POST): " . "$response\n");


# domains/categorization?showLabels

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/domains/categorization/amazon.com?showLabels");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("domains/categorization?showLabels: " . "$response\n");


# domains/categories

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/domains/categories");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("domains/categories: " . "$response\n");


# domains/score

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/domains/score/example.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("domains/score: " . "$response\n");


# domains/score (POST)

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/domains/score/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "[
  \"example.org\",
  \"example.net\",
  \"example.com\"
]");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("domains/score(POST): " . "$response\n");


# recommendations/name

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/recommendations/name/www.internetbadguys.com.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("recommendations/name: " . "$response\n");


# links/name

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/links/name/homestarrunner.com.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("links/name: " . "$response\n");


# security/name

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/security/name/www.internetbadguys.com.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("security/name: " . "$response\n");


# latest_tags

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/domains/www.internetbadguys.com/latest_tags");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("latest_tags: " . "$response\n");


# dnsdb/name

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/dnsdb/name/a/homestarrunner.com.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("dnsdb/name: " . "$response\n");


# dnsdb/ip

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/dnsdb/ip/a/208.67.222.222.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("dnsdb/ip: " . "$response\n");


# latest_domains

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://investigate.api.umbrella.com/ips/208.67.222.222/latest_domains");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer " . $token
));

$response = curl_exec($ch);
curl_close($ch);

echo("latest_domains: " . "$response\n");
