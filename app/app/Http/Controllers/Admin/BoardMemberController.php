<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BoardMember;
use App\Models\Community;

class BoardMemberController extends Controller
{
    //
    public function index()
    {
        return view('pages/addBoard');
    }

    public function showBoardMemberForm($id)
    {
        $community = Community::find($id);
        return view('pages/addBoard', compact('community'));
    }

    public function store(Request $request,$id)
    {
        $data = new BoardMember();
        $data->community_id = $id;
        $data->board_member = $request->board_member;
        $data->position_held = $request->position_held;
        $data->property_manager = $request->property_manager;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zip = $request->zip;
        $data->phone = $request->phone;
        $data->save();
        return redirect('board-member-list')->with('status', 'Saved Successfully');

    }

    public function show()
    {
        $board_member = BoardMember::paginate(3);
        return view('pages/boardMembers', compact('board_member'));
    }

    public function edit($id)
    {
        $communityData = BoardMember::find($id);
        return view('pages/editBoardMember', ['item' => $communityData]);
    }


    public function update(Request $request, $id)
    {
        $item = BoardMember::find($id);
        $item->board_member = $request->input('board_member');
        $item->position_held = $request->input('position_held');
        $item->property_manager = $request->input('property_manager');
        $item->address = $request->input('address');
        $item->city = $request->input('city');
        $item->state = $request->input('state');
        $item->zip = $request->input('zip');
        $item->phone = $request->input('phone');
        $item->save();
        return redirect('/board-member-list')->with('success', 'Item updated successfully');
    }

    public function destroy($id)
    {
        $item = BoardMember::find($id);

        if($item) {
            $item->delete();
        }
        return redirect('/board-member-list')->with('success', 'Item deleted successfully');
    }

}
