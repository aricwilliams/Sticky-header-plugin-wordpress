<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<!--/*make settings submit to wp by method post send though header not url.... options is api call to db */-->

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
 <div class="jumbotron">
     <h1>Make Your Header Stick!</h1>
     <form method="post" action="options.php">
         <?php
        //  put this inside of the forms bc this is the filed thoes names will save inder in out database 
         settings_fields('wpcustomsettings');
         do_settings_sections('wpcustomsettings');
         
         ?>
         
         
  <div class="form-group">
    
    <div class="jumbotron jumbotron-fluid alert alert-danger" style="width:60%;">
  <div class="container">
    <h1 class="display-4" style="color:black;">ON/OFF</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    <input type="checkbox" name="masterswitch" data-toggle="toggle" data-on="Sticky Header On" data-off="Sticky Header Off" data-onstyle="success" data-offstyle="danger">

  </div>
</div>
  
    <label style="padding: 10px; font-family: 'Poppins', sans-serif;
" for="exampleFormControlInput1">What is the HTML class name of your header??</label>
    <input style="margin-bottom: 10px;" type="text" name="headerclass" value="<?php echo get_option('headerclass'); ?>" class="form-control" id="exampleFormControlInput1" placeholder="ID OR Class name">
    
    <label style="padding: 10px; font-family: 'Poppins', sans-serif;
" for="exampleFormControlInput1">Padding?</label>
    <input style="margin-bottom: 10px;" type="text" name="padding" value="<?php echo get_option('padding'); ?>" class="form-control" id="exampleFormControlInput1" placeholder="Example: 0px 0px 0px 0px">
    
    
    <label style="padding: 10px; font-family: 'Poppins', sans-serif;
" for="exampleFormControlInput1">Background rgba Color?</label>
    <input style="margin-bottom: 10px;" type="text" name="backgroundcolor" value="<?php echo get_option('backgroundcolor'); ?>" class="form-control" id="exampleFormControlInput1" placeholder="Example:#, #, #, ">
    
    <label style="padding: 10px; font-family: 'Poppins', sans-serif;
" for="exampleFormControlInput1">Background Color Transparent Level?</label>
    <input style="margin-bottom: 10px;" type="text" name="transparent" value="<?php echo get_option('transparent'); ?>" class="form-control" id="exampleFormControlInput1" placeholder="Example: .5 - 1.0">
 
  <button type="submit" class="btn btn-primary mb-2">Submit Settings</button>
</form>
      <div class="header" > <!--  Header Part code within it  --> 

     </div>
     <div class="content"> 
     </div> 
 </div>
 
 