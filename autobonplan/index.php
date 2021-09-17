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
    <section class="form signup">
      <header>Arrivages</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Prenom</label>
            <input type="text" name="fname" placeholder="Prenom" required>
          </div>
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="lname" placeholder="Nom" required>
          </div>
        </div>
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
          <input type="submit" name="submit" value="Inscription">
        </div>
      </form>
      <div class="link">Déjà un compte? <a href="login.php">Se connecter</a></div>
    </section>
  </div>
</div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
