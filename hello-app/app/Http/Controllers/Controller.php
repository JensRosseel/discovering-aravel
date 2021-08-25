<?php

namespace App\Http\Controllers;

use App\Models\Card;
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

    public function eloquentTest()
    {
        return view('eloquentTest');
    }

    public function eloquentTestPost()
    {
        request()->validate([
            'name' => 'required',
            'cardtype' => 'required',
            'rarity' => 'required'
        ],
        [
            'name.required' => 'You have to type a name!',
            'cardtype.required' => 'You have to type a cardtype!',
            'rarity.required' => 'rarity has to be stated!'
        ]);

        $card = new Card;
        $card->name = request()->name;
        $card->cardtype = request()->cardtype;
        $card->rarity = request()->rarity;

        $card->save();

        return view('eloquentTest');
        
    }
}

