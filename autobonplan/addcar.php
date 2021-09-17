<?php 
  session_start();
  if(!isset($_SESSION['unique_id']) || $_SESSION['admin'] !=1){
        header("location: login.php");
}
?>

<?php include_once "header.php"; ?>
<body>
  <div class="box">
  <div class="wrapper">
    <section class="signup form">
      <header>Ajouter un arrivage</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
            <label>VIN</label>
            <input type="text" name="vin" placeholder="VIN" required>
        </div>
        <div class="field input">
            <label>Marque</label>
            <input type="text" name="marque" placeholder="Marque">
        </div>
        <div class="field input">
          <label>Modele</label>
          <input type="text" name="modele" placeholder="Modele">
        </div>
        <div class="field input">
          <label>Energie</label>
          <input type="text" name="energie" placeholder="Energie">
        </div>
        <div class="field input">
          <label>Date arrivee</label>
          <input type="date" name="dateArrivee" placeholder="Date d'arrivee" required>
        </div>
        <div class="field input">
          <label>Fournisseur</label>
          <input type="text" name="fournisseur" placeholder="Fournisseur">
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Ajouter">
        </div>
      </form>
      <div class="link"><a href="graph.php">Retour</a></div>
    </section>
  </div>
</div>

  <script src="javascript/addcar.js"></script>

</body>
</html>