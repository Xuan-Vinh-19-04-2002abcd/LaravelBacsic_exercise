<?php

namespace App\Http\Controllers;

class Processform
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function hello()
    {
        // $title = "This is tjdf";
        // $descriper = "This is tjdf";
        // $age = "This is tjdf";
        // return view('test2')->with('title', $title);
        // return view('test2')->with(['title' => $title, 'descriper' => $descriper]);
        $soA = $_POST['number_a'];
        $soB = $_POST['number_b'];
        $c = $soA +$soB;
        return view('form') ->with('sum',$c); 
    }
}
