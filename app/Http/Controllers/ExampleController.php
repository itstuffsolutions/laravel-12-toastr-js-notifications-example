<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
    
class ExampleController extends Controller
{
    public function viewPage(){       
        return view('notification');
    }
    public function store(Request $request){
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}