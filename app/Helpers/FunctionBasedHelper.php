<?php

if (!function_exists('hilinkz_contact')) {
    function hilinkz_contact()
    {
        static $address = [
            'address_bd' => 'KA-7,Adapt ST Complex(9th Floor) Jaggannathpur, Dhaka-1229',
            'address_aus' => 'Unit 17, 3 Austin Place, Melton South, Victoria 3338 Australia',
            'email_bd1' => 'info@hilinkz.com',
            'email_bd2' => 'hilinkzltd@gmail.com',
            'email_aus' => 'au.manager@hilinkz.com',
            'phone_bd1' => '+8801792806811',
            'phone_bd2' => '+88017075381238',
            'phone_aus' => '+61466 612 281',
            'map_bd' => 'https://goo.gl/maps/w15hVxfqJexFiiDe6',
            'map_aus' => 'https://goo.gl/maps/m2Ghjehyg4eiBneF8',
        ];        
        return $address;
    }

}
