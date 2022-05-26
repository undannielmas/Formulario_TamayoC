<?php

if($_POST){
    $name = $_POST['name'];
    $correo = $_POST['email'];
    $telefono = $_POST['phone'];
    $fecha_nacimiento = $_POST['born'];
    $nacionalidad = $_POST['nacionalidad'];
    $estado = $_POST['estado'];
    $estado_civil = $_POST['estado_civil'];
    $ciudad = $_POST['ciudad'];
    $firmante1 = $_POST['firmante1'];
    $firmante2 = $_POST['firmante2'];

}

use Dompdf\Dompdf;


ob_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato <?php echo $name; ?></title>
    <style>
    .container {
        color: black;
        text-align: justify;
        padding: 0 60px;
        font-size: 13px;
        font-family: Arial, Helvetica, sans-serif;

    }

    .bgimg {
        width: 100%;
        align: center;
        z-index: -10;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;
    }

    body {
        background-image: url(https://tamayocapital.com/wp-content/uploads/2022/05/mandara-contrato-logo.jpg);
        background-repeat: no-repeat;
        background-position: center;

    }


    li {
        line-height: 1.5;
        padding-bottom: 15px;

    }
    </style>

<body>
    <div class="container">
        <section style="padding-top: 20px"><span style="text-transform: uppercase;">CONTRATO DE MUTUO CON INTERÉS (EL
                “CONTRATO") QUE CELEBRAN POR SUS PROPIOS DERECHOS <strong> <?php echo $name; ?></strong>, A QUIEN EN LO
                SUCESIVO SE LE
                DENOMINARÁ COMO “EL MUTUANTE”; Y POR OTRA PARTE LA SOCIEDAD DENOMINADA GEOFIRMUS, S.A.P.I. DE C.V.,
                REPRESENTADA MANCOMUNADAMENTE EN ESTE ACTO POR <strong><?php echo $firmante1; ?></strong> y
                <strong><?php echo $firmante2; ?></strong>, A
                QUIEN EN LO SUCESIVO SE LE
                DENOMINARÁ COMO “EL MUTUATARIO”; A “EL MUTUANTE” Y “EL MUTUATARIO” CONJUNTAMENTE SE LES DENOMINARÁ “LAS
                PARTES” E INDISTINTAMENTE, UNA “PARTE”; CONTRATO CELEBRADO DE CONFORMIDAD CON LAS SIGUIENTES
                DECLARACIONES Y CLÁUSULAS:
            </span></section>

        <h3 style="text-align: center; text-decoration: underline;
        ">GLOSARIO DE TÉRMINOS </h3>

        <section>
            <ol type="1">
                <li>“EL MUTUANTE”: Persona física o moral que otorga en mutuo con interés una cantidad determinada de
                    dinero en favor de otra persona física o moral. Dicha cantidad al ser otorgada en mutuo con interés
                    debe ser liquidada en un plazo de tiempo determinado y bajo un interés legal o convencional.
                <li>“BENEFICIARIO”: Persona física de genero masculino o femenino que designa “EL MUTUANTE” en
                    relación a la cláusula de cesión de derechos advertida en el presente instrumento.
            </ol>
        </section>

        <h3 style="text-align: center; text-decoration: underline;
        ">DECLARACIONES </h3>

        <section>
            <p style="text-align: center;">I. Declara <strong>“EL MUTUANTE”</strong> por su propio derecho, bajo
                protesta de decir verdad:</p>
            <ol type="a">
                <li>a) Ser <?php echo $nacionalidad; ?>, mayor de edad, originario de <?php echo $ciudad ?>, <?php echo $estado ?>, <?php echo $estado_civil; ?> y en
                    su caso, régimen
                    conyugal, con fecha de nacimiento del día día de mes de año, Ocupación, al corriente en el pago del
                    Impuesto Sobre la Renta sin justificarlo de momento, inscrito en el Registro Federal de
                    Contribuyentes bajo la clave CLAVE RFC e inscrito en la Clave Única del Registro de Población bajo
                    la clave CLAVE CURP y con domicilio ubicado en la DATOS DEL DOMICILIO
                <li>Conoce el contenido y alcance legal de la Ley Nacional de Extinción de Dominio Reglamentaria del
                    artículo 22 de la Constitución Política de los Estados Unidos Mexicanos, publicada en el Diario
                    Oficial de la Federación el día 9 de agosto del 2019 por lo cual declara, bajo protesta de decir
                    verdad, que los recursos económicos que utilizará para la inversiónson de procedencia lícita y
                    comprobable.
                <li>Conoce el proyecto de la sociedad denominada <strong>GEOFIRMUS, S.A.P.I. DE C.V.,</strong> y tiene
                    interés en
                    invertir en el desarrollo y la construcción del proyecto, el importe a que se refiere el presente
                    contrato en los términos y condiciones que más adelante se señalan.
                <li>Que es la intención determinante de su voluntad, celebrar el presente contrato con <strong>“EL
                        MUTUATARIO”</strong>
                    en los términos y condiciones previstos en el presente contrato.
            </ol>
            <p style="text-align: center;">II. Manifiesta <strong>“EL MUTUATARIO”</strong> a través de sus apoderados,
                bajo protesta de decir verdad: :</p>
            <ol type="a">
                <li>Que su representada es una sociedad anónima constituida conforme a las leyes de la República
                    Mexicana, en términos de la Escritura Pública Número 170,756 de fecha 25 de marzo de 2019, otorgada
                    ante la fe del Licenciado Evaristo Ocañas Méndez, Notario Público No. 51 de la ciudad de Monterrey,
                    Nuevo León, cuyo primer testimonio ha quedado inscrito en el Registro Público del Comercio en el
                    folio mercantil electrónico número 2019031718, en la ciudad de Monterrey, Nuevo León el día 30 de
                    abril de 2019. Con Registro Federal de Contribuyentes GEO1903253W6, y domicilio fiscal ubicado en
                    Avenida Gómez Morín, número 900 interior 61, Colonia Carrizalejo, en la ciudad de San Pedro Garza,
                    García, Nuevo León, C.P. 66220.
                <li>Que justifican su personalidad con la Escritura Pública número 45,316, de fecha 16 de febrero de
                    2022, otorgada ante la fe del Licenciado Luis Carlos Guerra Aguiñaga, Notario Público Suplente en
                    funciones adscrito a la Notaría Pública número 147, en la ciudad de San Pedro Garza García, Nuevo
                    León, inscrita en el Registro Público de Comercio bajo el folio mercantil electrónico número
                    N-2019031718 en la ciudad de Monterrey, Nuevo León el día 22 de febrero de 2022. Mismas facultades
                    que a la fecha no les han sido revocadas ni limitadas de forma alguna y bajo ningún título. .
                <li>Su objeto social comprende, entre otras actividades, la captación de recursos para el desarrollo
                    de diversos desarrollos en sus diferentes modalidades..
                <li> Se invertirá el capital en el siguiente bien inmueble (en lo sucesivo “EL INMUEBLE”):
            </ol>
        </section>
    </div>
</body>

</html>

<?php
$html= ob_get_clean();
echo $html;



?>

require 'vendor/autoload.php';
$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("Contrato ".$name, array('Attachment'=>'0'));

$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);