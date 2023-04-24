<?php 

namespace App;

class registre{ // calculator
    public function register($shoulder, $hip, $bust, $waist){

        $shoulder_to_hip_ratio = $shoulder / $hip;
		$bust_to_waist_ratio = $bust / $waist;

        if ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Pear";
		} elseif ($shoulder_to_hip_ratio > 1.25 && $bust_to_waist_ratio < 0.75) {
			$body_shape = "Inverted Triangle";
		} elseif ($shoulder_to_hip_ratio < 0.8 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Spoon";
		} elseif ($shoulder_to_hip_ratio >= 0.8 && $shoulder_to_hip_ratio <= 1.25 && $bust_to_waist_ratio >= 0.75 && $bust_to_waist_ratio <= 0.85) {
			$body_shape = "Rectangle";
		} else {
			$body_shape = "Hourglass";
		}
          return $body_shape;
    }
}

?>