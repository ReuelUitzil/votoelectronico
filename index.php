<?php
$USER_ADMIN = 1;
$USER_PROFESOR  = 2;

$ESTADO_ARCHIVADO = '0';
$ESTADO_ACTIVADO = '1';

include 'app/app.php';

session_start();

if(isset($_SESSION["session_duration"]) && isset($_GET["page"])){
  $last_activity = $_SESSION["last_activity"];
  $duration = $_SESSION["session_duration"];


  $end_time = strtotime("+".$duration." minutes",strtotime($last_activity));

  if(strtotime(date("Y-m-d H:i:s")) > $end_time){
    session_destroy();
    header( "location:index.php" );
  }
}

if(isset($_GET["page"]) && !isset($_SESSION["token"])){ # cuando no se ha iniciado sesión redirige al login
    header( "location:index.php" );
}

if(!isset($_GET["page"]) && isset($_SESSION["token"])){ # cuando se ha inicado sesión redirige a menu_articulos
  header( "location:index.php?page=menu_principal" );
}

if(isset($_GET["page"]) && isset($_SESSION["token"])){ #ha iniciado sesión correctamente
    $last_activity_date = date("Y-m-d H:i:s");
    $_SESSION["last_activity"] = $last_activity_date;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Voto Electrónico</title>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/jquery_ui/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="css/jquery-te-1.4.0.css">

<link rel="icon" href="images/favicon.jpeg" />
  <link rel="shortcut icon" href="images/favicon.ico"/>

<script  src="js/voto_electronico.js"></script>


<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-te-1.4.0.min.js" charset="utf-8"></script>


<script>
    $(function(){
      $(".jqte-test").jqte();
    });

</script>

<script>
  $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>



</head>

<body class="cuerpo">

<?php include 'header.php'; ?>

<!--INICIACUERPO-->      
  <?php 

    if(isset($_GET["page"])){
        $page = $_GET["page"];
        $file_url = "html/".$page.".php";
        if (file_exists($file_url)) {
            include $file_url;
        }else {
          echo "La página solicitada no existe";
        }
      }else{
        include "html/login.php";
      }
  ?>
<?php include 'footer.php'; ?>
</body>

</body>
</html>