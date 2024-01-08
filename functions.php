<?php



function createContact($conn,$nume_utilizator,$prenume_utilizator,$telefon_utilizator,$email_utilizator,$mesaj){

$sql = "INSERT INTO contact_form (Nume,Prenume,Telefon,Email,Mesaj) VALUES(?,?,?,?,?);";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
   header('location: ../contact_form.php?error=eroare');
   exit();
}
mysqli_stmt_bind_param($stmt,"sssss",$nume_utilizator,$prenume_utilizator,$telefon_utilizator,$email_utilizator,$mesaj);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header('location: index.html');
exit();
}



function createVeselia($conn,$nume_utilizator,$prenume_utilizator,$email_utilizator,$mesaj){

   $sql = "INSERT INTO veselia_form (Nume,Prenume,Email,Mesaj) VALUES(?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
      header('location: ../contact_form.php?error=eroare');
      exit();
   }
   mysqli_stmt_bind_param($stmt,"ssss",$nume_utilizator,$prenume_utilizator,$email_utilizator,$mesaj);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   
   header('location: charts.html');
   exit();
   
   }


   
function createFortando($conn,$nume_utilizator,$prenume_utilizator,$email_utilizator,$mesaj_utilizator){

   $sql = "INSERT INTO fortando_form (Nume,Prenume,Email,Mesaj) VALUES(?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
      header('location: ../contact_form.php?error=eroare');
      exit();
   }
   mysqli_stmt_bind_param($stmt,"ssss",$nume_utilizator,$prenume_utilizator,$email_utilizator,$mesaj_utilizator);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   
   header('location: fortando.html');
   exit();
   
   }


      
function createArte($conn,$nume_utilizator,$prenume_utilizator,$email_utilizator,$mesaj_utilizator){

   $sql = "INSERT INTO arte_form (Nume,Prenume,Email,Mesaj) VALUES(?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt,$sql)){
      header('location: ../contact_form.php?error=eroare');
      exit();
   }
   mysqli_stmt_bind_param($stmt,"ssss",$nume_utilizator,$prenume_utilizator,$email_utilizator,$mesaj_utilizator);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   
   header('location: arte.html');
   exit();
   
   }


   function createMuzica($conn,$nume_utilizator,$prenume_utilizator,$curs,$email_utilizator,$mesaj_utilizator){

      $sql = "INSERT INTO muzica_form (Nume,Prenume,curs,Email,Mesaj) VALUES(?,?,?,?,?);";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
         header('location: ../contact_form.php?error=eroare');
         exit();
      }
      mysqli_stmt_bind_param($stmt,"sssss",$nume_utilizator,$prenume_utilizator,$curs,$email_utilizator,$mesaj_utilizator);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      
      header('location: muzica.html');
      exit();
      
      }



?>