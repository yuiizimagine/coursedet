<?
	/**** function connection to database ****/
	$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
	$objDB = mysql_select_db("coursedetdb");
	
	/**** function insert record ****/
	function fncInsertRecord($strTable,$strField,$strValue)
	{
			$strSQL = "INSERT INTO $strTable ($strField) VALUES ($strValue) ";
			return @mysql_query($strSQL);
	}

	/**** function select record ****/
	function fncSelectRecord($strTable,$strCondition)
	{
			$strSQL = "SELECT * FROM $strTable WHERE $strCondition ";
			$objQuery = @mysql_query($strSQL);
			return @mysql_fetch_array($objQuery);
	}
	
	/**** function Max select record ****/
	function fncSelectMAXRecord($strTable,$field)
	{
			$strSQL = "SELECT * FROM $strTable ORDER BY $field DESC LIMIT 1";
			//$strSQL = "SELECT $id FROM $strTable WHERE $field=$maxPoint";
			$objQuery = @mysql_query($strSQL);
			return @mysql_fetch_array($objQuery);
	}
	
	/**** function select record ****/
	function fncSelectColumnRecord($strTable,$strColumn)
	{
			$strSQL = "SELECT $strColumn FROM $strTable";
			return @mysql_query($strSQL);
	}
	
	/**** function select all record ****/
	function fncSelectAllRecord($strTable)
	{
			$strSQL = "SELECT * FROM $strTable ";
			return @mysql_query($strSQL);
	}
	
	/**** function select all record ****/
	function fncSelectAllRecordOrder($strTable, $order)
	{
			$strSQL = "SELECT * FROM $strTable ORDER BY $order DESC";
			return @mysql_query($strSQL);
	}

	/**** function update record ****/
	function fncUpdateRecord($strTable,$strCommand,$strCondition)
	{
			$strSQL = "UPDATE $strTable SET  $strCommand WHERE $strCondition ";
			return @mysql_query($strSQL);
	}

	/**** function delete record ****/
	function fncDeleteRecord($strTable,$strCondition)
	{
			$strSQL = "DELETE FROM $strTable WHERE $strCondition ";
			return @mysql_query($strSQL);
	}

?>