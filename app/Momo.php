<?php

namespace App;

class Momo
{
    public static function generate_id()
    {
        return mt_rand(1000, 9999) . mt_rand(1000, 9999) . mt_rand(1000, 9999);
    }
}
