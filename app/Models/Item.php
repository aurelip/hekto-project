<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'name',
        'price',
        'code',
        'image',
    ];

    public $timestamps = false;
}
