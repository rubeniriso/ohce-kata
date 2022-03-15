<?php

namespace UserLoginService\Application;

class Ohce
{
    function greet($name, $time){
        if (strtotime($time) >= strtotime("6:00") && strtotime($time) < strtotime("12:00"))
            return "Buenos días $name";
        else if (strtotime($time) >= strtotime("12:00") && strtotime($time) < strtotime("20:00"))
            return "Buenas tardes $name";
        else
            return "Buenas noches $name";
    }
}