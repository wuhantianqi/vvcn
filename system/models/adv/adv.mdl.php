<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: adv.mdl.php 6177 2014-08-28 02:57:24Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Adv_Adv extends Mdl_Table
{   
    
    protected $_table = 'adv';
    protected $_pk = 'adv_id';
    protected $_cols = 'adv_id,theme,theme_id,page,title,from,limit,config,desc,tmpl,orderby,audit,closed,dateline';
    protected $_orderby = array('orderby'=>'ASC', 'adv_id'=>'DESC');
    protected $_pre_cache_key = 'adv-adv-list';

    protected static $_allow_from = array('text'=>'文字广告','photo'=>'图片广告','product'=>'产品广告','flash'=>'Flash广告','lunzhuan'=>'轮转广告','script'=>'代码广告');


    public function detail($adv_id, $closed=false)
    {
        if(!$adv_id = intval($adv_id)){
            return false;
        }else if(!$detail = $this->adv($adv_id)){
            return false;
        }else{
            $detail['items'] = K::M('adv/item')->items_by_adv($adv_id);
        }
        return $detail;
    }
    
    public function adv($adv_id)
    {
    	if(!$adv_id = intval($adv_id)){
    		return false;
    	}else if($items = $this->fetch_all()){
    		return $items[$adv_id];
    	}
    	return false;
    }

    public function adv_by_name($name)
    {
        if(!$name = trim($name)){
            return false;
        }else if($items = $this->fetch_all()){
            foreach($items as $k=>$v){
                if($v['title'] == $name){
                    return $v;
                }
            }
        }
        return false;
    }

    public function from_list()
    {
        return self::$_allow_from;
    }

    public function block($params, $tmpl, $smarty)
    {
        if($adv_id = intval($params['adv_id'])){
            if(!$detail = $this->detail($adv_id)){
                return false;
            }            
        }else if($params['name']){
            if(!$detail = $this->adv_by_name($params['name'])){
                return false;
            }
            $detail['items'] = K::M('adv/item')->items_by_adv($detail['adv_id']);
        }else{
            return false;
        }
        $adv = $detail;
        $adv['GUID'] = K::GUID('adv');
        $nums = intval($params['limit']);
        $order = strtolower($params['order']);
        $order = in_array($order,array('asc','desc','rand')) ? $order : "asc";
        if($items = $detail['items']){
            $adv_item_attr = '';
            if(in_array($adv['from'], array('photo', 'product', 'lunzhuan','falsh'))){
                if($adv['config']['width']){
                    $adv_item_attr .= ' width="'.$adv['config']['width'].'"';
                }
                if($adv['config']['height']){
                    $adv_item_attr .= ' height="'.$adv['config']['height'].'"';
                }
            }
            $item_list = array();
            foreach($items as $k=>$v){
                if(empty($v['audit'])){
                    continue;
                }else if($v['stime'] && ($v['stime'] > __TIME)){
                    continue;
                }else if($v['ltime'] && ($v['ltime'] < __TIME)){
                    continue;
                }else if($params['city_id']){
                    if($params['city_id'] != $v['city_id']){
                        continue;
                    }
                }
                if($v['target']){
                    $v['a_attr'] = ' title="'.$v['title'].'" target="'.$v['target'].'"';
                }
                $v['item_attr'] = $adv_item_attr;
                $item_list[$k] = $v;
            }
            if(empty($item_list)){
                return false;
            }
            $item_list = array_values($item_list);
            if('desc' == $order){
                $item_list = array_reverse($item_list);
            }else if('rand' == $order){
                shuffle($item_list);
            }
            if($nums > 0){
                $item_list = array_slice($item_list,0,$nums);
            }
			$cfg = K::$system->config->get('attach');
			$site = K::$system->config->get('site');
            if($adv['from'] == 'script'){
                $content = '';
                foreach($item_list as $item){
                    $content .= $item['script'];
                }
            }else if(empty($tmpl)){				
                $tmpl = $adv['tmpl'];
				$content .= str_replace('<{$adv.GUID}>',$adv['GUID'],substr($tmpl,0,strpos($tmpl,'[loop]')));
				if(defined('IN_MOBILE')){
					preg_match('/\[loop\][\s]*((<li>)?[\s\S]+(<\/li>)?)[\s]*\[\/loop\]/i',$tmpl,$match);
					preg_match('/\[loop\]([\<\>\/a-z]+)\[\/loop\]/i',$tmpl,$match2);
				}else{
					preg_match('/\[loop\][\s]*([\s\S]+)[\s]*\[\/loop\]/i',$tmpl,$match);
				}
				foreach($item_list as $k => $item){
					$content .= str_replace(array('<{$item.a_attr}>','<{$pager.img}>','<{$item.clickurl}>','<{$item.link}>','<{$item.title}>','<{$item.thumb}>','<{$item.item_attr}>'), array('target='."'".$item['target']."'",$cfg['url'],$item['link'],$item['link'],$item['title'], $item['thumb'], $item['item_attr']), $match[1]);
				}
				if($match2){
					$content .=substr($tmpl,strpos($tmpl,'[/loop]')+7,strrpos($tmpl,'[loop]')-strpos($tmpl,'[/loop]')-7);
					foreach($item_list as $k => $item){
						$content .=  $match2[1];
					}
					$content .=substr($tmpl,strrpos($tmpl,'[/loop]')+7);
				}else{					
					$content .= substr($tmpl,strpos($tmpl,'[/loop]')+7);
				}
				//echo $content;echo "File:", __FILE__, ',Line:',__LINE__;exit;
            }else{
                $smarty->assign('adv', $adv);
                $content = '';
                foreach($item_list as $item){
                    $smarty->assign('item', $item);
                    $content .= $smarty->fetch("string:{$tmpl}");
                }
            }			
            return $content; // $content;
        }
        return false;
    }    

    public function create($data, $checked=false)
    {
        if(!$checked && !($data = $this->_check($data))){
            return false;
        }
        $data['dateline'] = __CFG::TIME;
        if($adv_id = $this->db->insert($this->_table, $data, true)){
            $this->flush();
        }
        return $adv_id;
    }

    public function update($adv_id, $data, $checked=false)
    {
        if(!$adv_id = intval($adv_id)){
            return false;
        }else if(!$checked && !($data = $this->_check($data,  $adv_id))){
            return false;
        }
        if($ret = $this->db->update($this->_table, $data, $this->field($this->_pk, $adv_id))){
            $this->flush();
        }
        return $ret;
    }

    protected function _format_row($row)
    {
        $row['config'] = unserialize($row['config']);
        $row['from_title'] = self::$_allow_from[$row['from']];
        if(empty($row['tmpl'])){
            $row['tmpl'] = file_get_contents(__CORE_DIR.'models/adv/tmpl/'.$row['from'].'.html');
        }
        return $row;
    }

    protected function _check($data, $adv_id=null)
    {
        unset($data['adv_id'], $data['dateline']);
        if(!$adv_id || isset($data['title'])){
            if(empty($data['title'])){
                $this->err->add(' 广告位名称不能为空', 401);
                return false;
            }else if($adv = K::M('adv/adv')->adv_by_name($data['title'])){
                if(!$adv_id || $adv_id != $adv['adv_id']){
                    $this->err->add(' 广告位名称不能重复', 402);
                    return false;                       
                }
            }
        }
        if(!$adv_id && empty($data['theme'])){
        	$data['theme'] = 'default';
        }
        if(!$adv_id || isset($data['from'])){
            $from_list = self::$_allow_from;
            $from = (string)$data['from'];
            if(empty($from_list[$from])){
                $data['from'] = 'text';
            }          
        }
        if(isset($data['config'])){
            $data['config'] = serialize($data['config']);
        }
        if(isset($data['orderby'])){
            $data['orderby'] = (int)$data['orderby'];
        }
        if(isset($data['audit'])){
            $data['audit'] = $data['audit'] ? 1 : 0;
        }
        return parent::_check($data);
    }        

}