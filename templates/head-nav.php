<!DOCTYPE html>
<html>
<head>
  <title>
  <?php if (isset($_GET['temp'])) { echo ucfirst($_GET['temp']); } else { echo "BePro APIs"; }  ?>
  </title>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=php&amp;skin=sunburst"></script>
</head>
<body id="top">

  
  <nav class="blue darken-2">
    <div class="nav-wrapper">
      <a href="<?= $url ?>" class="brand-logo" style="padding-left: 10px;"><i class="material-icons">settings_input_component</i><?php if (isset($_GET['temp'])) { echo ucfirst($_GET['temp']); } else { echo "BePro APIs"; }  ?></a>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?= $url ?>view/documentations"><i class="material-icons left">turned_in</i> Documentations</a></li>
        <li><a href="<?= $url ?>view/report-bugs"><i class="material-icons left">report_problem</i> Report Bugs</a></a></li>
        <li><a href="<?= $url ?>view/contact-us"><i class="material-icons left">phone</i> Countact Us</a></li>
        <li><a href="<?= $url ?>view/privacy-police"><i class="material-icons left">verified_user</i> Privacy Police</a></li>
      </ul>
      <ul id="slide-out" class="side-nav">
        <li><div class="userView">
          <div class="background">
            <img src="http://ratnalinux/tutorial/libs/img/slide-05.png">
          </div>
          <a href="#!user"><img class="circle" src="http://ratnalinux/tutorial/libs/img/images.jpg"></a>
          <a href="#!name"><span class="white-text name">John Doe</span></a>
          <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
        <li><a href="<?= $url ?>view/documentations"><i class="small material-icons left">turned_in</i> Documentations</a></li>
        <li><a href="<?= $url ?>view/report-bugs"><i class="small material-icons left">report_problem</i> Report Bugs</a></a></li>
        <li><a href="<?= $url ?>view/contact-us"><i class="small material-icons left">phone</i> Countact Us</a></li>
        <li><a href="<?= $url ?>view/privacy-police"><i class="small material-icons left">verified_user</i> Privacy Police</a></li>
      </ul>
  </nav>