<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $primaryKey = 'id';

    protected $table = 'blogs';

    protected $fillable = ['title', 'text'];

    protected $visible = ['id', 'title', 'user', 'is_published'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
