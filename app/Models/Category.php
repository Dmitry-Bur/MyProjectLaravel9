<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false;

    protected $table = 'Categories';

    public function subcategories(){
        return $this->hasMany(SubCategory::class)->orderBy('updated_at', 'desc');;
    }
}