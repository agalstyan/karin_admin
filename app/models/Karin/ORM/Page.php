<?php

namespace Karin\Orm;

class Page extends \Eloquent
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            return true;
        });
    }

}
