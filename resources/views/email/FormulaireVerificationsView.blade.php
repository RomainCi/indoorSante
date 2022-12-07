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
<p>Bonjour {{$lastname}},</p>
<p>Pour confirmer l'envoie de votre message veuillez cliquez sur le lien ci dessous</p>
<a href="https://indoorsante.osc-fr1.scalingo.io/confirmation/email/id={{$id??null}}&token={{$token??null}}">https://indoorsante.osc-fr1.scalingo.io/confirmation/email?id={{$id??null}}&token={{$token??null}}</a>
<p>Le lien expire dans 10min</p>
<p>Si vous êtes pas à l'origine de l'envoie de ce message veuillez ignorez ceux message, ceci est un message
    automatique.</p>
<p>Cordialement l'équipe de IndoorSanté</p>
</body>
</html>