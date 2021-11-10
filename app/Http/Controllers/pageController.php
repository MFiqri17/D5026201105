<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function __invoke(Request $request)
    // {
    //     //
    // }

        public function home()
        {
            return view('welcome');
        }

        public function ETS()
        {
            return view('ETS', ["tittle" => "ETS"]);
        }

        public function indexPHP(){
            return view('indexPHP', ["tittle" => "tugas PHP"]);
        }

        public function resultPHP(Request $request){
            
    function getComputerChoice() {
    $computerChoice = array("Rock", "Paper", "Scissors");
    $randomize = rand(0, 2);
    $compChoice  = $computerChoice[$randomize];
    return $compChoice;
    }

    $getComputer = getComputerChoice();
    $userchoices = $request->input("userChoice");

    function getResult($userchoices, $getComputer){
        
        if($userchoices == $getComputer){
            return "It's Draw Mate, Try Again !!!";
        }

        elseif($userchoices == "Rock"){
            if($getComputer == "Paper"){
                return "Ahhh, You Lose Bruhh";
            }
            else {
                return "Yeahh, You Win Bruhh";
            }
        }

        elseif($userchoices == "Paper"){
            if($getComputer == "Rock") {
                return "Yeahhh, You Win Bruhh";
            }
            else {
                return "Ahhh, You Lose Bruhh";
            }
        }

        else {
            if($getComputer == "Rock"){
                return "Ahhh, You Lose Bruhh";
            }
            else {
                return "Yeahhh, You Win Bruhh";
            }
        }
    }
   
    $getHasil = getResult($userchoices, $getComputer);
    

            return view('resultPHP', ["tittle" => "result PHP" ])->with("getHasil", $getHasil)->with("userChoices", $userchoices)->with("getComputer", $getComputer);
        }


}
