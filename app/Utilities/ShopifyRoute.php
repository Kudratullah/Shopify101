<?php

namespace App\Utilities;

use Illuminate\Support\Facades\URL;
use Osiset\ShopifyApp\Macros\TokenUrl;

/**
 * Method for generating a URL to the token route.
 * Used for non-SPAs.
 */
class ShopifyRoute extends TokenUrl {
    /**
     * Return a URL to token path with shop and target (for redirect).
     *
     * @param string $route The route name.
     * @param array $params Additional route params.
     * @param bool $absolute Absolute or relative?
     *
     * @return string
     * @example `<a href="{{ URL::tokenRoute('orders.view', ['id' => 1]) }}">Order #1</a>`
     *
     * @example `URL::tokenRoute('orders.view', ['id' => 1]);`
     */
    public function __invoke( string $route, array $params = [], bool $absolute = true ): string {
        [ $url, $params ] = $this->generateParams( $route, $params, $absolute );
        if ( request()->has( 'token' ) ) {
            // fixing app-bridge host key missing error. don't use request()->get('toke')
            // and include the host key.
            $params['token'] = request()->token;
            $params['host'] = request()->host;
        }

        return URL::route( $route, $params );
    }
}
