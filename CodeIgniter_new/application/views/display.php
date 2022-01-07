<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>display</title>
</head>

<body>
<table width="200" height="71" border="1">
  <tr>
    <td height="26">name</td>
    <td>age</td>
    <td>gender</td>
    <td>language</td>
    <td>username</td>
    <td>image</td>
  </tr>
<?php
foreach($array as $a)
{
  ?>
  <tr>
    <td><?php echo $a['name']?></td>
    <td><?php echo $a['age']?></td>
    <td><?php echo $a['gender']?></td>
    <td><?php echo $a['language']?></td>
    <td><?php echo $a['username']?></td>
    <td><?php echo $a['password']?></td>
    <td><img src="http://localhost/nino/CodeIgniter_new/images/<?php echo $a['image']?>" height="100px" width="100px"></td>
    <td><a href="<?php echo base_url()."cordina/edit/".$id=$a['id']?>">edit details</a></td>
    <td><a href="<?php echo base_url()."cordina/delete/".$id=$a['id']?>">delete details</a></td>
    
  </tr>
  
<?php
}
?>
</table>
</body>
</html>