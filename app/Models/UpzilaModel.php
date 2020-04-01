<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpzilaModel extends Model
{
    protected $table = 'upazilas';

    protected $fillable = [
      'district_id', 'name', 'slug', 'bn_name', 'url'
    ];

    public $timestamps = false;
}
