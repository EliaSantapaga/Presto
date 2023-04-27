<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Buongiorno Amministratore</h1>
    <h3>Hai ricevuto un messaggio da {{$contact->name}}</h3>
    <h5>Ecco il ruolo che chiede di ricoprire e il suo messaggio:</h5>
    <h5>Ruolo: {{$contact->role}}</h5>
    <p>Messaggio: {{$contact->message}}</p>
    
</body>
</html>