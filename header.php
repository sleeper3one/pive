<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://use.fontawesome.com/7283a132f3.js"></script>
 <title>Pive</title>

 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 <header>
  <nav class="container flex item-strech justify-between mx-auto space-between inline-block">
   <div class="logotype p-4">
    <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
   </div>
   <div class="menu py-7 uppercase align-bottom self-end">
    <?php wp_nav_menu(array('theme_location' => 'primary'))?>
    <div id="dropdown" class="pr-10">
     <button id="myBtn" class="dropbtn">
      <i class="fa fa-bars"></i>
     </button>
     <div id="myDropdown" class="dropdown-content">
      <?php wp_nav_menu(array('theme_location' => 'primary'))?>
     </div>
    </div>
   </div>
  </nav>
 </header>


 <script>
 document.getElementById("myBtn").onclick = function() {
  myFunction()
 };

 function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
 }
 </script>