<?php
/**
 * Created by PhpStorm.
 * User: hala madrid
 * Date: 2/11/2018
 * Time: 12:18 PM
 */

namespace App\Helpers\Country;


class Country
{
    public static function countryName($countryCode)
    {
        try{
            $countries = \App\Country::where('code', $countryCode)->limit(1)->get();
            foreach($countries as $country)
            {
                return $country->name;
            }
        }
        catch(Exception $e)
        {
            try {
                $json = file_get_contents("https://restcountries.eu/rest/v2/alpha/$countryCode");
                $country = json_decode($json);
                $c = new \App\Country();
                $c->name = $country->name;
                $c->code = $countryCode;
                $c->save();
                return $country->name;
            }
            catch  (Exception $e)
            {
                die('Country Code not Found');
            }
        }

    }

}