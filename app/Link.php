<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function getViewUrl()
    {
        return sprintf('links/%d', $this->id);
    }
}
