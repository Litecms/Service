<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for service in service package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  service module in service package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Service',
    'names'         => 'Services',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Services',
        'sub'   => 'Services',
        'list'  => 'List of services',
        'edit'  => 'Edit service',
        'create'    => 'Create new service'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'title'                      => 'Please enter title',
        'icon'                       => 'Please enter icon',
        'heading'                    => 'Please enter heading',
        'description'                => 'Please enter description',
        'image'                      => 'Please enter image',
        'slug'                       => 'Please enter slug',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'title'                      => 'Title',
        'icon'                       => 'Icon',
        'heading'                    => 'Heading',
        'description'                => 'Description',
        'image'                      => 'Image',
        'slug'                       => 'Slug',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'title'                      => ['name' => 'Title', 'data-column' => 1, 'checked'],
        'icon'                       => ['name' => 'Icon', 'data-column' => 2, 'checked'],
        'heading'                    => ['name' => 'Heading', 'data-column' => 3, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Services',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
