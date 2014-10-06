<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FoodMood</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">



</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">FoodMood</a>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   
                    <div class="intro-text">
                        <span class="name">FoodMood</span>
                        <span class="skills">Choose a mood or theme now to find out what you'll be having for dinner tonight.</span >


                    </div>
                </div>
            </div>
            <form action="/search.html" class="search-wrapper cf">
                                <input type="text" placeholder="Enter your mood...
                                " required="">
                                <button type="submit"><a href="search-results.html">Search</a></button>
                             </form>
                <div class="tag-container">

                            <ul class="tags">
                                <li><a href="#">Comfort</a></li>
                                <li><a href="#">Calm</a></li>
                                <li><a href="#">Spicy</a></li>

                                <li><a href="#">Sharing</a></li>
                                <li><a href="search-results.html">Cozy</a></li>
                            </ul>
                            <ul class="tags">

                                <li><a href="#">Soupy</a></li>
                                <li><a href="#">Warm</a></li>
                                <li><a href="#">Cold</a></li>
                                <li><a href="#">Celebrating</a></li>
                            </ul>
                </div>
           

        </div>
    </header>

    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Want to add a recipe?</h2>
                </div>
            </div>
            <div class="row">
         
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="add-recipe.html" class="btn btn-lg btn-outline">
                        <i class="fa fa-cutlery"></i> Submit Recipe
                    </a>
                </div>
            </div>
        </div>
    </section>


    

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
