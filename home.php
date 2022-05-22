<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto p-3">
            <div>
                <h3 class="float-md-start mb-0">Song Lyrics App</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link fw-bold py-1 px-0" href="lyrics.php">Top Lyrics</a>
                    <a class="nav-link fw-bold py-1 px-0" href="upload.php">Upload Lyrics</a>
                    <a href="?logout" class="nav-link fw-bold py-1 px-0">Sign out</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Enhancing the experience of music worldwide.</h1><br>
            <p class="lead">Making music better, together</p>
            <p class="lead">
                <a href="#" class="btn btn-md btn-secondary fw-bold border-white bg-white">Get in Touch</a>
            </p>
        </main>


            <!-- Start blog Area -->
            <section class="blog-area section-gap" id="blog">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-10">
                            <div class="title text-center">
                                <h1 class="mb-10">Look and See Lyrics</h1>
                                <p>Music is the soul of language</p>
                            </div>
                        </div>
                    </div>                      
                    
                        <div class="row">
                    
                        <?php
                            $addlyrics = simplexml_load_file('files/addsong.xml');
                            foreach ($addlyrics->Lyric as $rows){
                        ?>

                        <div class="col-lg-6 col-sm-6 single-blog">
                            <a href="viewsong.php?Song=<?php echo $rows->Song; ?>"><h4> <?php echo $rows->Title; ?> </h4></a>
                            <p>
                                 <?php echo mb_strimwidth($rows->Lyrics, 0, 60, "read more..."); ?> 
                            </p>
                            <p class="post-date">
                                <?php echo $rows->SongBy." - ".$rows->Date; ?>
                            </p>
                        </div>
                        <?php
                        }
                        ?>
                    
                    </div>
                </div>  
            </section>
            <!-- End blog Area -->





        <footer class="mt-auto text-white">
            <p>Created by Group 4</p>
        </footer>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>