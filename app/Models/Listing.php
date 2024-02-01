<?php

namespace App\Models;

class Listing
{
    public static function getAll() 
    {
        return [
            [
                'id' => '1',
                'title' => 'Listing One',
                'description' => 'Spanish (español) or Castilian (castellano) 
                    is a Romance language of the Indo-European language family 
                    that evolved from the Vulgar Latin spoken on the Iberian 
                    Peninsula of Europe'
            ],
            [
                'id' => '2',
                'title' => 'Listing Two',
                'description' => 'Romanian is a Romance language, belonging to 
                    the Italic branch of the Indo-European language family, 
                    having much in common with languages such as Italian, 
                    Spanish, French and Portuguese. Compared with the other Romance 
                    languages, the closest relative of Romanian is Italian.'
            ]
        ];
    }

    public static function getSingle($id)
    {
        $listings = self::getAll();

        foreach($listings as $listing):
            if($listing['id'] == $id):
                return $listing;
            endif;
        endforeach;  
    }
}