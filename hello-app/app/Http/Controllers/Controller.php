<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function hello()
    {
        return view('hello');
    }

    public function hello2()
    {
        return view('hello2');
    }

    public function bladeView()
    {
        return view('bladeView');
    }

    public function bladeViewPost()
    {
        request()->validate([
            'name' => 'required',
            'age' => 'required|numeric'
        ],
        [
            'name.required' => 'You have to type a name!',
            'age.required' => 'You have to type an age!',
            'age.numeric' => 'Age has to be numeric'
        ]);
        
        dd('hello ' . request()->name . ', who is ' . request()->age . ' years old!');
    }
}

