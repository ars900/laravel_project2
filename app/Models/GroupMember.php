<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class GroupMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'groupId',
        'groupUserId',
        'groupMemberId',
        'groupMemberEmail',
        'groupName',
    ];


    /*public function GroupsAsMeRes(){
        return $this->belongsTo(Group::class,'group_id','id');

    }*/

    public function GroupsAsMeRes(){
        return $this->hasMany(Group::class,'id','group_id');

    }
}
