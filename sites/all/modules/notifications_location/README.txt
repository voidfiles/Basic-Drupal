// $Id: README.txt,v 1.1.2.1 2009/04/24 03:07:24 grendzy Exp $

This is a plug-in for the notifications framework that notifies users of location-enabled content that is geographically near.

### Setup ###

Location module:
The location_user module is required.  Make sure permissions are enabled for "set own user location" and "subscribe to locations".

Also, check the "User Locations" settings at admin/user/settings, to configure which location fields you want to collect.  Location needs to be able to geocode the users, so there are few options:

1) Collect the zip / postal code, and then make sure you've populated the `zipcodes` table.  See the location documentation for details.

2) Configure a geocoding provider for location, at admin/settings/location/geocoding

3) Collect lattitude and longitude information directly from the user.



Developers:
-----------
- Dylan Tack
- code review by Jonathan Hedstrom

Sponsored by OpenSourcery, http://opensourcery.com


### TODO ###

- Currently a per-subscription distance field is stored in the database, but it needs a UI.  Right now it's hard-coded to 100 km.  This is tricky because notifications_user_form() doesn't yet handle multiple fields.

