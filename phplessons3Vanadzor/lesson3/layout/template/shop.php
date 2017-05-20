<?php
$products = [
    ["First Product",24.99],
    ["Second Product",64],
    ["Third Product",64],
    ["Fourth Product",74.25],
    ["Fifth Product",12.10],
];
?>


                <div class="row">
                    <?php 
                        foreach ($products as $prod) {
                            include("template/one-product.php");
                        }

                    ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>