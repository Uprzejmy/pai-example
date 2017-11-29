<?php

class Model
{
  public function getUserBirthday($user)
  {
    if($user)
    {
      if($user === "Mark")
      {
        return new DateTime('1990-02-01');
      }
      else if ($user === "Jake")
      {
        return new DateTime('1981-03-04');
      }
    }

    return new DateTime();
  }

}