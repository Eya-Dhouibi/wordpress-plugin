<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container col-md-6 p-2">
        <h2 class="text-primary">edit your cv</h2>
<form action="" method="post">
<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" name="nom" value="<?= $cvs->nom ; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
    aria-describedby="emailHelp" value="<?= $cvs->email; ?>">
  </div>
  
  <div class="form-group">
    <label for="">Téléphone</label>
    <input type="text" class="form-control" name="tel" value="<?= $cvs->tel ; ?>">
  </div>

  <div class="form-group">
    <label for="">Titre</label>
    <input type="text" class="form-control" name="titre" value="<?= $cvs->titre ; ?>">
  </div>
  
  <div class="form-group">
    <label for="">Formation</label>
    <input type="text" class="form-control" name="formations" value="<?= $cvs->formations ; ?>">
  </div>

  <div class="form-group">
    <label for="">Experience</label>
    <input type="text" class="form-control" name="experiences" value="<?= $cvs->experiences ; ?>">
  </div>

  <div class="form-group">
  <label for="">domain</label>
	<select name="domaine_id" >
  <option value="">--Please choose a domain--</option>

		<?php foreach($Domaines as $domaine):?>
      <?php if($cvs->domaine_id==$domaine->id){
      $selected='selected';
    }else $selected='';?>
		<option value="<?= $domaine->id;?>" <?= $selected;?>>
    <?= $domaine->domaine;?></option>
		<?php endforeach;?>

	</select>
  </div>

  <button type="submit" class="btn btn-primary" value="edit" name="edit">Update</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>