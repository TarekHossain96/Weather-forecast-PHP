<?php
class WeatherModel {
function current_weather($city)
{
    if (!empty($city)) {
        //get JSON
     $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?appid=770a17f9520e41124656aa601bc34b3c&units=metric&q=$city", false);

    }else{
        $city = "Dhaka";
        $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?appid=770a17f9520e41124656aa601bc34b3c&units=metric&q=$city", false);

    }
     
     //decode JSON to array
     $data = json_decode($json,true);
     
     //return data array()
     return $data;
}
function forecast_weather($city)

    {    if (!empty($city)) {
		 //get JSON
         $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/daily?appid=770a17f9520e41124656aa601bc34b3c&units=metric&q=$city&cnt=8", false);
        }else{
            $city = "Dhaka";
            $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/daily?appid=770a17f9520e41124656aa601bc34b3c&units=metric&q=$city&cnt=8", false);
        }

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data;
    }
}
?>