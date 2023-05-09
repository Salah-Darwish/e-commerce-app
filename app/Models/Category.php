<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


// the attributes that are mass assignable
protected $fillable=['name','slug','description','parent_id']; 
 
// get the products for the category

public function products(){
    return $this->hasMany(Product::class);  
}

// get the parent of category 
public function parent(){
    return $this->belongsTo(Category::class,'parent_id'); 
}

}