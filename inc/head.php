<<<<<<< HEAD
<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$_POST = filter_input_array(INPUT_POST, [
  'loginname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
])
;}

$loginname = $_POST['loginname'];

  {
    // Les identifiants sont transmis ?
    if(!empty($loginname)) 
      {
        // On ouvre la session
        session_start();
        // On enregistre le login en session
        $_SESSION['login'] = $loginname;
        // On redirige vers le fichier admin.php
        var_dump($_SESSION);
      }
    }

=======
<?php   
    session_start();

    if(isset($_POST['loginname'])){
        $_SESSION['loginname'] = $_POST['loginname'];
        header('Location: /');
    }
>>>>>>> a06a239ffedb234ed23d04938ccc5418f01ec0e6
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Cookie Factory</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/styles.css"/>
</head>
<body>
<header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">            
               <div class="logout-button">
                   <form action="../logout.php" method="post">
                   <button type="submit" class="btn btn-danger">deconnection</button>
                   </form>
               </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
                    <h1>The Cookies Factory</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Chocolates chips</a></li>
                    <li><a href="#">Nuts</a></li>
                    <li><a href="#">Gluten full</a></li>
                    <li>
                        <a href="/cart.php" class="btn btn-warning navbar-btn">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Cart
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid text-right">
<<<<<<< HEAD
        <strong> <p> hello</p> </strong>
=======
        <strong> <?php if(isset($_SESSION['loginname'])){
            echo 'hello' . ' ' . $_SESSION['loginname']
        ;} else {
            echo 'hello wilder';} ?> </strong>
>>>>>>> a06a239ffedb234ed23d04938ccc5418f01ec0e6
    </div>
</header>