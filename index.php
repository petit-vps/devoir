<?php
	require_once('./Class/ClassPage.php');
$view=null;
if(isset($_GET['com'])){
		
	$component=$_GET['com'];
	$page=new Page($component);
//	echo 'component is :'.$component;
	$view=$page->getViewPath();	
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="./assets/css/bootstrap.min.css" >
<link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Test</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
  <div id="content1" class="row page">
    <div class="col-md-3">
      <form action="transatc.php" method="post" accept-charset="utf-8">
          <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
          </div>

          <div class="form-group">
            <label for="prenom">PerNom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
          </div>

           <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email">
          </div>

          <div class="form-group">
            <label for="pass">Pass :</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Mot de passe">
          </div>

        <div class="form-group">
            <input type="submit" name="Calculer" value="Register" class="form-control">
          </div>

        </form>
    </div>
    <div class="col-md-9">
	<div class="formContent">
		<h2>
			Creation de composant	
		</h2>
		<div class="btn-group btn-group-justified">
			<a class="btn btn-primary" href="index.php?com=galery">gallery</a>
			<a class="btn btn-primary" href="index.php?com=competance">competence</a>
			<a class="btn btn-primary" href="index.php?com=produit">Produit</a>
			<a class="btn btn-primary" href="index.php?com=image">image</a>
			<a class="btn btn-primary" href="index.php?com=formulaire">formulaire</a>
		</div>
		<?php
//		require_once './Class/classTest.php';
//		$test = new Test();
		if($view!=null)
			require_once $view;
		?>
	</div>
    </div>
  </div>
  <div id="content2" class="row page">mus aliquid autem deserunt explicabo id illo laboriosam libero neque, obcaecati quis quo quod rem unde vitae voluptatibus?</div>
  <div class="row page" id="content3  ">mus aliquid autem deserunt explicabo id illo laboriosam libero neque, obcaecati quis quo quod rem unde vitae voluptatibus?</div>
  <div class="row page" id="content4 ">mus aliquid autem deserunt explicabo id illo laboriosam libero neque, obcaecati quis quo quod rem unde vitae voluptatibus?</div>
  <div class="row page" id="content5 " >mus aliquid autem deserunt explicabo id illo laboriosam libero neque, obcaecati quis quo quod rem unde vitae voluptatibus?</div>
</div>
<form action="#" >
<input type="text" name="nom" id="nom" placeholder="votre nom ici">
<input type="button" name="direBonjour" value="dire bonjour" id="salut">
</form>
<script src="./assets/js/jquery-1.12.1.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!--script src="./assets/js/ckeditor.js"></script-->
<script src="./assets/js/script1.js"></script>
</body>
</html>
