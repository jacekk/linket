<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
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
