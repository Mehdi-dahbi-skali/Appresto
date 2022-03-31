<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Resrvation</h1>
    <h2>NOM : {{$data->name}}</h2>
    <h2>email : {{$data->email}}</h2>
    <h2>Nbr person : {{$data->person}}</h2>
    <h2>dans : {{$data->date}} a {{$data->time}}</h2>
    <h2>Tele : {{$data->phoneNumber}}</h2>
    <span>Message : {{$data->message}}</span>
</body>
</html>