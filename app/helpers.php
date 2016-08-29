<?php

/**
 * @param null $title
 * @param null $message
 * @return \App\Http\Flash|void
 */
function flash($title = null, $message = null)
{

    /** @var App\Http\Flash $flash */
    $flash = app('App\Http\Flash');

    if(func_num_args() == 0)
    {
        return $flash;
    }

    return $flash->info($title, $message);
}