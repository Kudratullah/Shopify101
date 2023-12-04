<?php

namespace App\Utilities;

/**
 * Provides a Blade directive for session tokens.
 */
class SessionToken {
    /**
     * Output for the directive.
     *
     * @return string
     */
    public function __invoke(): string {
        return <<<"HTML"
        <input type="hidden" class="session-token" name="token" value="">
        <input type="hidden" class="host" name="host" value="{{ request()->get('host') }}">
        <input type="hidden" class="shop" name="shop" value="{{ request()->get('shop') }}">
        HTML;
    }
}
