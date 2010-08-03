<?php
include_once('../includes/db.php');
include_once('../includes/class.krumo.php');
include_once '../includes/constants.php';
//include_once('includes/fixture.php');

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
        <script src="../js/lib/jquery.cycle.all.min.js" type="text/javascript"></script>
        <script src="../js/index.js" type="text/javascript"></script>
        <!--[if lte IE 7]>
        <link href="../css/patches/patch_my_layout.css" rel="stylesheet" type="text/css" />
        <![endif]-->
    </head>
    <body>
        <div class="page_margins">
            <!--<div id="border-top" class="hideme">
            <div id="edge-tl"></div>
            <div id="edge-tr"></div>
          </div>-->
            <div class="page">
                <div id="header">
                    <img src="../images/logo.jpg" alt="logo" align="absmiddle"/>
                    <div id="topnav">
                        <a class="skip" title="skip link" href="#navigation">Skip to the navigation</a><span class="hideme">.</span>
                        <a class="skip" title="skip link" href="#content">Skip to the content</a><span class="hideme">.</span>
                        <a href="../login.php">Login</a> <a href="#" class="hideme">Contact</a> <a href="#" class="hideme">Imprint</a>
                    </div>
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
                    <div id="col1">
                        <div id="col1_content" class="clearfix">
                            <?php include_once '../templates/fom1.php'; ?>
                        </div>
                    </div>
                    <div id="col2">
                        <div id="col2_content" class="clearfix">
                            <div class="floatbox">
                                <h1 class="titulo">Guía automotriz</h1>
                                <div id="guia_automotriz">
                                    <div class="float_left">

                                    </div>
                                    <div class="float_right">
                                        <ul>
                                            <li><a href=""><img />Vinculo 1</a></li>
                                            <li><a href=""><img />Vinculo 2</a></li>
                                            <li><a href=""><img />Vinculo 3</a></li>
                                            <li><a href=""><img />Vinculo 4</a></li>
                                        </ul>
                                    </div>
                                    <div class="floatbox info" style="clear:both;">
                                        <h2>Guía Automotriz</h2>
                                        <p>Lorem iorem ipsum amet</p>
                                    </div>
                                </div>
                                <h3 class="titulo">Nuestras Marcas</h3>
                                <div class="floatbox"></div>
                                <h3 class="titulo">Preguntas o comentarios</h3>
                                <div class="floatbox">
                                    <form class="yform">
                                        <fieldset>
                                            <legend>Ingrese sus datos para comunicarse con nosotros</legend>
                                            <div class="type-text">
                                                <input type="text" name="nombre" />
                                            </div>
                                            <div class="type-text">
                                                <textarea name="comentario" cols="3" rows="3"></textarea>
                                            </div>
                                            <div class="type-button">
                                                <input type="submit" value="Enviar" />
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col3">
                        <div id="col3_content" class="clearfix">
                            <?php include_once '../templates/ads.php'; ?>
                        </div>
                        <!-- IE Column Clearing -->
                        <div id="ie_clearing"> &#160; </div>
                    </div>
                </div>
                <!-- begin: #footer -->
                <div id="footer">
                    <div class="center"><p class="center">BuscoCarro.com &copy; <?php echo date('Y') ;?></p>
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