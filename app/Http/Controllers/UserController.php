<?php

namespace App\Http\Controllers;

class UserController 
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function hello($id =0)
    {
    //     $title = "This is tjdf";
    //     $descriper = "This is tjdf";
    //     $age = "This is tjdf";
    //    return view('test2') -> with('title',$title);
    //     return view('test2')->with(['title'=> $title,'descriper'=>$descriper]);
            echo($id);
}
}
