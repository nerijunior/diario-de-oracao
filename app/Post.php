<?php

namespace App;

use Moloquent;

class Post extends Moloquent
{
    protected $fillable = ['date', 'questions', 'fasting', 'fasting_purpose', 'user_id'];
    protected $dates    = ['date'];
}
