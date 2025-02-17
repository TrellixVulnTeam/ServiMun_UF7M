<?php
/**
 * Created by PhpStorm.
 * Users: devch
 * Date: 21/11/18
 * Time: 09:19 AM
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Tipos de archivo
    |--------------------------------------------------------------------------
    */

    'images_type_validate'    => 'jpg,jpeg,gif,png,svg,bmp,JPG,JPEG,GIF,PNG,SVG,BMP',
    'images_type_extension'   => ['jpg','jpeg','gif','png','svg','bmp','JPG','JPEG','GIF','PNG','SVG','BMP'],
    'videos_type_extension'   => ['mp4','3gp','bin'],
    'excel_type_extension'    => ['xlsx','xls'],
    'document_type_extension' => ['xlsx','xls','mp4','3gp','bin','pdf','doc','docx','pptx','ppt','txt','txt'],
    'file_dropzone_mimetype'  => 'image/jpg,image/jpeg,image/gif,image/png,image/JPG,image/JPEG,image/GIF,image/PNG,video/mp4,video/3gp,image/svg+xml',

    // -----------------------------------------------------------
    // Aqui se deben configurar los formatos a utilizar.
    // -----------------------------------------------------------

    'archivos'=>[
        'fmt_lista_catalogos'  => 'fmt_lista_catalogos.xlsx',
        'fmt_lista_usuarios'   => 'fmt_lista_usuarios.xlsx',
        'fmt_lista_denuncias'  => 'fmt_lista_denuncias.xlsx',
        'fmt_lista_respuestas' => 'fmt_lista_respuestas.xlsx',
        'icono_video'          => 'icon-video.png',
    ],

    // ARCHIVOS DE IMAGENES DEL SISTEMA
    'logo_reportes_encabezado' => public_path().'/images/web/logo-0-reporte.png',
    'nombre_empresa'           => env('NOMBRE_EMPRESA',''),
    'lema_empresa'             => env('LEMA_CAMPANA',''),
    'periodo_empresa'          => env('INFO_ONE',''),
    'direccion_responsable'    => env('INFO_TWO',''),
    'telefono_responsable'     => env('INFO_THREE',''),
    'web_responsable'          => env('INFO_FOUR',''),
    'nombre_software'          => env('NOMBRE_SOFTWARE',''),

    'ciudad_default'           => env('CIUDAD_DEFAULT',''),
    'municipio_default'        => env('MUNICIPIO_DEFAULT',''),
    'estado_default'           => env('ESTADO_DEFAULT',''),
    'empresa_id'               => env('EMPRESA_ID',1),

    'dias_mas_fecha_ingreso'   => env('DIAS_MAS_FECHA_INGRESO',1),
    'dias_mas_fecha_ejecucion' => env('DIAS_MAS_FECHA_EJECUCION',3),
    'dias_mas_fecha_limite'    => env('DIAS_MAS_FECHA_LIMITE',5),


    'consulta_500_items_general' => 500,
    'sas_id'                     => env("SAS_ID"),
    'modificar_fecha_ingreso'    => env('MODIFICAR_FECHA_INGRESO','NO'),
    'public_url'                 => env('PUBLIC_URL','http://localhost'),

    // -----------------------------------------------------------
    // La mayor parte de los Tablas estan configuradas aquí,
    // es en este mismo sitio donde la debes mantener forerver
    // -----------------------------------------------------------

    'table_names' => [
        'users' => [
            'users'       => 'users',
            'roles'       => 'roles',
            'permissions' => 'permissions',
            'user_adress' => 'user_adress',
            'user_extend' => 'user_extend',
            'user_becas'  => 'user_becas',
            'categorias'  => 'categorias',
        ],
        'catalogos' => [
            'users'                                 => 'users',
            'medidas'                               => 'medidas',
            'prioridades'                           => 'prioridades',
            'estatus'                               => 'estatus',
            'origenes'                              => 'origenes',
            'dependencias'                          => 'dependencias',
            'areas'                                 => 'areas',
            'subareas'                              => 'subareas',
            'servicios'                             => 'servicios',
            'ubicaciones'                           => 'ubicaciones',
            'denuncias'                             => 'denuncias',
            'respuestas'                            => 'respuestas',
            'user_subarea'                          => 'user_subarea',
            'subarea_user'                          => 'subarea_user',
            'area_dependencia'                      => 'area_dependencia',
            'area_subarea'                          => 'area_subarea',
            'area_jefe'                             => 'area_jefe',
            'servicio_subarea'                      => 'servicio_subarea',
            'jefe_subarea'                          => 'jefe_subarea',
            'dependencia_jefe'                      => 'dependencia_jefe',
            'dependencia_user'                      => 'dependencia_user',
            'denuncia_prioridad'                    => 'denuncia_prioridad',
            'denuncia_origen'                       => 'denuncia_origen',
            'denuncia_dependencia_servicio_estatus' => 'denuncia_dependencia_servicio_estatus',
            'denuncia_ubicacion'                    => 'denuncia_ubicacion',
            'denuncia_servicio'                     => 'denuncia_servicio',
            'denuncia_estatu'                       => 'denuncia_estatu',
            'ciudadano_denuncia'                    => 'ciudadano_denuncia',
            'creadopor_denuncia'                    => 'creadopor_denuncia',
            'denuncia_modificadopor'                => 'denuncia_modificadopor',
            'dependencia_estatu'                    => 'dependencia_estatu',
            'denuncia_respuesta'                    => 'denuncia_respuesta',
            'parent_respuesta'                      => 'parent_respuesta',
            'respuesta_user'                        => 'respuesta_user',
            'imagenes'                              => 'imagenes',
            'denuncia_imagene'                      => 'denuncia_imagene',
            'denuncia_user'                         => 'denuncia_user',
            'imagene_user'                          => 'imagene_user',
            'imagene_parent'                        => 'imagene_parent',
            'firmas'                                => 'firmas',
            'denuncia_firma'                        => 'denuncia_firma',
        ],
        'domicilios' => [
            'users'             => 'users',
            'afiliaciones'      => 'afiliaciones',
            'calles'            => 'calles',
            'localidades'       => 'localidades',
            'ciudades'          => 'ciudades',
            'municipios'        => 'municipios',
            'estados'           => 'estados',
            'paises'            => 'paises',
            'tipocomunidades'   => 'tipocomunidades',
            'asentamientos'     => 'asentamientos',
            'tipoasentamientos' => 'tipoasentamientos',
            'codigospostales'   => 'codigospostales',

            'comunidades'       => 'comunidades',
            'colonias'          => 'colonias',

            'sepomex'           => 'sepomex',

            'calle_ubicacion'        => 'calle_ubicacion',
            'colonia_ubicacion'      => 'colonia_ubicacion',
            'comunidad_ubicacion'    => 'comunidad_ubicacion',
            'ciudad_ubicacion'       => 'ciudad_ubicacion',
            'municipio_ubicacion'    => 'municipio_ubicacion',
            'estado_ubicacion'       => 'estado_ubicacion',
            'codigopostal_ubicacion' => 'codigopostal_ubicacion',

            'ubicaciones'            => 'ubicaciones',
            'ubicacion_user'         => 'ubicacion_user',

            'colonia_comunidad'      => 'colonia_comunidad',
            'codigopostal_colonia'   => 'codigopostal_colonia',
            'colonia_tipocomunidad'  => 'colonia_tipocomunidad',

        ],
    ],

    'style' => [
        'denuncia' => "<style>
                            b { font-family: arial, sans-serif; }
                            bAzul { font-family: arial, sans-serif; color:blue; }
                            p {text-align: justify;}
                            bVerde { font-family: arial, sans-serif; color:green; }
                            bChocolate { font-family: arial, sans-serif; color:chocolate; }
                            bOrange { font-family: arial, sans-serif; color:orangered; }
                            bSelloBold { font-family: arial, sans-serif; font-weight: bold; }
                            span { font-family: arial, sans-serif; text-align: center; }
                       </style>",
    ],

];
