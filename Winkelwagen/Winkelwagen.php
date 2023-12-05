<!DOCTYPE html>
<html lang="en">
<head>
    <!-- responsive code -->
    <title>Winkelwagen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Winkelwagen.css">
</head>

<body>
<h1><link rel="stylesheet" href="../header/header.css">
    <?php
    include"../header/header.php"
    ;?></h1>

    <div class="wrap cf">
        <h1 class="projTitle">Welkom<span> bij </span> uw winkelwagen</h1>
        <div class="heading cf">
            <h2>Inhoud van de winkelwagen:</h2>
            <a href="#" class="continue">Verder Winkelen</a>
        </div>

        <div class="cart">
            <ul class="cartWrap">
                <li class="items odd">

                    <div class="infoWrap">
                        <div class="cartSection">
                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>Item Name 1</h3>

                            <p> <input type="number"  class="qty" placeholder="3"> x $5.00</p>

                            <p class="stockStatus"> In Stock</p>
                        </div>


                        <div class="prodTotal cartSection">
                            <p>$15.00</p>
                        </div>
                        <div class="cartSection removeWrap">
                            <a href="#" class="remove">x</a>
                        </div>
                    </div>
                </li>
                <li class="items even">

                    <div class="infoWrap">
                        <div class="cartSection">

                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>Item Name 1</h3>

                            <p> <input type="number"  class="qty" placeholder="3"> x $5.00</p>

                            <p class="stockStatus"> In Stock</p>
                        </div>


                        <div class="prodTotal cartSection">
                            <p>$15.00</p>
                        </div>
                        <div class="cartSection removeWrap">
                            <a href="#" class="remove">x</a>
                        </div>
                    </div>
                </li>

                <li class="items odd">
                    <div class="infoWrap">
                        <div class="cartSection">

                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>Item Name 1</h3>

                            <p> <input type="number"  class="qty" placeholder="3"> x $5.00</p>

                            <p class="stockStatus out"> Out of Stock</p>
                        </div>


                        <div class="prodTotal cartSection">
                            <p>$15.00</p>
                        </div>
                        <div class="cartSection removeWrap">
                            <a href="#" class="remove">x</a>
                        </div>
                    </div>
                </li>
                <li class="items even">
                    <div class="infoWrap">
                        <div class="cartSection info">

                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>Item Name 1</h3>

                            <p> <input type="number"  class="qty" placeholder="3"> x $5.00</p>

                            <p class="stockStatus"> In Stock</p>

                        </div>


                        <div class="prodTotal cartSection">
                            <p>$15.00</p>
                        </div>

                        <div class="cartSection removeWrap">
                            <a href="#" class="remove">x</a>
                        </div>
                    </div>
                </li>


                <!--<li class="items even">Item 2</li>-->

            </ul>
        </div>

        <div class="subtotal cf">
            <ul>
                <li class="totalRow"><span class="label">Subtotal</span><span class="value">$35.00</span></li>
                <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
                <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
            </ul>
        </div>
    </div>

<script>
    $('.remove').click(function(){
        event.preventDefault();
        $( this ).parent().parent().parent().hide( 400 );

    })

    // Just for testing, show all items
    $('.btn.continue').click(function(){
        $('li.items').show(400);
    })
    </script>
</body>