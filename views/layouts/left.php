<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->persona0->nombres. " " .Yii::$app->user->identity->persona0->apellidos ?></p>
            </div>
        </div>

        <!-- /.search form -->

        <?php Yii::$app->user->identity instanceof app\models\Usuario; ?>
        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        [
                            'label' => 'Llamadas',
                            'icon' => 'fa fa-phone',
                            'url' => '#',
                            'visible' => !Yii::$app->user->isGuest,
                            'items' => [
                                ['label' => 'Nueva de Llamada', 'icon' => 'fa fa-plus-square-o', 'url' => ['/'],],
                                ['label' => 'Reportes', 'icon' => 'fa fa-line-chart', 'url' => ['/'],],
                            ]
                        ],
						[
                        
                            'label' => 'Informe Técnico',
                            'icon' => 'fa fa-building-o',
                            'url' => '#',
                            'visible' => !Yii::$app->user->isGuest,
                            'items' => [
                                ['label' => 'Crear Informe ', 'icon' => 'fa fa-pencil', 'url' => ['/'],],
                                ['label' => 'Lista de Informes', 'icon' => 'fa fa-edit', 'url' => ['/'],],
                            ]
						],	
                        [
                            'label' => 'Citas',
                            'icon' => 'fa fa-calendar',
                            'url' => '#',
                            'visible' => !Yii::$app->user->isGuest,
                            'items' => [
                                ['label' => 'Calendario de Citas', 'icon' => 'fa fa-calendar', 'url' => ['/cita'],],
                                ['label' => 'Reportes', 'icon' => 'fa fa-line-chart', 'url' => ['/'],],
                            ]
                        ],
                        [
                            'label' => 'Configuración',
                            'icon' => 'fa fa-lock',
                            'url' => '#',
                            'visible' => !Yii::$app->user->isGuest,
                            'items' => [
                                [
                                    'label' => 'Llamadas',
                                    'icon' => 'fa fa-plus',
                                    'url' => '#',
                                    'items' => [
                                      //  ['label' => 'Tipos de Acciones', 'icon' => 'fa fa-gear', 'url' => ['/acciones-llamada'],],
                                        ['label' => 'Tipos de Llamadas', 'icon' => 'fa fa-gear', 'url' => ['/tipo-llamada'],],
                                        ['label' => 'Tipos de Solicitud', 'icon' => 'fa fa-gear', 'url' => ['/tipo-solicitud'],],
                                    ]
                                ],
                                [
                                    'label' => 'Citas',
                                    'icon' => 'fa fa-plus',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Status', 'icon' => 'fa fa-gear', 'url' => ['/estado-cita'],],
                                        ['label' => 'Tipos de Citas', 'icon' => 'fa fa-gear', 'url' => ['/tipo-cita'],],
                                    ]
                                ],
                                [
                                    'label' => 'Ubicación',
                                    'icon' => 'fa fa-plus',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Ciudades', 'icon' => 'fa fa-gear', 'url' => ['/ciudad'],],
                                        ['label' => 'Estados', 'icon' => 'fa fa-gear', 'url' => ['/estado'],],
                                        ['label' => 'Paises', 'icon' => 'fa fa-gear', 'url' => ['/pais'],],
                                    ]
                                ],
                                ['label' => 'Productos', 'icon' => 'fa fa-gear', 'url' => ['/producto'],],
                                ['label' => 'Sucursales', 'icon' => 'fa fa-gear', 'url' => ['/sucursal'],],
                                ['label' => 'Cargos', 'icon' => 'fa fa-gear', 'url' => ['/cargo'],],
                                ['label' => 'Clientes', 'icon' => 'fa fa-gear', 'url' => ['/cliente'],],
                                ['label' => 'Empresas', 'icon' => 'fa fa-gear', 'url' => ['/empresa'],],
                                //['label' => 'Operadores', 'icon' => 'fa fa-gear', 'url' => ['/operador'],],
                                ['label' => 'Usuarios', 'icon' => 'fa fa-gear', 'url' => ['/usuario'],],
//                                [
//                                    'label' => '',
//                                    'icon' => 'fa fa-plus',
//                                    'url' => '#',
//                                    'visible' => !Yii::$app->user->isGuest,
//                                    'items' => [
//                                        ['label' => '', 'icon' => 'fa fa-gear', 'url' => ['/'],],
//                                    ]
//                                ],
//                                ['label' => '', 'icon' => 'fa fa-gear', 'url' => ['/'], 'visible' => !Yii::$app->user->isGuest,],
                            ]
							
                        ,],
						[
                        
                            'label' => 'Ayuda',
                            'icon' => 'fa fa-question-circle',
                            'url' => '#',
                            'visible' => !Yii::$app->user->isGuest,
                            'items' => [
                                ['label' => 'Acerca de', 'icon' => 'fa fa-info-circle', 'url' => ['/'],],
                                ['label' => 'Modulo ayuda', 'icon' => 'fa fa-question', 'url' => ['/'],],
                            ]
                        ],
                        (Yii::$app->user->isGuest ?
                                ['label' => 'Entrar', 'icon' => 'fa fa-sign-in', 'url' => ['site/login']] :
                                ['label' => 'Salir', 'icon' => 'fa fa-sign-out', 'url' => ['site/logout']]
                        ),
//                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
//                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ],
                ]
        )
        ?>

    </section>

</aside>
