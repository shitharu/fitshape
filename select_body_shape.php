function determine_body_shape($shoulders, $bust, $waist, $hips) {
  $shape = '';
  $bust_hip_ratio = $bust / $hips;
  
  if ($shoulders > $bust && $shoulders > $hips) {
    $shape = 'Inverted triangle';
  } elseif ($bust_hip_ratio >= 0.95 && $bust_hip_ratio <= 1.05 && $waist < ($bust + $hips) / 2) {
    $shape = 'Hourglass';
  } elseif ($hips > $shoulders && $hips > $bust) {
    if ($waist / $hips <= 0.75) {
      $shape = 'Spoon';
    } else {
      $shape = 'Pear';
    }
  } elseif (abs($shoulders - $bust) < 2 && abs($shoulders - $hips) < 2 && abs($bust - $hips) < 2) {
    if ($waist / $bust >= 0.8 && $waist / $bust <= 0.9) {
      $shape = 'Rectangle';
    }
  }
  
  return $shape;
}
