<?php

namespace App\MyDigitalSchool;


class TemperatureConverter
{
  public function convert($temp, $unit)
  {
    if ($unit == 'C') {
      return $temp * 9 / 5 + 32;
    } else if ($unit == 'F') {
      return ($temp - 32) * 5 / 9;
    } else {
      throw new \Exception('Invalid unit. Please use C or F.');
    }

  }

}
