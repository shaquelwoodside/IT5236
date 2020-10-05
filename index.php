<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Shaquel Woodside">
		<title>The Calculator</title>
		<script src="javascript.html"></script>
		<link rel="stylesheet" href= "calculator.css">

	</head>
	<body>
		<header>The Calculator</header>
		<!--- I learned how to do onclick="document"... from https://codeburst.io/making-a-calculator-with-basic-html-css-and-javascript-part-1-1e4288f0bea1-->
		<div id="wholeCalc">
			<form name="calculator">
			<table>
				<tr><input id ="screen" type= "text" name="result"></tr>
				
				<tr>
					<td ><input class="operator" type="button" id ="clear" value="C" onclick="document.calculator.result.value =''"></td>
					<td><input class="operator" type="button" id="exp" value="^" onclick="document.calculator.result.value +='**'"></td>
					<td><input class="operator" type="button" id="negative" value="-/+" onclick="document.calculator.result.value +='-'"></td>
					<td><input class="operator" type="button" id="yellow" value="&divide;" onclick="document.calculator.result.value +='/'"></td>
				</tr>
				
				<tr>
					<td><input class="number" type="button" id="7" value="7"onclick="document.calculator.result.value += '7'"></td>
					<td><input class="number"type="button" id="8" value="8"onclick="document.calculator.result.value += '8'"></td>
					<td><input class="number"type="button" id="9" value="9"onclick="document.calculator.result.value += '9'"></td>
					<td><input class="operator"type="button" id="yellow" value="&times;" onclick="document.calculator.result.value += '*'"></td>
				</tr>
				
				<tr>
					<td><input class="number" type="button" id="4" value="4" onclick="document.calculator.result.value +='4'"></td>
					<td><input class="number" type="button" id="5" value="5" onclick="document.calculator.result.value +='5'"></td>
					<td><input class="number" type="button" id="6" value="6" onclick="document.calculator.result.value +='6'"></td>
					<td><input class="operator" type="button" id="minus" value="-"  onclick="document.calculator.result.value +='-'"></td>
				</tr>
				
				<tr>
					<td><input class="number" type="button" id="1" value="1" onclick="document.calculator.result.value +='1'"></td>
					<td><input class="number" type="button" id="2" value="2" onclick="document.calculator.result.value +='2'"></td>
					<td><input class="number" type="button" id="3" value="3" onclick="document.calculator.result.value +='3'"></td>
					<td><input class="operator" type="button" id="plusYellow" value="+" onclick="document.calculator.result.value +='+'"></td>
				</tr>
				
				<tr>
					<td><input class="number" type="button" id="0" value="0" onclick="document.calculator.result.value +='0'"></td>
					<td><input class="number" type="button" id="." value="." onclick="document.calculator.result.value +='.'"></td>
					<td colspan="2"><input class="operator" type="button" id="equalYellow" value="=" onclick="document.calculator.result.value = eval(calculator.result.value)"></td>
				</tr>
			</table>
		</div>
		</form>
	</body>
</html>
