<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass not assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // One to one relation between Problem and Category
    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // Change default route key
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
