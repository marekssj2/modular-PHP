<?php
    include 'accounts/login.php';
?>

<h1 clas="display-3">Login</h1>
<p class="lead"> 
    Login your account. Don't waste your time!
</p>
<hr class="my-4">
<div class="row justify-content-center">
    <form class="col-md-8"action="" method="POST">

    <!-- LOGIN -->
    <div class="form-group ">
        <label for="login">Login</label>
        <input type="text" class="form-control" name="login" id="login" placeholder="Enter Login">
    </div>

    <!-- PASSWORD -->
    <div class="form-group ">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
    </div>
    <?php
        if(isset($_SESSION['erro-login'])){
            echo'
                <p><small class="form-text text-danger font-weight-bold">
                '.$_SESSION['erro-login'].'
                </small></p>
                ';
        }
        ?>

    <button type="submit" class="btn btn-primary" name='login-btn'>Log in</button>

    </form>
</div>


<h1><?php login()?></h1>