<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: ../login.php");
      }

    include_once "config.php";
    
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    $date = utf8_encode(strftime('%Y-%m'));

    $sql = mysqli_query($conn, "SELECT admin FROM users WHERE {$_SESSION['unique_id']} = unique_id");
    
    switch (date('m')){
        case 9:$sql1 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW()) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data1 = array();
            foreach ($sql1 as $row) {
            $data1[] = $row;
            }
            $sql2 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 1 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data2 = array();
            foreach ($sql2 as $row) {
            $data2[] = $row;
            }
            $sql3 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 2 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data3 = array();
            foreach ($sql3 as $row) {
            $data3[] = $row;
            }
            $sql4 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 3 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data4 = array();
            foreach ($sql4 as $row) {
            $data4[] = $row;
            }
            $sql5 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 8 MONTH) AND YEAR(DateArrivee) = YEAR(NOW() + INTERVAL 1 YEAR)");
            $data5 = array();
            foreach ($sql5 as $row) {
            $data5[] = $row;
            }
            print json_encode([$data1,$data2,$data3,$data4,$data5,$sql]);
        break;
        case 10:$sql1 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW()) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data1 = array();
            foreach ($sql1 as $row) {
            $data1[] = $row;
            }
            $sql2 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 1 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data2 = array();
            foreach ($sql2 as $row) {
            $data2[] = $row;
            }
            $sql3 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 2 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data3 = array();
            foreach ($sql3 as $row) {
            $data3[] = $row;
            }
            $sql4 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 9 MONTH) AND YEAR(DateArrivee) = YEAR(NOW()+ INTERVAL 1 YEAR)");
            $data4 = array();
            foreach ($sql4 as $row) {
            $data4[] = $row;
            }
            $sql5 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 8 MONTH) AND YEAR(DateArrivee) = YEAR(NOW() + INTERVAL 1 YEAR)");
            $data5 = array();
            foreach ($sql5 as $row) {
            $data5[] = $row;
            }
            print json_encode([$data1,$data2,$data3,$data4,$data5,$sql]);
        break;
        case 11:$sql1 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW()) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data1 = array();
            foreach ($sql1 as $row) {
            $data1[] = $row;
            }
            $sql2 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 1 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data2 = array();
            foreach ($sql2 as $row) {
            $data2[] = $row;
            }
            $sql3 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 10 MONTH) AND YEAR(DateArrivee) = YEAR(NOW()+ INTERVAL 1 YEAR)");
            $data3 = array();
            foreach ($sql3 as $row) {
            $data3[] = $row;
            }
            $sql4 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 9 MONTH) AND YEAR(DateArrivee) = YEAR(NOW()+ INTERVAL 1 YEAR)");
            $data4 = array();
            foreach ($sql4 as $row) {
            $data4[] = $row;
            }
            $sql5 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 8 MONTH) AND YEAR(DateArrivee) = YEAR(NOW() + INTERVAL 1 YEAR)");
            $data5 = array();
            foreach ($sql5 as $row) {
            $data5[] = $row;
            }
            print json_encode([$data1,$data2,$data3,$data4,$data5,$sql]);
        break;
        case 12: $sql1 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW()) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data1 = array();
            foreach ($sql1 as $row) {
            $data1[] = $row;
            }
            $sql2 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 11 MONTH) AND YEAR(DateArrivee) = YEAR(NOW()+ INTERVAL 1 YEAR)");
            $data2 = array();
            foreach ($sql2 as $row) {
            $data2[] = $row;
            }
            $sql3 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 10 MONTH) AND YEAR(DateArrivee) = YEAR(NOW()+ INTERVAL 1 YEAR)");
            $data3 = array();
            foreach ($sql3 as $row) {
            $data3[] = $row;
            }
            $sql4 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 9 MONTH) AND YEAR(DateArrivee) = YEAR(NOW()+ INTERVAL 1 YEAR)");
            $data4 = array();
            foreach ($sql4 as $row) {
            $data4[] = $row;
            }
            $sql5 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() - INTERVAL 8 MONTH) AND YEAR(DateArrivee) = YEAR(NOW() + INTERVAL 1 YEAR)");
            $data5 = array();
            foreach ($sql5 as $row) {
            $data5[] = $row;
            }
            print json_encode([$data1,$data2,$data3,$data4,$data5,$sql]);
        break;
        default:$sql1 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW()) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data1 = array();
            foreach ($sql1 as $row) {
            $data1[] = $row;
            }
            $sql2 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 1 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data2 = array();
            foreach ($sql2 as $row) {
            $data2[] = $row;
            }
            $sql3 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 2 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data3 = array();
            foreach ($sql3 as $row) {
            $data3[] = $row;
            }
            $sql4 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 3 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data4 = array();
            foreach ($sql4 as $row) {
            $data4[] = $row;
            }
            $sql5 = mysqli_query($conn, "SELECT * FROM arrivage WHERE MONTH(DateArrivee) = MONTH(NOW() + INTERVAL 4 MONTH) AND YEAR(DateArrivee) = YEAR(NOW())");
            $data5 = array();
            foreach ($sql5 as $row) {
            $data5[] = $row;
            }
            print json_encode([$data1,$data2,$data3,$data4,$data5,$sql]);
        break;
    };
?>