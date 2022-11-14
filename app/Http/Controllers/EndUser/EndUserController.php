<?php

namespace App\Http\Controllers\EndUser;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EndUserController extends Controller
{
    

    public function home(){
        return view('EndUser.home');
    }

    public function about(){
        return view('EndUser.about');
    }
    public function contact(){
        return view('EndUser.contact');
    }
    public function event(){
        return view('EndUser.event');
    }
    public function projects(){
        return view('EndUser.projects');
    }
    
    public function project(){
        return view('EndUser.project');
    }
    public function services(){
        $service = Service::all();
        return view('EndUser.services',compact('service'));
    }
    public function service(){
        return view('EndUser.service');
    }

}
