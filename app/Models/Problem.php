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

    // One to one relation between Problem and Category
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Many to Many Relationsip
    public function tags() {
        return $this->belongsToMany(Tag::class, 'problems_tags', 'problem_id', 'tag_id');
    }

    // solutions
    public function solutions() {
        return $this->hasMany(Solution::class, 'problem_id', 'id');
    }

    // media
    public function media() {
        return $this->hasMany(Media::class, 'problem_id', 'id');
    }

    // Change default route key
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
