<?php
//declarando las variables

$error = '';


$nombre = '';
$apellido = '';
$email = '';
$telefono = ' ';

$birthday = '';

$mayor_18_anos = '';
$allow_global = '0'; 
$allowbrand = '0';
$acepto_bases_y_condiciones = '';

$sielegisteotro = '';

$residency = '';

$porquenolovolveriasacomprar = '';
$cuerpo = '';

$porquerazonloelegiste = '';

$comoloconocisteotro = '';
$comoloconocistefinal = '';
$porquerazonloelegisteotra = '';
$xqrazonelegiste = '';

  /* provincia*/
  $provincia = $_POST["provincia"];
  $provinciae = filter_var($provincia, FILTER_SANITIZE_STRING);
  $provincia = trim($provincia);


    $nombre = $_POST["nombre"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $nombre = trim($nombre);


	
	  $apellido = $_POST["apellido"];
    $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    $apellido = trim($apellido);   

    



    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $email = trim($email); 

    $birthday = $_POST["birthday"];
    $birthday = filter_var($birthday, FILTER_SANITIZE_STRING);
    $birthday= trim($birthday);

    //transforma los datos de birthday final a la forma que envia bunker

    $birthdayfinal = date('Y-m-d', strtotime($birthday));
  
    /* corrobora si la persona es mayor de 18 años */
  

  	$comoloconociste = $_POST["comoloconociste"];
    $comoloconociste = filter_var($comoloconociste, FILTER_SANITIZE_STRING);
    $comoloconociste = trim($comoloconociste);



	  $comoloconocisteotro = $_POST["comoloconocisteotro"];
    $comoloconocisteotro = filter_var($comoloconocisteotro, FILTER_SANITIZE_STRING);
    $comoloconocisteotro = trim($comoloconocisteotro);

    $comoloconocistefinal = $comoloconociste." ".$comoloconocisteotro;

    /* */
  	$porquerazonloelegiste = $_POST["porquerazonloelegiste"];
    $porquerazonloelegiste = filter_var($porquerazonloelegiste, FILTER_SANITIZE_STRING);
    $porquerazonloelegiste = trim($porquerazonloelegiste);


    
	  $porquerazonloelegisteotra = $_POST["porquerazonloelegisteotra"];
    $porquerazonloelegisteotra = filter_var($porquerazonloelegisteotra, FILTER_SANITIZE_STRING);
    $porquerazonloelegisteotra = trim($porquerazonloelegisteotra);

    $xqrazonelegiste = $porquerazonloelegiste;  //." ".$porquerazonloelegisteotra;
	
    $fueronclaraslasinstrucciones = $_POST["fueronclaraslasinstrucciones"];
    $fueronclaraslasinstrucciones = filter_var($fueronclaraslasinstrucciones, FILTER_SANITIZE_STRING);
    $fueronclaraslasinstrucciones = trim($fueronclaraslasinstrucciones);

    if ($fueronclaraslasinstrucciones == "Si"){
      $fueronclaraslasinstrucciones = 1;
    } else{
      $fueronclaraslasinstrucciones = 0;
    }
    $fueronclaras = $fueronclaraslasinstrucciones;

	  $residency = $_POST["residency"];
    $residency = filter_var($residency, FILTER_SANITIZE_STRING);
    $residency = trim($residency);
    if ($residency == "Si"){
      $residency = 1;
    }else {
      $residency = 0;
    }

    $porquenolovolveriasacomprar = $_POST["porquenolovolveriasacomprar"];
    $porquenolovolveriasacomprar = filter_var($porquenolovolveriasacomprar, FILTER_SANITIZE_STRING);
    $porquenolovolveriasacomprar = trim($porquenolovolveriasacomprar);
    $porquenocomprar = $porquenolovolveriasacomprar;

    $sugerencia = $_POST["sugerencia"];
    $sugerencia = filter_var($sugerencia, FILTER_SANITIZE_STRING);
    $sugerencia = trim($sugerencia);

    $tegustonuevoDove = $_POST["tegustonuevoDove"];
    $tegustonuevoDove = filter_var($tegustonuevoDove, FILTER_SANITIZE_STRING);
    $tegustonuevoDove = trim($tegustonuevoDove);

    if ($tegustonuevoDove == "Si"){
    $tegustonuevoDove = 1; 
  }  else{
    $tegustonuevoDove = 0; 
  }



//validar mayor18
if (isset($_POST["mayor18"])){
$mayor_18_anos = $_POST["mayor18"];
if ($mayor_18_anos == 1){
  $mayor_18_anos = 1;
}else {
    $mayor_18_anos = 0;
    
}}

//validar allow brand
if (isset($_POST["brand"])){
$allowbrand = $_POST["brand"];
if ($allowbrand == 1){
  $allowbrand = 1;
}else {  $allowbrand = 0;}}

//validar allow global
if (isset($_POST["global"])){
$allow_global = $_POST["global"];
if ($allow_global == 1){
  $allow_global = 1;
}else {  $allow_global = 0;}}

//validar acepto_bases_y_condiciones
if (isset($_POST["byc"])){
$acepto_bases_y_condiciones = $_POST["byc"];
if ($acepto_bases_y_condiciones == 1){
  $acepto_bases_y_condiciones = 1;
}else {  $acepto_bases_y_condiciones = 0;}}

$byc = $acepto_bases_y_condiciones;

//guarda el mail del administrador
$mailmio = "modalsurveyus@gmail.com";
//asunto del mensaje
$asunto = "Formulario Dove Verano Enviado con éxito";
//Guarda la info para enviar al mail del administrador
$mensajemio = 
"Nombre: ".$nombre." 
"."Apellido: ".$apellido." 
"."Telefono: ".$email." 
"."Email: ".$email." 
"."Fecha de nacimiento: ".$birthdayfinal." 
"."Lugar de residencia: ".$provincia." 
"."Te gustó el nuevo Dove Verano?: ".$tegustonuevoDove." 
"."Como lo conociste: ".$comoloconociste." 
"."como lo conociste otro: ".$comoloconocisteotro." 
"."porque razon lo elegiste: ".$xqrazonelegiste." 
"."fueron claras las instrucciones: ".$fueronclaras." 
"."Lo volverias a comprar: ".$residency." 
"."Por que no lo volverias a comprar?: ".$porquenocomprar." 
"."Dejanos una sugerencia: ".$sugerencia." 
"."Soy mayor de 18: ".$mayor_18_anos." 
"."Acepto que Dove: ".$allowbrand." 
"."Acepto que unilever: ".$allow_global." 
"."Acepto bases y condiciones: ".$byc." 
";

//ENVIAR CORREO
if($error == ''){
 

//guarda el mensaje para enviar al usuario satisfactoriamente
//$mensajeusuario = "¡Ya estás participando para Dove Verano!";

//
mail ($mailmio, $asunto, $mensajemio);

//conexion con la base y seleccion de la basede datos
include ("../conect.php");


$timestamp = time();


date_default_timezone_set('America/Argentina/Buenos_Aires');
$lafecha = date('Y/m/d', $timestamp);
$hora = date('h:i:s', $timestamp);


//ejecución de la sentencia sql
/* VALUES
('Fabian', 'Gonzalez', 'fabiansato@gmail.com', '1986-07-08', 0, 'otro', 'por la tele', 'por su olor', 1, 0, 'me gusta', 'asdasdasdasdasdsad', 1, 1, 1, 1);
*/
mysqli_query($conexion, "INSERT INTO `Dovediluir` (`first_name`, `last_name`, `phone`, `email`, `birthday`, `te_gusto_el_nuevo_Dove_para_diluir`, `como_lo_conociste`, `si_respondiste_otro_cual`, `por_que_razon_lo_elegiste`, `fueronclaraslasinstrucciones`, `lo_volverias_a_comprar`, `en_caso_que_la_respuesta_haya_sido_que_no_por_que`, `te_gustaria_darnos_alguna_sugerencia`, `mayor_18_anos`, `allow_global`, `allow_brand`, `acepto_bases_y_condiciones`,`adress_state`,`dia`,`hora`) VALUES 
('$nombre', '$apellido', '$telefono', '$email', '$birthdayfinal', '$tegustonuevoDove', '$comoloconociste', '$comoloconocisteotro', '$xqrazonelegiste', '$fueronclaras', '$residency', '$porquenocomprar', '$sugerencia', '$mayor_18_anos', '$allowbrand', '$allow_global', '$byc', '$provincia','$lafecha','$hora')");


//agregar si quiere recibir el usuario un mail
//mail ($email, $asunto, $mensajeusuario);

//Envio del JSON
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://ar.eagle-latam.com/api/v4/consumers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 1,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>" {
      \r\n    
     \"first_name\": \"$nombre\",
     \"last_name\": \"$apellido\",
     \"phone\": \"$telefono\",
     \"email\": \"$email\",
     \"birthday\": \"$birthdayfinal\",
     \"address_state\": \"$provincia\",
     \"te_gusto_el_nuevo_Dove_para_diluir\": \"$tegustonuevoDove\",
     \"como_lo_conociste\": \"$comoloconociste\",
     \"si_respondiste_otro_cual\": \"$comoloconocisteotro\",
     \"por_que_razon_lo_elegiste\": \"$xqrazonelegiste\", 
     \"fueron_claras_las_instrucciones_de_uso\": \"$fueronclaras\",
     \"lo_volverias_a_comprar\": \"$residency\",
     \"en_caso_que_la_respuesta_haya_sido_que_no_por_que\": \"$porquenocomprar\",
     \"te_gustaria_darnos_alguna_sugerencia\":  \"$sugerencia\", 
     \"mayor_18_anos\": \"$mayor_18_anos\",
     \"allow_global\": \"$allowbrand\",
     \"allow_brand\": \"$allow_global\",
     \"acepto_bases_y_condiciones\": \"$byc\"\r\n
    }",

    
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Authorization: Bearer 1c1368bfeda82df1ce4d1a3c05ddd38759a3a20f" //Api de Dove SOu para diluir todo joya!
      ),
    ));
    
    $response = curl_exec($curl);
     //  echo $response;


  

    

    //Seccion de conexion con bdd
    



 // header("Location: ../exito.html");

    

}else{
    echo $error;
    echo "No se pudo mandar el formulario";
}

