<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
    <li data-target="#carousel" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
        <div class="item active">
            <img src="img/banner/bhutan.jpg" alt="Bhutan">
            <div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;">
            <h3>Bhutan</h3>
                        <p>3N 4D/1N-Thimpu 1N-Punakha 1N-Paro(Flight,Hotel,Transfer,Visa)</p>
                        <h4>Price:Rs.12,380 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(1)) {?>
                        <a href="#" class="btn btn-success disabled">Added to cart</a>
                    <?php } else {?><center>
                        <form method="get" action="trip-add.php" style="width: 150px;">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="1">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form></center>
                    <?php } } ?>
        </div>
        </div>
      <div class="item">
          <img src="img/banner/europe.jpg" alt="Europe">
      <div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;">
        <h3>Europe</h3>
                        <p>6N 7D/3N France 3N Switzerland(Flight,Hotel,Transfer,Visa)</p>
                        <h4>Price:Rs.1,24,990 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(2)) {?>
                       <a href="#" class="btn btn-success disabled">Added to cart</a>
                    <?php } else {?><center>
                        <form method="get" action="trip-add.php" style="width: 150px;">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="2">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form></center>
                    <?php } } ?>
      </div>
    </div><div class="item">
        <img src="img/banner/bali.jpg" alt="Bali"> 
      <div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;">
        <h3>Bali</h3>
                        <p>5N 6D/5N Bali(Flight,Hotel,Transfer,Visa)</p>
                        <h4>Price:Rs.32,044 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary ">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(3)) {?>
                       <a href="#" class="btn btn-success disabled">Added to cart</a>
                    <?php } else {?><center>
                        <form method="get" action="trip-add.php" style="width: 150px;">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="3">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form></center>
                    <?php } } ?>
      </div>
    </div><div class="item">
        <img src="img/banner/kerela.jpg" alt="Kerela">
      <div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;">
       <h3>Kerela</h3>
                        <p>4N 2D/2N Munnar 1D Thekkady 1N Allepay(Flight,Hotel,Transfer,Visa)</p>
                        <h4>Price:Rs.21,000 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(4)) {?>
                        <a href="#" class="btn btn-success disabled">Added to cart</a>
                    <?php } else {?><center>
                        <form method="get" action="trip-add.php" style="width: 150px;">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="4">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form></center>
                    <?php } } ?>
      </div>
    </div><div class="item">
        <img src="img/banner/dubai.jpg" alt="Dubai"> 
      <div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;">
        <h3>Dubai</h3>
                        <p>4N 5D/4N Dubai(Flight,Hotel,Transfer,Visa)</p>
                        <h4>Price:Rs.55,580 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(5)) {?>
                        <a href="#" class="btn btn-success disabled">Added to cart</a>
                    <?php } else {?><center>
                        <form method="get" action="trip-add.php" style="width: 150px;">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="5">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form></center>
                    <?php } } ?>
      </div>
    </div><div class="item">
        <img src="img/banner/moraine.jpg" alt="Moraine">
      <div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;" >
       <h3>Moriane Lake</h3>
                        <p>3N 4D/3N Moriane Resort(Flight,Hotel,Transfer,Visa)</p>
                        <h4>Price:Rs.25,000 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(6)) {?>
                        <a href="#" class="btn btn-success disabled">Added to cart</a>
                    <?php } else {?><center>
                        <form method="get" action="trip-add.php" style="width: 150px;">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="6">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form></center>
                    <?php } } ?>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="icon-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="icon-right"></span>
  </a>
</div>
