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
    function cdn_asset($filename,$folder = null,$whichCdn = null)
    {
        $url = '';
        if($folder) {
            $url .= $folder;
        }
        $url .= urlencode($filename);
        return cdn_url($url, $whichCdn);
    }
}

if ( ! function_exists('cdn_url'))
{
    /**
     * Generate a URL on a CDN.
     *
     * @param  string  $name
     * @param  string  $folder
     * @return string
     */
    function cdn_url($path = null, $whichCdn = null)
    {
        // var_dump($path);exit;
        if( $whichCdn ) {
            $url = Config::get('cdn-helper::'.$whichCdn.'.base_url');
        } else {
            // assume there's just one, and not named
            $url = Config::get('cdn-helper::base_url');
        }
        if( null !== $path ) {
            $url .= $path;
        }
        return $url;
    }
}
