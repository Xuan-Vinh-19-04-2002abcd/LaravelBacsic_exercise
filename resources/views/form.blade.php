<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/tinhtong" method="POST">
        @csrf
        <label for="">Enter so a</label>
        <input name="number_a" type="number">
        <label for="">Enter so b</label>
        <input name="number_b"type="number">
        <input type="submit" value="Tinh" >
        <label for="">KẾt quản</label>
        <input type="number"value="<?php if(isset($sum)) echo $sum;?>" >
    </form>
</body>
</html>