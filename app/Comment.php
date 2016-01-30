<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['commented_txt','commented_to','commented_by'];

    public function userCommentedTo()
    {
    	return $this->belongsTo( 'App\User', 'commented_to' );
    }

    public function userCommentedBy()
    {
    	return $this->belongsTo( 'App\User', 'commented_by' );
    }

}
