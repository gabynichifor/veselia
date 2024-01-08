<?php 

if(isset($_POST['submit-cerere'])){

    require_once 'db_connect.php';
    require_once 'functions.php';


$nume_utilizator = $_POST["message-nume"];
$prenume_utilizator = $_POST["message-prenume"];
$telefon_utilizator = $_POST["message-telefon"];
$email_utilizator = $_POST["message-email"];
$mesaj = $_POST["message-mesaj"];





createContact($conn,$nume_utilizator,$prenume_utilizator,$telefon_utilizator,$email_utilizator,$mesaj);
}
else{
    header('location: index.html');
    exit();
}

?>


