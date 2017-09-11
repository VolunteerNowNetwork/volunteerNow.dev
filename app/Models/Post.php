<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
use App\Models\Attendance;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_group', 'organization_name', 'title', 'start', 'end', 'location', 'color', 'number_of_hours', 'number_of_volunteers', 'age_restriction', 'point_of_contact', 'supplies_needed', 'appropriate_attire', 'categories'];

    public function attendance()
    {
        return $this->hasMany('\App\Models\Attendance', 'event_id');
    }

    public static function search($search)
    {
        $posts = Post::where('organization_name', 'LIKE', "%$search%")
            ->orWhere('categories', 'LIKE', "%$search%")
            ->orWhere('title', 'LIKE', "%$search%")
            ->get();

        return $posts;
    }


}