<?php
	require('fonction.php');
	echo haut_de_page('Niveau X');
?>
<h1>Escape The Night</h1>
<div >
	<p class="corps">
		Voici le site "<b>Escape The Night</b>" qui est un site d'énigme dont vous avez plusieurs niveaux à faire.
		Les niveaux sont de difficultées exponentielles au file de l'avancement du jeux, méfiez vous des consignes indiquées et essayé d'être plus futées que le jeu.
		<br>
		<br>
		<div class="test">
			<button onclick="location.href='menu.php'" type="button" class="bouton">Commencer les énigmes</button>
		</div>
		<center>
			<p class="titre_plateforme">Adapté pour toutes vos plateformes</p>
			<img class="plateforme" src="multiplateforme.png">
		</center>
	</p>
</div>


<?php
	echo bas_de_page();
?>