<?php 

if(isset($_POST['submit-fortando'])){

    require_once 'db_connect.php';
    require_once 'functions.php';


$nume_utilizator = $_POST["nume"];
$prenume_utilizator = $_POST["prenume"];
$email_utilizator = $_POST["email"];
$mesaj_utilizator = $_POST["mesaj"];



createFortando($conn,$nume_utilizator,$prenume_utilizator,$email_utilizator,$mesaj_utilizator);
}
else{
    header('location: fortando.html');
    exit();
}

?>
