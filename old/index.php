<!DOCTYPE html>
<html lang="es">


  <?php include 'head.html';?>

  <body>


  <?php include 'preloader.html';?>




  <section id="home" class="hero-section-wrapper-2">



<section id="contact" class="contact-section contact-style-6">

    <div class="container fluid">
      <div class="row">

        <div class="col-md-6">

        <?php include 'imagen.html';?>

          </div>
        </div>
        <div class="col-sm-11 col-md-6 align-items-center">
        <?php include 'modal.html';?>
        <?php include 'formulario-funcional.html';?>
        </div>


      </div>
    </div>
  </section>


  <!--  <script defer src="assets/js/googleanalytics.js"> </script>


    <script defer src="//assets.adobedtm.com/launch-EN44f54226de934d4eb94899b7090e7c11.min.js" async></script>
-->


    <script async src="assets/js/main.js"></script>


  <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



    <!-- script de UTM -->
 <!--
  <script>


    var queryForm = function (settings) {
      var reset = settings && settings.reset ? settings.reset : false;
      var self = window.location.toString();
      var querystring = self.split("?");
      if (querystring.length > 1) {
        var pairs = querystring[1].split("&");
        for (i in pairs) {
          var keyval = pairs[i].split("=");
          if (reset || sessionStorage.getItem(keyval[0]) === null) {
            sessionStorage.setItem(keyval[0], decodeURIComponent(keyval[1]));
          }
        }
      }
      var hiddenFields = document.querySelectorAll("input[type=hidden], input[type=text]");
      for (var i = 0; i < hiddenFields.length; i++) {
        var param = sessionStorage.getItem(hiddenFields[i].name);
        if (param) document.getElementsByName(hiddenFields[i].name)[0].value = param;
      }
    }

    setTimeout(function () { queryForm(); }, 3000);
  </script>



-->



  <!-- jquery -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

  </body>
</html>
