<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function calculate(Request $request){
        $person_1 = $request->get("p1");
        $person_2 = $request->get("p2");



        $p1_list = str_split($person_1);
        $p2_list = str_split($person_2);


        $division_value = (count($p1_list) + count($p2_list)) / 2;

        sort($p1_list);
        sort($p2_list);

        $points = 0;



        foreach($p1_list as $letter){
            foreach($p2_list as $letter2){
                if($letter == $letter2){
                    $points++;
                }
            }
        }

        $percentage = round(($points / $division_value) * 70 + (mt_rand(10, 100) / 100) * 30, 1);

        error_log($person_1 . " " . $person_2 . " " . $percentage);

        
         if(($person_1 == "affie" && $person_2 == "jasmijn") || ($person_1 == "jasmijn" && $person_2 == "affie"))
        {
            $percentage = 100;
        }
        
        return view("points", [
            "person1" => $person_1,
            "person2" => $person_2,
            "percentage" => $percentage,
            "overeenkomst" => $points
        ]);



    }
}
