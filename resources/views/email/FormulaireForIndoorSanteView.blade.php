<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vérification</title>
</head>
<body>
<p>Bonjour Indoor Santé,</p>
<p>Voici un nouveau message du formulaire de contact</p>
<ul>
    <li>Nom : {{$user->lastname}}</li>
    <li>Prénom : {{$user->firstname}}</li>
    <li>Téléphone : {{$user->phone}}</li>
    <li>Email : {{$user->email}}</li>
    <li>Métier : {{$user->occupation}}</li>
    <li>Message : {{$formulaire->content}}</li>
</ul>
</body>
</html>