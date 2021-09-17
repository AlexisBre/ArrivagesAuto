<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="navbar">
    <section class="users">
      <header>
        <img id="container-logo" src="https://communication.autobonplan.com/abp-home/img/Logo_Autobonplan.png" alt="">
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Deconnexion</a>
          </div>
        </div>
        <span id="date">
          <?php setlocale(LC_TIME, 'fr_FR');
                date_default_timezone_set('Europe/Paris');
                echo utf8_encode(strftime('%A %d %B %Y'));
          ?>
        </span>
        <!-- <a href="addCar.php" class="addCar">Ajouter un arrivage</a> -->
        
      </header>
      
    </section>
  </div>
  <div id="dataToShow">
    <div class="graph">
    <canvas id="myChart"></canvas>
    </div>
    <div class="table">
      <?php if ($_SESSION['admin'] == 1){
        echo '<a href="addcar.php" class="logout">Ajouter une auto</a>';
      };
      ?>
    </div>
  </div>

  <script type="module" src="javascript/graph.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>
