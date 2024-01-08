<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">  <link rel="stylesheet" href="css/main.css">

</head>


<div class="container mt-4">


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Contact
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>Numele</th>
                            <th>Prenumele</th>
                            <th>Curs</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM contact_form ";
                            $query_run = mysqli_query($conn, $query);
                    
                            if(mysqli_num_rows($query_run) != 0)
                            {
                                foreach($query_run as $cerere)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $cerere['Id']; ?></td>
                                        <td><?= $cerere['Nume']; ?></td>
                                        <td><?= $cerere['Prenume']; ?></td>
                                        <td><?= $cerere['Telefon']; ?></td>
                                        <td><?= $cerere['Email']; ?></td>
                                        <td><?= $cerere['Mesaj']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> Nu sunt inscrieri </h5>";
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>




<div class="container mt-4">


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Ansamblu veselia
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>Numele</th>
                            <th>Prenumele</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM veselia_form ";
                            $query_run = mysqli_query($conn, $query);
                    
                            if(mysqli_num_rows($query_run) != 0)
                            {
                                foreach($query_run as $cerere)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $cerere['Id']; ?></td>
                                        <td><?= $cerere['Nume']; ?></td>
                                        <td><?= $cerere['Prenume']; ?></td>
                                        <td><?= $cerere['Email']; ?></td>
                                        <td><?= $cerere['Mesaj']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> Nu sunt inscrieri </h5>";
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>


<div class="container mt-4">


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Show Ballet Fortando
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>Numele</th>
                            <th>Prenumele</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM fortando_form ";
                            $query_run = mysqli_query($conn, $query);
                    
                            if(mysqli_num_rows($query_run) != 0)
                            {
                                foreach($query_run as $cerere)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $cerere['Id']; ?></td>
                                        <td><?= $cerere['Nume']; ?></td>
                                        <td><?= $cerere['Prenume']; ?></td>
                                        <td><?= $cerere['Email']; ?></td>
                                        <td><?= $cerere['Mesaj']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> Nu sunt inscrieri </h5>";
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>


<div class="container mt-4">


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>ArtVes
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>Numele</th>
                            <th>Prenumele</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM arte_form ";
                            $query_run = mysqli_query($conn, $query);
                    
                            if(mysqli_num_rows($query_run) != 0)
                            {
                                foreach($query_run as $cerere)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $cerere['Id']; ?></td>
                                        <td><?= $cerere['Nume']; ?></td>
                                        <td><?= $cerere['Prenume']; ?></td>
                                        <td><?= $cerere['Email']; ?></td>
                                        <td><?= $cerere['Mesaj']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> Nu sunt inscrieri </h5>";
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>



<div class="container mt-4">


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Muzică
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>Numele</th>
                            <th>Prenumele</th>
                            <th>Curs</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM muzica_form ";
                            $query_run = mysqli_query($conn, $query);
                    
                            if(mysqli_num_rows($query_run) != 0)
                            {
                                foreach($query_run as $cerere)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $cerere['Id']; ?></td>
                                        <td><?= $cerere['Nume']; ?></td>
                                        <td><?= $cerere['Prenume']; ?></td>
                                        <td><?= $cerere['curs']; ?></td>
                                        <td><?= $cerere['Email']; ?></td>
                                        <td><?= $cerere['Mesaj']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> Nu sunt inscrieri </h5>";
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>