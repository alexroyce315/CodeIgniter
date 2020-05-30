<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* load the HMVC_Loader class */
require implode(DIRECTORY_SEPARATOR, array(
    APPPATH . 'third_party'
    ,'HMVC'
    ,'Loader.php'
));

class MY_Loader extends HMVC_Loader {
}