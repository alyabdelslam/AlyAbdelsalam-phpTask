<?php

namespace App\Http\Controllers\Admin;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;



class AdminContoller extends Controller
{
    public function create(){
        return view('Admin.Services.Create');
    }

    public function store(Request $request)
    {
        $service = new Service;
        $service->name = $request->input('name');
        $service->details = $request->input('details');

        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('db/services/', $filename);
            $service->photo = $filename;
        }


        $service->save();
        return redirect()->back()->with('message','service data added Successfully');

       
    }


    public function edit($id){
        $service = Service::find($id);
        return view('Admin.Services.Edit',compact('service'));
    }

    public function update(Request $request, $id){
        $service = Service::find($id);
        $service->name = $request->input('name');
        $service->details = $request->input('details');

        if($request->hasfile('photo'))
        {
            $destination = 'db/services/'.$service->photo;
            if(File::exists($destination))
            {
                File::Delete($destination);
            }

            $file = $request->file('photo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('db/services/', $filename);
            $service->photo = $filename;
        }


        $service->update();
        return redirect()->back()->with('message','service data updated Successfully');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $destination = 'db/services/'.$service->photo;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $service->delete();
        return redirect()->back()->with('status','Service Image Deleted Successfully');
    }

    
}





 // $file_extension = $request -> photo ->getClientOriginalExtension();
        // $file_name = time().'.'.$file_extension;
        // $path ='images/services';
        // $request -> photo -> move($path,$file_name);
        
        // return 'okay';

        // services::create([
        //     'photo' => $file_name,
        //     'name' => $request->name,
        //     'deatils' => $request->deatils,
           

        // ]);
        // return redirect()->back()->with(['success'=>'Service added successfully']);