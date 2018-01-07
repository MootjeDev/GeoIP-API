# CSV Response

To receive the response in CSV (Comma-separated values) format, send a GET request to

https://api.revplit.com/geo/csv/response.php?ip=

You can supply an IP address or domain to lookup.

# Response

A successful request will return the following:

success,COUNTRY,COUNTRY CODE,REGION CODE,REGION NAME,CITY,ZIP CODE,LATITUDE,LONGITUDE,TIME ZONE,ISP NAME,ORGANIZATION NAME,AS NUMBER / NAME,IP ADDRESS USED

Error messages:

Value	Description
<b>Private range</b>	the IP address is part of a private range | <a href="https://en.wikipedia.org/wiki/Private_network#Private_use_of_other_reserved_addresses">More info</a>

reserved range	the IP address is part of a reserved range More info
invalid query	invalid IP address or domain name
