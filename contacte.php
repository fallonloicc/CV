<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>

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
    <header class="masthead" style="background-image: url('img/oui.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contactez moi</h1>
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Besoin de plus d'information ? Je vous répond au plus tôt !</p>
          <p>Vous pouvez également me contacter au <u>06 27 31 01 04</u>.</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sentMessage" id="contactForm" action="" method="" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Nom</label>
                <input type="text" class="form-control" placeholder="Nom" id="nom" required data-validation-required-message="Entrez votre nom.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Mail</label>
                <input type="text" class="form-control" placeholder="Mail" id="headers" required data-validation-required-message="Entrez votre mail.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Sujet</label>
                <input type="text" class="form-control" placeholder="Sujet" id="sujet" required data-validation-required-message="Entrez le sujet du mail.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Entrez le message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>

            <div id="success"></div>
          </form>
          <div class="form-group">
            <button class="btn btn-primary" id="sendMessageButton">Envoyez</button>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Bootstrap core JavaScript -->

    <script type="text/javascript">

      var nom = document.getElementById('nom');
      var email = document.getElementById('headers');
      var sujet = document.getElementById('sujet');
      var message = document.getElementById('message');

      $('button').click(function()
      {
        document.location.href = "mailto:fallonloic@hotmail.fr?subject=" + sujet.value + " || " + nom.value +"&body=" + message.value;
      });
    </script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
