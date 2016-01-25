<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    public function send(Request $request){

        Flash::message("Ok!");
        //$request->session()->flash('notification','All ok!');
        return redirect()->route('welcome');
    }
}
