<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'budget',
        'deadline',
        'details',
        'visitor',
        'device',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::Class);
    }

//    public function startups()
//    {
//        return $this->belongsToMany(Startups::Class, 'people_startups', 'PeopleID', 'StartupID')->withPivot('id');
//    }
}
