<?php
include_once("function/helper.php");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>weshop | Barang - barang elektronik</title>
    </head>

    <body>
        <div id="container">
            <div id="header">
                <a href="<?php echo BASE_URL."index.php";?>">
                    <img src="<?php echo BASE_URL."images/logo.png";?>" alt="Foto logo"/> 
                </a>

                <div id="menu">

                    <div id="user">

                        <a href="<?php echo BASE_URL." index.php?page=login "; ?>">Login</a>
                        <a href="<?php echo BASE_URL." index.php?page=register "; ?>">Register</a>
                    </div>

                    <a href="<?php echo BASE_URL." index.php?page=keranjang "; ?>">
                        <img src="<?php echo BASE_URL."images/cart.png";?>" alt="Foto keranjang"/>
                    </a>
                </div>

            </div>

            <div id="content"></div>
            <div id="footer">
                <p>Copyright 2020</p>
            </div>

        </div>
    </body>

    </html>