<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'deskripsi', 'tanggal_mulai', 'deadline', 'status'
    ];

    public function manager()
    {
        return $this->hasOne('App\ManagerProject', 'project_id');
    }

    public function staff()
    {
        return $this->hasMany('App\StaffProject', 'project_id');
    }
}
