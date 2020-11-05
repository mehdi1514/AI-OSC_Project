<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // change table name
    protected $table = 'posts';
    //change primary key field
    public $primaryKey = 'id';
    // Timestamps - true by default
    public $timestamps = true;

    // build a replationship between users and the posts
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor');
    }
}
