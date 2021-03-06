<?php

$model = 'payments';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'pagos',

    //routes
    'indexRoute'    => 'config.'.$model.'.index',
    'storeRoute'    => 'config.'.$model.'.store',
    'createRoute'   => 'config.'.$model.'.create',
    'showRoute'     => 'config.'.$model.'.show',
    'editRoute'     => 'config.'.$model.'.edit',
    'updateRoute'   => 'config.'.$model.'.update',
    'destroyRoute'  => 'config.'.$model.'.destroy',

    'postStoreRoute'  => 'config.'.$model.'.index',
    'postUpdateRoute' => 'config.'.$model.'.index',

    //urls
    'destroyUrl' => 'config/'.$model.'/destroy/',

    //views
    'storeView' =>  'config.'.$model.'.form',
    'editView'  =>  'config.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => false,
    'is_brancheable'    => true,
    

    //column search
    'search' => [
        
            //'Nombre'    => 'name',
            //'Direccion'  => 'address' ,
            //'Email'     => 'email',
    ],

    'validationsStore' => [

            //'name'          => 'required',
            //'address'     => 'required',

    ],

    'validationsUpdate' => [

            //'name'          => 'required',
            //'address'     => 'required',

    ],

];
