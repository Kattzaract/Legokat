<?php
// Setup File:
    #database connection:
    $dbc = mysqli_connect('localhost', 'Katlego_N', 'PASSWORD','legokat') OR die('could not connect because: ' . mysqli_connect_error());

    #constants:
    DEFINE('DIRECTORY_TEMPLATE','../template/');

    #functions:
    include('../functions/data.php');
    include('../functions/template.php');

    $page_title = 'Home';
    $site_title = 'Legokat';

    //ensures that the a page ID is set
    if(isset($_GET['page'])){
      $page_id = $_GET['page'];
    }else{
        $page_id = 1;/**/
    }

    #page setup:
    $page = data_page($dbc, $page_id);
?>