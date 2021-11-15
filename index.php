<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BLANK_ABSTRACT-HOME</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">BLANK_ABSTRACT</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

<?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>



    <!-- Navigation -->
    
    <div class="container">
       <?php require_once 'nav.php'; ?>

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="C:\wamp\www\blankabstract\img\unsplash2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="C:\wamp\www\blankabstract\img\stat.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="C:\wamp\www\blankabstract\img\image2.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">BLANK_ABSRTACT</h1>
                    <hr class="tagline-divider">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Build your world
                        <strong>ON YOUR OWN</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/painting.jpg" alt="" width="300" height="300">
                    <hr class="visible-xs">
                    <p>Art is a wide range of human activities (or the products thereof) that involve creative imagination and an aim to express technical proficiency, beauty, emotional power, or conceptual ideas.[1][2][3]

There is no generally agreed definition of what constitutes art,[4][5][6] and ideas have changed over time. The three classical branches of visual art are painting, sculpture, and architecture.[7] Theatre, dance, and other performing arts, as well as literature, music, film and other media such as interactive media, are included in a broader definition of the arts.[1][8] Until the 17th century, art referred to any skill or mastery and was not differentiated from crafts or sciences. In modern usage after the 17th century, where aesthetic considerations are paramount, the fine arts are separated and distinguished from acquired skills in general, such as the decorative or applied arts.

The nature of art and related concepts, such as creativity and <a href="https://en.wikipedia.org/wiki/Aesthetic_interpretation" target="_blank"> interpretation,</a> are explored in a branch of philosophy known as aesthetics.[9] The resulting artworks are studied in the professional fields of art criticism and the history of art</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">EXPLORE YOUR
                        <strong>CREATIVITY TO THE NEW WORLD</strong>
                    </h2>
                    <hr>
                    <p>The art of losing isn't hard to master;
so many things seem filled with the intent
to be lost that their loss is no disaster,

Lose something every day. Accept the fluster
of lost door keys, the hour badly spent.
The art of losing isn't hard to master.

Then practice losing farther, losing faster:
places, and names, and where it was you meant
to travel. None of these will bring disaster.

I lost my mother's watch. And look! my last, or
next-to-last, of three loved houses went.
The art of losing isn't hard to master.

I lost two cities, lovely ones. And, vaster,
some realms I owned, two rivers, a continent.
I miss them, but it wasn't a disaster.

- Even losing you (the joking voice, a gesture
I love) I shan't have lied. It's evident
the art of losing's not too hard to master
though it may look like (Write it!) like disaster</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; BLANK_ABSTRACT 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
