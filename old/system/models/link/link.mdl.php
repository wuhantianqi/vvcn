<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: link.mdl.php 9378 2015-03-27 02:07:36Z youyi $
 */

class Mdl_Link_Link extends Mdl_Table
{   
  
    protected $_table = 'links';
    protected $_pk = 'link_id';
    protected $_cols = 'link_id,title,link,logo,closed,dateline';
    protected $_orderby = array('link_id'=>'DESC');
}