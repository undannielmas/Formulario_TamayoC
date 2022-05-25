<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato Nuevo Tamayo Capital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="main-block">
        <div class="header">
        </div>
        <div class="body">
            <h1 class="head">Formulario para elaboracion de un<br> ejemplo de contrarto</h1>
            <p class="text">A continuación se muestra el formulario para la creacion de un contrato de prueba el cual
                se le presentara al inversiónista, favor de llenar TODOS los campos de este formulario y verificar la
                información antes imprimir el documento.
            </p>
            <form class="forms" action="contrato.php" method="POST">
                <h2 class="header">Datos Generales</h2>
                <div class="form-group">
                    <label for="name" style="padding-top: 20px;">Nombre Completo Persona Fisica:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre Completo">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Correo Electronico:</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Correo Electronico">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Teléfono Movil:</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono Movil"
                            pattern="[0-9]+">
                    </div>
                </div>
                <div class="form-group">
                    <label class="select" for="born">Fecha De Nacimiento:</label>
                    <input type="text" class="form-control" name="born" id="born"
                        placeholder="Ejemplo '22 de Enero de 1999'">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nacionalidad">Nacionalidad:</label>
                        <select class="custom-select mr-sm-2" name="nacionalidad" id="nacionalidad">
                            <option selected>Elegir respuesta...</option>
                            <option value="Mexicano">Mexicano</option>
                            <option value="Mexicana">Mexicana</option>
                            <option value="Extranjero">Extranjero</option>
                            <option value="Extranjera">Extranjera</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="estado">Estado de Residencia:</label>
                        <select class="custom-select mr-sm-2" name="estado" id="estado">
                            <option selected>Elegir respuesta...</option>
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="CDMX">Ciudad de México</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Durango">Durango</option>
                            <option value="Estado de México">Estado de México</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" name="calle" id="calle"
                            placeholder="Calle..." minlength="4" maxlength="30" size="10">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="numero">Numero:</label>
                        <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero..."
                            minlength="4" maxlength="14" size="10">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="colonia">Colonia:</label>
                        <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia..."
                            minlength="4" maxlength="50" size="10">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="rfc">Codigo Postal</label>
                        <input type="text" class="form-control" name="cp" id="cp" placeholder="C.P"
                            minlength="1" maxlength="5" size="10" style="text-transform:uppercase">
                    </div>
                </div>
                <div class="form-group">
                    <label for="work">Ocupación Específica:</label>
                    <input type="text" class="form-control" name="work" id="work" placeholder="Dueño de empresa..">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="curp">CURP:</label>
                        <input type="text" class="form-control" name="curp" id="curp"
                            placeholder="CURP a 18 caracteres..." minlength="4" maxlength="18" size="10"
                            style="text-transform:uppercase">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rfc">RFC:</label>
                        <input type="text" class="form-control" name="rfc" id="rfc" placeholder="RFC a 13 caracteres..."
                            minlength="4" maxlength="14" size="10" style="text-transform:uppercase">
                    </div>
                </div>
                <div class="form-row" style="padding-bottom: 20px;">
                <div class="form-group col-md-6">
                        <label for="nacionalidad">Estado Civil:</label>
                        <select class="custom-select mr-sm-2" name="estado_civil" id="estado_civil">
                            <option selected>Elegir respuesta...</option>
                            <option value="Mexicano">Soltero</option>
                            <option value="Mexicana"></option>
                            <option value="Extranjero">Extranjero</option>
                            <option value="Extranjera">Extranjera</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="regimen">Régimen Conyugal:</label>
                        <input type="text" class="form-control" name="regimen" id="regimen"
                            placeholder="Régimen conyugal...">
                    </div>
                </div>
                <h2 class="header">Datos Del Beneficiario</h2>
                <div class="col-auto my-1" style="Padding: 0px 30px;">
                    <label class="mr-sm-2" for="testamento" style="padding-top: 20px;">¿Cuenta Con Un
                        Testamento?</label>
                    <select class="custom-select mr-sm-2" name="testamento" id="testamento">
                        <option selected>Elegir respuesta...</option>
                        <option value="si">Si cuenta con testamento</option>
                        <option value="no">No cuenta con testamento</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nombre-beneficiario" style="padding-top: 20px;">Nombre Del Beneficiario:</label>
                    <input type="text" class="form-control" name="nombre-beneficiario" id="nombre-beneficiario"
                        placeholder="Nombre Completo">
                </div>
                <div class="form-group">
                    <label class="select" for="born-beneficiario">Fecha De Nacimiento:</label>
                    <input type="text" class="form-control" name="born-beneficiario" id="born-beneficiario"
                        placeholder="Ejemplo '22 de Enero de 1999'">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nacionalidad-beneficiario">Nacionalidad:</label>
                        <select class="custom-select mr-sm-2" name="nacionalidad-beneficiario" id="nacionalidad-beneficiario">
                            <option selected>Elegir respuesta...</option>
                            <option value="Mexicano">Mexicano</option>
                            <option value="Mexicana">Mexicana</option>
                            <option value="Extranjero">Extranjero</option>
                            <option value="Extranjera">Extranjera</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="estado-beneficiario">Estado de Residencia:</label>
                        <select class="custom-select mr-sm-2" name="estado-beneficiario" id="estado-beneficiario">
                            <option selected>Elegir respuesta...</option>
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="CDMX">Ciudad de México</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Durango">Durango</option>
                            <option value="Estado de México">Estado de México</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="calle-beneficiario">Calle:</label>
                        <input type="text" class="form-control" name="calle-beneficiario" id="calle-beneficiario"
                            placeholder="Calle..." minlength="4" maxlength="30" size="10">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="numero-beneficiario">Numero:</label>
                        <input type="text" class="form-control" name="numero-beneficiario" id="numero-beneficiario" placeholder="Numero..."
                            minlength="4" maxlength="14" size="10">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="colonia-beneficiario">Colonia:</label>
                        <input type="text" class="form-control" name="colonia-beneficiario" id="colonia-beneficiario" placeholder="Colonia..."
                            minlength="4" maxlength="50" size="10">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cp-beneficiario">Codigo Postal</label>
                        <input type="text" class="form-control" name="cp-beneficiario" id="cp-beneficiario" placeholder="C.P"
                            minlength="1" maxlength="5" size="10" style="text-transform:uppercase">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="curp-beneficiario">CURP:</label>
                        <input type="text" class="form-control" name="curp-beneficiario" id="curp-beneficiario"
                            placeholder="CURP a 18 caracteres..." minlength="4" maxlength="18" size="10"
                            style="text-transform:uppercase">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rfc-beneficiario">RFC:</label>
                        <input type="text" class="form-control" name="rfc-beneficiario" id="rfc-beneficiario"
                            placeholder="RFC a 13 caracteres..." minlength="4" maxlength="14" size="10"
                            style="text-transform:uppercase">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="civil-beneficiario">Estado Civil:</label>
                        <input type="text" class="form-control" name="civil-beneficiario" id="civil-beneficiario"
                            placeholder="Estado civil...">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="regimen-beneficiario">Régimen Conyugal:</label>
                        <input type="text" class="form-control" name="regimen-beneficiario" id="regimen-beneficiario"
                            placeholder="Régimen conyugal...">
                    </div>
                </div>
                <div class="form-row" style="padding-bottom: 20px;">
                    <div class="form-group col-md-6">
                        <label for="parentesco">Parentesco Con El Beneficiario:</label>
                        <input type="text" class="form-control" name="parentesco" id="parentesco"
                            placeholder="Parentesco...">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ocupacion">Ocupación:</label>
                        <input type="text" class="form-control" name="ocupacion" id="ocupacion"
                            placeholder="Ocupación...">
                    </div>
                </div>
                <h2 class="header">Datos Sobre la Inversión</h2>
                <div class="form-group">
                    <label for="fecha-inversion">Fecha Estimada De La Inversión:</label>
                    <input type="text" class="form-control" name="place-beneficiario" id="place-beneficiario"
                        placeholder="DD/MM/AA">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inversion">Monto Estimado A Invertir:</label>
                        <input type="text" class="form-control" name="inversion" id="inversion"
                            placeholder="Desde 500,000...">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="regimen-beneficiario">Tasa De Rendimiento (en %):</label>
                        <input type="text" class="form-control" name="regimen" id="regimen"
                            placeholder="Tasa de rendimiento..." maxlength="2" size="10" pattern="[0-9]+">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Brevemente, ¿De Qué Depende Para Realizar La Inversión:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion"
                        placeholder="Descripción corta...">
                </div>
                <div class="form-group">
                    <label for="lugar">Lugar De Firma De La Inversión:</label>
                    <input type="text" class="form-control" name="lugar" id="lugar" placeholder="Lugar de firma...">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="mr-sm-2" for="plazo-inversion" style="padding-top: 20px;">Plazo De La
                            Inversión:</label>
                        <select class="custom-select mr-sm-2" name="plazo-inversion" id="plazo-inversion">
                            <option selected>Elegir respuesta...</option>
                            <option value="18 Meses">18 Meses</option>
                            <option value="24 Meses">24 Meses</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="mr-sm-2" for="rendimiento" style="padding-top: 20px;">Forma De Pago De
                            Rendimiento:</label>
                        <select class="custom-select mr-sm-2" name="rendimiento" id="rendimiento">
                            <option selected>Elegir respuesta...</option>
                            <option value="mensual">Mensual*</option>
                            <option value="anual">Al Finalizar El Contrato**</option>
                        </select>
                        <p class="mensuals">Inicia a partir del 4to mes*<br> Se entrega capital mas rendimiento**</p>
                    </div>
                </div>
                <div class="col-auto" style="Padding: 0px 30px;">
                    <label class="mr-sm-2" for="capital">Apoyo Para Pago De Rendimiento NETO:? </label>
                    <select class="custom-select mr-sm-2" name="testamento" id="testamento">
                        <option selected>Elegir respuesta...</option>
                        <option value="Con apoyo para pago de rendimiento NETO">Con apoyo para pago de rendimiento NETO
                        </option>
                        <option value="Sin apoyo para pago de rendimiento NETO">Sin apoyo para pago de rendimiento NETO
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nss">Indique Su NSS (sólo si aplicó para pago de rendimiento NETO):</label>
                    <input type="text" class="form-control" name="nss" id="nss" placeholder="Indique su NSS"
                        minlength="4" maxlength="11" size="10" pattern="[0-9]+">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="mr-sm-2" for="plazo-inversion" style="padding-top: 20px;">¿Cuenta Con
                            Cédula de Identificación Fiscal?:</label>
                        <select class="custom-select mr-sm-2" name="plazo-inversion" id="plazo-inversion">
                            <option selected>Elegir respuesta...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <p class="texto">Si su respuesta es SÍ favor de proporcionar una copia</p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="mr-sm-2" for="plazo-inversion" style="padding-top: 20px;">Indique Su
                            Régimen Fiscal Actual Como PF:</label>
                        <select class="custom-select mr-sm-2" name="plazo-inversion" id="plazo-inversion">
                            <option selected>Elegir respuesta...</option>
                            <option value="Sueldosy Salarios">Sueldosy Salarios</option>
                            <option value="Actividad Empresarial y Profesional">Actividad Empresarial y Profesional
                            </option>
                            <option value="Arrendamiento">Arrendamiento</option>
                            <option value="RESICO">RESICO</option>
                            <option value="RIF">RIF</option>
                            <option value="Accionista">Accionista</option>
                            <option value="Sin Actividad">Sin Actividad</option>
                            <option value="Actividad Primaria">Actividad Primaria</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="mr-sm-2" for="rendimiento" style="padding-top: 20px;">Es Usted
                            Inversiónista Calificado? :</label>
                        <select class="custom-select mr-sm-2" name="rendimiento" id="rendimiento" name="pago"
                            onChange="pagoOnChange(this)">
                            <option selected>Elegir respuesta...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <p class="mensuals">Ver abajo la descripción para responder a esta pregunta</p>
                    </div>
                </div>
                <div id="submit">
                    <button type="submit" class="boton">Ver Contrato</button>
                </div>
        </div>

        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="js/form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>