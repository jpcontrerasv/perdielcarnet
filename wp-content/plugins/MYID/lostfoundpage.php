<?php
/*$adminemail=get_option("admin_email");
$headers = "From: {$adminemail}" ;
mail("contacto@perdielcarnet.cl","My subject","sdfs",$headers);*/
	if(isset($_REQUEST['hwesubmit']))
	{
		$idnumber = $_REQUEST['rutperdido'];
		$lostemail = $_REQUEST['mailperdido'];
		
		global $wpdb;
		$prefix = $wpdb->prefix;
		$tableuser = $prefix."lostfound";
		$query = "Select * from $tableuser where idnumber ='$idnumber'";
		$result = mysql_query($query);
		if($result)
		{
		while($row = mysql_fetch_array($result))
		{
			 $id = $row['id'];
			 $foundemailid= $row['foundemailid'];
		}
		}
		
	 	$row_cnt = mysql_num_rows($result);
		// echo $row_cnt;
		if($row_cnt == 0)
		{
			$query1 = "insert into $tableuser set lostemailid = '$lostemail', idnumber= '$idnumber'";
 	//	 echo $query1;
			$result1 = mysql_query($query1);
		//	echo $result1;
		?>
		<div id="error" class="box fwidth ">
            	<div class="box fwidth text-center">
                	<i class="fa fa-exclamation-triangle fa-3x"></i>
                
            	<p>#penita, aún nadie encuentra tu carnet. Te recomendamos ir a sacar uno nuevo al <a href="https://www.registrocivil.cl/" target="_blank">Registro civil</a>. Te avisaremos si pasa algo ;)</p></div>
            </div>
		<?php
		}
		elseif($foundemailid)
		{
			$query1 = "update $tableuser set lostemailid ='$lostemail' where id= '$id'" ; 
				//echo $query1;
				$result1 = mysql_query($query1);
				?>
				<div id="exito" class="box fwidth ">
				<div class="box fwidth text-center">
				<i class="fa fa-smile-o fa-3x"></i>
				
				<p>¡Que suerte, alguien encontró tu carnet! Revisa tu correo registrado para ponerte en contacto.</p></div>
				</div>
				<?php
				
				$admin_email =get_option('admin_email');
				$to = $lostemailid;
				$subject = "¡Encontramos tu Carnet!";
				$txt = "Alguien con el correo ".$foundemail." encontró tu carnet, contactalo :)";
				
				$headers = "From: <".$admin_email.">";
				mail($to,$subject,$txt);
			
		}
		else
		{
		?>
		<div id="error" class="box fwidth">
            	<div class="box fwidth text-center">
                	<i class="fa fa-exclamation-triangle fa-3x"></i>
                
            	<p>#penita, aún nadie encuentra tu carnet. Te recomendamos ir a sacar uno nuevo al <a href="https://www.registrocivil.cl/" target="_blank">Registro civil</a>. Te avisaremos si pasa algo ;)</p></div>
            </div>
		
		<?php
		
		}
	
	}
	if(isset($_REQUEST['hwesubmit1']))
	{
		$idnumber = $_REQUEST['rut'];
		$foundemail = $_REQUEST['mail'];
		
		global $wpdb;
		$prefix = $wpdb->prefix;
		$tableuser = $prefix."lostfound";
		$query = "Select * from $tableuser where idnumber ='$idnumber'";
		$result = mysql_query($query);
		if($result)
		{
		while($row = mysql_fetch_array($result))
		{
			 $id = $row['id'];
			 $lostemailid= $row['lostemailid'];
		}
		}
		
	 	$row_cnt = mysql_num_rows($result);
		// echo $row_cnt;
		if($row_cnt == 0)
		{
			$query1 = "insert into $tableuser set foundemailid = '$foundemail', idnumber= '$idnumber'";
 	//	 echo $query1;
			$result1 = mysql_query($query1);
		//	echo $result1;
		?>
		<div id="exito" class="box fwidth ">
				<div class="box fwidth text-center">
				<i class="fa fa-smile-o fa-3x"></i>
				
				<p>Nadie ha preguntado por este carnet aún, te avisaremos</p></div>
				</div>
		<?php
		
		}
		else 
		{
			$query1 = "update $tableuser set foundemailid ='$foundemail' where id= '$id'" ; 
			//echo $query1;
			$result1 = mysql_query($query1);
			
				?>
		<div id="exito" class="box fwidth ">
				<div class="box fwidth text-center">
				<i class="fa fa-smile-o fa-3x"></i>
				
				<p>¡Que suerte! Alguien preguntó por este carnet, le enviaremos tu email para que te contacte.</p></div>
				</div>
		<?php
		
			
			$admin_email =get_option('admin_email');
			$to = $lostemailid;
			$subject = "¡Encontramos tu Carnet!";
			$txt = "Alguien con el correo ".$foundemail." encontró tu carnet, contactalo :)";
			//$headers = "MIME-Version: 1.0" . "\r\n";
		    //$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		    $headers .= "From: <".$admin_email.">";
 			mail($to,$subject,$txt);
			
		}
	}
?>

<?php $pluginpath=WP_CONTENT_URL."/plugins/MYID"; ?>

    <link href="<?PHP echo $pluginpath; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?PHP echo $pluginpath; ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?PHP echo $pluginpath; ?>/style.css" rel="stylesheet">
 
	
  	<div class="container">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
        	 <button type="button" class="btn btn-default fwidth encontrarcarnet">Perdí mi Carnet</button>
             
             <div class="box fwidth div-perdi" style="display:none;">
			 <form id="formperdido" method="post">
             <!--comentario-->
             	<label for="rutperdido">Ingresa el rut de tu carnet perdido</label>
             	<input type="text" name="rutperdido" id="rutperdido" placeholder="Ej: 15.962.195-2" class="required rut">  

             	<label for="mailperdido">Ingresa un correo (en caso de que alguien lo encuentre)</label>
             	<input type="email" name="mailperdido" placeholder="Por un correo que revises frecuentemente" class="required">
                
                <input type="submit" name="hwesubmit" class="suerte" value="Voy a tener suerte">
			</form>
			</div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
             <button type="button" class="btn btn-default fwidth subircarnet">Encontré un Carnet</button>
             
             <div class="box fwidth div-encontre" style="display:none;">
             	<form method="post">
                    <label for="rut">Ingresa el rut del carnet que encontraste</label>
                    <input type="text" id="rutencontrado" name="rut" placeholder="Ej: 15.962.195-2">
                    
                    <label for="mail">Ingresa un mail para que te contacten</label>
                    <input type="email" name="mail" placeholder="Ingresa un correo para que te contacten">
                    
                    <input type="submit" name="hwesubmit1" value="Listo, registrar carnet perdido">
                </form>
             </div>
        </div>
        <div class="clearfix"></div>
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?PHP echo $pluginpath; ?>/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
    <script src="<?PHP echo $pluginpath; ?>/js/jquery.Rut.js"></script>
    <script src="<?PHP echo $pluginpath; ?>/js/scripts.js"></script>
 