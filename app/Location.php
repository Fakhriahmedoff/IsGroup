<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Notifications\Notifiable;
use TCG\Voyager\Traits\Spatial;
class Location extends Model
{
    use Notifiable, Spatial;
    use HasFactory;
    use Translatable;
    protected $spatial = ['coordinat'];
    protected $translatable = ['name'];
    
}
