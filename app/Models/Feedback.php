<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Feedback extends Model
{
    protected $table = 'feedback';

     protected $dates = [
        'event_date',
    ];
}
