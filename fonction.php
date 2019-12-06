<?php
function haut_de_page($titre)
{
 return '
 <!doctype html>
 <html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1">
  <title>'.$titre.'</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="logo.ico">
</head>
<body class="background">';
}
 
function bas_de_page()
{
 return '
</body>
<footer>
<a href="https://www.instagram.com/nuitdelinfollm/" target="_blank">
 <img class="icon" src="insta.png"/>
</a>
<br> Auteur la Zoubaberie - Tous Droits réservés - 2019
</footer>
</html>';
}

