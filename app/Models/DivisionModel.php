<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DivisionModel extends Model
{
    protected $table = 'divisions';

    protected $fillable = [
      'name', 'name_bn', 'url'
    ];
}
