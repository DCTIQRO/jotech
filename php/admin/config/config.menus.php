<?php
$config['menu'] = array(
	'admin' => array(
		array(
            'label' => 'Resumen',
            'icon' => 'fa fa-home',
            'page' => 'index',
            'link_class' => 'index'
		),
        array(
            'label' => 'Nuevo Cliente',
            'icon' => 'fa fa-home',
            'page' => 'nuevo_cliente'
            
		),
        array(
            'label' => 'Clientes',
            'icon' => 'fa fa-home',
            'page' => 'clientes'
            
		),

        array(
            'label' => 'Mosaico',
            'icon' => 'fa fa-th-large',
            'page' => 'projects_grid'
        ),
        array(
            'label' => 'Lista',
            'icon' => 'fa fa-list',
            'page' => 'projects_list'
        ),
        array(
            'label' => 'Revisar proyecto',
            'icon' => 'fa fa-clock-o',
            'page' => 'project_milestones'
        ),
        array(
            'label' => 'Nuevo proyecto',
            'icon' => 'fa fa-clock-o',
            'page' => 'new_project'
        ),
        array(
            'label' => 'Tareas',
            'icon' => 'fa fa-ticket',
            'page' => 'project_tasks'
        ),
        array(
            'label' => 'Usuarios',
            'icon' => 'fa fa-user',
            'page' => 'usuarios'
        ),
        array(
            'label' => 'Cuenta',
            'icon' => 'fa fa-user',
            'page' => 'user'
        ),
         array(
            'label' => 'Nuevo Usuario',
            'icon' => 'fa fa-user',
            'page' => 'nuevo_usuario'
        ),


        array(
            'label' => 'Calendario',
            'icon' => 'fa fa-calendar',
            'page' => 'calendar',
            'link_class' => 'calendar'
        ),
        array(
            'label' => 'Acceso',
            'icon' => 'fa fa-lock',
            'type' => 'collapse',
            'page' => array(
                array(
                    'label' => 'Login',
                    'icon' => 'fa fa-lock',
                    'page' => 'login',
                    'link_class' => 'no-ajaxify'
                ),
                array(
                    'label' => 'Registro',
                    'icon' => 'fa fa-pencil',
                    'page' => 'signup',
                    'link_class' => 'no-ajaxify'
                )
            )
        ),
        array(
            'label' => 'Precios',
            'icon' => 'fa fa-money',
            'page' => 'pricing_tables',
            'link_class' => 'pricing'
        ),
        array(
            'label' => 'Foro',
            'icon' => 'fa fa-life-ring',
            'page' => 'support_forum_overview',
            'link_class' => 'forum'
        ),
        array(
            'label' => 'Conocimientos base',
            'icon' => 'fa fa-file-text-o',
            'page' => 'support_kb'
        ),
		
//*        array(
//*            'label' => 'Skins',
//*            'class' => 'category border-top'
//*        ),
//*        array(
//*            'label' => 'Skins Custom HTML',
//*            'class' => 'reset',
//*            'file' => 'skins.php'
//*        ),
	)
);