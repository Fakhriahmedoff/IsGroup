<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use App\Models\Brand;

class Car extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['model'];
    
    public function category() {
        return $this->hasOne('App\Models\Brand','id','brand_id');
    }
  
}
