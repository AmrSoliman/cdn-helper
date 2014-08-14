<?php

namespace NpmWeb\CdnHelper;

class CdnHelperServiceProvider
    extends \Illuminate\Support\ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Sets up reference to config file.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->package('npmweb/cdn-helper', null, __DIR__.'/../../');
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
