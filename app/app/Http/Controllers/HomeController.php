<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\HOA;

class HomeController extends Controller
{
    //
    public function index()
    {
        $communityData = Community::all();
        return view('index', compact('communityData'));
    }


    public function communities($county)
    {
        $communityData = Community::where('county', urldecode($county))->get();
        return view('user/communityList', ['item' => $communityData, 'county' => urldecode($county)]);
    }

    public function boardmember($id)
    {
        $community = Community::find($id);

        // Retrieve board member data based on the community ID
        $boardMembers = BoardMember::where('community_id', $id)->get();
        $boardMembersCount = $boardMembers->count();

        return view('user/boardMemberList', compact('community', 'boardMembers','boardMembersCount'));
    }
    
    public function hoa($id)
    {
        $hoaData = HOA::where('id', urldecode($id))->get();
        return view('user/enquiryPage', ['hoaData' => $hoaData, 'county' => urldecode($hoaData)]);
    }


}
