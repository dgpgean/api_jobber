<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobber extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
