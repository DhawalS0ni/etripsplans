            <div class="row text-center">
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0 ">
                    <div class="thumbnail">
                    <img src="img/banner/bhutan.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Bhutan</h3>
                        <p>3N 4D/1N-Thimpu 1N-Punakha 1N-Paro(Flight, Hotel, Transfer, Visa)</p>
                        <h4>Price:Rs.12,380 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(1)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="trip-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="1">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0 ">
                    <div class="thumbnail">
                    <img src="img/banner/europe.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Europe</h3>
                        <p>6N 7D/3N France 3N Switzerland (Flight, Hotel, Transfer, Visa)</p>
                        <h4>Price:Rs.1,24,990 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(2)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="trip-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="2">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0 ">
                    <div class="thumbnail">
                    <img src="img/banner/bali.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Bali</h3>
                        <p>5N 6D/5N Bali,Indonesia (Flight, Hotel, Transfer, Visa)</p>
                        <h4>Price:Rs.32,044 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(3)) {?>
                  <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="trip-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="3">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0 ">
                    <div class="thumbnail">
                    <img src="img/banner/kerela.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Kerela</h3>
                        <p>4N 2D/2N Munnar 1D Thekkady 1N Allepay (Flight, Hotel, Transfer, Visa)</p>
                        <h4>Price:Rs.21,000 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(4)) {?>
                       <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="trip-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="4">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0 ">
                    <div class="thumbnail">
                    <img src="img/banner/dubai.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Dubai</h3>
                        <p>4N 5D/4N Dubai (Flight, Hotel, Transfer, Visa)</p>
                        <h4>Price:Rs.55,580 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(5)) {?>
                     <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="trip-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="5">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0 ">
                    <div class="thumbnail">
                    <img src="img/banner/moraine.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Moriane Lake</h3>
                        <p>3N 4D/3N Moriane Resort (Flight, Hotel, Transfer, Visa)</p>
                        <h4>Price:Rs.25,000 per person</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart_trip(6)) {?>
                       <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="trip-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="6">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
            </div>