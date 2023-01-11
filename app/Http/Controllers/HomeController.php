<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\GroupRequest;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(){

        $UserId = Auth::user()->toArray()['id'];

        /** We take the data of all groups in our presence **/

        $GroupsAsMeRes = User::find($UserId)->GroupsByAutorMoreUser->toArray();

        if($GroupsAsMeRes != []){
            $Home['GroupsByAutorMoreUser'] = $GroupsAsMeRes;
        }

        //** we take the group belonging to the admin **/

        $Home['userGroups'] = User::find($UserId)->GroupByMemebers->toArray();

        //** Queries pending **/
        $Home['WaitingForExpectations'] = GroupRequest::where('requestId',$UserId)->get()->toArray();

        //** Number of requests and acceptances **/

        $NotificationsRes = GroupRequest::where('receivedId',$UserId)->where('status','Expectation...')->get()->toArray();

        if($NotificationsRes != []){
            $Home['Notifications'] = $NotificationsRes;
        }


        $UsersByNotificationsRes = DB::table('users')
            ->join('group_requests', 'users.id', '=', 'group_requests.requestId')
            ->where('group_requests.status', '=','Expectation...')
            ->where('group_requests.receivedId', '=',$UserId)
            ->select('users.*')
            ->get()->toArray();

        if($UsersByNotificationsRes != []){
            foreach($UsersByNotificationsRes as $key => $value){
                $UsersByNotificationsRes[$key] = (array)$value;
            }

           $Home['UsersByNotifications'] = $UsersByNotificationsRes;
        }

        //** taking all users except admin **/
        $UsersRes = User::whereNotIn('role',['admin'])->whereNotIn('id',[$UserId])->get()->toArray();
        if($UsersRes != []){
            $Home['users'] = $UsersRes;
        }


        return view('home',['home' => $Home]);
    }
}
