<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* load the HMVC_Router class */
require implode(DIRECTORY_SEPARATOR, array(
    APPPATH . 'third_party'
    ,'HMVC'
    ,'Router.php'
));

class MY_Router extends HMVC_Router {
}