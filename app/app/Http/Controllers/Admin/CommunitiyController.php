<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;

class CommunitiyController extends Controller
{
    //
    public function index()
    {
        return view("pages/communities");
    }

    public function store(Request $request)
    {
        $data = new Community;
        $data->county = $request->county;
        $data->community = $request->community;
        $data->hoa_or_non = $request->hoa_or_non;
        $data->status_type = $request->status_type;
        $data->community_type = $request->community_type;
        $data->community_legal_name = $request->community_legal_name;
        $data->also_known = $request->also_known;
        $data->date = $request->date;
        $data->id_number = $request->id_number;

        $data->save();
        return redirect('community-list')->with('status', 'Saved Successfully');

    }

    public function communityList()
    {
        $communityData = Community::paginate(2);
        return view('pages/communityData', compact('communityData'));
    }

    public function edit($id)
    {
        $communityData = Community::find($id);
        return view('pages/editCommunity', ['item' => $communityData]);
    }


    public function update(Request $request, $id)
    {
        $item = Community::find($id);
        $item->county = $request->input('county');
        $item->community = $request->input('community');
        $item->hoa_or_non = $request->input('hoa_or_non');
        $item->status_type = $request->input('status_type');
        $item->community_type = $request->input('community_type');
        $item->community_legal_name = $request->input('community_legal_name');
        $item->also_known = $request->input('also_known');
        $item->date = $request->input('date');
        $item->id_number = $request->input('id_number');
        $item->save();
        return redirect('/community-list')->with('success', 'Item updated successfully');
    }

    public function destroy($id)
    {
        $item = Community::find($id);

        if($item) {
            $item->delete();
        }
        return redirect('/community-list')->with('success', 'Item deleted successfully');
    }

}
