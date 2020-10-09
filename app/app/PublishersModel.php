<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublishersModel extends Model
{
    protected $table="Publishers";

    protected $fillable = [
        'PID','Name'
    ];
}
