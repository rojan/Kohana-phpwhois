Kohana Phpwhois
===

About
---
This is the phpwhois wrapper made for kohana 3.2. You can modifiy it to work with other version as well.

Find latest version of phpwhois [here] (http://sourceforge.net/projects/phpwhois/).

Usage
---
Download phpwhois and place it to the vendor folder. Change the folder name to 'phpwhois'.

Enable module in bootstrap file.
<blockquote>
Kohana::modules(array(
	'whois' => MODPATH.'kohana-whois'
));
</blockquote>

<blockquote>Kohana_Whois::instance()->lookup('google.com');</blockquote> (This will return an array of raw whois query.)
