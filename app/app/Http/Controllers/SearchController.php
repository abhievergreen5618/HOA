<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\HOA;
use App\Models\State;
use App\Models\Headings;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $searchValue = $request->input('searchValue');
        $communities = Community::where('county', 'like', "%$searchValue%")->orWhere('community', 'like', "%$searchValue%")->orWhere('hoa_or_non', 'like', "%$searchValue%")->get();

        return view('user/searchcommunity', ['item' => $communities, 'searchValue' => $searchValue]);
    }


    public function searchHoa(Request $request)
    {
        $request->validate([
            'searchText' => 'required|min:3',
        ]);
    
        $searchText = $request->input('searchText');
    
        $hoa = HOA::where('name', 'like', "%$searchText%")->get();
    
        if ($hoa->isEmpty()) {
            $states = State::get();
            $heading2 = Headings::find(2);
            return view('user/addNewHOA', compact('states', 'heading2'));
        }
        
         $heading1 = Headings::find(1);
         $heading3 = Headings::find(3);
         $heading4 = Headings::find(4);
         $heading5 = Headings::find(5);
         $heading6 = Headings::find(6);
    
        return view('user/searchHoa', ['hoa' => $hoa, 'searchText' => $searchText, 'heading1' => $heading1, 'heading3' => $heading3, 'heading4' => $heading4, 'heading5' => $heading5, 'heading6' => $heading6]);
    }


public function getHoaSuggestions(Request $request)
{
    
    $request->validate([
            'searchText' => 'required|min:3',
        ]);
        
    $searchText = $request->input('searchText');

    $suggestions = HOA::where('name', 'like', "%$searchText%")->pluck('name');

    return response()->json($suggestions);
}



}
