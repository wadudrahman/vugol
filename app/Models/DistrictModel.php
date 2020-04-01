<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistrictModel extends Model
{
    protected $table = 'districts';

    protected $fillable = [
      'name', 'name_bn', 'url', 'slug'
    ];

    public $timestamps = false;
}
