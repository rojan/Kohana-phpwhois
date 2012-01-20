<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Kohana-whois is the wrapper for phpwhois library.
 * find the latest version of phpwhois at http://sourceforge.net/projects/phpwhois/
 *
 * @package kohana-whois
 * @author Rojan <rojansinha@gmail.com>
 * @copyright (c) 2012 Rojan Sinha
 * @license MIT
 *
 **/

class Kohana_Whois
{
	protected $_whois;
	protected static $_instance;

	protected function __construct()
	{
		include Kohana::find_file('vendor', 'phpwhois/whois.main');
		$this->_whois = new Whois();
	}

	public static function instance()
	{
		if ( ! isset(self::$_instance))
			Kohana_Whois::$_instance = new Kohana_Whois;

		return Kohana_Whois::$_instance;
	}

	/**
	 * Domain lookup
	 *
	 * @param	string	Domain name
	 * @return	array	raw whois query
	 *
	 */
	public function Lookup($domain)
	{
		return $this->_whois->Lookup($domain);
	}
}
?>
