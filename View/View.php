<?php

class View
{
  public function render($date)
  {
    echo("<!DOCTYPE html>
          <html>
          <body>
          $date
          </body>
          </html>");
  }
}