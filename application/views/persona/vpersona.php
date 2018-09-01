<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>CARGO_PERSONA</h1>
	<form action="<?php echo base_url();  ?>cpersona/guardar" method="POST">
		<table>
			<tr>
				<td><label>nombre</label></td>
				<td><input type="text" name="txtnombre"></td>
			</tr>
			<tr>
				<td><label>appaterno</label></td>
				<td><input type="text" name="txtappaterno"></td>
			</tr>
			<tr>
				<td><label>apmaterno</label></td>
				<td><input type="text" name="txtapmaterno"></td>
			</tr>
			<tr>
				<td><label>email</label></td>
				<td><input type="email" name="txtemail"></td>
			</tr>
			<tr>
				<td><label>dni</label></td>
				<td><input type="text" name="txtdni"></td>
			</tr>
			<tr>
				<td><label>fecnac</label></td>
				<td><input type="date" name="datfecnac"></td>
			</tr>
			
			<tr>
				<td><label>usuarios</label></td>
				<td><input type="text" name="txtusuario"></td>
			</tr>
			<tr>
				<td><label>clave</label></td>
				<td><input type="password" name="txtclave"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="guardar"></td>
				
			</tr>










			
		</table>
		
	</form>

</body>
</html>