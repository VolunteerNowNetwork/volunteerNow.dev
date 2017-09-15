<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{
        public function getStartAttribute($value)
    {
    	$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago')->toDayDateTimeString();
    }

    public function getEndAttribute($value)
    {
    	$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago')->toDayDateTimeString();
    }
}
