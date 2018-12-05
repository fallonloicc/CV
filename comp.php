<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Veille Technologique</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <script src="js/jquery-2.2.4.min.js"></script>

  </head>

  <body>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/veille-technologique.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Veille Technologique</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Dans le cadre du BTS SIO, nous avons dû effectué une veille technologique sur le sujet de notre choix. Suite à un stage à la Française de Mécanique, mon choix s'est porté sur le framework Django et le framework Flutter.</p>
          <div style="text-align:center;">
            <button type="button" class="btn btn-primary" id="veille1">Veille 1</button>
            <button type="button" class="btn btn-primary" id="veille2">Veille 2</button>
          </div>
            <div class="veille" id="veille">

            </div>
            <script type="text/javascript">
                $('#veille1').click(function()
                {
                  $('#veille').load('veille1.php');
                });

                $('#veille2').click(function()
                {
                  $('#veille').load('veille2.php');
                });
            </script>
        </div>
      </div>
    </div>
    <a href="https://fr.wikipedia.org/wiki/Vladimir_Poutine">.</a>

    <hr>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
