<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\AdminNavbar;
use App\Models\AdminGroup;

class AdminController extends Controller
{
    public function index(){
        $AdminNavbarRes = AdminNavbar::all()->toArray();
        if($AdminNavbarRes != []){
            $Admin['navbar'] = $AdminNavbarRes['0'];
        }

        $AdminGroupsRes = AdminGroup::all()->toArray();
        if($AdminGroupsRes != []){
            $Admin['adminGroupContents'] = $AdminGroupsRes['0'];
        }

        return json_encode($Admin);
    }

    public function updateNavbar(Request $request){

        $validated = $request->validate([
            'Home' => 'required|max:255',
            'Logout' => 'required|max:255',
            'UsersByNotifications' => 'required|max:255',
            'Accept' => 'required|max:255',
            'Destroy' => 'required|max:255',
        ]);

        $update = DB::table('admin_navbars')->update($validated);
        if($update == 1){
            return 1;
        }
    }

    public function updateGroup(Request $request){

        $validated = $request->validate([
            'AddGroup' => 'required|max:255',
            'Group' => 'required|max:255',
            'Name' => 'required|max:255',
            'Adding' => 'required|max:255',
            'MyGroups' => 'required|max:255',
            'IdContent' => 'required|max:255',
            'MembersList' => 'required|max:255',
            'Groups' => 'required|max:255',
            'Email' => 'required|max:255',
            'Users' => 'required|max:255',
            'Expectation' => 'required|max:255',
            'Accepted' => 'required|max:255',
            'InviteToGroup' => 'required|max:255',
        ]);

        $update = DB::table('admin_groups')->update($validated);
        if($update == 1){
            echo 1;
        }
    }
}
