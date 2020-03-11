<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.0/examples/pricing/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Task Manager</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <script src="https://kit.fontawesome.com/d0891b8210.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <!-- Custom styles for this template -->
   <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
   
   
    <link rel="stylesheet" type="text/css" href="chrome-extension://fajafkhgbcekjfffgnpbbjhdhimgffec/styles.css">
</head>

<body>
    <div class="mallbery-ext-install" style="z-index: 2147483647 !important; text-transform: none !important;"></div>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal"> Task Manager</h5>
        <?php if(!SessionHelper::isGuest()):?>
        <h2 style="margin-right:20em;">You Logged with Admin Account Enjoy it!</h2>
         <?php endif;?>
         <?php if(SessionHelper::isGuest()):?>
        <h2 style="margin-right:23em;">You is Guest Account Enjoy it!</h2>
         <?php endif;?>
        <nav class="my-2 my-md-0 mr-md-3">
        <a href="/" class="btn btn-success" role="button">Home</a>
        <a href="/home/task/create" class="btn btn-warning" role="button">Create New Task</a>
         </nav>
         <?php if(SessionHelper::isGuest()):?>
        <a class="btn btn-outline-primary" href="/auth/login">Login</a>
         <?php endif;?>
         <?php if(!SessionHelper::isGuest()):?>
        <a class="btn btn-outline-dark" href="/auth/logout">Logout</a>
         <?php endif;?>
    </div>


 