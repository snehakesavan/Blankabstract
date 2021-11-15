<?php
session_start();

if(isset($_SESSION['login'])){
      $fname = $_SESSION['fname'];
      $lname = $_SESSION['lname'];
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - BLANK_ABSTRACT</title>

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
    <div class="address-bar">48,49 | MP PALACE | CALIFORNIA</div>

    <!-- Navigation -->
  <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   <h2 class="text-center">Welcome <?php echo $fname; echo" "; echo $lname; ?> - <a href="logout.php">Logout </a></h2>
                    <hr>
                    <h2 class="intro-text text-center">blank_abstract
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/madonna.jpg" alt="">
                    <h2>Madonna del Parto
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>A Madonna del Parto ("Madonna of Parturition") is an iconic depiction of the Virgin Mary shown as pregnant, which was developed in Italy, mainly in Tuscany in the 14th century. Examples include works by Taddeo Gaddi, Bernardo Daddi and Nardo di Cione, but the fresco by Piero della Francesca in the Museum of Monterchi, in the province of Arezzo, is considered the most famous one.</p>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Read more </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/pieta.jpg" alt="">
                    <h2>Pietà
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>The Pietà is a work of Renaissance sculpture by Michelangelo Buonarroti, housed in St. Peter's Basilica, Vatican City. It is the first of a number of works of the same theme by the artist. The statue was commissioned for the French Cardinal Jean de Bilhères, who was the French ambassador in Rome.</p>
                   <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Read more </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/starrynight.jpg" alt="">
                    <h2>starrynight
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>The Starry Night is an oil-on-canvas painting by the Dutch Post-Impressionist painter Vincent van Gogh. Painted in June 1889, it depicts the view from the east-facing window of his asylum room at Saint-Rémy-de-Provence, just before sunrise, with the addition of an imaginary village.bb</p>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Read more </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
     <div id="myModal1" class="modal fade" role="dialog">

   <div class="modal-dialog">             
    <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times</button>
        <h4 class="modal-title">madonna</h4>
     </div>
        <div class="modal-body">
             <p>A Madonna (Italian: [maˈdɔn.na]) is a representation of Mary, either alone or with her child Jesus. These images are central icons for both the Catholic and Orthodox churches.[1] The word is from Italian ma donna 'my lady'. The Madonna and Child type is very prevalent in Christian iconography, divided into many traditional subtypes especially in Eastern Orthodox iconography, often known after the location of a notable icon of the type, such as the Theotokos of Vladimir, Agiosoritissa, Blachernitissa, etc., or descriptive of the depicted posture, as in Hodegetria, Eleusa, etc</p>
        </div>
    <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
    </div>
  </div>
</div>
</div>
      
   <div id="myModal2" class="modal fade" role="dialog">

   <div class="modal-dialog">             
    <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times</button>
        <h4 class="modal-title">pieta</h4>
     </div>
        <div class="modal-body">
             <p>The Pietà (Italian: [pjeˈta]; English: "the Piety"; 1498–1499) is a work of Renaissance sculpture by Michelangelo Buonarroti, housed in St. Peter's Basilica, Vatican City. It is the first of a number of works of the same theme by the artist. ... Peter's Basilica that was accepted by the Chapter of St.</p>
        </div>
    <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
    </div>
  </div>
</div>
</div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; BLANK_ABSTRACT 2014</p>
                </div>
            </div>
        </div>
   <div id="myModal3" class="modal fade" role="dialog">

   <div class="modal-dialog">             
    <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times</button>
        <h4 class="modal-title">starry night</h4>
     </div>
        <div class="modal-body">
             <p>The Starry Night is an oil-on-canvas painting by the Dutch Post-Impressionist painter Vincent van Gogh. Painted in June 1889, it depicts the view from the east-facing window of his asylum room at Saint-Rémy-de-Provence, just before sunrise, with the addition of an imaginary village.[1][2][3] It has been in the permanent collection of the Museum of Modern Art in New York City since 1941, acquired through the Lillie P. Bliss Bequest. Widely regarded as Van Gogh's magnum opus,[4][5] The Starry Night is one of the most recognized paintings in Western art.[6][7]</p>
        </div>
    <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
    </div>
  </div>
</div>
</div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php

}else {
   header("location:login.php");
}
?>




