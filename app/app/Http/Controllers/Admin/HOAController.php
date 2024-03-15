<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HOA;

class HOAController extends Controller
{
    //
    public function index()
    {
        return view("pages/addHOA");
    }

    public function store(Request $request)
    {
        
        // $file = $request->file('image');
        // $filename = time() . '_' . $file->getClientOriginalName();
        // $path = 'uploads/';
        // $file->move($path,$filename);
        
        
        $data = new HOA;
        $data->name = $request->name;
        $data->product_url = $request->product_url;
        $data->product_url2 = $request->product_url2;
        $data->product_url3 = $request->product_url3;
        $data->product_url4 = $request->product_url4;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zip = $request->zip;
        $data->county = $request->county;
        $data->contact_person = $request->contact_person;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->dealer_name = $request->dealer_name;
        // $data->image = $path.$filename; 
        
        if ($request->hasFile('image')) {
        $file = $request->file('image');
        if ($file->isValid()) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = 'uploads/';
            $file->move($path, $filename);
            $data->image = $path . $filename;
        }
    }
        

        $data->save();
        return redirect('hoa-list')->with('status', 'Saved Successfully');

    }
 

  public function show()
    {
        $hoaData = HOA::orderBy('id', 'desc')->paginate(10);
        
        if($hoaData->isEmpty())
        {
            abort(404);
             return view('errors/404');
        }
        
        return view('pages/hoaList', compact('hoaData'));
    }

public function view($id)
{
    $hoaViewData = HOA::find($id);
    return view('pages/hoaView',['item' => $hoaViewData]);
    
}

    public function edit($id)
    {
        $hoaData = HOA::find($id);
        return view('pages/editHOA', ['item' => $hoaData]);
    }


    public function update(Request $request, $id)
    {
        $data = HOA::find($id);
        $data->name = $request->input('name');
        $data->product_url = $request->input('product_url');
        $data->product_url2 = $request->input('product_url2');
        $data->product_url3 = $request->input('product_url3');
        $data->product_url4 = $request->input('product_url4');
        $data->address = $request->input('address');
        $data->city = $request->input('city');
        $data->state = $request->input('state');
        $data->zip = $request->input('zip');
        $data->county = $request->input('county');
        $data->contact_person = $request->input('contact_person');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->dealer_name = $request->input('dealer_name');

 if ($request->hasFile('image')) {
        $path = 'uploads/';

        // Remove old file
        if ($data->image != '' && $data->image != null) {
            $file_old = $data->image;
            unlink($file_old);
        }

        // Upload new file
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move($path, $filename);
        $data->image = $path . $filename;
    }

        $data->save();
        return redirect('/hoa-list')->with('success', 'Item updated successfully');
    }

    public function destroy($id)
    {
        $item = HOA::find($id);

        if($item) {
            $item->delete();
        }
        return redirect('/hoa-list')->with('success', 'Item deleted successfully');
    }


 public function search(Request $request)
{
    $searchHoaData = $request->input('searchHoaData');
    
    $hoaData = HOA::where('name', 'like', "%$searchHoaData%")->paginate(10); // Assuming 10 records per page

    return view('pages/hoaList', compact('hoaData'));
}

public function deleteMultiple(Request $request)
{
    $ids = $request->ids;
    if(HOA::whereIn('id',explode(",",$ids))->delete()){
      return response()->json(['status' => 'success', 'message' => 'Item deleted successfully']);  
    }else{
        return response()->json(['status' => 'false', 'message' => 'Item not deleted successfully']);
    }
    
    //return redirect('/hoa-list')->with('status', 'Item deleted successfully');
  
}

    
}
