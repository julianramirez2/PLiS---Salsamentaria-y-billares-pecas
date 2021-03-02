<?php
	//---- Conexión a la BD ----//
    function db_query($query) {
		$connection = mysqli_connect("localhost","root","root","Prueba_Pecas");
		$result = mysqli_query($connection,$query);
		return $result;
	}

	//---- Borra los clientes guardados ----//
	function delete($TB_Name,$F_id,$ID){ 

		$sql = "DELETE FROM ".$TB_Name." WHERE ".$F_id."=".$ID."";
	
		return db_query($sql);
	}

	//---- Edita los clientes guardados ----//
	function edit($TB_Name,$F_Data,$F_id,$ID){
		$sql = "UPDATE ".$TB_Name." SET ";
		$data = array();
	
		foreach($F_Data as $column=>$value){
	
			$data[] =$column."="."'".$value."'";
	
		}
		$sql .= implode(',',$data);
		$sql.=" WHERE ".$F_id." = ".$ID."";
		return db_query($sql); 
	}

	//---- Selecciona el ID del cliente ----//
	function select_id($TB_Name,$F_Name,$F_id){
		$sql = "SELECT * FROM ".$TB_Name." WHERE ".$F_Name." = ".$F_id."";
		$db = db_query($sql);
		$GLOBALS['row'] = mysqli_fetch_object($db);
		return $sql;
	}
?>