<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function appointments(){
        return $this->hasMany('App\Models\Appointment');
    }
}
