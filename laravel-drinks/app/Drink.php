<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
      'name',
      'gradation',
      'tipology',
      'glass',
      'ingredients',
      'price',
      'origin',
      'year',
      'difficulty',
      'origin',
    ];
}
