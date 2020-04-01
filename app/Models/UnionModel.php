<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnionModel extends Model
{
    protected $table = 'unions';

    protected $fillable = [
      'district_id', 'name', 'slug', 'bn_name', 'url'
    ];

    public $timestamps = false;
}
