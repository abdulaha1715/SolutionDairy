<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass not assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    function getNameAttribute($image) {
        if(str_starts_with($image, 'http')) {
            return $image;
        }
        return asset('storage/uploads') . '/' . $image;
    }
}
