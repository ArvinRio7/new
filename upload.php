<?php

include "addingpage.php"

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Uploading Lyrics</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body>
<div class="container">
    <h1 class="page-header text-center"> Upload Lyrics </h1>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Song</a>
        <a href="home.php#blog" class="btn btn-light" target="_blank"> View Website</a>   

            <?php 

            session_start();
            if (isset($_SESSION['message'])) {

            ?>

            <div class="alert alert-info text-center" style="margin-top: 20px; width: 100%; ">
                <?php echo $_SESSION['message'] ?>
                </div>

            <?php 
                unset($_SESSION['message']);
            }

            ?>


            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Song No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Song By</th>
                    <th scope="col">Date Uploaded</th>
                    <th scope="col">Lyrics</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>

                    <?php
                    $file = simplexml_load_file('files/addsong.xml');

                    foreach($file->Lyric as $rows) {               
                    ?> 

                        <tr>    
                            <td> <?php echo $rows->Song; ?> </td>
                            <td> <?php echo $rows->Title; ?> </td>
                            <td> <?php echo $rows->SongBy; ?> </td>
                            <td> <?php echo $rows->Date; ?> </td>
                            <td> <?php echo mb_strimwidth($rows->Lyrics, 0, 30, "..."); ?> </td>
                            <td>
                                <a href="#edit_<?php echo $rows->Song; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="#delete_<?php echo $rows->Song; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        <?php include "edit_delete_modal.php"; ?>
                        </tr>
                    <?php
                    }
                    
                    ?>    

                </tbody>

                <tfoot>
                    <th scope="col">Song No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Song By</th>
                    <th scope="col">Date Uploaded</th>
                    <th scope="col">Lyrics</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>
        

    </div>
    </div>
</div>


<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>