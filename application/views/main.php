<!DOCTYPE html>
<html ng-app="FLYERBD">
<head>
	<title>GANDEN TUGAS</title>
</head>
<body>
	<h1>Selamat dan sukses atas selesainya tugas ini</h1>
	[<a href="#/" title="Home">Home</a>]
	[<a href="#/about" title="About">About</a>]
	[<a href="#/contact" title="Contact">Contact</a>]
	[<a href="#/tugas" title="Tugas">Tugas</a>]

<div ng-view>

</div>


<script src="<?php echo base_url()?>bower_components/angular/angular.js"></script>
<script src="<?php echo base_url()?>bower_components/angular-route/angular-route.js"></script>

<script src="<?php echo base_url()?>assets/js/app.js"></script>

<script src="<?php echo base_url()?>assets/js/controllers/AboutCtrl.js"></script>
<script src="<?php echo base_url()?>assets/js/controllers/HomeCtrl.js"></script>
<script src="<?php echo base_url()?>assets/js/controllers/ContactCtrl.js"></script>
<script src="<?php echo base_url()?>assets/js/controllers/TugasCtrl.js"></script>
</body>
</html>
