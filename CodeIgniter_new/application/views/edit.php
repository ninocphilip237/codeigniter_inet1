
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>edit</title>
</head>
<body>
<?php 
foreach($array as $b)

$g=explode("/",$b['language']);
?>
<form name="regr" action="<?php echo base_url()."cordina/update/".$id=$b['id']?>"method="post" enctype="multipart/form-data">
<table height="400" width="400" bgcolor="#CC99FF">
<tr><td colspan="2" align="center">
<img src="http://localhost/nino/CodeIgniter_new/images/<?php echo $b['image']?>" height="100px" width="100px"></td>
</tr>
<tr>
<th><label> name</label></th>
<td><input type="text" name="nam" value="<?php echo $b['name']?>"></td>
</tr>

<tr>
<th>age</th>
<td><input type="number" name="age" value="<?php echo $b['age']?>"  ></td>
</tr>
<tr>
<th>gender</th>
<td>
<input type="radio" name="gen" value="male" <?php if($b['gender']=="male"){?> checked <?php } ?> >male
<input type="radio" name="gen" value="female" <?php if($b['gender']=="female"){?> checked <?php } ?> >female
</td>
</tr>
<tr>
<th>language</th>
<td><input type="checkbox" name="mala"  value="malayalam" <?php if($g[0]=="malayalam"){?> checked <?php } ?> >malayalam
<input type="checkbox" name="engli"value="english" <?php if($g[1]=="english"){?> checked <?php } ?> >english
<input type="checkbox" name="hind"value="hindi" <?php if($g[2]=="hindi"){?> checked <?php } ?> >hindi</td>
</tr>
<tr>
<th>username</th>
<td><input type="username" name="usrnme" value="<?php echo $b['username']?>"  ></td>
</tr>
<tr>
<th>password</th>
<td><input type="password" name="pass" value="<?php echo $b['password']?>"  ></td>
</tr>
<tr>
<th>image</th>
<td><input type="file" name="img"  ></td>
</tr>
<tr>

<td><input type="submit" value="update" name="update" onClick="return get()"></td>
</tr>
</table></form>
</body>
</html>