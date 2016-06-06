<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<?php if (!Yii::$app->user->isGuest): ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
        <head>
            <meta charset="<?= Yii::$app->charset ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?= Html::csrfMetaTags() ?>
            <title><?= Html::encode($this->title) ?></title>

            <link href="js/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
            <script src="js/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
            <style type="text/css">
                #contenedor {
                    position: absolute;
                    left: 63px;
                    top: 6px;
                    width: 1154px;
                    height: 600px;
                    z-index: 994;
                    background-color: #CCCCCC;
                    margin-left: -500;
                    background-image: url(imagenes/fondo2.jpg);
                }
                #banner {
                    position: absolute;
                    left: 64px;
                    top: 7px;
                    width: 1154px;
                    height: 54px;
                    z-index: 995;
                    text-align: right;
                    font-size: 14px;
                }
                #menu {
                    position: absolute;
                    left: 63px;
                    top: 63px;
                    width: 1154px;
                    height: 23px;
                    z-index: 999;
                    background-color: #999999;
                    color: #FFF;
                    font-size: large;
                }
                #botones {
                    position: absolute;
                    left: 62px;
                    top: 100px;
                    width: 1154px;
                    height: 96px;
                    z-index: 995;
                    color: #069;
                    text-align: center;
                }
                #contenido {
                    position: absolute;
                    left: 62px;
                    top: 189px;
                    width: 1154px;
                    z-index: 998;
                    /*                    height: 350px;
                                        background-color: #BBD3FD;*/
                }
                #contenido_interno{
                    position: relative;
                    height: 370px;
                    overflow: auto;
                }
                #botones2 {
                    /*                    position: absolute;
                                        left: 61px;
                                        top: 555px;*/
                    width: 1154px;
                    height: 82px;
                    z-index: 999;
                }
                #banner div p {
                    font-size: 18px;
                }
                #menu_ico tr td img:hover{
                    cursor:pointer;
                    padding: 1px;}
                #botones #menu_ico tr td div {
                    color: #FFF;
                }

            </style>
            <?php $this->head() ?>
        </head>
        <body>
            <?php $this->beginBody() ?>
            <div class="wrap">
                <div id="contenedor"></div>
                <div id="banner"> <img src="imagenes/logorechnner.jpg" width="213" height="50" align="left" />
                    <div></div>
                    <div>
                        <p>Oficina Rechner, C.A.- Sistema de Gestion y Control de Llamadas</p>
                    </div>
                </div>
                <div id="menu">
                    <ul id="MenuBar1" class="MenuBarHorizontal">
                        <li><a class="MenuBarItemSubmenu" href="#">Registros</a>
                            <ul>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/empresa") ?>">Registro de Empresas</a></li>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/usuario") ?>">Registro de Usuarios</a></li>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/cliente") ?>">Registro de nuevo Cliente</a></li>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/llamada") ?>">Registro de LLmamadas</a></li>
                            </ul>
                        </li>
                        <li><a class="MenuBarItemSubmenu"  href="#">Históricos</a>
                            <ul>
                                <li><a href="#">Llamadas  de Clientes</a></li>
                                <li><a href="#">Llamadas de Operador</a></li>
                                <li><a href="#">Histórico de Llamadas</a></li>
                            </ul>
                        </li>

                        <li><a class="MenuBarItemSubmenu" href="#">Configuracion</a>
                            <ul>
                                <li>
                                    <a class="MenuBarItemSubmenu" href="#">Llamadas</a>
                                    <ul>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/tipo-llamada") ?>">Tipos de Llamadas</a></li>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/tipo-solicitud") ?>">Tipos de Solicitud</a></li>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/acciones-llamada") ?>">Tipos de Acciones</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="MenuBarItemSubmenu" href="#">Citas</a>
                                    <ul>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/tipo-cita") ?>">Tipo de Citas</a></li>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/tipo-servicios") ?>">Tipo de Servicios</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/cargo") ?>">Cargos</a></li>
                                <li>
                                    <a class="MenuBarItemSubmenu" href="#">Ubicacion</a>
                                    <ul>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/ciudad") ?>">Ciudades</a></li>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/estado") ?>">Estados</a></li>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/pais") ?>">Paises</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/cliente") ?>">Clientes</a></li>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/empresa") ?>">Empresas</a></li>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/usuario") ?>">Usuarios</a></li>
                                <li><a href="<?= \yii\helpers\Url::toRoute("/producto") ?>">Producto</a></li>

