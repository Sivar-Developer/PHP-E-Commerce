<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">

    <!-- JS Plugins -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">E-Commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mens
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Shirts</a>
                <a class="dropdown-item" href="#">Pants</a>
                <a class="dropdown-item" href="#">Shoes</a>
                <a class="dropdown-item" href="#">Accessories</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <!-- Header -->
    <div id="headerWrapper">
        <div id="back-flower"></div>
        <div id="logotext"></div>
        <div id="fore-flower"></div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-2">Left Sidebar</div>

            <!-- Main Content -->
            <div class="col-md-8">
                    <div class="text-center">Feature Products</div>
                <div class="row">
                    <div class="col-md-3">
                        <h4>Levis Jeans</h4>
                        <img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb">
                        <p class="list-price text-danger">List Price <s>$55.99</s></p>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Jeans</h4>
                        <img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb">
                        <p class="list-price text-danger">List Price <s>$55.99</s></p>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Jeans</h4>
                        <img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb">
                        <p class="list-price text-danger">List Price <s>$55.99</s></p>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Jeans</h4>
                        <img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb">
                        <p class="list-price text-danger">List Price <s>$55.99</s></p>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>

                    <div class="col-md-3">
                        <h4>Levis Jeans</h4>
                        <img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb">
                        <p class="list-price text-danger">List Price <s>$55.99</s></p>
                        <p class="price">Our Price: $19.99</p>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-md-2">Right Sidebar</div>
        </div>

        <footer class="text-center" id="footer">&copy; Copyright 2018 E-Commerce</footer>

        <!-- Details Modal -->
        <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Levis Jeans</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="center-block">
                                        <img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Details</h4>
                                    <p>These jeans are amazing! They are straight leg, fit great and look sexy, Get a pair while they last</p>
                                    <hr>
                                    <p>Price: $34.99</p>
                                    <p>Brand: Levis</p>
                                    <form action="add_cart.php" method="post">
                                        <div class="form-group">
                                            <div class="col-xs-3">
                                                <label for="quantity">Quantity:</label>
                                                <input type="text" class="form-control" id="quantity" name="quantity">
                                            </div>
                                            <div class="col-xs-9"></div>
                                            <p>Available: 3</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="size">Size:</label>
                                            <select name="size" id="size" class="form-control">
                                                <option value=""></option>
                                                <option value="28">28</option>
                                                <option value="32">32</option>
                                                <option value="36">36</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        jQuery(window).scroll(function() {
            var vscroll = jQuery(this).scrollTop();
            jQuery('#logotext').css({
                "transform": "translate(0px, " + vscroll/2 + "px)"
            });

            var vscroll = jQuery(this).scrollTop();
            jQuery('#back-flower').css({
                "transform": "translate(" + vscroll/5 + "px, -" + vscroll/12 + "px)"
            });

            var vscroll = jQuery(this).scrollTop();
            jQuery('#fore-flower').css({
                "transform": "translate(0px, -" + vscroll/2 + "px)"
            });
        });
    </script>
</body>
</html>