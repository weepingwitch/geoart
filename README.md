# geoart

location-based dynamically-generated pixel article

*javascript attempts to fetch latitude and longitude from device/GPS geolocation. if that fails, javascript uses freegeoip.net API to fetch rough latitude and longitude based on IP address. php uses latitude and longitude to seed random number generator, which picks a random R, B, and G value for each pixel in an 8x8 grid, which is retuend as an image*
