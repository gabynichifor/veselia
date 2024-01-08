<?php 

if(isset($_POST['submit-veselia'])){

    require_once 'db_connect.php';
    require_once 'functions.php';


$nume_utilizator = $_POST["nume"];
$prenume_utilizator = $_POST["prenume"];
$email_utilizator = $_POST["email"];
$mesaj = $_POST["mesaj"];



createVeselia($conn,$nume_utilizator,$prenume_utilizator,$email_utilizator,$mesaj);
}
else{
    header('location: charts.html');
    exit();
}

?>


