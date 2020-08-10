<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagerProject extends Model
{
    protected $fillable = [
        'project_id', 'manager_id'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }
}
