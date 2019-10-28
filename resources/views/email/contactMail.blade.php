<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour je m'appelle {{$msg->name}}</h1>
    <h2>Mon adresse email si vous souhaitez me recontacter est la suivante : {{$msg->email}}</h2>

    <h3>Voici le message que je souhaite vous transmettre</h3>
    <p>{{$msg->contain}}</p>
</body>
</html>