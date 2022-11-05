<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'created_date', 'expire_date', 'type', 'tag', 'image'];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
