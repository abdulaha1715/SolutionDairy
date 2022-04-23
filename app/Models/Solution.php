<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass not assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // problem
    public function problem() {
        return $this->belongsTo(Problem::class, 'problem_id', 'id');
    }

    // media
    public function media() {
        return $this->hasMany(Media::class, 'solution_id', 'id');
    }
}
