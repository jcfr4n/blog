<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'category',
        'is_active'
    ];

    public function getRouteKeyName()
    {
        return 'title';
    }

}
