<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>regr</title>
</head>

<body>

<form name="regr" action="<?php echo base_url()."cordina/lol/"?> " method="post" enctype="multipart/form-data"> 
<table height="400" width="400" bgcolor="#CC99FF">
<tr>
<th><label> name</label></th>
<td><input type="text" name="nam" ></td>
</tr>

<tr>
<th>age</th>
<td><input type="number" name="age"  ></td>
</tr>
<tr>
<th>gender</th>
<td>
<input type="radio" name="gen" value="male"  >male
<input type="radio" name="gen" value="female" >female
</td>
</tr>
<tr>
<th>language</th>
<td><input type="checkbox" name="mala"  value="malayalam">malayalam
<input type="checkbox" name="engli"value="english" >english
<input type="checkbox" name="hind"value="hindi" >hindi</td>
</tr>
<tr>
<th>username</th>
<td><input type="username" name="usrnme"  ></td>
</tr>
<tr>
<th>password</th>
<td><input type="password" name="pass"  ></td>
</tr>
<tr>
<th>image</th>
<td><input type="file" name="img"  ></td>
</tr>

<tr>

<td colspan="2" align="center"><input type="submit" name="img" onClick="return get()"></td>
</tr>
<tr>
<td><a href="<?php echo base_url()."cordina/login/"?>">login</a>
</td>
<td colspan="2" align="center"> <a href="<?php echo base_url()."cordina/disp/"?>">display</a>

</tr>
</table></form>
</body>