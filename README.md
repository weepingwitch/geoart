# geoart

## live demo - http://willow.lol/geoart

location-based dynamically-generated pixel art

*javascript attempts to fetch latitude and longitude from device/GPS geolocation. if that fails, javascript uses freegeoip.net API to fetch rough latitude and longitude based on IP address. php uses latitude and longitude to seed random number generator.

in pixel art mode, random number generator picks a random R, B, and G value for each pixel in an 8x8 grid, which is returned as an image

in island map mode, php procedurally generates an island by first randomly generating an ocean, and then randomly raising up "land" pixel by pixel in a series of random path
*
