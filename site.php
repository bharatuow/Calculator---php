<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			<?php
			
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{
					// Check number values
					if(is_numeric($_POST['number1']) && (is_numeric($_POST['number2']) || is_null($_POST['number2']) ) )
					{
						// Calculate total
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'times')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'divided by')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						if($_POST['operation'] == 'factorial')
						{
							if(is_int($_POST['number1'] && $_POST['number1'] > 0 ) )
							{
								$total = 1;
								for ($x=$_POST['number1']; $x>=1; $x--)   
									{  
									  $total = $total * $x;  
									}
							}
							else
									echo "Invalid";
						}
						if($_POST['operation'] == 'square')
						{
							$total = pow($_POST['number1'] , 2);	
						}
						
						if($_POST['operation'] == 'cube')
						{
							$total = pow($_POST['number1'] , 3);
						}
						
						if($_POST['operation'] == 'sqrt')
						{
							$total = pow($_POST['number1'] , 0.5);	
						}
						// Print total to the browser
						echo "<h1>Result {$total}</h1>";
					
					} else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
				}
			
			?>
		    
		    <!-- Calculator form -->
		    <form method="post" action="site.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">+</option>
		            <option value="minus">-</option>
		            <option value="times">x</option>
		            <option value="divided by">/</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
			
			<form method="post" action="site.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="factorial">!</option>
		            <option value="square">x^2</option>
		            <option value="cube">x^3</option>
		            <option value="sqrt">sqrt</option>
		        </select>
		        
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>