Kohana Phpwhois
===

About
---
This is the phpwhois wrapper made for kohana. Compatible with 3.3 version. For 3.2 use 3.2 tag.

There are some warning message while testing with php 5.4 in its main library ([phpwhois](http://sourceforge.net/projects/phpwhois/)). I hope it get fix in upcomming version. 

Find latest version of phpwhois [here] (http://sourceforge.net/projects/phpwhois/).

Usage
---
Download phpwhois and place it to the vendor folder. Change the folder name to 'phpwhois'.

<pre>
/*Enable module in bootstrap file.*/
Kohana::modules(array(
	'whois' => MODPATH.'kohana-whois'
));
</pre>

<pre>
/*This will return an array of raw whois query.*/
Kohana_Whois::instance()->lookup('google.com'); 
</pre>
