# PHP Demystified
PHP demo code and instructions for the brown bag. 

Please see the instructions below to ensure you have the prerequisites for the interactive demos.

**Please check back later for more/better instructions**

## Setup
### XAMPP
1. Install [XAMPP](https://www.apachefriends.org/download.html) on your computer
2. Run XAMPP as administrator (otherwise watch out for permission prompts every time you want to start/stop a service)
3. Change the ports Apache uses (change http 80 to 8080 (or whatever you like, hereafter referred to as PORT) and https 443 to 44380 (again, whatever. We won't use this though, Windows just doesn't like you using the default ports))
	- In XAMPP control panel, click the Config button to the right of Apache and select Apache (httpd.conf)
	- Change `Listen 80` to Listen `Listen 8080` (or your preferred PORT)
	- Change `Listen 443` to `Listen 44380`  (or your preferred port)
4. Navigate to the htdocs folder (C:\xampp\htdocs)
5. Inside htdocs clone this repo:
```https://github.com/Travis-iss/php-demystified.git```
6. Use your favorite browser to open the start page (localhost:{PORT}/php-demystified)
	- If you followed the default: <http://localhost:8080/php-demystified>

### WordPress
1. Download the [WordPress](https://wordpress.org/download/) install code (it's free!)
2. [Install WordPress](https://wordpress.org/support/article/how-to-install-wordpress/)
3. Now you can visit your WordPress site at localhost:PORT/wordpress