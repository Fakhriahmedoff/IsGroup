<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Slider extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['car_name', 'subtitle'];
}
