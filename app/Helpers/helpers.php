<?php

if (! function_exists('image_path')) {

    function image_path($value, $default = 1) 
    {
        if (is_null($value)) { 
            return is_null($default) ? $value : asset("img/default.png");
        }

        return Storage::url($value);
    }
}

if (! function_exists('active_segment')) {

    function active_segment($index, $path) 
    {
        return request()->segment($index) == $path ? 'active' : '';
    }
}

if (! function_exists('active_path')) {

	function active_path($path = null) 
	{
		$path = is_null($path) 
				? config('app.admin_prefix')
				: config('app.admin_prefix').'/'.$path;

		return request()->is($path) ? 'active' : '';
	}
	
}