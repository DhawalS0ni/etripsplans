<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <?php if(isset($_SESSION['email'])){?>
            <a href="dashboard.php" class="navbar-brand">Your Travel Assistant</a>
            <?php }else{ ?>
            <a href="index.php" class="navbar-brand">Travel Assistant</a>
            <?php }?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NAVLINKS">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class=" collapse navbar-collapse" id="NAVLINKS">
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['email'])){?>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                <?php }else{?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>