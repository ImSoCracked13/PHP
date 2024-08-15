<?php

//case 1: user did not enter data to form => load form
if (!isset($_POST['companyname'])) {
   ob_start();
   include 'add_company.html.php';
   $output = ob_get_clean();
   include 'layout.html.php';
}
//case 2: user already entered data to form => process form
else {
   try {
      include 'includes/database_connection.php';

      $sql = 'INSERT INTO company 
               (companyname, companyaddress)
               VALUES (:companyname, :companyaddress)';

      $stm = $pdo->prepare($sql);
      $stm->bindValue(':companyname', $_POST['companyname']);
      $stm->bindValue(':companyaddress', $_POST['companyaddress']);
      $stm->execute();

      header('location: companies.php');
   } catch (PDOException $ex) {
      echo 'Error: ' . $ex;
   }
}
