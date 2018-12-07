<?php session_start();
//    print_r($_GET);
    $x=$_GET['fn'];

//echo $_POST['fn'];


//session vars
    $_SESSION['fn'] = $_GET['fn'];
    $_SESSION['gd'] = $_GET['gd'];

//echo $_SESSION['fn'];
//echo '<br>';
//echo $_SESSION['gd'];

//email

    $t="artbyeloi@gmail.com";

    $s="new form date from :". $_GET['fn'];

    $m= "Someone Just Emailed You";

    $h = 'From: jgarcia@gmail.com \r\n Reply-To: jgarcia@gmail.com \r\n X-Mailer: PHP/'.phpversion();

    mail($t, $s, $m, $h);

$d = json_encode($_GET);

file_put_contents('data.json', $d);


header('location:contact.php');


?>