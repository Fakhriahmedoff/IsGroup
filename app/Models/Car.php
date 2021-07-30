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
<<<<<<< HEAD
    protected $translatable = ['model'];
=======
    protected $translatable = ['model', 'class', 'fuel', 'transmission'];
>>>>>>> 8f145f55e9293620dc0d27cc7dfc16f91cc86539
    
    public function category() {
        return $this->hasOne('App\Models\Brand','id','brand_id');
    }
  
}
