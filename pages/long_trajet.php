


<div id="mesure">
    <h1>Long Trajet</h1>
    <form class="formulaire" method="post" action="#"><br>
      <label for="origine">Lieu de prise en charge:</label><br>
      <input type="text" name="origine" id="origine"><br>
      <div class="hd">
        <label for="date">Date:</label>
        <input type="date" name="" value="" placeholder="jj/mm/aaaa">
        <label for="heure">Horaire:</label>
        <select class="horaires" name="horaires">
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
      <label for="">Etape dans votre trajet:</label>
      <div class="radio2">
        <input type="radio" name="choix" value="oui">Oui
        <input type="radio" name="choix" value="non" checked>Non
      </div>
      <label for="destination">Destination:</label><br>
      <input type="text" name="destination" id="destination"><br>
      <input id="submit" type="submit" value="Reservez">
    </form>
</div>
<?php require 'mode_paiement.php'; ?>
<script type="text/javascript" src="../public/js/animation.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
