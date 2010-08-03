<?php
include_once '../includes/db.php';
include '../includes/class.krumo.php';
include_once '../includes/constants.php';

$db = new db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-language" content="en" />
        <title>BuscoCarro.com</title>
        <link href="../css/my_layout.css" rel="stylesheet" type="text/css" />
        <link href="../yaml/screen/forms.css" rel="stylesheet" type="text/css"/>
        <script src="../js/lib/jquery-1.3.js" type="text/javascript"></script>
        <script src="../js/lib/jquery.cycle.all.pack.js" type="text/javascript"></script>
        <script src="../js/index.js" type="text/javascript"></script>
        <!--[if lte IE 7]>
                <link href="../css/patches/patch_my_layout.css" rel="stylesheet" type="text/css" />
                <![endif]-->
        <style media="all" type="text/css">
            #col2 {
                width: 100%;
                padding: 0;
            }
        </style>
    </head>
    <body>
        <div class="page_margins">
            <!--<div id="border-top" class="hideme">
                      <div id="edge-tl"></div>
                      <div id="edge-tr"></div>
                    </div>-->
            <div class="page">
                <div id="header"> <img src="../images/logo.jpg" alt="logo" align="absmiddle"/>
                    <div id="topnav"> <a class="skip" title="skip link" href="#navigation">Skip to the navigation</a><span class="hideme">.</span> <a class="skip" title="skip link" href="#content">Skip to the content</a><span class="hideme">.</span> <a href="../login.php">Login</a> <a href="#" class="hideme">Contact</a> <a href="#" class="hideme">Imprint</a> </div>
                </div>
                <div id="nav">
                    <?php include_once '../templates/nav.php'; ?>
                    <div class="marcas">
                        <?php include_once '../templates/marcas.php'; ?>
                    </div>
                </div>
                <div id="teaser">
                    <?php include_once '../templates/teaser.php'; ?>
                </div>
                <div id="main">
                    <div id="col1" class="hideme">
                        <div id="col1_content" class="clearfix">
                            <?php //include_once '../templates/fom1.php'; ?>
                        </div>
                    </div>
                    <div id="col2">
                        <div id="col2_content" class="clearfix">
                            <div class="floatbox">
                                <?php
                                if(isset($_POST['enviar'])) {
                                    krumo::post();
                                }
                                ?>
                            </div>
                            <form action="registrar.php" method="post" class="yform columnar">
                                <fieldset>
                                    <legend>Datos de la Empresa</legend>
                                    <div class="subcolumns">
                                        <div class="c50l">
                                            <div class="type-select">
                                                <label for="nombre">Nombre <sup>*</sup> </label>
                                                <input type="text" name="nombre"/>
                                            </div>
                                            <div class="type-select">
                                                <label for="email">Email</label>
                                                <input type="text" name="email"/>
                                            </div>
                                            <div class="type-select">
                                                <label for="cantidadCarros">Cantidad de Carros<sup>*</sup> </label>
                                                <select name="cantidadCarros">
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="c50r">
                                            <div class="type-select">
                                                <label for="marca">Logo de la Empresa<sup>*</sup> </label>
                                                <input type="file" name="logoEmpresa" />
                                            </div>
                                            <div class="floatbox">
                                                <p>Si coloca un email podrá recibir y responder preguntas que le sean realizadas sobre los servicios que ofrece</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Productos y Servicios</legend>
                                    <div class="type-text full">
                                        <label for="DescripcionServicios">Puede realizar una descripcion completa de los productos que ofrece la empresa a publicar</label>
                                        <textarea name="DescripcionServicios" cols="3" rows="3"></textarea>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Contáctanos</legend>
                                    <div class="type-text full">
                                        <label for="DescripcionContacto">Puede anotar toda la información que dispone para que los visitantes se puedan poner en contacto con la empresa como teléfono, email, etc.</label>
                                        <textarea name="DescripcionContacto" cols="3" rows="3" id="DescripcionContacto"></textarea>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Dirección </legend>
                                    <div class="subcolumns">
                                        <div class="c50l">
                                            <div class="type-select">
                                                <label for="estado">Estado <sup>*</sup> </label>
                                                <select name="estado">
                                                    <option>Miranda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="c50r">
                                            <div class="type-select">
                                                <label for="ciudad">Ciudad <sup>*</sup></label>
                                                <select name="ciudad">
                                                    <option>Los Teques</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="type-text full" style="clear:both;">
                                            <label for="direccion">Dirección <sup>*</sup></label>
                                            <textarea name="direccion"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Agregar Vehículos</legend>
                                    <div class="type-text">
                                        <label for="fotos">Foto Principal <sup>*</sup> </label>
                                        <input type="file" name="foto[]"/>
                                        <label for="fotos">Foto </label>
                                        <input type="file" name="foto[]"/>
                                        <label for="fotos">Foto </label>
                                        <input type="file" name="foto[]"/>
                                        <label for="fotos">Foto </label>
                                        <input type="file" name="foto[]"/>
                                        <label for="fotos">Foto </label>
                                        <input type="file" name="foto[]"/>
                                    </div>
                                    <div class="type-button">
                                        <p align="right">
                                            <input type="button" name="vistaprevia" value="Vista Previa"/>
                                            <input type="submit" name="enviar" value="Enviar"/>
                                        </p>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div id="col3" class="hideme">
                        <div id="col3_content" class="clearfix">
                            <?php //include_once '../templates/ads.php'; ?>
                        </div>
                        <!-- IE Column Clearing -->
                        <div id="ie_clearing"> &#160; </div>
                    </div>
                </div>
                <!-- begin: #footer -->
                <div id="footer">
                    <div class="center">
                        <p class="center">BuscoCarro.com &copy; <?php echo date('Y') ;?></p>
                    </div>
                </div>
            </div>
            <!--<div id="border-bottom" class="hideme">
                      <div id="edge-bl"></div>
                      <div id="edge-br"></div>
                    </div>-->
        </div>
    </body>
</html>