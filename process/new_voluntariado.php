
<?php

      
require '../Conexion/conexion.php';

    
    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    
    
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
    
 $mensaje = ' 
Datos de voluntario

Nombres: '.$nombres.' 
Apellidos: '.$apellidos.' 
Cedula: '.$cedula.' 
Fecha de nacimiento: '.$fecha_nac.' 
Nacionalidad: '.$nacionalidad.' 
Telefono: '.$telefono.' 
Correo: '.$correo.' 
Nivel de estudios (actual): '.$nivel.' 
Especialidad: '.$especialidad.' 
Lugar de trabajo: '.$lugar_tra.' 
Cargo: '.$cargo_tra.'
Tiempo de voluntariado: '.$tiempo.'
Razones de voluntariado: '.$razones.'

';  


    


    

    if(!$nombres=="" && !$apellidos=="" &&  !$cedula=="" &&  !$fecha_nac==""&&  !$nacionalidad==""  &&
    !$telefono=="" &&  !$correo==""&&  !$nivel==""&& !$especialidad=="" && !$lugar_tra=="" && !$cargo_tra=="" && !$razones=="" ){
                      
                //inserta blog
                $sql = "INSERT INTO voluntariado (nombres, apellidos,cedula,fecha_nacimiento,nacionalidad, telefono,email,nivel_estudios,especialidad, lugar_trabajo, cargo_trabajo, razones_vol, tiempo_vol) VALUES 
                (:nombres, :apellidos,:cedula, :fecha, :nacionalidad, :telefono, :correo, :nivel , :especialidad, :lugar_tra, :cargo_tra, :razones, :tiempo)";
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
                $stmt->bindParam(':tiempo', $tiempo);

                
               
               
                if ($stmt->execute()) {
                   

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'mail.camilasalome.org';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'info@camilasalome.org';                 // SMTP username
                $mail->Password = 'camila140698';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to

                $mail->setFrom('info@camilasalome.org', 'Camila Salome');    
                $mail->addAddress($correo, $nombres);   
                $mail->addAddress('info@camilasalome.org',);    

                $mail->Subject = 'Nuevo Voluntario';
                $mail->Body = $mensaje ;
                if(!$mail->send()) {

                    echo'<script type="text/javascript">
                    alert("Voluntario no enviado");
                    window.location.href="../voluntariado.php";
                    </script>';

                } else {
                    echo'<script type="text/javascript">
                    alert("Voluntariado enviado con exito");
                    window.location.href="../index.php";
                    </script>';
                    
                
                }
            }
            }

     
    
?>
             