// ---


  //print json en pantalla

 


    curl_close($curl);




    echo '----Resultados------</br>';
    echo "Nombre ".$nombre."</br>";
    echo "Apellido ".$apellido."</br>";
    echo "Telefono ".$telefono."</br>";
    echo "Email ".$email."</br>";
 
    echo "Fecha de nacimiento: ".$birthdayfinal."</br>";
    echo "FLugar de residencia: ".$provincia."</br>";
    
    echo "¿Te gustó el nuevo Dove Verano? : ".$tegustonuevoDove."</br>";
    echo "¿Cómo lo conociste?: ".$comoloconociste."</br>";
    echo "Si respondiste otro ¿Cual?: ".$comoloconocisteotro."</br>"; 
    echo "¿Por qué razón lo elegiste?: ".$porquerazonloelegiste."</br>";
    echo "Si razón elegiste ¿Cual?: ".$porquerazonloelegisteotra."</br>"; 

    echo "¿Fueron claras las instrucciones de uso?: ".$fueronclaras."</br>";
    echo "¿Lo volverías a comprar? ".$residency."</br>";
    echo "En caso no lo volverías a comprar ¿Por qué? : ".$porquenocomprar."</br>";

    echo "¿Te gustaría darnos alguna sugerencia?: ".$sugerencia."</br>";



    echo "Mayor 18?: ".$mayor_18_anos."</br>";
    echo "Acepta marca mande?: ".$allowbrand."</br>";
    echo "Acepta Unilever mande?: ".$allow_global."</br>";
    echo "Acepta bases y condiciones?: ".$byc."</br>";



?>  