<?php
   $name = array() ;
   $addres = array();
   $hobbies =['hobbies1','hobbies2'];
   $is_married =[''];
   $school =[];
   $skill =[];
   $gas = [$name,$addres,$hobbies,$is_married,$school,$skill];
   echo json_encode($gas);