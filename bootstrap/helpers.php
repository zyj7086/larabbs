<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value,$length = 200)
{
	$excerpt = trim(preg_replace('/\r\n|\r|\r+/',' ',strip_tags($value)));
	return str_limit($excerpt,$length);
}