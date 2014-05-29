<?php

if ( ! function_exists('cdn_asset'))
{
	/**
	 * Generate a URL to an asset on a CDN.
	 *
	 * @param  string  $name
	 * @param  string  $folder
	 * @return string
	 */
	function cdn_asset($filename,$folder = null)
	{
		$url = Config::get('cdn.base_url');
		if($folder) {
			$url .= $folder;
		}
		$url .= esc_url($filename);
		return $url;
	}
}