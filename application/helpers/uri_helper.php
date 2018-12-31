<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if( !function_exists('assets_uri') ) {
	
	function assets_uri($path, $cached=true) {
		return base_url( 'assets/' . $path . ((!$cached) ?  '?' . time() : ''));
	}
}