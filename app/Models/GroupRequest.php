<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'requestId',
        'receivedId',
        'groupId',
        'status',
        'groupName',
    ];

}
