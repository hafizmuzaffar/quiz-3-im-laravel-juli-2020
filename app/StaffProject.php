<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffProject extends Model
{
    protected $fillable = [
        'project_id', 'Staff_id'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }
}
