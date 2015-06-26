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
            'label' => 'Lista',
            'icon' => 'fa fa-list',
            'page' => 'projects_list'
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