<!--                                <li><a href="<?= \yii\helpers\Url::toRoute("/") ?>"></a></li>
                                <li>
                                    <a class="MenuBarItemSubmenu" href="#"></a>
                                    <ul>
                                        <li><a href="<?= \yii\helpers\Url::toRoute("/") ?>"></a></li>
                                    </ul>
                                </li>-->
                            </ul>
                        </li>
                        <li><a href="#">Elemento 4</a></li>
                    </ul>
                </div>
                <div id="botones">
                    <table width="1122" border="0" align="center" cellpadding="1" cellspacing="1" id="menu_ico">
                        <tr>
                            <td height="10" colspan="3" bgcolor="#CCCCCC"> <div align="center">Control  llamadas</div></td>
                            <td height="12" colspan="3" bgcolor="#CCCCCC"><div align="center">Reportes</div></td>
                            <td height="12" colspan="4" bgcolor="#CCCCCC"><div align="center">Peticiones</div></td>
                            <td width="133" bgcolor="#CCCCCC">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="102"><a href="#"><img src="imagenes/agregar.jpg" width="102" height="67" /></a></td>
                            <td width="102"><img src="imagenes/editar.jpg" width="102" height="67" /></td>
                            <td width="102"><img src="imagenes/borrar.jpg" width="102" height="67" /></td>
                            <td width="102"><img src="imagenes/llamadas.jpg" width="102" height="67" /></td>
                            <td width="102"><img src="imagenes/clientes.jpg" width="102" height="67" /></td>
                            <td width="102"><img src="imagenes/operadores.jpg" width="102" height="67" /></td>
                            <td width="102"><img src="imagenes/informes.jpg" width="102" height="67" /></td>
                            <td width="102"><img src="imagenes/cotizacion.jpg" width="102" height="67" /></td>
                            <td width="103"><img src="imagenes/cobranzas.jpg" width="102" height="67" /></td>
                            <td width="102"><img src="imagenes/citas.jpg" width="102" height="67" /></td>
                            <td><a href="<?= \yii\helpers\Url::toRoute("/site/logout") ?>"><img src="imagenes/salir.jpg" width="102" height="67" /></a></td>
                        </tr>
                    </table>
                </div>

                <div id="contenido">
                    <div id="contenido_interno">
                        <?= $content ?>
                    </div>
                    <div id="botones2">
                        <table width="200" border="0" align="center">
                            <tr>
                                <td height="98"><img src="imagenes/direccion_oficina.jpg" width="445" height="86" /></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div align="center"></div>
                <script type="text/javascript">
                    var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown: "SpryAssets/SpryMenuBarDownHover.gif", imgRight: "SpryAssets/SpryMenuBarRightHover.gif"});
                </script>
            </div>
            <?php
            \yii\bootstrap\Modal::begin([
                'header' => '<span id="modalHeaderTitle"></span>',
                'headerOptions' => ['id' => 'modalHeader'],
                'id' => 'modal',
                'size' => 'modal-lg',
                //keeps from closing modal with esc key or by clicking out of the modal.
                // user must click cancel or X to close
                'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
            ]);
            echo '<div id="modalContent"><div style="text-align:center"><img src="' . yii\helpers\Url::to('/images/modal-loader.gif') . '"></div></div>';
            \yii\bootstrap\Modal::end();
            ?>

            <?php $this->endBody() ?>
        </body>
    </html>
<?php else: ?>
    <?php $model = new app\models\LoginForm(); ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Autenticacion de Usuario</title>
            <style type="text/css">
                #login {
                    position: absolute;
                    left: 30%;
                    top: 20%;
                    width: 560px;
                    height: 356px;
                    z-index: 1;
                    background-color: #00FFFF;
                    margin-left:-500;

                }
                #apDiv1 {
                    position: absolute;
                    /* [disabled]left: 541px; */
                    top: 229px;
                    width: 320px;
                    height: 181px;
                    z-index: 2;
                    background-color: #3333CC;
                    margin-left: -700;

                }
                #form_login {
                    position: absolute;
                    width: 329px;
                    height: 170px;
                    z-index: 2;
                    left: 566px;
                    top: 270px;
                }

                #titulo_login {
                    position: absolute;
                    width: 422px;
                    height: 35px;
                    z-index: 3;
                    left: 473px;
                    top: 224px;
                    background-color: #33FF66;
                }
            </style>
        </head>

        <body>
            <?php $this->beginBody() ?>
            <div class="wrap">
                <div id="login"><img src="imagenes/login 2.jpg" width="560" height="356" /></div>
                <div id="form_login">
                    <?php
                    $form = ActiveForm::begin([
                                'id' => 'login-form',
                                'options' => ['class' => 'form-horizontal'],
                                'fieldConfig' => [
                                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                                ],
                    ]);
                    ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?=
                    $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ])
                    ?>

                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <?php $this->endBody() ?>
        </body>
    </html>
<?php endif; ?>

<?php $this->endPage() ?>
