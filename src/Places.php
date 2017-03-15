<?php
  class Places {

    private $cityName;
    private $country;
    private $stayLength;
    private $image;

        function __construct($cityName, $country, $stayLength, $image) {
          $this->cityName = $cityName;
          $this->country = $country;
          $this->stayLength = $stayLength;
          $this->image = $image;

        }

          function getCityName(){
            return $this->cityName;
          }

          function setCityName($new_cityName){
            $this->cityName = (string) $new_cityName;
          }

          function getCountry(){
            return $this->country;
          }

          function setCountry($new_country){
            $this->country = (string) $new_country;
          }

          function getstayLength(){
            return $this->stayLength;
          }

          function setstayLength($new_stayLength){
            $this->stayLength = (string) $new_stayLength;
          }

          function getImage(){
            return $this->image;
          }

          function setImage($new_image){
            $this->image = (string) $new_image;
          }
  }

 ?>
