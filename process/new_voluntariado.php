
<?php

      
require '../Conexion/conexion.php';

    
    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail1 = new PHPMailer;
    
    
    $nombres= $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $cedula= $_POST['cedula'];
    $fecha_nac= $_POST['fecha_nacimiento'];
    $nacionalidad= $_POST['nacionalidad'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $nivel= $_POST['nivel_estudios'];
    $especialidad= $_POST['especialidad'];
    $lugar_tra= $_POST['lugar_trabajo'];
    $cargo_tra= $_POST['cargo_trabajo'];
    $razones= $_POST['razones_vol'];
    $tiempo= $_POST['tiempo_vol'];
    $actividades= $_POST['1actv']." ".$_POST['2actv']." ".$_POST['3actv']." ".$_POST['4actv']." ".$_POST['5actv']." ".$_POST['6actv']." ".$_POST['7actv']." ".$_POST['8actv']." ".$_POST['9actv'];
    $estado='y';
    $mensaje2='

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


<!--Copia desde aquí-->
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
	<tr>
		<td style="background-color: #ecf0f1; text-align: left; padding: 0">
			<a href="https://www.facebook.com/fundacioncamilasalome">
				<img width="20%" style="display:block; margin: 1.5% 3%" src="https://ecuadoruniversitario.com/wp-content/uploads/2018/09/Fundacion-Camila-Salome.jpg">
			</a>
		</td>
	</tr>


	
	<tr>
		<td style="background-color: #ecf0f1">
			<div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
				<h2 style="color: #e67e22; margin: 0 0 7px">Fundación Camila Salomé</h2>
				<p style="margin: 2px; font-size: 15px">
          !Gracias por ser parte del sueño de Camila Salomé!
          </p>
          <br>
          <br>
			
				<div style="width: 100%; text-align: center">
					<a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db" href="http://www.camilasalome.org">Ir a la página</a>	
				</div>
				<p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">Camila Salomé 2019</p>
			</div>
		</td>
	</tr>
</table>
<!--hasta aquí-->

</div>
</body>
</html>
    
  
';





    
    
 $mensaje = ' 
 


 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </head>
 <body>
 
 
 <!--Copia desde aquí-->
 <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
   <tr>
     <td style="background-color: #ecf0f1; text-align: left; padding: 0">
       <a href="https://www.facebook.com/fundacioncamilasalome">
         <img width="20%" style="display:block; margin: 1.5% 3%" src="https://ecuadoruniversitario.com/wp-content/uploads/2018/09/Fundacion-Camila-Salome.jpg">
       </a>
     </td>
   </tr>
 
 
   
   <tr>
     <td style="background-color: #ecf0f1">
     <h2 style="color: #e67e22; margin: 0 0 7px" >Fundacion Camila Salome</h2>
     <h3 style="color: #e67e22; margin: 0 0 7px" >Datos del voluntario</h3>
       <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
        
         <h5 style="color: #e67e22; margin: 0 0 7px">Nombres: <h6> '.$nombres.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Apellidos: <h6> '.$apellidos.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Cedula: <h6> '.$cedula.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Fecha de Nacimiento: <h6> '.$fecha_nac.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Nacionalidad: <h6> '.$nacionalidad.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Telefono: <h6> '.$telefono.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Correo: <h6> '.$correo.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Nivel de estudio (actual):<h6> '.$nivel.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Especialidad: <h6> '.$especialidad.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Lugar de trabajo: <h6> '.$lugar_tra.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Cargo que ejerce: <h6> '.$cargo_tra.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Tiempo de voluntariado: <h6> '.$tiempo.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Razones de voluntariado: <h6> '.$razones.' </h6></h5> 
         <h5 style="color: #e67e22; margin: 0 0 7px">Actividades en la que podia colaborar: <h6> '.$actividades.' </h6></h5> 
        
           <br>
           <br>
       
         <div style="width: 100%; text-align: center">
           <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db" href="http://www.camilasalome.org">Ir al sitio web</a>	
         </div>
         <p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">Camila Salomé 2019</p>
       </div>
     </td>
   </tr>
 </table>
 <!--hasta aquí-->
 
 </div>
 </body>
 </html>
  
';  


    


    

    if(!$nombres=="" && !$apellidos=="" &&  !$cedula=="" &&  !$fecha_nac==""&&  !$nacionalidad==""  &&
    !$telefono=="" &&  !$correo==""&&  !$nivel==""&& !$especialidad=="" && !$lugar_tra=="" && !$cargo_tra=="" && !$razones=="" && !$actividades=="" ){
                      
                //inserta blog
                $sql = "INSERT INTO volunteering (names, lastname, id, birthday, nationality, telephone, email, studies, specialty, place_work,workloads,reasons_vol, activities, time_vol, states) VALUES  
                (:nombres, :apellidos,:cedula, :fecha, :nacionalidad, :telefono, :correo, :nivel , :especialidad, :lugar_tra, :cargo_tra, :razones,:actividades ,:tiempo,:estado)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nombres', $nombres);
                $stmt->bindParam(':apellidos', $apellidos);
                $stmt->bindParam(':cedula', $cedula);
                $stmt->bindParam(':fecha', $fecha_nac);
                $stmt->bindParam(':nacionalidad', $nacionalidad);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':correo', $correo);
                $stmt->bindParam(':nivel', $nivel);
                $stmt->bindParam(':especialidad', $especialidad);
                $stmt->bindParam(':lugar_tra', $lugar_tra);
                $stmt->bindParam(':cargo_tra', $cargo_tra);
                $stmt->bindParam(':razones', $razones);
                $stmt->bindParam(':actividades', $actividades);
                $stmt->bindParam(':tiempo', $tiempo);
                $stmt->bindParam(':estado', $estado);

                
               
               
                if ($stmt->execute()) {
                   
//////////////////////////////email for admin////////////////////////////////////////////////////
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'mail.camilasalome.org';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'info@camilasalome.org';                 // SMTP username
                $mail->Password = 'camila140698';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to

                $mail->setFrom('info@camilasalome.org', 'Camila Salome');    
                
                $mail->addAddress('info@camilasalome.org',);    

                $mail->Subject = 'Nuevo Voluntario';
                $mail->Body = $mensaje ;
                $mail->IsHTML(true);   
                $mail->send();




                ////////////////////////Email por Client///////////////////////////////
                  $mail1->isSMTP();                                      // Set mailer to use SMTP
                  $mail1->Host = 'mail.camilasalome.org';  // Specify main and backup SMTP servers
                  $mail1->SMTPAuth = true;                               // Enable SMTP authentication
                  $mail1->Username = 'info@camilasalome.org';                 // SMTP username
                  $mail1->Password = 'camila140698';                           // SMTP password
                  $mail1->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                  $mail1->Port = 465;                                    // TCP port to connect to
  
                  $mail1->setFrom('info@camilasalome.org', 'Camila Salome');    
                  $mail1->addAddress($correo, $nombres);   
                  
  
                  $mail1->Subject = 'Nuevo Voluntario';
                  $mail1->Body = $mensaje2 ;
                  $mail1->IsHTML(true);   
                  

                if(!$mail1->send()) {

                  

                    echo'   
                    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                    
                    jQuery(function(){
                      
                      swal({type: "success",
                          title: "¡Error no se ha enviado tu Voluntariado!",
                          text: "Gracias",
                          timer: 3000
                          
                      }).then(function() {
                        window.location = "../voluntariado.php";
                      });
                  });

                    
                    </script>
              

            
              ';


                } else {
                  echo'
                   
                         
                          <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
                          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                          <script>
                          
                          jQuery(function(){
                            
                            swal({type: "success",
                                title: "¡Tu Voluntariado ha sido Enviado con exito!",
                                text: "Gracias",
                                timer: 3000
                                
                            }).then(function() {
                              window.location = "../voluntariado.php";
                            });
                        });

                          
                          </script>
                    

                  
                    ';
                    
                
                }
            }
            }

     
    
?>
             

           
                    