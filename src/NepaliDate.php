<?php
/**
 * Created by PhpStorm.
 * User: safal sigdel
 * Date: 1/11/2019
 * Time: 11:01 AM
 */

namespace safal\engtonepdateconverter;


use Illuminate\Support\Facades\Facade;

class NepaliDate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nepdate';
    }

}