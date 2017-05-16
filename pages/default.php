<body>



<header class="row">
	<div id="header_flex" class="col-xs-12">

			<h1 id="marque">Transfert Class</h1>


			<div id="header_est">
				<div id="telephone">
					<img id="tel" src="../images/tel.png"> 01 42 62 42 22
				</div>
				<div id="mon_compte">
				Mon compte
				</div>
			</div>
	</div>

</header>

	<div id="rouge">
	</div>
	<div class="trait">
	</div>
<div id="navi">
<?php
if ($p!=='home'){
	?>
<ul>
	<li ><a href="index.php?p=home">Accueil</a></li>
	<li><a href="index.php?p=aeroport">Trajet Aéroport</a></li>
	<li><a href="index.php?p=sur_mesure">Trajet Sur mesure</a></li>
	<li><a href="index.php?p=sur_mesure">Déplacements divers</a></li>
	<li><a href="index.php?p=Mise_a_disposition">Mise à disposition</a></li>
</ul>
<?php
}else{
	?>
	<ul>
	<li><a href="index.php?p=aeroport">Trajet Aéroport</a></li>
	<li><a href="index.php?p=sur_mesure">Trajet Sur mesure</a></li>
	<li><a href="index.php?p=sur_mesure">Déplacements divers</a></li>
	<li><a href="index.php?p=Mise_a_disposition">Mise à disposition</a></li>
</ul>
<?php
}
?>
</div>

<main>



<?php

echo $content;
?>




</main>

<footer>

</footer>


 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

	<script type="text/javascript" src="../public/js/bd.js"></script>

</body>



</html>
