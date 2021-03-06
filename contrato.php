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
    $tasa_inversion = $_POST['tasa_inversion'];
    $plazo_inversion = $_POST['plazo-inversion'];
    $regimen_inversion = $_POST['regimen-inversion'];
    $fecha_firma = $_POST['fecha_firma'];
    $lugar_firma = $_POST['lugar_firma'];


    $nombre_beneficiario = $_POST['nombre-beneficiario'];
    $edad_beneficiario = $_POST['mayoria-edad'];
    $nacionalidad_beneficiario = $_POST['nacionalidad-beneficiario'];
    $estado_beneficiario = $_POST['estado-beneficiario'];
    $municipio_beneficiario = $_POST['municipio-beneficiario'];
    $calle_beneficiario = $_POST['calle-beneficiario'];
    $numero_beneficiario = $_POST['numero-beneficiario'];
    $colonia_beneficiario = $_POST['colonia-beneficiario'];
    $codigo_postal_beneficiario = $_POST['cp-beneficiario'];
    $ciudad_actual_beneficiario = $_POST['ciudad_residencia-beneficiario'];
    $estado_actual_beneficiario = $_POST['estado-beneficiario'];
    $curp_beneficiario = $_POST['curp-beneficiario'];
    $rfc_beneficiario = $_POST['rfc-beneficiario'];
    $estado_civil_beneficiario = $_POST['estado_civil_beneficiario'];
    $regimen_conyugal_beneficiario = $_POST['regimen_conyugal_beneficiario'];
    $parentesco_beneficiario = $_POST['parentesco-beneficiario'];
    $ocupacion_beneficiario = $_POST['ocupacion-beneficiario'];
    $mayoria_edad = $_POST['mayoria-edad'];

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
        margin: 0px 90px;
        font-size: 11.6px;
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

    .contenedor_final {
        display: flex;
    }

    .default {
        width: 100%;
        text-align: center;
    }

    .center{
        text-align: center;
    }


    </style>

