<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('src/title.php') ?>

    <script type="text/javascript" src="js/angular.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="body" style="font-size: 16px;" ng-app="myApps">
    <div class="" ng-controller="contentController">
      <?php include('header/index_head.php') ?>
      <ul ng-repeat="cont in contents | filter:keyword | orderBy: '+judul'">
        <li style="list-style-type:none;">
          <?php include('konten/jskonten.php') ?>
        </li>
        <!-- <li style="list-style-type:none;">
          <?php //include('konten/konten1.php') ?>
        </li>
        <li style="list-style-type:none;">
          <?php //include('konten/konten2.php') ?>
        </li>
        <li style="list-style-type:none;">
          <?php //include('konten/konten3.php') ?>
        </li> -->
      </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	var app = angular.module("myApps", []);
    	app.controller("contentController", function($scope){
    		$scope.contents=[
          {judul:"SemiFinal Imagine Cup 2018", gambar:"src/1.jpg", link: "konten/isi_konten/isi_konten1.php"},
    			{judul:"Top 2 Partisipan IAK 2018", gambar:"src/2.jpg", link: "konten/isi_konten/isi_konten2.php"},
          {judul:"Dicoding Graduate", gambar:"src/3.jpg", link: "konten/isi_konten/isi_konten3.php"},
    		];
    	});
    </script>
  </body>
</html>
