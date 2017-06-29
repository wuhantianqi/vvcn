<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: group.ctl.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Member_Group extends Ctl
{
    
    public function index($page=1)
    {
    	$filter = $pager = array();
    	$pager['page'] = max(intval($page), 1);
    	$pager['limit'] = $limit = 50;
        if($SO = $this->GP('SO')){
            $pager['SO'] = $SO;
            
        }
        if($items = K::M('member/group')->items($filter, null, $page, $limit, $count)){
        	$pager['count'] = $count;
        	$pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink(null, array('{page}')), array('SO'=>$SO));
        }
        $this->pagedata['items'] = $items;
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'admin:member/group/items.html';
    }

    public function so()
    {
        $this->tmpl = 'admin:member/group/so.html';
    }

    public function priv($group_id=null)
    {
        if(!($group_id = (int)$group_id) && !($group_id = (int)$this->GP('group_id'))){
            $this->err->add('未指定要修改的用户组', 211);
        }else if(!$group = K::M('member/group')->detail($group_id)){
            $this->err->add('用户组不存在或已经删除', 212);
        }else if($priv = $this->checksubmit('priv')){
            if(K::M('member/group')->update_priv($group_id, $priv)){
                $this->err->add('修改权限成功');
            }
        }else{
            $this->pagedata['group'] = $group;
            $this->pagedata['priv'] = (array)$group['priv'];
            $this->tmpl = 'admin:member/group/priv.html';
        }
    }

    public function detail($group_id = null)
    {
        if(!$group_id = (int)$group_id){
            $this->err->add('未指定要查看内容的ID', 211);
        }else if(!$detail = K::M('member/group')->detail($group_id)){
            $this->err->add('您要查看的内容不存在或已经删除', 212);
        }else{
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'admin:member/group/detail.html';
        }
    }

    public function create()
    {
        if($this->checksubmit()){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{

                if($group_id = K::M('member/group')->create($data)){
                    $this->err->add('添加内容成功');
                    $this->err->set_data('forward', '?member/group-index.html');
                }
            } 
        }else{
            $this->pagedata['from_list'] = K::M('member/member')->from_list();
            $this->tmpl = 'admin:member/group/create.html';
        }
    }

    public function edit($group_id=null)
    {
        if(!($group_id = (int)$group_id) && !($group_id = $this->GP('group_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('member/group')->detail($group_id)){
            $this->err->add('您要修改的内容不存在或已经删除', 212);
        }else if($this->checksubmit('data')){
            if(!$data = $this->GP('data')){
                $this->err->add('非法的数据提交', 201);
            }else{
                if(K::M('member/group')->update($group_id, $data)){
                    $this->err->add('修改内容成功');
                }  
            } 
        }else{
            $this->pagedata['from_list'] = K::M('member/member')->from_list();
        	$this->pagedata['detail'] = $detail;
        	$this->tmpl = 'admin:member/group/edit.html';
        }
    }

    public function doaudit($group_id=null)
    {
        if($group_id = (int)$group_id){
            if(K::M('member/group')->batch($group_id, array('audit'=>1))){
                $this->err->add('审核内容成功');
            }
        }else if($ids = $this->GP('group_id')){
            if(K::M('member/group')->batch($ids, array('audit'=>1))){
                $this->err->add('批量审核内容成功');
            }
        }else{
            $this->err->add('未指定要审核的内容', 401);
        }
    }

    public function delete($group_id=null)
    {
        if($group_id = (int)$group_id){
            if(K::M('member/group')->delete($group_id)){
                $this->err->add('删除成功');
            }
        }else if($ids = $this->GP('group_id')){
            if(K::M('member/group')->delete($ids)){
                $this->err->add('批量删除成功');
            }
        }else{
            $this->err->add('未指定要删除的内容ID', 401);
        }
    }

}