<body>
    <div class="container">
        <section style="padding-top: 20px; font-size:12px; line-height: 12px;"><span
                style="text-transform: uppercase;"><span style="text-decoration: underline;"><strong>CONTRATO DE
                        MUTUO CON INTER??S</span></strong> (EL
                ???CONTRATO") QUE CELEBRA POR SUS PROPIOS DERECHOS <strong> <?php echo $name; ?></strong>, A QUIEN EN LO
                SUCESIVO SE LE
                DENOMINAR?? COMO <strong>???EL MUTUANTE???</strong>; Y POR OTRA PARTE LA SOCIEDAD DENOMINADA
                <strong>GEOFIRMUS, S.A.P.I. DE C.V.</strong>,
                REPRESENTADA MANCOMUNADAMENTE EN ESTE ACTO POR <strong><?php echo $firmante1; ?></strong> y
                <strong><?php echo $firmante2; ?></strong>, A
                QUIEN EN LO SUCESIVO SE LE
                DENOMINAR?? COMO <strong>???EL MUTUATARIO???</strong>; A <strong>???EL MUTUANTE???</strong> Y <strong>???EL
                    MUTUATARIO???</strong> CONJUNTAMENTE SE LES DENOMINAR?? <strong>???LAS
                    PARTES???</strong> E INDISTINTAMENTE, UNA <strong>???PARTE???</strong>; CONTRATO CELEBRADO DE CONFORMIDAD
                CON LAS SIGUIENTES
                DECLARACIONES Y CL??USULAS:
            </span></section>

        <h3 style="text-align: center; text-decoration: underline;">GLOSARIO DE T??RMINOS </h3>

        <section style="line-height: 12px; letter-spacing: -0.2px;">
            <ol type="1">
                <li style="line-height: 12px;"><strong>???EL MUTUANTE???</strong>: Persona f??sica o moral que otorga en
                    mutuo con inter??s una
                    cantidad determinada de
                    dinero en favor de otra persona f??sica o moral. Dicha cantidad al ser otorgada en mutuo con inter??s
                    debe ser liquidada en un plazo de tiempo determinado y bajo un inter??s legal o convencional.
                <li><strong>???BENEFICIARIO???</strong>: Persona f??sica de genero masculino o femenino que designa
                    <strong>???EL MUTUANTE???</strong> en
                    relaci??n a la cl??usula de cesi??n de derechos advertida en el presente instrumento.
            </ol>
        </section>

        <h3 style="text-align: center; text-decoration: underline; margin-top:-10px;">DECLARACIONES </h3>

        <section>
            <p style="text-align: left;">I. Declara <strong>???EL MUTUANTE???</strong> por su propio derecho, bajo
                protesta de decir verdad:</p>
            <ol type="a">
                <li style="letter-spacing: -0.2px; line-height: 12px;">Ser <?php echo $nacionalidad; ?>, mayor de edad,
                    originario de <?php echo $ciudad ?>,
                    <?php echo $estado_nacimiento ?>, <?php echo $estado_civil; ?>,<?php echo $regimen_conyugal; ?>con
                    fecha de nacimiento del dia
                    <?php echo $fecha_nacimiento ?>, <?php echo $ocupacion; ?>, al corriente en el pago del
                    Impuesto Sobre la Renta sin justificarlo de momento, inscrito en el Registro Federal de
                    Contribuyentes bajo la clave <span style="text-transform: uppercase;"><?php echo $rfc; ?></span> e
                    inscrito en la Clave ??nica del Registro de
                    Poblaci??n bajo
                    la clave <span style="text-transform: uppercase;"><?php echo $curp; ?></span> y con domicilio
                    ubicado en la Calle <?php echo $calle; ?>, n??mero <?php echo $numero ?>, Colonia
                    <?php echo $colonia ?>, C.P. <?php echo $codigo_postal ?>, <?php echo $ciudad_actual ?>,
                    <?php echo $estado_actual ?>.
                <li style="line-height: 12px;">Conoce el contenido y alcance legal de la Ley Nacional de Extinci??n de
                    Dominio Reglamentaria del
                    art??culo 22 de la Constituci??n Pol??tica de los Estados Unidos Mexicanos, publicada en el Diario
                    Oficial de la Federaci??n el d??a 9 de agosto del 2019 por lo cual declara, bajo protesta de decir
                    verdad, que los recursos econ??micos que utilizar?? para la inversi??n son de procedencia l??cita y
                    comprobable.
                <li>Conoce el proyecto de la sociedad denominada GEOFIRMUS, S.A.P.I. DE C.V., y tiene inter??s en
                    invertir en el desarrollo y la construcci??n de dicho proyecto.
                <li>Que es la intenci??n determinante de su voluntad, celebrar el presente contrato con <strong>???EL
                        MUTUATARIO???</strong>
                    en los t??rminos y condiciones previstos en el presente contrato.
            </ol>
            <p style="text-align:left; margin-top: -8px;">II. Manifiesta <strong>???EL MUTUATARIO???</strong> a trav??s de
                sus apoderados,
                bajo protesta de decir verdad:</p>
            <ol type="a">
                <li>Que su representada es una sociedad an??nima constituida conforme a las leyes de la Rep??blica
                    Mexicana, en t??rminos de la Escritura P??blica N??mero 170,756 de fecha 25 de marzo de 2019, otorgada
                    ante la fe del Licenciado Evaristo Oca??as M??ndez, Notario P??blico No. 51 de la ciudad de Monterrey,
                    Nuevo Le??n, cuyo primer testimonio ha quedado inscrito en el Registro P??blico del Comercio en el
                    folio mercantil electr??nico n??mero 2019031718, en la ciudad de Monterrey, Nuevo Le??n el d??a 30 de
                    abril de 2019. Con Registro Federal de Contribuyentes GEO1903253W6, y domicilio fiscal ubicado en
                    Avenida G??mez Mor??n, n??mero 900 interior 61, Colonia Carrizalejo, en la ciudad de San Pedro Garza
                    Garc??a, Nuevo Le??n, C.P. 66220.
                <li>Que justifican su personalidad con la Escritura P??blica n??mero 45,316, de fecha 16 de febrero de
                    2022, otorgada ante la fe del Licenciado Luis Carlos Guerra Agui??aga, Notario P??blico Suplente en
                    funciones adscrito a la Notar??a P??blica n??mero 147, en la ciudad de San Pedro Garza Garc??a, Nuevo
                    Le??n, inscrita en el Registro P??blico de Comercio bajo el folio mercantil electr??nico n??mero
                    N-2019031718 en la ciudad de Monterrey, Nuevo Le??n el d??a 22 de febrero de 2022. Mismas facultades
                    que a la fecha no les han sido revocadas ni limitadas de forma alguna y bajo ning??n t??tulo.
                <li>Su objeto social comprende, entre otras actividades, la captaci??n de recursos de manera privada para el desarrollo de diversos desarrollos en sus diferentes modalidades.
                <li>Se destinar?? la cantidad otorgada en mutuo con inter??s en el siguiente bien inmueble (en lo
                    sucesivo<strong> ???EL INMUEBLE???</strong>):
                    <p><strong>???Fracci??n ???A??? del predio conocido como la ???Pichancha??? que forma parte de la finca rustica
                            denominada Santa Mar??a Buenavista , Punta Hato y Ant??n Lizardi, ubicada en el municipio de
                            Alvarado Veracruz, de Ignacio de la Llave con superficie de 625,572.108 M2 (SEISCIENTOS
                            VEINTICINCO MIL QUINIENTOS SETENTA Y DOS METROS CUADRADOS CON CIENTO OCHO MILIMETROS
                            CUADRADOS)???</strong></p>
                <li style="margin-top:-13px;">Que <strong>???EL INMUEBLE???</strong> se encuentra al corriente en el pago del impuesto predial de la
                    cuenta
                    Catastral N??mero <strong>04-011-028-00-002-161-00-000-2</strong> del Municipio de Alvarado,
                    Veracruz.</li>
                <li>Manifiesta en relaci??n con lo se??alado por la Ley Nacional de Extinci??n de Dominio, lo siguiente:
                </li>
                <p style="margin-top:-4px; padding-left:20px;">i. Que <strong>???EL INMUEBLE???</strong> objeto de la presente operaci??n no es, ni ha sido, instrumento,
                    objeto o
                    producto de delito(s) previstos en el cuarto p??rrafo del art??culo 22 de la Constituci??n Pol??tica de
                    los Estados Unidos Mexicanos, ni de ninguno de los previstos en el tercer y cuarto p??rrafo del
                    art??culo 20 de la Constituci??n Pol??tica del Estado Libre y Soberano de Nuevo Le??n, ni de ninguna
                    otra actividad il??cita; </p>
                <li>Que es la intenci??n determinante de su voluntad, celebrar el presente contrato con <strong>???EL
                        MUTUANTE???</strong> en
                    los t??rminos y condiciones previstos en el presente contrato.</li>
            </ol>
            <div style="padding-left: 50px;"">
            <p style=" text-align: left; font-size:10.6px;margin-top: -15px;"">III. Declaran <strong>???LAS
                    PARTES???</strong> por sus propios
                derechos y a
                trav??s de sus apoderados, bajo protesta de decir verdad:</p>
            </div>
            <ol type="a">
                <li>a) Que se reconocen mutuamente sus respectivas capacidades para celebrar este contrato, y que lo
                    celebran por su libre y espont??nea voluntad y bien enterados de su naturaleza y efectos legales por
                    lo que se obligan desde ahora a acatar su contenido o a invocar como causales de su rescisi??n la
                    violencia, el error o el enga??o.</li>
                <li>b) Que no existiendo limitaci??n, juicio o error que pudiera afectarlos; y en consecuencia hacen
                    renuncia formal y expresa a impugnaciones presentes o futuras respecto al car??cter y personalidad
                    con la que comparecen y en relaci??n con el presente acto jur??dico</li>
            </ol>
            <p style="text-align: center; font-size:12px; margin-top:-10px;">Tomando en cuenta lo anteriormente declarado, <strong>???LAS PARTES???</strong><br>
                acuerdan someterse al tenor de las siguientes:</p>
        </section>
        <h3 style="text-align: center; text-decoration: underline;
        ">CLAUSULAS</h3>
        <section>
            <p><strong>PRIMERA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Objeto del
                    contrato.</span></p>
            <p>Sujeto a los t??rminos y condiciones establecidos en el presente Contrato, <strong>???EL
                    MUTUATARIO???</strong> declara que <strong>???EL
                    MUTUANTE???</strong> otorga en mutuo con inter??s la cantidad advertida en la cl??usula segunda de este
                instrumento,
                misma cantidad que representa el objeto del presente contrato, la cual estar?? sujeta a un inter??s
                convencional y ser?? devuelta a <strong>???EL MUTUANTE???</strong> con sus respectivos intereses.</p>
            <p><strong>SEGUNDA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Entrega de
                    <strong>"LA
                        INVERSION".</strong></span></p>
            <p>
                <stong>???LAS PARTES???</stong> acuerdan que <strong>???EL MUTUANTE???</strong> conviene en abonar a <strong>???EL
                    MUTUATARIO???</strong> en concepto de mutuo con
                inter??s el importe de $<strong><?php echo $inversion; ?> Pesos, M.N. (<?php echo $inversion_letra; ?> 00/100
                    Moneda
                    Nacional)</strong>, cifra que en lo sucesivo y dentro de este texto se le denominar?? <strong>???LA
                    INVERSION???</strong>.
            </p>
            <p>
                Asimismo, <strong>???LAS PARTES???</strong> acuerdan que <strong>???EL MUTUANTE???</strong> entregar?? a
                <strong>???EL MUTUATARIO???</strong> la cantidad antes
                mencionada por medio de transferencia, la cual puede ser depositada a una cuenta de <strong>???EL
                    MUTUATARIO???</strong>
                hasta en un per??odo m??ximo de 48 horas, despu??s de la celebraci??n del presente Contrato, misma cuenta
                que se se??ala a continuaci??n: <strong>Cuenta n??mero: 65507472279; CLABE: 014580655074722796; Banco:
                    Santander.</strong>
            </p>
            <p><strong>TERCERA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Del Pago.</span>
            <p><strong>???EL MUTUATARIO???</strong> reconoce deber y se obliga a pagar a <strong>???EL MUTUANTE??? ???LA
                    INVERSION???</strong> se??alada en la cl??usula
                anterior, m??s el porcentaje de los rendimientos acordados por <strong>???LAS PARTES???</strong>, y se??ala
                <strong>???EL MUTUATARIO???</strong> que
                el otorgamiento por su parte de este instrumento, al manifestar su conformidad con el mismo al firmarlo,
                constituye la obligaci??n ante <strong>???EL MUTUANTE???</strong> de pagar en tiempo y forma <strong>???LA
                    INVERSI??N"</strong> con su respectivo
                rendimiento citado en la presente cl??usula.
            </p>
            <p>
                <strong>???LAS PARTES???</strong> pactan que <strong>???LA INVERSION???</strong> devengar?? un inter??s
                convencional, mismo que se encontrar??
                contenido en Anexo A del presente contrato en donde se advertir?? la generaci??n del mismo a trav??s del
                plazo de la inversi??n.
            </p>
            <p>
                <strong>???EL MUTUANTE???</strong> solamente podr?? cobrar los rendimientos de manera mensual o al finalizar
                la vigencia del presente instrumento conforme al Anexo A adjunto.
            </p>
            <p><strong>CUARTA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Garant??a De
                    <strong>"EL MUTUATARIO".</strong></span>
            <P>
                Para garantizar el importe a que se refiere la cl??usula segunda del presente instrumento, <strong>"EL
                    MUTUATARIO"</strong> se obliga a suscribir en favor de <strong>"EL MUTUANTE"</strong>, un pagar?? por
                un valor de <strong>$ <?php echo $inversion ?> M.N.
                    (<?php echo $inversion_letra; ?> 00/100 Moneda Nacional)</strong>, mismo que <strong>???EL
                    MUTUANTE???</strong> deber?? entregar a <strong>"EL MUTUATARIO"</strong>
                una vez que no haya obligaciones pendientes entre <strong>???LAS PARTES???.</strong>
            </P>
            <p><strong>QUINTA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">De La Vigilancia Y
                    T??rmino Del Contrato.</span>
            <p>
                <strong>???LAS PARTES???</strong> acuerdan que el presente contrato tendr?? una vigencia de
                <strong><?php echo $plazo_inversion; ?>,</strong> y terminar?? seg??n dicha
                cl??usula sin necesidad de dar aviso por escrito o cualquier otra forma de desahucio a la terminaci??n de
                este.
            </p>
            <p>
                Aunado a lo anterior, <strong>???LAS PARTES???</strong> suscriben que el plazo ser?? forzoso para ambas por
                lo que en ning??n
                momento se podr?? dar por cancelado el presente contrato hasta que termine la vigencia del mismo.
            </p>
            <p style="padding-top:20px;"><strong>SEXTA.-</strong><span
                    style="padding-left: 32PX; text-decoration: underline;">Derechos Y
                    Obligaciones De <strong>???EL MUTUANTE???</strong>.</span>
            <p>
                <strong>???EL MUTUANTE???</strong> tendr?? derecho a solicitar a <strong>???EL MUTUATARIO???</strong> la
                informaci??n y documentaci??n necesaria a
                efectos de comprobar que el importe a que se refiere la cl??usula <strong>SEGUNDA</strong> de este
                instrumento est?? siendo
                utilizado de forma adecuada en el desarrollo y construcci??n del inmueble.
            </p>
            <p><strong>S??PTIMA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Facultades de
                    <strong>???EL MUTUATARIO???</strong>.</span>
            <p>
                <strong>???EL MUTUATARIO???</strong> se reserva las siguientes facultades irrevocables en el marco del
                presente contrato:
            </p>
            <ol type="a">
                <li>Administrar el importe de <strong>???LA INVERSION???</strong> para efectos de desarrollar <strong>???EL
                        INMUEBLE???</strong>.</li>
                <li>Decidir estrategias de comercializaci??n y publicidad de <strong>???EL INMUEBLE???</strong></li>
                <li>Administrar la construcci??n y <strong>???EL INMUEBLE???</strong> durante y una vez terminado el
                    desarrollo de la construcci??n, pudiendo abonar expensas de reparaci??n, mejoras, mantenimiento y/o
                    cualquier acto de conservaci??n.</li>
            </ol>
            <p><strong>OCTAVA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Terminaci??n o
                    Rescisi??n.</span>
            <p>El presente contrato terminar?? su vigencia por cualquiera de las siguientes causas:</p>
            <ol type="a">
                <li>Autom??ticamente por la expiraci??n de su vigencia o de su pr??rroga.</li>
            </ol>
            <p><strong>NOVENA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">De Los
                    Gastos.</span>
            <p>
                Todos los gastos, derechos y honorarios que llegaren a originarse con motivo del presente contrato,
                ser??n liquidados por cuenta de <strong>???EL MUTUATARIO???</strong>. Con excepci??n de los impuestos que
                recaigan en <strong>???EL
                    MUTUANTE???</strong> conforme a leyes tributarias vigentes.
            </p>
            <p><strong>DECIMA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Informaci??n y
                    Veracidad.</span>
            <P>
                <strong>???LAS PARTES???</strong> concuerdan que <strong>???EL MUTUATARIO???</strong> ha satisfecho todas las
                dudas y ha brindado informaci??n suficiente, detallada, veraz y completa sobre el desarrollo y
                construcci??n de <strong>???EL INMUEBLE??? a ???EL MUTUANTE???</strong>.
            </P>
            <p><strong>DECIMA PRIMERA.-</strong><span
                    style="padding-left: 32PX; text-decoration: underline;">Confidencialidad.</span>
            <p>
                <strong>???LAS PARTES???</strong> establecen que el conjunto de los comunicados que se establezcan entre
                <strong>???LAS PARTES???</strong> son
                estrictamente confidenciales. En consecuencia de lo anterior, cada una de <strong>???LAS PARTES???</strong>
                se compromete a
                preservar el car??cter confidencial del contenido de los comunicados, informaci??n y documentos entregados
                por la otra <strong>"PARTE???.</strong>
            </p>
            <p>
                Asimismo, <strong>???LAS PARTES???</strong> se comprometen en no divulgar parcial o totalmente a Terceros el
                contenido de
                ??stos sin autorizaci??n expresa de la otra <strong>"PARTE???</strong>, adem??s cada una de <strong>???LAS
                    PARTES???</strong> se compromete en
                tomar todas las medidas necesarias frente a sus familiares o terceros para limitar la divulgaci??n de la
                informaci??n confidencial.
            </p>
            <p><strong>DECIMA SEGUNDA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Cl??usula
                    De Integraci??n.</span>
            <p>
                Este contrato establece el acuerdo completo entre <strong>???LAS PARTES???</strong>. Ninguna parte ha
                celebrado este contrato
                bas??ndose en una declaraci??n, garant??a o promesa de la otra <strong>???PARTE???</strong> que no est??
                expresamente mencionada
                o referida en este contrato. Esta cl??usula no excluir?? la responsabilidad por declaraciones
                fraudulentas. Este contrato reemplaza cualquier acuerdo previo o entendimiento anterior entre
                <strong>???LAS
                    PARTES???</strong> con respecto al objeto del presente.
            </p>
            <p><strong>DECIMA TERCERA.-</strong><span
                    style="padding-left: 32PX; text-decoration: underline;">Naturaleza.</span>
            <p>
                <strong>???LAS PARTES???</strong> reconocen que el presente Contrato es de naturaleza Civil.
            </p>
            <p><strong>DECIMA CUARTA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Buena
                    Fe.</span>
            <p>
                <strong>???LAS PARTES???</strong> convienen que para cualquier discrepancia o diferencia que surja entre las
                mismas con
                motivo del cumplimiento del presente contrato, buscar??n solucionarlas en todo momento, con base en la
                buena fe.
            </p>
            <p><strong>DECIMA QUINTA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Ausencia De
                    Vicios En El Contrato.</span>
            <p>
                <strong>???LAS PARTES???</strong> acuerdan y reconocen que en este Contrato y sus anexos no existe error,
                dolo, mala fe,
                lesi??n, ni ning??n otro vicio del consentimiento que pudiese dar lugar a su nulidad.
            </p>
            <p><strong>DECIMA SEXTA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Unidad De
                    Contrato.</span>
            <p>
                Este contrato representa el acuerdo total de <strong>???LAS PARTES???</strong> y sustituye cualquier acuerdo
                previo, ya sea
                verbal o por escrito habido entre ambas. Ninguna modificaci??n de este contrato vincular?? a cualquiera de
                <strong>???LAS PARTES???</strong>, excepto que sea por escrito y suscrito por las mismas.
            </p>
            <p><strong>DECIMA S??PTIMA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Cesi??n De
                    Derechos.</span>
            <p>
                Los derechos derivados del presente Contrato podr??n ser cedidos o traspasados en caso que lo indique
                <strong>???EL
                    MUTUANTE??? a ???EL MUTUATARIO???</strong> y ??ste ??ltimo otorgue su consentimiento o bien, en caso de
                fallecimiento de
                <strong>???EL MUTUANTE???.</strong>

                <br><br>Por otra parte, <strong>???EL MUTUANTE???</strong> manifiesta que a la presente fecha tiene
                disposici??n testamentaria, y,
                asimismo, en el presente acto <strong>???EL MUTUATARIO???</strong> otorga su consentimiento a <strong>???EL
                    MUTUANTE???</strong> para que ??ste
                designe a su <strong>???BENEFICIARIO???</strong>, mismo del que se advierten sus datos a continuaci??n:
            </p>
            <ol>
                <li style="list-style:none;">I.<?php echo $nombre_beneficiario ?>,
                    <?php echo $nacionalidad_beneficiario ?>,
                    <?php echo $mayoria_edad ?>, originario
                    de <?php echo $municipio_beneficiario ?>,
                    <?php echo $estado_beneficiario ?>, mismo que ostenta el
                    parentesco de
                    <?php echo $parentesco_beneficiario ?> de <strong>???EL MUTUANTE???</strong>, inscrito
                    en el
                    Registro Federal de Contribuyentes bajo clave <?php echo $rfc_beneficiario ?> e
                    inscrito en la Clave
                    ??nica de Registro de
                    Poblaci??n bajo la clave <?php echo $curp_beneficiario?>, finalmente cuenta con con
                    domicilio en la Calle <?php echo $calle_beneficiario; ?>, n??mero
                    <?php echo $numero_beneficiario ?>,
                    Colonia
                    <?php echo $colonia_beneficiario ?>, C.P.
                    <?php echo $codigo_postal_beneficiario ?>,
                    <?php echo $estado_actual_beneficiario ?>.
                </li>
            </ol>
            <p>
                Finalmente, bajo protesta de decir verdad, manifiesta <strong>???EL MUTUANTE???</strong> que su disposici??n
                testamentaria no
                contraviene lo previsto en el art??culo 1368 del C??digo Civil Federal y lo previsto en el art??culo 1265
                del C??digo Civil para el Estado de Nuevo Le??n
            </p>
            <p><strong>DECIMA OCTAVA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Domicilios
                    y Notificaciones.</span>
            <ol type="a">
                <li>Toda clase de avisos, comunicaciones y notificaciones que haya lugar entre <strong>???LAS
                        PARTES???</strong>, con
                    motivo del presente contrato, se har??n por escrito y deber??n ser entregadas personalmente, o en su
                    caso, por correo certificado con acuse de recibo. </li>
                <li>
                    Para efecto de lo dispuesto en el inciso anterior, <strong>???LAS PARTES???</strong> se??alan los
                    siguientes
                    domicilios:
                </li>
                <li>
                    Domicilio de <strong>???EL MUTUATARIO???</strong>: El ubicado en la Avenida G??mez Mor??n, n??mero 900
                    interior 61,
                    Colonia Carrizalejo, en la ciudad de San Pedro Garza Garc??a, C.P. 66220.
                </li>
                <li>
                    Domicilio de <strong>???EL MUTUANTE"</strong>: El ubicado en la Calle
                    <?php echo $calle_beneficiario; ?>, n??mero
                    <?php echo $numero_beneficiario ?>,
                    Colonia
                    <?php echo $colonia_beneficiario ?>, C.P. <?php echo $codigo_postal_beneficiario ?>,
                    <?php echo $ciudad_actual_beneficiario ?>,
                    <?php echo $estado_actual_beneficiario ?>.
                </li>
            </ol>
            <p><strong>DECIMA NOVENA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Ley
                    Aplicable Y Jurisdicci??n.</span>
            <p>
                Para la soluci??n de cualquier controversia que pudiera surgir con motivo de la interpretaci??n,
                cumplimiento y ejecuci??n del presente Contrato, <strong>???LAS PARTES???</strong> se someten a las leyes del
                Estado de Nuevo
                Le??n y a la jurisdicci??n de los tribunales competentes en el mismo Estado, y renuncian para tal efecto a
                cualquier otra legislaci??n y fuero jurisdiccional que por raz??n de sus domicilios presentes o futuros
                les corresponda o pudiera corresponder.
            </p>
            <p><strong>VIG??SIMA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Ley
                    Acuerdo ??nico y Modificaciones.</span>
            <p>
            <ol type="a">
                <li>Este Contrato contiene la totalidad del acuerdo entre <strong>???LAS PARTES???</strong>, raz??n por la
                    cual <strong>???LAS
                        PARTES???</strong> dejan sin efecto legal alguno cualquier otro acuerdo legal o escrito que hayan
                    acordado o
                    suscrito con fecha anterior a la de celebraci??n de este instrumento.</li>
                <li>
                    Este Contrato s??lo podr?? ser modificado por escrito mediante convenio modificatorio firmado por ???LAS
                    PARTES???.
                </li>
            </ol>
            <p><strong>VIG??SIMA PRIMERA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Ley
                    Existencia Y Validez Del Contrato.</span>
            <p>
                <strong>???LAS PARTES???</strong> convienen en que en el presente Contrato existen los elementos esenciales,
                tales como
                consentimiento y objeto, manifestando por otra parte, que en el mismo no existen elementos de nulidad
                que pudieran derivar en la cancelaci??n del presente instrumento, por lo que renuncian de manera expresa
                al derecho y plazo que la Ley les confiere para intentar las acciones de nulidad y/o rescisi??n.
            </p>
            <p><strong>VIG??SIMA SEGUNDA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Ley
                    Invalidez Parcial.</span>
            <p>
                Si cualquiera de las cl??usulas de este Contrato es declarada como inv??lida o no ejecutable por cualquier
                tribunal de jurisdicci??n competente, las dem??s cl??usulas del presente instrumento permanecer??n en vigor
                y con plenos efectos. Cualquier cl??usula de este contrato declarada parcialmente inv??lida o no
                ejecutable permanecer?? en vigor con plenos efectos con relaci??n a la parte que no fue declarada inv??lida
                o no ejecutable.
            </p>
            <p ><strong>VIG??SIMA TERCERA.-</strong><span
                    style="padding-left: 32PX; text-decoration: underline;">Ley
                    Interpretaci??n.</span></p>
            <ol type="a">
                <li>
                    Los encabezados de las cl??usulas del presente contrato son establecidos ??nicamente por razones de
                    referencia y no afectar??n la interpretaci??n de ??ste. Todas las referencias a ???Cl??usula??? o
                    ???Cl??usulas??? se refieren a la Cl??usula o a las Cl??usulas correspondientes del presente Contrato.
                </li>
                <li>
                    Todas las palabras utilizadas en este Contrato ser??n le??das como del g??nero o n??mero que requieran
                    las circunstancias. Al menos que se establezca lo contrario, la palabra ???incluyendo??? no limita las
                    palabras o t??rminos a las cuales hace referencia.
                </li>
                <li>
                    Cualquier referencia a ???d??a??? o ???d??as??? deber?? entenderse por referirse a d??as naturales, salvo que
                    se precise que son d??as h??biles.
                </li>
            </ol>
            <p><strong>VIG??SIMA CUARTA.-</strong><span style="padding-left: 32PX; text-decoration: underline;">Ley
                    Tratamiento de datos personales.</span></p>
            <p>
                De conformidad con las disposiciones legales contenidas en la Ley Federal de Protecci??n de Datos
                Personales en Posesi??n de los Particulares, adjunto al presente contrato se advertir?? como Anexo B el
                Aviso de Privacidad correspondiente a los datos brindados por parte de <strong>???EL MUTUANTE???</strong> en
                favor de <strong>???EL
                    MUTUATARIO???</strong> en relaci??n a la celebraci??n del presente Contrato. Mismo que deber?? ser
                firmado de
                conformidad por parte de <strong>???EL MUTUANTE???.</strong>

                <br><br>Bien entendidas <strong>???LAS PARTES???</strong> del contenido y efectos legales del presente
                Contrato, lo firman por
                triplicado en la ciudad de <?php echo $lugar_firma ?> <?php echo $fecha_firma?>.
            </p>
        </section>
        <div>
            <div class="center">
                <table class="default">
                    <tr>
                        <td>
                            <p style="text-decoration: underline;"><strong>"EL MUTUANTE???</strong></p>
                            <p style="margin-top: -8px;">Por sus propios derechos:</p>
                            <p style="padding-top:10px"><strong><?php echo $name; ?></strong></p>
                        </td>
                        <td>
                        <p style="text-decoration: underline;padding-top: 34px;"><strong>???EL MUTUATARIO???</strong></p>
                        <p style="margin-top: -8px;"><strong>GEOFIRMUS, S.A.P.I. DE C.V</strong></p>
                        <p style="margin-top: -10px;">Representada mancomunadamente en este acto por:</p>
                        <p style="padding-top:10px"><strong><?php echo $firmante1; ?></strong></p>
                        <p style="padding-top:30px"><strong><?php echo $firmante2; ?></strong></p>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>

        </div>
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