<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Employee extends Model
{

    public static $rules = [  // accessible to multiple files using the model
        'name' => 'required|max:100',
        'employer_id' => 'required',
        'contact_number'   => 'required',
        'email' => 'email',
        'available_hours' => 'required'
    ];

    public function user()
    {
        //
    }

}
