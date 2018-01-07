# CSV Response

To receive the response in CSV (Comma-separated values) format, send a GET request to

https://api.revplit.com/geo/csv/response.php?ip=

You can supply an IP address or domain to lookup.

# Response

A successful request will return the following:

success,COUNTRY,COUNTRY CODE,REGION CODE,REGION NAME,CITY,ZIP CODE,LATITUDE,LONGITUDE,TIME ZONE,ISP NAME,ORGANIZATION NAME,AS NUMBER / NAME,IP ADDRESS USED

# Error messages

<b>Private range</b>	The IP address is part of a private range. | <a href="https://en.wikipedia.org/wiki/Private_network#Private_use_of_other_reserved_addresses">More info</a>

<b>Reserved range</b>	The IP address is part of a reserved range. | <a href="https://en.wikipedia.org/wiki/Private_network#Private_use_of_other_reserved_addresses">More info</a>

<b>Invalid query</b>	Invalid IP address or domain name.

# Example

GET request:

https://api.revplit.com/geo/csv/response.php?ip=208.80.152.201

Response:

success,United States,US,OH,"Ohio",Cleveland,44192, 41.499500274658,-81.69539642334,America/New_York,Wikimedia Foundation, Inc.,Wikimedia Foundation, Inc.,"AS14907 Wikimedia Foundation, Inc.",208.80.152.201
