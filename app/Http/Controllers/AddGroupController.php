<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Group;
use App\Models\User;


class AddGroupController extends Controller
{
   public function index(Request $request){
        $userId = Auth::user()->toArray()['id'];

        $validated = $request->validate([
            'GroupName' => 'required|unique:groups|max:10',
            'user_id' => 'required',
        ]);

        if($validated['user_id'] != $userId){
            return 'Sending a request from an unknown person !';
        }

       $groupId = Group::insertGetId([
           'user_id' => $request->user_id,
           'GroupName' => $validated['GroupName'],
       ]);

        $UserGroup['userGroupByLastId'] = Group::find($groupId)->toArray();

        return json_encode($UserGroup);
    }
}
