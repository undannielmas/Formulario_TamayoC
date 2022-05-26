<?php

if($_POST){
    $name = $_POST['name'];
    $correo = $_POST['email'];
    $telefono = $_POST['phone'];
    $fecha_nacimiento = $_POST['born'];
    $nacionalidad = $_POST['nacionalidad'];
    $ocupacion = $_POST['work'];
    $estado_nacimiento = $_POST['estado_nacimiento'];
    $estado_civil = $_POST['estado_civil'];
    $regimen_conyugal = $_POST['regimen_conyugal'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $colonia = $_POST['colonia'];
    $codigo_postal = $_POST['cp'];
    $ciudad_actual = $_POST['ciudad_residencia'];
    $estado_actual = $_POST['estado'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];
    $ciudad = $_POST['ciudad'];
    $firmante1 = $_POST['firmante1'];
    $firmante2 = $_POST['firmante2'];
    $inversion = $_POST['inversion'];
    $inversion_letra = $_POST['inversion_letra'];

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
        font-size: 12px;
        letter-spacing: -0.2px;
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
        line-height: 12px;

    }
    </style>

<body>
    <div class="container">
        <section style="padding-top: 20px; line-height: 12px;"><span style="text-transform: uppercase;"><span
                    style="text-decoration: underline;"><strong>CONTRATO DE
                        MUTUO CON INTERÉS</span></strong> (EL
                “CONTRATO") QUE CELEBRAN POR SUS PROPIOS DERECHOS <strong> <?php echo $name; ?></strong>, A QUIEN EN LO
                SUCESIVO SE LE
                DENOMINARÁ COMO <strong>“EL MUTUANTE”</strong>; Y POR OTRA PARTE LA SOCIEDAD DENOMINADA
                <strong>GEOFIRMUS, S.A.P.I. DE C.V.</strong>,
                REPRESENTADA MANCOMUNADAMENTE EN ESTE ACTO POR <strong><?php echo $firmante1; ?></strong> y
                <strong><?php echo $firmante2; ?></strong>, A
                QUIEN EN LO SUCESIVO SE LE
                DENOMINARÁ COMO <strong>“EL MUTUATARIO”</strong>; A <strong>“EL MUTUANTE”</strong> Y <strong>“EL
                    MUTUATARIO”</strong> CONJUNTAMENTE SE LES DENOMINARÁ <strong>“LAS
                    PARTES”</strong> E INDISTINTAMENTE, UNA <strong>“PARTE”</strong>; CONTRATO CELEBRADO DE CONFORMIDAD
                CON LAS SIGUIENTES
                DECLARACIONES Y CLÁUSULAS:
            </span></section>

        <h3 style="text-align: center; text-decoration: underline;
        ">GLOSARIO DE TÉRMINOS </h3>

        <section style="line-height: 12px; letter-spacing: -0.2px;">
            <ol type="1">
                <li style="line-height: 12px;">“EL MUTUANTE”: Persona física o moral que otorga en mutuo con interés una
                    cantidad determinada de
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
                <li style="letter-spacing: -0.2px; line-height: 12px;">Ser <?php echo $nacionalidad; ?>, mayor de edad,
                    originario de <?php echo $ciudad ?>,
                    <?php echo $estado_nacimiento ?>, <?php echo $estado_civil; ?> y en
                    su caso, <?php echo $regimen_conyugal; ?>, con fecha de nacimiento del dia
                    <?php echo $fecha_nacimiento ?>, <?php echo $ocupacion; ?>, al corriente en el pago del
                    Impuesto Sobre la Renta sin justificarlo de momento, inscrito en el Registro Federal de
                    Contribuyentes bajo la clave <span style="text-transform: uppercase;"><?php echo $rfc; ?></span> e
                    inscrito en la Clave Única del Registro de
                    Población bajo
                    la clave <span style="text-transform: uppercase;"><?php echo $curp; ?></span> y con domicilio
                    ubicado en la Calle <?php echo $calle ?>, número <?php echo $numero ?>, Colonia
                    <?php echo $colonia ?>, C.P. <?php echo $codigo_postal ?>, <?php echo $ciudad_actual ?>,
                    <?php echo $estado_actual ?>.
                <li style="line-height: 12px;">Conoce el contenido y alcance legal de la Ley Nacional de Extinción de
                    Dominio Reglamentaria del
                    artículo 22 de la Constitución Política de los Estados Unidos Mexicanos, publicada en el Diario
                    Oficial de la Federación el día 9 de agosto del 2019 por lo cual declara, bajo protesta de decir
                    verdad, que los recursos económicos que utilizará para la inversión son de procedencia lícita y
                    comprobable.
                <li>Conoce el proyecto de la sociedad denominada GEOFIRMUS, S.A.P.I. DE C.V., y tiene interés en
                    invertir en el desarrollo y la construcción de dicho proyecto.
                <li>Que es la intención determinante de su voluntad, celebrar el presente contrato con <strong>“EL
                        MUTUATARIO”</strong>
                    en los términos y condiciones previstos en el presente contrato.
            </ol>
            <p style="text-align: center;">II. Manifiesta <strong>“EL MUTUATARIO”</strong> a través de sus apoderados,
                bajo protesta de decir verdad:</p>
            <ol type="a">
                <li>Que su representada es una sociedad anónima constituida conforme a las leyes de la República
                    Mexicana, en términos de la Escritura Pública Número 170,756 de fecha 25 de marzo de 2019, otorgada
                    ante la fe del Licenciado Evaristo Ocañas Méndez, Notario Público No. 51 de la ciudad de Monterrey,
                    Nuevo León, cuyo primer testimonio ha quedado inscrito en el Registro Público del Comercio en el
                    folio mercantil electrónico número 2019031718, en la ciudad de Monterrey, Nuevo León el día 30 de
                    abril de 2019. Con Registro Federal de Contribuyentes GEO1903253W6, y domicilio fiscal ubicado en
                    Avenida Gómez Morín, número 900 interior 61, Colonia Carrizalejo, en la ciudad de San Pedro Garza,
                    García, Nuevo León, C.P. 66220.
                <li>b) Que justifican su personalidad con la Escritura Pública número 45,316, de fecha 16 de febrero de
                    2022, otorgada ante la fe del Licenciado Luis Carlos Guerra Aguiñaga, Notario Público Suplente en
                    funciones adscrito a la Notaría Pública número 147, en la ciudad de San Pedro Garza García, Nuevo
                    León, inscrita en el Registro Público de Comercio bajo el folio mercantil electrónico número
                    N-2019031718 en la ciudad de Monterrey, Nuevo León el día 22 de febrero de 2022. Mismas facultades
                    que a la fecha no les han sido revocadas ni limitadas de forma alguna y bajo ningún título.
                <li>Su objeto social comprende, entre otras actividades, la captación de recursos para el desarrollo
                    de diversos desarrollos en sus diferentes modalidades.
                <li>Se destinará la cantidad otorgada en mutuo con interés en el siguiente bien inmueble (en lo
                    sucesivo<strong> “EL INMUEBLE”</strong>):
                    <p><strong>“Fracción “A” del predio conocido como la “Pichancha” que forma parte de la finca rustica
                            denominada Santa María Buenavista , Punta Hato y Antón Lizardi, ubicada en el municipio de
                            Alvarado Veracruz, de Ignacio de la Llave con superficie de 625,572.108 M2 (SEISCIENTOS
                            VEINTICINCO MIL QUINIENTOS SETENTA Y DOS METROS CUADRADOS CON CIENTO OCHO MILIMETROS
                            CUADRADOS)”</strong></p>
                <li>Que <strong>“EL INMUEBLE”</strong> se encuentra al corriente en el pago del impuesto predial de la
                    cuenta
                    Catastral Número <strong>04-011-028-00-002-161-00-000-2</strong> del Municipio de Alvarado,
                    Veracruz.</li>
                <li>Manifiesta en relación con lo señalado por la Ley Nacional de Extinción de Dominio, lo siguiente:
                </li>
                <p>i. Que <strong>“EL INMUEBLE”</strong> objeto de la presente operación no es, ni ha sido, instrumento,
                    objeto o
                    producto de delito(s) previstos en el cuarto párrafo del artículo 22 de la Constitución Política de
                    los Estados Unidos Mexicanos, ni de ninguno de los previstos en el tercer y cuarto párrafo del
                    artículo 20 de la Constitución Política del Estado Libre y Soberano de Nuevo León, ni de ninguna
                    otra actividad ilícita; </p>
                <li>Que es la intención determinante de su voluntad, celebrar el presente contrato con <strong>“EL
                        MUTUANTE”</strong> en
                    los términos y condiciones previstos en el presente contrato.</li>
            </ol>
            <div style="padding-left: 50px;"">
            <p style=" text-align: left; font-size:12px;">III. Declaran <strong>“LAS PARTES”</strong> por sus propios
                derechos y a
                través de sus apoderados,<br> bajo protesta de decir verdad:</p>
            </div>
            <ol type="a">
                <li>a) Que se reconocen mutuamente sus respectivas capacidades para celebrar este contrato, y que lo
                    celebran por su libre y espontánea voluntad y bien enterados de su naturaleza y efectos legales por
                    lo que se obligan desde ahora a acatar su contenido o a invocar como causales de su rescisión la
                    violencia, el error o el engaño.</li>
                <li>b) Que no existiendo limitación, juicio o error que pudiera afectarlos; y en consecuencia hacen
                    renuncia formal y expresa a impugnaciones presentes o futuras respecto al carácter y personalidad
                    con la que comparecen y en relación con el presente acto jurídico</li>
            </ol>
            <p style="text-align: center;">Tomando en cuenta lo anteriormente declarado, <strong>“LAS PARTES”</strong>
                acuerdan someterse al tenor de las siguientes:</p>
        </section>
        <h3 style="text-align: center; text-decoration: underline;
        ">CLAUSULAS</h3>
        <section>
            <p><strong>PRIMERA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Objeto del
                    contrato</span></p>
            <p>Sujeto a los términos y condiciones establecidos en el presente Contrato, <strong>“EL
                    MUTUATARIO”</strong> declara que <strong>“EL
                    MUTUANTE”</strong> otorga en mutuo con interés la cantidad advertida en la cláusula segunda de este
                instrumento,
                misma cantidad que representa el objeto del presente contrato, la cual estará sujeta a un interés
                convencional y será devuelta a <strong>“EL MUTUANTE”</strong> con sus respectivos intereses.</p>
            <p><strong>SEGUNDA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Entrega de "LA
                    INVERSION"</span></p>
            <p><stong>“LAS PARTES”</stong> acuerdan que <stong>“EL MUTUANTE”</stong> conviene en abonar a “EL MUTUATARIO” en concepto de mutuo con
                interés el importe de $ M.N. (Monto en letra de pesos 00/100 Moneda
                Nacional), cifra que en lo sucesivo y dentro de este texto se le denominará “LA INVERSION”.</p>
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