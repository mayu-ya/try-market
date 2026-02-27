<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'image',
        'merchandise_name',
        'brand_name',
        'price',
        'explanation',
        'condition'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function likes()
    {
        return $this->belongsToMany(Profile::class);
    }

    public function details()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if(!empty($keyword)) {
            $query->where('merchandise_name', 'like', '%' . $keyword . '%');
        }
    }
}
