<!DOCTYPE html>
<html lang="en">
<head>
  <title>Palestra X - Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../te_tjera/_imazhe/_ikona/ikona.ico" />

    <!-- CDN e bootstrap, jquery dhe fotorama -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- Skedaret lokale te bootstrap, jquery dhe fotorama-->
  <!-- <link rel="stylesheet" href="te_tjera/_bootstrap/css/bootstrap.min.css">
  <script src="te_tjera/_jquery/jquery.js"></script>
  <script src="te_tjera/_bootstrap/js/bootstrap.min.js"></script>

  <link  href="te_tjera/_fotorama/fotorama.css" rel="stylesheet"> 
  <script src="te_tjera/_fotorama/fotorama.js"></script>  -->

  <link rel="stylesheet" href="_permbajtja/_permbajtjaIndex/css/style.css">
  
  <style>

.navbar-login
{
    width: 305px;
    padding: 10px;
    padding-bottom: 0px;
}

.navbar-login-session
{
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.icon-size
{
    font-size: 87px;
}


img
{
  width: 25px;
  height: 25px;
}

.profile-img{
    margin-right: 5px;
    float: left;
    background: url(example.jpg) 50% 50% no-repeat; /* 50% 50% centers image in div */
    background-size: auto 100%; /* Interchange this value depending on prefering width vs. height */
    width: 20px;
    height: 20px;
}

/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}

  </style>
</head>


<body>
