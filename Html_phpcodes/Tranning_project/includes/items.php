            <div class="row text-center" >
                <div class=" col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/case.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Passport Case</h3>
                        <p>Eccolo Marble Style,6.4 x 4</p>
                        <h4>Price:Rs.1000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(1)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="1">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class=" col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/multitool.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Leatherman Multitool</h3>
                        <p>Wire Cutters,Spring-Action Scissors</p>
                        <h4>Price:Rs.2599.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(2)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="2">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class=" col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/luggage.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Samsonite Luggage</h3>
                        <p>Black Expandable Spinner wheels 28'</p>
                        <h4>Price:Rs.9000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(3)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="3">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class=" col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/grill.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Barbecue Char Grill</h3>
                        <p>Kit inluced, Foldable</p>
                        <h4>Price:Rs.2000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(4)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="4">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class=" col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/bag.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Osprey Travel Bag</h3>
                        <P>Water Proof,Foam Straps,Back Support</P>
                        <h4>Price:Rs.13000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(5)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="5">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/headphone.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Sony Headset</h3>
                        <p>Bluetooth,Noise Cancelling,Mic,10HR Battery</p>
                        <h4>Price:Rs.8000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(6)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="6">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class=" col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/items/speaker.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Sony MINI Speaker</h3>
                        <p>Bluetooth,loud Clear Audio,Extra Bass</p>
                        <h4>Price:Rs.5000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(7)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="7">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 ">
                    <div class="thumbnail">
                        <img src="img/items/pillow.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Cabeau Neck Pillow</h3>                    
                        <p>Evolution Style ,Memory Foam,U-Shaped</p>
                        <h4>Price:Rs.999.00</h4>
                        <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php }else{ if(check_if_added_to_cart(8)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                        <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="8">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                        <?php } } ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class=" col-xs-6 col-md-3 ">
                    <div class="thumbnail">
                        <img src="img/items/bottle.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Lifedrop bottle</h3>
                        <p>stage intigrated filter,travel Strap</p>
                        <h4>Price:Rs.1200.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(9)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled ">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="9">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class=" col-xs-6 col-md-3 ">
                    <div class="thumbnail">
                        <img src="img/items/cam.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Anker Power Bank</h3>
                        <p>12000 watt ,2 ports + LED</p>
                        <h4>Price:Rs.4000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(10)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="10">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class=" col-xs-6 col-md-3 ">
                    <div class="thumbnail">
                        <img src="img/items/sony.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Professional Camera+Stand+lens</p>
                        <h4>Price:Rs.40000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(11)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group" value="1">
                        <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="11">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
                <div class=" col-xs-6 col-md-3 ">
                    <div class="thumbnail">
                        <img src="img/items/fasttrack.jpg" alt="Not Found">
                    <div class="caption">
                        <h3>Fastrack  Watch</h3>
                        <p>3 dials+Date</p>
                        <h4>Price:Rs.12000.00</h4>
                    <?php if(!isset($_SESSION['email'])){?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php }else{ if(check_if_added_to_cart(12)) {?>
                        <input type="number" min="1" name="num" class="form-control form-group " value="1">
                        <a href="#" class="btn btn-block btn-success disabled" >Added to cart</a>
                    <?php } else {?>
                        <form method="get" action="cart-add.php">
                            <input type="number" min="1" name="num" class="form-control form-group" value="1">
                            <input type="hidden" name="id" value="12">
                            <button type="submit" class="btn btn-block btn-primary">Add to cart</button>
                        </form>
                    <?php } } ?>
                    </div>
                    </div>
                </div>
            </div>