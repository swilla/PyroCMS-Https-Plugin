<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plugin_Https extends Plugin
{
	function redirect()
	{
		if ($this->settings->admin_force_https and strtolower(substr(current_url(), 4, 1)) != 's')
		{
			redirect(str_replace('http:', 'https:', current_url()).'?session='.session_id());
		}
	}
}