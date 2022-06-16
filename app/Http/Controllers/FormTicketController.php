<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class FormTicketController
{
    public function getForm(){
        return view('FormBookTicket');
    } 
    public function postForm(Request $request){
        $target_dir    = "image/";
        $target_file   = $target_dir . basename($_FILES["img_room"]["name"]);
        // dd($target_file);
        $room = [
            'room' => $request ->input('room'),
            'des_room' => $request -> input('des_room'),
            'price_room' => $request->input('price_room'),
            'img_room' => $target_file
        ];
        if (isset($_SESSION['rooms'])) {
            $_SESSION['rooms'][] = $room;
        } else {
            if (session_id() === '')
                session_start();
            $_SESSION['rooms'][] = $room;
        }
        echo '<script>alert("Thêm phòng thành công")</script>';
        return view('Homepage');
    }
}   
