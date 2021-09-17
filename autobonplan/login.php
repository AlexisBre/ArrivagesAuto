<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: graph.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="box">
  <div class="wrapper">
    <section class="form login">
      <header>Arrivages</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Entrez votre email" required>
        </div>
        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Connection">
        </div>
      </form>
      <div class="link">Pas encore de compte? <a href="index.php">S'enregistrer</a></div>
    </section>
  </div>
</div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
