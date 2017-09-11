<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
use App\User;
use App\Models\Post;


class Attendance extends Model
{
    protected $table = 'attendance';

    protected $fillable = ['title', 'hrs_to_complete','num_of_people', 'event_id', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('\App\User', 'user_id');
    }

    public function posts()
    {
    	return $this->belongsTo('\App\Models\Post', 'event_id');
    }
}
