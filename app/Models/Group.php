<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'GroupName',
        'members',
    ];

    public function getGroupAutor(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function GroupRequestAccept(){
        return $this->hasOne(GroupRequest::class,'groupId','id');
    }

    public function GroupRequestDestroy(){
        return $this->hasOne(GroupRequest::class,'groupId','id');
    }
}
