<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?
include("phpMySQLFunctionDatabase.php");

//**** Call to function insert record ****//
/*
$strTable = "register";
$strField = "CustomerID,Name,Email,CountryCode,Budget,Used";
$strValue = " 'C005','Weerachai Nukitram','webmaster@thaicreate.com','TH','2000000','0' ";
$objInsert = fncInsertRecord($strTable,$strField,$strValue);
if(!$objInsert)
{
	echo "Record already exist.<br>";
}
else
{
	echo "Record inserted.<br>";
}

echo "<br>===========================<br>";
*/


//**** Call to function select record ****//
$strTable = "register";
$strCondition = "user = 'cartoonmed' ";
$objSelect = fncSelectRecord($strTable,$strCondition);
if(!$objSelect)
{
	echo "Record not found<br>";
}
else
{
	echo "Customer Detail.<br>";
	echo "CustomerID = $objSelect[member_id]<br>";
	echo "user = $objSelect[user]<br>";
	echo "Email = $objSelect[email]<br>";
	echo "name = $objSelect[name]<br>";
	echo "surname = $objSelect[surname]<br>";
	echo "gender = $objSelect[gender]<br>";
}

echo "<br>===========================<br>";



//**** Call to function update record ****//
/*
$strTable = "customer";
$strCommand = " BUDGET = '4000000' ";
$strCondition = " CustomerID = 'C005' ";
$objUpdate = fncUpdateRecord($strTable,$strCommand,$strCondition);
if(!$objUpdate)
{
	echo "Error update record.<br>";
}
else
{
	echo "Record updated.<br>";
}

echo "<br>===========================<br>";
*/


//**** Call to function delete record ****//
/*
$strTable = "customer";
$strCondition = " CustomerID = 'C005' ";
$objDelete = fncDeleteRecord($strTable,$strCondition);
if(!$objDelete)
{
	echo "Record not delete<br>";
}
else
{
	echo "Record deleted.<br>";
}

@mysql_close($objConnect);
*/
?>
</body>
</html>