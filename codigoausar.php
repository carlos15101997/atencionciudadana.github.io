<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        if ($nombre1 != "") {



if (copy($ruta1, $destino1)) {



    $query4 = mysqli_query($con,"INSERT INTO archivo (Id_Archivo, Id_Aviso, Tamanio, Tipo, Nombre, Tipe) VALUES (NULL, '$idAviso', '$tamanio1', '$tipo1', '$nombre1', 'Reporte');");



}



}







if ($nombre2 != "") {



if (copy($ruta2, $destino2)) {



    $query5 = mysqli_query($con,"INSERT INTO archivo (Id_Archivo, Id_Aviso, Tamanio, Tipo, Nombre, Tipe) VALUES (NULL, '$idAviso', '$tamanio2', '$tipo2', '$nombre2','Reporte');");



}



}







} else {



$errors[] .= " Error ";



}



}else{



$errors[] .= "<strong>Debe subir al menos una foto para continuar. </strong><br> ";



}







if ($query) {







$mensaje= "<img src='http://secplanquillota.cl/alcalde_Terreno/img/logoQuillota.png' width='200px'>";



$mensaje.= "<br><br>Reporte en recepción";



$mensaje.= "<br><br>Estimad@ ". $login_session;



$mensaje.= "<br>El reporte se recibió con éxito, dentro de los próximos 5 días le informaremos.";



$mensaje.= "<br><br>Gracias por ayudarnos a hacer un Quillota mejor.";







$destino= $_SESSION['Email'];







$remitente = "From: Alcalde en Terreno<carlos.ruiz@quillota.cl> \n";



$remitente .= "Content-Type: text/html; charset=iso-8859-1\n";







$asunto = "Mensaje enviado por Alacalde en Terreno";



mail($destino,$asunto,$mensaje,$remitente);







$queryMail = mysqli_query($con,"SELECT Nombre, Apellidos, Email FROM usuario WHERE Id_Oficina = 1 AND Rol <> 3 AND Rol <> 4 ;");







while($rowMail = mysqli_fetch_array($queryMail)){



$mailFun = $rowMail['Email'];



$funcionario = $rowMail['Nombre'] . ' ' . $rowMail['Apellidos'];







$mensajeFun= "<img src='http://secplanquillota.cl/alcalde_Terreno/img/logoQuillota.png' width='200px'>";



$mensajeFun.= "<br><br>Reporte en recepción";



$mensajeFun.= "<br><br>Estimad@ ". $funcionario;



$mensajeFun.= "<br>Se ha registrado un reporte de ". $tipo .",dentro de los proximos 5 dias se debe dar respuesta de ello.";



$mensajeFun.= "<br><br>Gracias por ayudarnos a hacer un Quillota mejor.";







$destino= $mailFun;







$remitente = "From: Alcalde en Terreno<carlos.ruiz@quillota.cl> \n";



$remitente .= "Content-Type: text/html; charset=iso-8859-1\n";







$asunto = "Mensaje enviado por Alcalde en Terreno";



mail($destino,$asunto,$mensajeFun,$remitente);







}







$messages[] = "Reporte recibido con exito, en los proximos 5 días recibira respuesta.";



} else {



$errors[] .= "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";



}







} else 



{



$errors[] = "desconocido.";



}



}
    </script>
    
    <script type="text/javascript">



function activarDescripcion(){



    var select = document.getElementById('motivo');



    var desc = document.getElementById('descripcion');



    if(select.value == "Otro"){



        desc.type = 'text';



        desc.setAttribute('required','');



    }else{



        desc.type = 'hidden';



        desc.removeAttribute('required');



    }



}







$(document).ready(function () {



    $('#foto1').hide();



    $('#foto2').hide();



    $('#delete1').hide();



    $('#delete2').hide();



    $('#add_file1').hide();



    



    $("#sidebar").mCustomScrollbar({



        theme: "minimal"



    });







    $('#dismiss, .overlay').on('click', function () {



        $('#sidebar').removeClass('active');



        $('.overlay').fadeOut();



    });







    $('#sidebarCollapse').on('click', function () {



        $('#sidebar').addClass('active');



        $('.overlay').fadeIn();



        $('.collapse.in').toggleClass('in');



        $('a[aria-expanded=true]').attr('aria-expanded', 'false');



    });



    



    $("#add_file").click(function(){



        



        $('#foto1').show();



        $('#delete1').show();



        $('#add_file1').show();



        $('#add_file').hide();



        



    });



    



    $("#add_file1").click(function(){



        



        $('#foto2').show();



        $('#delete2').show();



        $('#add_file1').hide();



        $('#delete1').hide();



        



    });



    



    $("#delete1").click(function(){



        



        $('#foto1').hide();



        $('#delete1').hide();



        $('#add_file').show();



        $('#delete1').hide();



        $('#add_file1').hide();



        document.getElementById('foto1').value = "";



        



    });



    



    $("#delete2").click(function(){



        



        $('#foto2').hide();



        $('#delete2').hide();



        $('#add_file1').show();



        $('#delete1').show();



        document.getElementById('foto2').value = "";



        



    });







    $(document).on('click', '.delete_file', function(){



        $(this).parent().hide();



    });



    



});



       </script>
</body>
</html>