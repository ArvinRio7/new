<?PHP

SESSION_START();  


// My Info
$username = 'John';
$password = 'password';
// $name = 'John Denver Balagwis';


// Checking if the credentials are correct
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    // Username is not correct
    if ($_POST['username'] != $username) {
        header('Location: signin.php?notusername');
    }
    
    // Password is not correct
    elseif ($_POST['username'] == $username && $_POST['password'] != $password) {
        header('Location: signin.php?notpassword');
    }

    // Username and password match
    elseif ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['username'] = $username;

        header('Location: signin.php?success');
    }

}
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="style.css">

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

    <link href="style.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto p-3">
            <div>
                <h3 class="float-md-start mb-0">Lyrixmatch</h3>
            </div>
        </header>
        <div class="global-container">
            <div class="card login-form">
                <div class="card-body">
                    <h3 class="bg-white card-title text-dark text-center fw-bold">Sign in to Lyrixmatch</h3>
                    <div class="card-text">
                        <form method="POST">
                            <div class="form-group">
                                <?php 

                                    // Incorrect username
                                    if (isset($_GET['notusername'])) {
                                        echo "<div class='alert alert-danger' role='alert'> Username does not exist...</div>";
                                    }
                                    
                                    // Incorrect password
                                    elseif (isset($_GET['notpassword'])) {
                                        echo "<div class='alert alert-warning' role='alert'> Incorrect password...</div>";
                                    }
                                    
                                    // Unauthorized to see the welcome page
                                    elseif (isset($_GET['unauthorized'])) {
                                        echo "<div class='alert alert-danger' role='alert'>Unauthorized. Please login first.</div>";
                                    }
                                    
                                    // Redirect to welcome page
                                    elseif (isset($_GET['success'])) {
                                        echo "<div class='alert alert-success' role='alert'> Redirecting...</div>";
                                        header ("Refresh: 5; welcome.php ");
                                    }
                                    
                                    // Check if still logged in
                                    elseif (isset($_SESSION['username'])) {
                                        echo "<div class='alert alert-warning' role='alert'>You are still logged in. Please <a href='welcome.php'>click here </a> to proceed.</div>";
                                    }
                                    
                                    // Logged out
                                    elseif (isset($_GET['logout'])) {
                                        echo "<div class='alert alert-info' role='alert'> Thank You...</div>";
                                    }

                                ?>

                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter password">
                                <button type="submit" class=" btn btn-primary">Sign
                                    in</button>
                            </div>

                            <div class="sign-up text-dark">
                                Don't have an account? <a href="#">Sign up</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</html>