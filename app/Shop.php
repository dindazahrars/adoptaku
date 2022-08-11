<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shop';
    protected $primaryKey = 'id';
    protected $fillable = [
        'namashop', 'alamatshop', 'emailshop', 'fax'
    ];
}
