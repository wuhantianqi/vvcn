<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: help.ctl.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

require(dirname(__FILE__).'/article.ctl.php');
class Ctl_Article_Help extends Ctl_Article_Article
{
    protected $article_from = 'help';
}