<?php

class Date {
  public static function timestampToLocal($timestamp) {
    $date = new DateTime($timestamp, new DateTimeZone('UTC'));
    $date->setTimezone(new DateTimeZone('Europe/Paris'));
    return $date->format('d/m/Y à H\hi');
  }
}
