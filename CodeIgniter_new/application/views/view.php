<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><form>

<?php
foreach($lap1 as $c)
?>
<table width="197" height="129">
  <tr>
  <td>name</td>
    <td><?php echo $c['name']?></td>
    </tr>
    <tr>
    <td>age</td>
    <td><?php echo $c['age']?></td>
    </tr>
    <tr>
    <td>gender</td>
    <td><?php echo $c['gender']?></td>
    </tr>
    <tr>
    <td>language</td>
    <td><?php echo $c['language']?></td>
    </tr>
    <tr>
    <td>image</td>
    <td><img src="http://localhost/nino/CodeIgniter_new/images/<?php echo $c['image']?>" height="100px" width="100px"></td>
    </tr>
  


<td><a href="<?php echo base_url()."cordina/logout/"?>">logout</a>
</td>
</table></form>
</body>
</html>