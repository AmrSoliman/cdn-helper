<?php

namespace NpmWeb\CdnHelper;

class CdnHelperServiceProvider
	extends \Illuminate\Support\ServiceProvider
{

	/**
	 * Sets up reference to config file.
	 *
	 * @return void
	 */
	public function boot()
	{
		// @see https://coderwall.com/p/svocrg
		$this->package('npmweb/cdn-helper', null, __DIR__.'/../../../');
	}

	/**
	 * Register the reference instance
	 *
	 * @return void
	 */
	public function register() {
		// nothing to load; Composer auto-loads the helper
	}

}
