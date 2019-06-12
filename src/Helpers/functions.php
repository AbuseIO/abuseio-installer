<?php

if ( ! function_exists('isActive'))
{
    /**
     * Set the active class to the current opened menu.
     *
     * @param  string|array $route
     * @param  string       $className
     * @return string
     */
    function isActive($route, $className = 'active')
    {
        if (is_array($route)) {
            return in_array(Route::currentRouteName(), $route) ? $className : '';
        }
        if (Route::currentRouteName() == $route) {
            return $className;
        }
        if (strpos(URL::current(), $route)) return $className;
    }
}

if ( ! function_exists('isInstalled'))
{
    /**
     * Check if the Laravel App is installed
     *
     * @return bool
     */
    function isInstalled()
    {
        return file_exists(storage_path('installed'));
    }
}

if ( ! function_exists('isMigrated'))
{
    /**
     * Check if the Laravel App is migrated
     *
     * @return bool
     */
    function isMigrated()
    {
        return file_exists(storage_path('migrated'));
    }
}

if ( ! function_exists('isSeeded'))
{
    /**
     * Check if the Laravel App is seeded
     *
     * @return bool
     */
    function isSeeded()
    {
        return file_exists(storage_path('seeded'));
    }
}

if ( ! function_exists('adminAdded'))
{
    /**
     * Check if the admin user is updated
     *
     * @return bool
     */
    function adminAdded()
    {
        return file_exists(storage_path('adminadded'));
    }
}

