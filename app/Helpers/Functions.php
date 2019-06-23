<?php 

if(!function_exists('classActivePath'))
{
	function classActivePath($path=array())
	{
		return Request::is($path) ? ' active' : '';
	}
}

if(!function_exists('classActiveSegment'))
{
	function classActiveSegment($segment, $value)
	{
		if(!is_array($value)) {
            return Request::segment($segment) == $value ? ' class="active"' : '';
        }
        foreach ($value as $v) {
            if(Request::segment($segment) == $v) return ' class="active"';
        }
        return '';
	}
}

if(!function_exists('classActiveSegmentMenu'))
{
    function classActiveSegmentMenu($segment, $value)
    {
        if(!is_array($value)) {
            return Request::segment($segment) == $value ? ' active' : '';
        }
        foreach ($value as $v) {
            if(Request::segment($segment) == $v) return ' active';
        }
        return '';
    }
}


if (!function_exists('classMenuOpenPath')) {
    function classMenuOpenPath($paths=array(),$seg=2)
    {  
        foreach ($paths as $path)
        {
            if(strpos(Request::url(),$path) && Request::segment($seg)==$path) return 'nav-item-expanded nav-item-open';
        }
        //return (strpos(Request::url(),$path)) ? 'menu-open' : '';
    }
}