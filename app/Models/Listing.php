<?php
namespace App\Models;

class Listing {
    public static function all() {
        return    [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quis velit
                ex soluta totam, ut ipsum accusamus corrupti! Modi natus nesciunt obcaecati! Aut porro neque
                accusamus placeat totam ullam suscipit.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo quis velit
                ex soluta totam, ut ipsum accusamus corrupti! Modi natus nesciunt obcaecati! Aut porro neque
                accusamus placeat totam ullam suscipit.'
            ]
            ];
    





    }

    public static function find($id){


        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing; 
            }
        }
    }
}