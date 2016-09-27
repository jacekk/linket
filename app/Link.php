<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['url', 'title', 'author'];

    public function getViewUrl()
    {
        return sprintf('/links/%d', $this->id);
    }

    public function getRemoveUrl()
    {
        return sprintf('/links/%d/remove', $this->id);
    }
}
