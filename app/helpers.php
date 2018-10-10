<?php
/**
 * @param array|string $routes
 * @return bool
 */
function checkRoute($routes)
{
    if (is_string($routes)) {
        return Route::currentRouteName() == $routes;
    } elseif (is_array($routes)) {
        return in_array(Route::currentRouteName(), $routes);
    }

    return false;
}
