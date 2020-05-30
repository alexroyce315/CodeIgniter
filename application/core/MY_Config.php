<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Config extends CI_Config {

	public function __construct() {
		parent::__construct();
		log_message('info', 'MY_Config loaded.');
	}

	public function static_url($uri = '', $protocol = false) {
		$static_url = $this->slash_item('static_url');

		if (isset($protocol)) {
			// For protocol-relative links
			if ('' === $protocol) {
				$static_url = substr($static_url, strpos($static_url, '//'));
			} else {
				$static_url = $protocol.substr($static_url, strpos($static_url, '://'));
			}
		}

		return $static_url.ltrim($this->_uri_string($uri), '/');
	}

}