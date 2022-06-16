<?php
// session_start();
?>
@foreach ($_SESSION['rooms'] as $room)
    {{$img = 'img/'}}
    <img src= {{asset(.''.)}} alt="Lỗi hiển thị" /> 
    <p>{{$room['room']}}</p>
@endforeach