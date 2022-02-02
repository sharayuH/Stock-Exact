<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
  $imagepath = "uploads/users/jumbotron.jpg";
?>
<?php include_once('layouts/header.php'); ?>

<style type="text/css">

.jumbotron .text-center {
  background-image: url("uploads/users/jumbotron.jpg");
  background-size: cover;
}

</style>

<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center" style="background-image: url('<?php echo $imagepath;?>'); background-size: cover; height: 60rem;">
         <!-- <h1>Wholesale Management System</h1>
         <p>A one stop shop for all your wholesale needs!</p> -->
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
