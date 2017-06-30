<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SulgAPI
 *
 * @author lokeswara.sane
 */
class SulgApi {

     //put your code here

     public function doRequest($url, $type) {
          return Request::create($url, $type);
     }

     public static function getUser($userId) {
          $request = $this->doRequest('getuser/' . $userId, 'GET');
          $response = Route::dispatch($request);

          return $response;
     }

     public static function getIssue($issueId) {
          $request = $this->doRequest('getissue/' . $issueId, 'GET');
          $response = Route::dispatch($request);
          
          return $response;
     }
     
     public static function getAllIssue($userId) {
          $request = $this->doRequest('getissue/' . $userId.'/all', 'GET');
          $response = Route::dispatch($request);
          
          return $response;
     }
     
     

}
