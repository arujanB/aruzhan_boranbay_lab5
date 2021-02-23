<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorCantroller extends Controller
{
    //1
    // public function c ($n1, $sign, $n2){
    // 	switch ($sign) {
    // 		case '+':
    // 			$result = $n1 + $n2;
    // 			return view('example', ['result' => $result]);
    // 			break;
    // 		case '-':
    // 			$result = $n1 - $n2;
    // 			return view('example', ['result' => $result]);
    // 			break;
    // 		case '*':
    // 			$result = $n1 * $n2;
    // 			return view('example', ['result' => $result]);
    // 			break;
    // 		case 'd':
    // 			$result = $n1 / $n2;
    // 			return view('example', ['result' => $result]);
    // 			break;
    // 	}
    // }
    //
    public function get_students(){
        static $name = array(0=>"Dauren", 1=>"Talgat", 2=>"Macsat");
        return $name;
    }

    public function get_date(){
        static $date = array(0=>"01-01-2020", 1=>"12-12-03", 2=>"12-04-2004");
        return $date;
    }

    public function get_age(){
        static $age = array(0=>"1", 1=>"17", 2=>"16");
        return $age;
    }
    
    //hw5
    public function show ($id, $dateof, $age){
        $students = $this->get_students();
        $da = $this->get_date();
        $a = $this->get_age();
        return view("hw1", ["name"=> $students[$id]]).'<br>'.view("hw2", ['dateof'=> $da[$dateof]]).'<br>'.view("hw3", ['age'=>$a[$age]]);
    }
}
