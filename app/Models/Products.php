<?php

namespace App\Models;

class Products{
    public static function all(){

        $product_info =[
                [
                    'id'        =>  '1',
                    'flavor'    =>  'Hazelnut',
                    'desc'      =>  'This coffee is hazelnut flavor.This coffee is hazelnut flavorThis coffee is hazelnut flavorThis coffee is hazelnut flavor.'
                ],
                [
                    'id'        =>  '2',
                    'flavor'    =>  'Macchiato',
                    'desc'      =>  'This is Macchiato Flavor.'
                ]
        ];
        return ($product_info);
        
    }
}