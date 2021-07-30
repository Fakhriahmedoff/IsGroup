<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;
use TCG\Voyager\Traits\Spatial;
class Location extends Model
{
    use Notifiable, Spatial;
    use HasFactory;
    use Translatable;
    protected $spatial = ['coordinat'];
=======

class Location extends Model
{
    use HasFactory;
    use Translatable;
>>>>>>> 8f145f55e9293620dc0d27cc7dfc16f91cc86539
    protected $translatable = ['name'];
    
}
