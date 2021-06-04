<?php

return [

    //Identificador de tienda openpay
    'merchant_id' => env('MERCHANT_ID', ''),

    //Clave privada que proporciona el deasboard de openapy
    'private_key' => env('PRIVATE_KEY', ''),

    //Clave publicaa que proporciona el deasboard de openapy
    'public_key' => env('PUBLIC_KEY', ''),

    //Codigo de ciudad para el que se va implementar el servicio
    'country_code' => env('COUNTRY_CODE', ''),


    /*  url de creacion de referencia para los pagos en efectivo
        https://sandbox-dashboard.openpay.mx -  es para desarollo o pruebas
        https://dashboard.openpay.mx - es para el servidor en produccion  */
    'dashboard_path' => env('DASHBOARD_PATH', 'https://sandbox-dashboard.openpay.mx')
];
