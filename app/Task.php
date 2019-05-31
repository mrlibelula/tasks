<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    // Fetch the assoc project
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
