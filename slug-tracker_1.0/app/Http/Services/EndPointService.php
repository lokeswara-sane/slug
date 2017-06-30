<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EndPointService
 *
 * @author lokeswara.sane
 */
class EndPointService {
     //put your code here
     public static function getUser($userId){
          return '/getUser/'.$userId;
     }
}
