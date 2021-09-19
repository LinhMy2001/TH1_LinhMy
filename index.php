<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinhMy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="menu">
            <div class="menu-left">
                <a href="">
                    <img src="image/logo.png" alt="">
                </a>
            </div>
            <div class = "menu-right">
                <ul>
                    <li><a class= "menu-home"href="index.php">Home</a></li>
                    <li><a class= "menu-home"href="categories.php">Categories</a></li>
                    <li><a class= "menu-home"href="food.php">Food</a></li>
                    <li><a class= "menu-home"href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class= "search-box" style="height: 200px;">
            <input class="search-txt" type="text" style="width:400px" placeholder="Search for foods">
            <button class="btn btn-outline" type="submit" style="background-color:pink; color: white;">Search</button>
        </div>

        <div class="ex-food">
            <h2 class= "ex-foodcenter">
                Explore Foods
            </h2>
            <div class="menu-ex-food">
                <a href="">
                    <img class="img-food" src="image/pizza.jpg" alt="">
                </a>
                <div class="text-1">Pizza</div>
            </div>

            <div class="menu-ex-food">
                <a href="">
                    <img class="img-food" src="image/momo.jpg" alt="">
                </a>
                <div class="text-2">MoMo</div>
            </div>

            <div class="menu-ex-food">
                <a href="">
                    <img class="img-food" src="image/burger.jpg" alt="">
                </a>
                <div class="text-3">Burger</div>
            </div>

            <div>
                <div class="menu-food">
                    <h2 class="menu-foodcenter">Food Menu</h2>
                    <div class="menu-food-1 pizza" style="width: 500px; height: 130px; background-color: white;">
                         <a href=""><img src="image/menu-pizza.jpg" width="120px" height="120px" alt=""></a>
                         <p class=p-1>
                         <b>Food Title<br>$2.3<br></b>
                        Made with Italian Sauce, chicken and organice vegetables
                         </p>
                         <a href="order.php"><button class="button-order" type="submit" style="background-color:pink; color: white;">Order now</button></a>
                    </div>

                    <div class="menu-food-1" style="width: 500px; height: 130px; background-color: white;">
                         <a href=""><img src="image/menu-burger.jpg" width="120px" height="120px" alt=""></a>
                         <p class=p-1>
                            <b>Smoky Burger<br>$2.3<br></b>
                            Made with Italian Sauce, chicken and organice vegetables
                         </p>
                         <a href="order.php"><button class="button-order" type="submit" style="background-color:pink; color: white;">Order now</button></a>
                         
                    </div>

                    <div class="menu-food">
                    <div class="menu-food-1" style="width: 500px; height: 130px; background-color: white;">
                         <a href=""><img src="image/menu-pizza.jpg" width="120px" height="120px" alt=""></a>
                         <p class=p-1>
                         <b>Food Title<br>$2.3<br></b>
                        Made with Italian Sauce, chicken and organice vegetables
                         </p>
                         <a href="order.php"><button class="button-order" type="submit" style="background-color:pink; color: white;">Order now</button></a>
                    </div>

                    <div class="menu-food-1" style="width: 500px; height: 130px; background-color: white;">
                         <a href=""><img src="image/menu-burger.jpg" width="120px" height="120px" alt=""></a>
                         <p class=p-1>
                            <b>Smoky Burger<br>$2.3<br></b>
                            Made with Italian Sauce, chicken and organice vegetables
                         </p>
                         <a href="order.php"><button class="button-order" type="submit" style="background-color:pink; color: white;">Order now</button></a>
                         
                    </div>


                </div>
            </div>


        </div>
    </main>
    
</body>
</html>