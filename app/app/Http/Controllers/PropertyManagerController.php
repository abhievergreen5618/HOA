<?php

namespace App\Http\Controllers;

use App\Models\PropertyManager;
use Illuminate\Http\Request;

class PropertyManagerController extends Controller
{
    //
    public function index()
    {
        
        $questionList = PropertyManager::paginate(4);
        return view('pages/question', compact('questionList'));
    }


    public function store(Request $request)
    {
        $data = new PropertyManager;
        $data->title = $request->input('title');
        $data->current_date = $request->input('current_date');
        $data->who = $request->input('who');
        $data->hoa = $request->input('hoa');
        $data->address = $request->address;
        $data->city = $request->city ?? '';
        $data->state = $request->state ?? '';
        $data->zip = $request->zip ?? '';
        $data->address2 = $request->address2 ?? '';
        $data->city2 = $request->city2 ?? '';
        $data->state2 = $request->state2 ?? '';
        $data->zip2 = $request->zip2 ?? '';
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject ?? '';
        $data->message = $request->message ?? '';

        $data->save();
        return redirect()->back()->with('success','Form submit Successfully');
    }

    public function destroy($id)
    {
        $item = PropertyManager::find($id);

        if($item) {
            $item->delete();
        }
        return redirect('/question-list')->with('success', 'Item deleted successfully');
    }

}
