<?php

//case 1: user did not enter data to form => load form
if (!isset($_POST['staffname'])) {
   ob_start();
   include 'add_staff.html.php';
   $output = ob_get_clean();
   include 'layout.html.php';
}
//case 2: user already entered data to form => process form
else {
   try {
      include 'database_connection.php';

      $sql = 'INSERT INTO staff 
               (staffname, staffdate)
               VALUES (:staffname, :staffdate, :companyid)';


      $stm = $pdo->prepare($sql);
      $stm->bindValue(':staffname', $_POST['staffname']);
      $stm->bindValue(':staffdate', $_POST['staffdate']);
      $stm->bindValue(':companyid', $_POST['companyid']);
      $stm->execute();

      header('location: staffs.php');
   } catch (PDOException $ex) {
      echo 'Error: ' . $ex;
   }
}