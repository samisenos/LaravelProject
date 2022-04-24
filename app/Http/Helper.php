<?php
if(!function_exists('isActive')) {
    function isActive($key, $class)
    {
        if (is_array($key))
            return in_array(\Illuminate\Support\Facades\Route::currentRouteName(), $key) ? $class : '';
        return \Illuminate\Support\Facades\Route::currentRouteName() == $key ? $class : '';
    }
}
