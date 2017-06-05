<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: image.mdl.php 9378 2015-03-27 02:07:36Z youyi $
 */

Import::M('image/gd');
class Mdl_Image_Image extends Model
{   
	protected static $_oimg = null; 
    
    public function __construct(&$system)
    {
    	parent::__construct($system);
    	self::$_oimg = new Mdl_Image_Image();
    	self::$_oimg->params = $system->config->get('attach');
    }

    public function thumb()
    {}
}