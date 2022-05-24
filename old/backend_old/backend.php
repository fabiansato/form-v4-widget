<?php

    $error = '';

    // declaración de variables

    $first_name = '';
    $last_name = '';
    $email = '';
    $cuit_cuil_dni = '';
    $cellphone = '';

    $equipo = "river_plate";

    $con_que_frecuencia_usas_desodorante = '';
    $como_calificarias_tu_nivel_de_transpiracion_habitual = '';
    $que_nivel_de_actividad_tenes_en_tu_vida_diaria = '';
    $cuales_son_tus_barreras_para_hacer_actividad_fisica = '';

    $mayor_18_anos = '';
    $allow_global = '';
    $allow_brand = '';
    $acepto_bases_y_condiciones = '';

    //datos que recibe del cliente:


    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $cuit_cuil_dni = $_POST["cuit_cuil_dni"];
    $cellphone = $_POST["cellphone"];

   $con_que_frecuencia_usas_desodorante = $_POST["con_que_frecuencia_usas_desodorante"];
   $como_calificarias_tu_nivel_de_transpiracion_habitual = $_POST["como_calificarias_tu_nivel_de_transpiracion_habitual"];
   $que_nivel_de_actividad_tenes_en_tu_vida_diaria = $_POST["que_nivel_de_actividad_tenes_en_tu_vida_diaria"];
   $cuales_son_tus_barreras_para_hacer_actividad_fisica = $_POST["cuales_son_tus_barreras_para_hacer_actividad_fisica"];

    $utm_source = $_POST["utm_source"];
    $utm_medium = $_POST["utm_medium"];
    $utm_campaign = $_POST["utm_campaign"];
    $utm_term = $_POST["utm_term"];
    $utm_content = $_POST["utm_content"];



//validar mayor18
if (isset($_POST["mayor_18_anos"]))
{
    $mayor_18_anos = $_POST["mayor_18_anos"];
    if ($mayor_18_anos == 1)
    {
        $mayor_18_anos = 1;
    }
    else
    {
        $mayor_18_anos = 0;

    }
}

//validar allow brand
if (isset($_POST["allow_brand"]))
{
    $allow_brand = $_POST["allow_brand"];
    if ($allow_brand == 1)
    {
        $allow_brand = 1;
    }
    else
    {
        $allow_brand = 0;
    }
}



//validar allow global
if (isset($_POST["allow_global"]))
{
    $allow_global = $_POST["allow_global"];
    if ($allow_global == 1)
    {
        $allow_global = 1;
    }
    else
    {
        $allow_global = 0;
    }
 }


//validar allow global
if (isset($_POST["acepto_bases_y_condiciones"]))
{
    $acepto_bases_y_condiciones = $_POST["acepto_bases_y_condiciones"];
    if ($acepto_bases_y_condiciones == 1)
    {
        $acepto_bases_y_condiciones = 1;
    }
    else
    {
        $acepto_bases_y_condiciones = 0;
    }
}

include ("conectar.php");

    //datos enviados a la base de datos
    mysqli_query($conexion, "INSERT INTO `Doveriver` (

`first_name`,
`last_name`,
`email`,
`cuit_cuil_dni`,
`cellphone`,

`con_que_frecuencia_usas_desodorante`,
`como_calificarias_tu_nivel_de_transpiracion_habitual`,
`que_nivel_de_actividad_tenes_en_tu_vida_diaria`,
`cuales_son_tus_barreras_para_hacer_actividad_fisica`,

`utm_source`,
`utm_medium`,
`utm_campaign`,
`utm_term`,
`utm_content`,

`mayor_18_anos`,
`allow_global`,
`allow_brand`,
`acepto_bases_y_condiciones`

) VALUES(

'$first_name',
'$last_name',
'$email',
'$cuit_cuil_dni',
'$cellphone',

'$con_que_frecuencia_usas_desodorante',
'$como_calificarias_tu_nivel_de_transpiracion_habitual',
'$que_nivel_de_actividad_tenes_en_tu_vida_diaria',
'$cuales_son_tus_barreras_para_hacer_actividad_fisica',


'$utm_source',
'$utm_medium',
'$utm_campaign',
'$utm_term',
'$utm_content',


'$mayor_18_anos',
'$allow_global',
'$allow_brand',
'$acepto_bases_y_condiciones')");



//datos de bunker
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://ar.eagle-latam.com/api/v4/consumers',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => "{

        \"first_name\": \"$first_name\",\r\n
        \"last_name\": \"$last_name\",\r\n
        \"email\": \"$email\",\r\n
        \"cuit_cuil_dni\": \"$cuit_cuil_dni\",\r\n
        \"cellphone\": \"$cellphone\",\r\n

        \"equipo_de_futbol\": \"$equipo\",\r\n

        \"con_que_frecuencia_usas_desodorante\": \"$con_que_frecuencia_usas_desodorante\",\r\n
        \"como_calificarias_tu_nivel_de_transpiracion_habitual\": \"$como_calificarias_tu_nivel_de_transpiracion_habitual\",\r\n
        \"que_nivel_de_actividad_tenes_en_tu_vida_diaria\": \"$que_nivel_de_actividad_tenes_en_tu_vida_diaria\",\r\n
        \"cuales_son_tus_barreras_para_hacer_actividad_fisica\": \"$cuales_son_tus_barreras_para_hacer_actividad_fisica\",\r\n

        \"utm_source\": \"$utm_source\",\r\n
        \"utm_medium\": \"$utm_medium\",\r\n
        \"utm_campaign\": \"$utm_campaign\",\r\n
        \"utm_term\": \"$utm_term\",\r\n
        \"utm_content\": \"$utm_content\",\r\n

        \"mayor_18_anos\": \"$mayor_18_anos\",\r\n
        \"allow_global\": \"$allow_global\",\r\n
        \"allow_brand\": \"$allow_brand\",\r\n
        \"acepto_bases_y_condiciones\": \"$acepto_bases_y_condiciones\"\r\n

    }",

        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
        "Authorization: Bearer 2e2689ac453479f8949fe66fa6114bc79a15849e"
        // OK! Dove Verano PROMO y river


        ) ,
    ));

    $response = curl_exec($curl);


    curl_close($curl);
    echo $response;

    //sleep(2);
    //header("Location: ../exito.html");

    ?>
