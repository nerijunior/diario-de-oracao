<?php

namespace App;

use Moloquent;

class Post extends Moloquent
{
    protected $fillable = ['date', 'week_day', 'questions', 'fasting', 'fasting_purpose', 'user_id'];
}
