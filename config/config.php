<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'service',

    /*
     * Modules.
     */
    'modules'   => ['service'],

    
    'service'       => [
        'model' => [
            'model'                 => \Litecms\Service\Models\Service::class,
            'table'                 => 'services',
            'presenter'             => \Litecms\Service\Repositories\Presenter\ServicePresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'title'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'title',  'icon',  'heading',  'description',  'image',  'slug',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'service/service',
            'uploads'               => [
            
                    'image' => [
                        'count' => 1,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'image'    => 'array',
                'file'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Service',
            'module'    => 'Service',
        ],

    ],
];
