<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
?>
<div class="content-wrapper">
    <section class="content-header">
        <?php
        if (isset($this->blocks['content-header']))
        {
            ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
            <?php
        }
        else
        {
            ?>
            <h1>
                <?php
                if ($this->title !== null)
                {
                    echo \yii\helpers\Html::encode($this->title);
                }
                else
                {
                    echo \yii\helpers\Inflector::camel2words(
                            \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                }
                ?>
            </h1>
        <?php } ?>

        <?=
        Breadcrumbs::widget(
                [
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]
        )
        ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>2016.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Tab panes -->
    <div class="tab-content">
        <h3 class="control-sidebar-heading">Información de Oficinas</h3>
        <ul class='control-sidebar-menu'>
            <li>
                <a href='javascript::;'>
                    <i class="menu-icon fa fa-location-arrow bg-red"></i>

                    <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Los Teques</h4>
                        <p>Calle Paez con Falcon a 30 mts Ipostel.Los Teques.</p>
                        <p>Telefono: (0212)3644208/(0212)3234566</p>
                        <p>Correo: Oficna.rechner@gamil.com</p>
				
                    </div>
                </a>
            </li>
			<li>
                <a href='javascript::;'>
                    <i class="menu-icon fa fa-location-arrow bg-red"></i>

                    <div class="menu-info">
                        <h4 class="control-sidebar-subheading">La Victoria</h4>
                        <p>Calle Principal.CC. La Victoria. Local 13C. .</p>
                        <p>Telefono: (0244)265489/(0244)3658944</p>
                        <p>Correo: Oficna.rechner.aragaua@gamil.com</p>
                    </div>
                </a>
            </li
        </ul>
        <!-- /.control-sidebar-menu -->
        <!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
<script type="text/javascript">
</script>