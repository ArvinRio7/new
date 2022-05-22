<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Full XML and PHP Lesson</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body>
<div class="container">
    <h1 class="page-header text-center"> Coffee Blog Management</h1>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Blog</a>
        <a href="coffee-blog/index.php#blog" class="btn btn-light" target="_blank"> View Website</a>   


            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Song No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Song By</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Lyrics</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                        <tr>
                            <td>1001</td>
                            <td>Demons</td>
                            <td>Imagine Dragons</td>
                            <td>April 28, 2022</td>
                            <td>
                                <?php
                                    echo "When the days are cold <br>";
                                    echo "And the cards all fold <br>";
                                    echo "And the saints we see <br><br>";                    
                                    echo "Are all made of gold <br>";
                                    echo "When your dreams all fail<br>";                    
                                    echo "And the ones we hail <br>";
                                    echo "Are the worst of all <br>";
                                    echo "And the blood's run stale <br><br>";
                    
                                    echo "When you feel my heat <br>";
                                    echo "Look into my eyes <br>";
                                    echo "It's where my demons hide <br>";
                                    echo "It's where my demons hide <br>";                  
                                    echo "Don't get too close <br>";
                                    echo "It's dark inside<br>";
                                    echo "It's where my demons hide <br>";
                                    echo "It's where my demons hide <br><br>"; 
                    
                                    echo "At the curtain's call <br>";
                                    echo "It's the last of all <br>";
                                    echo "When the lights fade out <br>";
                                    echo "All the sinners crawl <br>";
                                    echo "So they dug your grave <br>";
                                    echo "And the masquerade <br>";
                                    echo "Will come calling out <br>";
                                    echo "At the mess you've made <br><br>";
                    
                                    echo "Don't wanna let you down <br>";
                                    echo "But I am hell-bound <br>";
                                    echo "Though this is all for you <br>";
                                    echo "Don't wanna hide the truth <br>";
                                    echo "No matter what we breed <br>";
                                    echo "We still are made of greed <br>";
                                    echo "This is my kingdom come <br>";
                                    echo "This is my kingdom come <br><br>";

                                    echo "When you feel my heat <br>";
                                    echo "Look into my eyes <br>";
                                    echo "It's where my demons hide <br>";
                                    echo "It's where my demons hide <br>";                  
                                    echo "Don't get too close <br>";
                                    echo "It's dark inside<br>";
                                    echo "It's where my demons hide <br>";
                                    echo "It's where my demons hide <br><br>"; 
                    
                                    echo "They say it's what you make <br>";
                                    echo "I say it's up to fate <br>";
                                    echo "It's woven in my soul <br>";
                                    echo "I need to let you go <br>";
                                    echo "Your eyes, they shine so bright <br>";
                                    echo "I wanna save that light <br>";
                                    echo "I can't escape this now <br>";
                                    echo "Unless you show me how <br><br>";

                                   echo "When you feel my heat <br>";
                                    echo "Look into my eyes <br>";
                                    echo "It's where my demons hide <br>";
                                    echo "It's where my demons hide <br>";                  
                                    echo "Don't get too close <br>";
                                    echo "It's dark inside<br>";
                                    echo "It's where my demons hide <br>";
                                    echo "It's where my demons hide <br><br>";
                                        
                                ?>
                            </td>
                            <td>
                                <a href="#edit_" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="#delete_" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                        </tr>
                        

                </tbody>
                <tfoot>
                    <th scope="col">Song No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Song By</th>
                    <th scope="col">Date Uploaded</th>
                    <th scope="col">Lyrics</th>                       
                </tfoot>
            </table>
        

    </div>
    </div>
</div>


<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>