
	<form action="calc.php" method="get" accept-charset="utf-8">
		<input type="number" name="n1"/>
		<select name="op" id="op">
			<option value="-">-</option><!--quando o value for igual ao valor podemos tirar o value deixando somente o valor-->
			<option value="+">+</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>

		<input type="number" name="n2"/>

		<input type="submit" value="Calcular">
	
	</form>
 