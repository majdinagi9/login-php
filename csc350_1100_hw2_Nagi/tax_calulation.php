<?php
/*
File: tax_calulation.php
Name: Majdi Nagi
Email: majdi.nagi@stu.bmcc.cuny.edu
Created: March 28, 2020
*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tax_Calculation</title>
  <link rel="stylesheet" type="text/css" href="tax_calculation.css">
</head>
<body>
  <h1>Tax Calculation</h1>
<?php  
    if(isset($_POST['submit'])){  
      $income = $_POST['income'];
      $status = $_POST['status'];

      if($status=='married'){
      echo "<h3>Your tax return for married individual is $</h3> " .number_format(married($income), 2, '.', ',');
      }elseif($status=='single') {
      echo "<h3>Your tax return for single individual is $</h3>" . number_format(single($income), 2, '.', ',');
    }

}  

function single($income){
    
$tax=0;
if ($income <= 9275)
    $tax = $income * 0.10;
elseif ($income <= 37650)
    $tax = 927.50 + ($income - 9275) * 0.15;
elseif ($income <= 91150)
    $tax = 5183.75 +($income - 37650) * 0.25;
elseif ($income <= 190150)
    $tax = 18558.75 + ($income - 91150) * 0.28;
elseif ($income <= 413350)
    $tax = 46278.75+($income - 190150) * 0.33;
elseif ($income <= 415050)
    $tax = 119934.75+($income - 413350) * 0.35;
else 
    $tax = 120529.75+($income - 415050) * 0.396;
 return  $tax;
}

function married($income){

$tax=0;
if ($income <= 18450)
    $tax = $income * 0.10;
elseif ($income <= 74900)
    $tax = 1845.00 + ($income - 18450) * 0.15;
elseif ($income <= 151200)
    $tax = 10312.50 +($income - 74900) * 0.25;
elseif ($income <= 230450)
    $tax = 29387.50 + ($income - 151200) * 0.28;
elseif ($income <= 411500)
    $tax = 51577.50+($income - 230450) * 0.33;
elseif ($income <= 464850)
    $tax = 111324.00+($income - 411500) * 0.35;
else
    $tax = 129996.50+($income - 464850) * 0.396;
 return   $tax;
}


?>
</body>
</html>
