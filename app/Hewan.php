<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    protected $table = 'hewan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'foto','jenishewan', 'ras', 'jenis', 'umur',
    ];
}
