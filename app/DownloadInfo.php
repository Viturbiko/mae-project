<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadInfo extends Model
{
    protected $fillable = [
        'name', 'email', 'company', 'privacy'
    ];
}
