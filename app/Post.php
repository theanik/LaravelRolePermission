<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body'];

    public function valodationRules()
    {
        return [
            'title' => 'required',
            'body' => 'required'
        ];
    }
}
