<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * HTTPS Redirect plugin
 *
 * @package		Https Plugins
 * @author		Steve Williamson
 *
 */
class Plugin_Https extends Plugin
{
	/**
	 * redirect
	 *
	 * Usage:
	 * {{ https:redirect }}
	 *
	 * Uses admin setting to determine whether or not to redirect to https
	 */
	function redirect()
	{
		if ($this->settings->admin_force_https and strtolower(substr(current_url(), 4, 1)) != 's')
		{
			redirect(str_replace('http:', 'https:', current_url()).'?session='.session_id());
		}
	}

	/**
	 * force
	 *
	 * Usage:
	 * {{ https:force }}
	 *
	 * Redirects to https if not viewing securely
	 */
	function force()
	{
		if (strtolower(substr(current_url(), 4, 1)) != 's')
		{
			redirect(str_replace('http:', 'https:', current_url()).'?session='.session_id());
		}
	}
}