<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Home</title>
	<style>
		img
		{
			
			width: 100%;
			height: 100%;
			/*margin-left: auto;*/
			/*margin-right: auto;*/
			/*display: block;*/
			/*margin-top: 50px;*/
			/*overflow:hidden;*/
			background-position: top;
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>

<div class="p-3 mb-2 text-dark">

	<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  	<a class="navbar-brand text-white" href="<?php echo base_url('index.php')?>">Home</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="navbar-brand">
      	<a class="nav-link text-white" href="<?php echo base_url('index.php/member_details/savedata')?>">Create</a>
      </li>

      <li class="navbar-brand">
      	<a class="nav-link text-white" href="<?php echo base_url('index.php/member_details/displaydata')?>">Data View</a>  
      </li>

      <li class="navbar-brand">
        <a class="nav-link text-white" href="<?php echo base_url('index.php/member_details/displaydelete')?>">Delete</a>
      </li>

      <li class="navbar-brand">
        <a class="nav-link text-white" href="<?php echo base_url('index.php/member_details/displayupdate')?>">Update</a>
      </li>

      <li class="navbar-brand">
        <a class="nav-link text-white" href="<?php echo base_url('index.php/pdf_controller/generate_pdf_report')?>">PDF Report</a>
      </li>
  	</ul>
      
      
  </div>
</nav>

<div class="image">
	<img src="<?php echo base_url('images/banner.jpg');?>" alt="">
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</div>
</body>
</html>