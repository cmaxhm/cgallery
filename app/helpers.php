<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

if (!function_exists('sidebars')) {
  function sidebars() {
    return (object) [
      'leftSidebar' => (object) [
        'categories' => Category::take(50)->orderBy('name', 'asc')->get()
      ],
      'rightSidebar' => (object) [
        'usersRanking' => User::take(30)->orderBy('points', 'desc')->get(),
        'mostVotedPosts' => Post::take(5)->orderBy('likes', 'desc')->get()
      ]
    ];
  }
}
