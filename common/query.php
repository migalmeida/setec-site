<?php

	include_once ("common/session.php");
	include_once ("common/database.php");

class query {

	function getMaxMinTempAir()
	{
		global $conn;
		$query = "SELECT pandlet, date, MAX(tempair), MIN(tempair) FROM readings GROUP BY pandlet, date order by date limit 30";
		$result = pg_exec($conn, $query);
		return $result;
	}

	function getMaxMinTempSoil()
	{
		global $conn;
		$query = "SELECT pandlet, date, MAX(tempsoil), MIN(tempsoil) FROM readings GROUP BY pandlet, date order by date limit 30";
		$result = pg_exec($conn, $query);
		return $result;
	}

	function getMaxMinHumAir()
	{
		global $conn;
		$query = "SELECT pandlet, date, MAX(humair), MIN(humair) FROM readings GROUP BY pandlet, date order by date limit 30";
		$result = pg_exec($conn, $query);
		return $result;
	}

	function getMaxMinHumSoil()
	{
		global $conn;
		$query = "SELECT pandlet, date, MAX(humsoil), MIN(humsoil) FROM readings GROUP BY pandlet, date order by date limit 30";
		$result = pg_exec($conn, $query);
		return $result;
	}
}

?>