
  <div id="aile">
    <h1>Trajet aéroport</h1>
    <form class="formulaire2" method="post" action="#"><br>
      <h3>Mes informations</h3>
      <div class="">
        <label for="name">Nom*:</label>
        <input type="text" name="nom" value="" required="" placeholder="entrez votre nom" id='name'>
        <label for="firstname">Prenom*:</label>
        <input type="text" name="firstname" value="" required="" placeholder="entrez votre prenom" id='firstname'><br>
      </div>
      <div id="email">
        <label for="email">Email*:</label>
        <input type="email" name="mail" value="" required="" placeholder="ex:driver@gmail.com">
      </div>
      <hr>
      <h3>Mon trajet</h3>
      <div class="">
        <label for="go">Depart*:</label>
        <input type="text" name="" value="" id="go" required="" placeholder="entrez votre lieu de depart">
        ou aeroport:
        <select value="choisir un aeroport">
          <option value="1">Paris/Roissy-Charles deGaulle</option>
          <option value="2">Paris/Orly</option>
        </select><br>
      </div>
      <div class="">
        <label for="arriver">Arriver*:</label>
        <input type="text" name="" value="" id="arriver" placeholder="entrez votre lieu d'arrivé">
        <label for="selection" id='choix2'>ou aeroport:</label>
        <select class="two" name="aeroports" id='selection'>
          <option value="1">Paris/Roissy-Charles deGaulle</option>
          <option value="2">Paris/Orly</option>
        </select><br>
      </div>
      <div class="">
        <label for="personne"> nombres de personnes :</label>
        <select class="personnes" name="">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select> |
        <label for="horaires">heure de depart :</label>
        <select name="horaires">
          <option value="06:00">06:00</option>
          <option value="07:00">07:00</option>
          <option value="08:00">08:00</option>
          <option value="09:00">09:00</option>
          <option value="10:00">10:00</option>
          <option value="11:00">11:00</option>
          <option value="12:00">12:00</option>
          <option value="13:00">13:00</option>
          <option value="14:00">14:00</option>
          <option value="15:00">15:00</option>
          <option value="16:00">16:00</option>
          <option value="17:00">17:00</option>
          <option value="18:00">18:00</option>
          <option value="19:00">19:00</option>
          <option value="20:00">20:00</option>
          <option value="21:00">21:00</option>
          <option value="22:00">22:00</option>
          <option value="23:00">23:00</option>
          <option value="00:00">00:00</option>
        </select><br>
      </div>
     <input type="submit" id='validation' name="" value="Reservez">
   </form>
</div>
<?php require 'mode_paiement.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
