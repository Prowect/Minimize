<?php

namespace Drips\MinimizeCompiler;

class MinimizeCompiler
{
    const JS = 'MatthiasMullie\Minify\JS';
    const CSS = 'MatthiasMullie\Minify\CSS';

    public static function compile($string, $type)
    {
        if($type == static::JS || $type == static::CSS){
            $compiler = new $type($string);
            return $compiler->minify();
        }
        return $string;
    }
}
