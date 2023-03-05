<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    </script>
    <script src="./topbtn.js"></script>
</head>

<body>
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    ?>
    <nav>
        <label><a class="home" href="./index.html"><img src="./img/logo.jpg" style="width: 120px; height: 60px;" alt=""></a></label>
        <ul>
            <li>
                <a class="active" href="./login.html">Login</a>
                <a class="active" href="./profile.html">Profile</a>
                <a class="active" href="./cart.html">Cart</a>
            </li>
            <li>
                <form action="">
                    <input type="search" class="searchBox" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
        </ul>
    </nav><br><br>
    <br>
    <div class="content">  
        <img class="banner" src="./img/banner.jpg" alt="">
        <br>
        <div class="container">
            
            <div class="row">
                <div class="col-md">
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title">Amandine</h5>
                            <img src="./img/products/1280px-Amandine_cake.jpg" alt="Amandine">
                            <p class="card-text">
                                A chocolate layered cake filled with chocolate, caramel and fondant cream.
                            </p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title">Angel cake</h5>
                            <img src="./img/products/Homemade_Angel_Slice_Cake_Stock_Photo_(48754448236).jpg" alt="Angelcake">
                                <p class="card-text">
                                    A type of layered sponge cake, often garnished with cream and food coloring.
                                </p>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title">Angel food cake</h5>
                            <img src="./img/products/Angel_food_cake_with_strawberries_(4738859336).jpg" alt="Angelfood">
                            <p class="card-text">
                                A type of sponge cake made with egg whites, sugar, flour, vanilla, and a whipping agent such as cream of tartar.
                            </p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title">Apple cake</h5>
                            <img src="./img/products/Apple_cake_with_vanilla_ice_cream_2.jpg" alt="Pinkbox">
                            <p class="card-text">
                                A cake featuring apples, occasionally topped with caramel icing.
                            </p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title">Applesauce cake</h5>
                            <img src="./img/products/Applesauce_cake.jpg" alt="Applesauce">
                            <p class="card-text">
                                A cake that is prepared using applesauce, flour, and sugar as primary ingredients.
                            </p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title">Aranygaluska</h5>
                            <img src="./img/products/Arany-galuska.jpg" alt="Aranygaluska">
                            <p class="card-text">
                                A cake with yeasty dough and vanilla custard.
                            </p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title">Beer cake</h5>
                            <img src="./img/products/Chocolate_Stout_Cake.jpg" alt="Beercake">
                            <p class="card-text">
                                A cake prepared with avocado as a primary ingredient.
                            </p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
<footer>
    <p class="copyright">Tran Minh Khoi - GCH18513</p>
    <button onclick="topFunction()" id="myBtn" title="Go to top">↑</button>
</footer>
</html>