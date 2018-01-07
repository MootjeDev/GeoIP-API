# Usage

To receive the response in JSON format, send a GET request to

https://api.revplit.com/geo/json/response.php?ip=

You can supply an IP address or domain to lookup.

# Response

A successful request will return the following:

{
"status": "success",
"country": "COUNTRY",
"countryCode": "COUNTRY CODE",
"region": "REGION CODE",
"regionName": "REGION NAME",
"city": "CITY",
"zip": "ZIP CODE",
"lat": LATITUDE,
"lon": LONGITUDE,
"timezone": "TIME ZONE",
"isp": "ISP NAME",
"org": "ORGANIZATION NAME",
"as": "AS NUMBER / NAME",
"query": "IP ADDRESS USED FOR QUERY"
}

Error 

# Error messages

<b>Private range</b>	The IP address is part of a private range. | <a href="https://en.wikipedia.org/wiki/Private_network#Private_use_of_other_reserved_addresses">More info</a>

<b>Reserved range</b>	The IP address is part of a reserved range. | <a href="https://en.wikipedia.org/wiki/Private_network#Private_use_of_other_reserved_addresses">More info</a>

<b>Invalid query</b>	Invalid IP address or domain name.

# Example

GET request:

https://api.revplit.com/geo/json/response.php?ip=208.80.152.201

Response:

{
"status": "success",
"country": "United States",
"countryCode": "US",
"region": "CA",
"regionName": "California",
"city": "San Francisco",
"zip": "94105",
"lat": "37.7898",
"lon": "-122.3942",
"timezone": "America\/Los_Angeles",
"isp": "Wikimedia Foundation",
"org": "Wikimedia Foundation",
"as": "AS14907 Wikimedia US network",
"query": "208.80.152.201"
}

# Usage limits

Our system will automatically ban any IP addresses doing over 150 requests per minute. To unban your IP you'll have to sent a email to revplit.service@gmail.com

# Support

If you've any questions you can ask them in our discord server https://discord.gg/BZfPMxe
