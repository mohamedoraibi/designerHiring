<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user_designer',
        'id_user_project_owner',
        'price',
        'days',
        'status',
        'notes',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'biddings', 'id_user_project_owner', 'id_user_designer')->withPivot('id');
//        return $this->belongsToMany(Topics::Class, 'community_topics', 'CommunityID', 'TopicID')->withPivot('id');

    }
}
