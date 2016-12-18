<?php

namespace Sluggable;


class Slug
{
    public static function slug($string,$separator)
    {
        return str_slug($string,$separator);
    }
}
