<?php
/**
 * Description of SlugLibrary
 *
 * @author lokeswara.sane
 */
use app\http\Services\SlugApi;
use app\http\Services\EndPointService;



class SlugLibrary {
     
    public static function getUser($userId){
         
       $url = EndPointService::getUser($userId); 
       $user = SlugApi::getUser($url);
       
       return $user;
       
    }
    
    public static function getAllIssues($userId){
         $url = EndPointService::getAllIssues($userId);
         $issueList = SlugApi::getAllIssues($url);
         
         return $issueList;
    }
}
