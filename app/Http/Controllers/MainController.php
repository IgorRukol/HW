<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function review(){
        $reviews = new Contact();

        return view('review', ['reviews' => $reviews->all()]);
        //dd($reviews->all());
    }
    public function review_check(Request $request){
        // dd($request);
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'tema' => 'required|min:4|max:100',
            'message' => 'required|min:20'
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->tema = $request->input('tema');
        $review->message = $request->input('message');
        $review->save();
            return redirect()->route('review');
    }
}
