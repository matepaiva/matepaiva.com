<?php

# app/Models/Job.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Job extends Model
{
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
}
