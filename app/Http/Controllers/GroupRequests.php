<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\GroupRequest;
use App\Models\Group;
use App\Models\User;
use App\Models\GroupMember;


class GroupRequests extends Controller
{
    public function index(Request $request){
        $userId = Auth::user()->toArray()['id'];

        if($request->receivedId == $userId){
            return 'User Error';
        }

        $groupValid = User::find($request->requestId)->GroupByMemebers()
            ->where('id',$request->groupId)
            ->where('GroupName',$request->groupName)
            ->get()->toArray();


        if($groupValid == []){
            return 'User Error';
        }


        $UserValArr = [$request->requestId,$request->receivedId];

        $resNull = '';

        foreach ($UserValArr as $key => $value){
           $UserValidate = User::where('id',$value)->get()->toArray();
           if($UserValidate == []){
               $resNull = 0;
           }
        }

        if(gettype($resNull) == 'integer'){
            return 'User Error';
        }
            else{
                $UserGroupRes = User::find($request->requestId)->GroupByMemebers->toArray();
                if($UserGroupRes == []){
                    return 'User Error';
                }

                if(GroupRequest::create($request->toArray()) == true){
                    $Home['WaitingForExpectations'] = GroupRequest::where('requestId',$userId)->get()->toArray();

                    return json_encode($Home);
                }
            }
    }

    public function RequestUserGroupMembersMore(Request $request){

        $userId = Auth::user()->toArray()['id'];

        $validMembersId = User::find($userId)->GroupByMemebers()
            ->where('user_id',$userId)
            ->where('id',$request->groupId)
            ->get()->toArray();

        if($validMembersId != []){
            return 'Error Id';
        }


        $res = Group::where('id',$request['groupId'])->get()->toArray();
        if($res == []){
            return 'Error Id';
        }
        else{
            $getGroupAutor = Group::find($request['groupId'])->getGroupAutor->toArray();
            $GroupData['UserEmail'] = $getGroupAutor;

            $GroupDataRes = Group::where('id',$request['groupId'])->get()->toArray()['0'];
            $GroupData['Name'] = $GroupDataRes['GroupName'];

            $RequestAdminGroupMembers = GroupMember::where('groupId',$request['groupId'])->get()->toArray();
            if($RequestAdminGroupMembers != []){
                $GroupData['Members'] = $RequestAdminGroupMembers;
            }

            return json_encode($GroupData);
        }
    }

    public function RequestUserGroupMembers(Request $request){
        $userId = Auth::user()->toArray()['id'];

        $groupIdVal = User::find($userId)->GroupByMemebers()
            ->where('user_id',$userId)
            ->where('id',$request->groupId)
            ->get()->toArray();

        if($groupIdVal == []){
            return 'Error Id';
        }


        $res = Group::where('id',$request['groupId'])->get()->toArray();
        if($res == []){
            return 'Error Id';
        }
            else{
                $getGroupAutor = Group::find($request['groupId'])->getGroupAutor->toArray();
                $GroupData['UserEmail'] = $getGroupAutor;

                $GroupDataRes = Group::where('id',$request['groupId'])->get()->toArray()['0'];
                $GroupData['Name'] = $GroupDataRes['GroupName'];

                $RequestAdminGroupMembers = GroupMember::where('groupId',$request['groupId'])->get()->toArray();
                if($RequestAdminGroupMembers != []){
                    $GroupData['Members'] = $RequestAdminGroupMembers;
                }

                return json_encode($GroupData);
            }
    }

    public function Destroy(Request $request){
        $userId = Auth::user()->toArray()['id'];

        $GroupRequestAccept = Group::find($request['groupId'])->GroupRequestDestroy()
            ->where('requestId', $request['requestId'])
            ->where('receivedId', $userId)
            ->where('status', 'Expectation...')->delete();

        if($GroupRequestAccept == 1){
            return 1;
        }
    }

    public function accept(Request $request){

       $userId = Auth::user()->toArray()['id'];

        /** request acceptance **/
        $GroupRequestAccept = Group::find($request['groupId'])->GroupRequestAccept()
            ->where('requestId', $request['groupUserId'])
            ->where('receivedId', $userId)->update(['status' => 'Accepted']);

        if($GroupRequestAccept == 1){
            /** Adding a new member **/

            $groupId = GroupMember::insertGetId([
                'groupMemberId' => $request->groupMemberId,
                'groupMemberEmail' => $request->groupMemberEmail,
                'groupUserId' => $request->groupUserId,
                'groupName' => $request->groupName,
                'groupId' => $request->groupId,
            ]);

            $GroupsAsMeRes['GroupsByAutorMoreUser'] = GroupMember::find($groupId)->toArray();
        }

        echo json_encode($GroupsAsMeRes);
    }
}
