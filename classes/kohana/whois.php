<?php
/**
 * 
 **/


class Kohana_Whois
{
	protected $_whois;
	protected static $_instance

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

	public function test($domain)
	{
		return $this->_whois->Lookup($domain);
	}
}
?>
