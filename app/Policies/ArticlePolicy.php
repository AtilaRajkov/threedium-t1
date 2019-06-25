<?php

namespace App\Policies;

use App\User;
use App\Model\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;
    
    
    public function update(User $user, Article $article)
    {
        if ($user->id == $article->user_id) {
           return true;
        }
    }

    
}
