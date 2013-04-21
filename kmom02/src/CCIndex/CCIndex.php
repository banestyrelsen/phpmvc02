<?php
/**
* Standard controller layout.
* 
* @package AsdfCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $asf;
      $asf->data['title'] = "The Index Controller";
      $asf->data['main'] = "<h1>The Index Controller</h1>";
   }

}
