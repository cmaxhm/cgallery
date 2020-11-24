<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
  use HasFactory;
  
  public function user() {
    return $this->belongsTo(User::class, 'user');
  }
  
  public function category() {
    return $this->belongsTo(Category::class, 'category');
  }
  
  public function tags() {
    return $this->belongsToMany(Tag::class, 'tag_post', 'tag_id', 'post_id');
  }
}
