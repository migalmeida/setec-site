<?php

	include_once ("common/session.php");
	include_once ("common/database.php");

class query {

	function getMaxMinTempAir($pandlet)
	{
		global $conn;
		$query = "SELECT pandlet, date, MAX(tempair), MIN(tempair) FROM readings WHERE pandlet = '$pandlet' GROUP BY pandlet, date order by date limit 30";
		//$query = "SELECT pandlet, date, MAX(tempair), MIN(tempair) FROM readings GROUP BY pandlet, date order by date limit 30";
		$result = pg_exec($conn, $query);
		return $result;
	}

	function getMaxMinTempSoil($pandlet)
	{
		global $conn;
		$query = "SELECT pandlet, date, MAX(tempsoil), MIN(tempsoil) FROM readings WHERE pandlet = '$pandlet' GROUP BY pandlet, date order by date limit 30";
		//$query = "SELECT pandlet, date, MAX(tempsoil), MIN(tempsoil) FROM readings GROUP BY pandlet, date order by date limit 30";
		
		$result = pg_exec($conn, $query);
		return $result;
	}

	function getMaxMinHumAir($pandlet)
	{
		global $conn;
		$query = "SELECT pandlet, date, MAX(humair), MIN(humair) FROM readings WHERE pandlet = '$pandlet' GROUP BY pandlet, date order by date limit 30";
		//$query = "SELECT pandlet, date, MAX(humair), MIN(humair) FROM readings GROUP BY pandlet, date order by date limit 30";
		$result = pg_exec($conn, $query);
		return $result;
	}

	function getMaxMinHumSoil($pandlet)
	{
		global $conn;
		$query = "SELECT pandlet, date, MAX(humsoil), MIN(humsoil) FROM readings WHERE pandlet = '$pandlet' GROUP BY pandlet, date order by date limit 30";
		//$query = "SELECT pandlet, date, MAX(humsoil), MIN(humsoil) FROM readings GROUP BY pandlet, date order by date limit 30";
		$result = pg_exec($conn, $query);
		return $result;
	}

	function getImages()
	{
		global $conn;
		$query = "SELECT image FROM readings WHERE image IS NOT NULL";
		$result = pg_exec($conn, $query);
		
		$index = 0;
		while($row = pg_fetch_assoc($result)){ // loop to store the data in an associative array.
		if(strlen($row['image'])>10)
		{
			$derp[$index] = "data:image/jpeg;base64," . base64_encode(pg_unescape_bytea($row["image"]));
			$index++;
		}
		}
		
		return $derp;
		//use pg_unescape_bytea to convert image to unescaped first
		// use imagecreatefromstring afterwards
	}
}

?>