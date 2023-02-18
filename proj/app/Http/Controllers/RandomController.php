<?php

namespace App\Http\Controllers;

use App\Models\Random;
use App\Models\Breakdown;
use Illuminate\Http\Request;
class RandomController extends Controller
{

    public function index()
    {
        $rans=Random::all();
        return view('welcome',compact(['rans']));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $alp="abcdefjhijklmnopqrstuvwxyz0123456789";
        for($i=0;$i<rand(5,10);$i++){
            $random=new Random;
            $random->value=fake()->name();
            $random->save();
            for($j=0;$j<rand(5,10);$j++){
                $breakdown=new Breakdown;
                $breakdown->random_id=$random->id;
                $name="";
                for($k=0;$k<5;$k++){
                    $name.=$alp[rand(0,strlen($alp)-1)];
                }
                $breakdown->value=$name;
                $breakdown->save();
            }
            
        }
    }


    public function show($id)
    {
        $text=Random::where("id",$id)->first();
        $data="";
        for($j=0;$j<$text->breakdowns->count();$j++){
            $data.=$text->breakdowns[$j]->value." ";
        };
        return $data;
    }


    public function edit()
    {
        //
    }


    public function update()
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
