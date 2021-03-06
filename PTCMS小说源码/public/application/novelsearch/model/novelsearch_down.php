<?php
class NovelSearch_downModel extends Model
{
    public $tableid;
    public function setTableId($zym_38)
    {
      $zym_45 = $zym_38 % 50;
        if ($zym_45 === $this->tableid) {
            return;
        }
        $this->tableid = $zym_45;
        $this->setTable('novelsearch_down_' . $zym_45);
        return $this;
    }
    public function add($zym_41)
    {
        $this->setTableId($zym_41['novelid']);
        return $this->insert($zym_41);
    }
    public function edit($zym_41)
    {
        $this->setTableId($zym_41['novelid']);
        return $this->where(['id' => $zym_41['id']])->update($zym_41);
    }
    public function addall($zym_41)
    {
        $zym_38 = $zym_41['0']['novelid'];
        $zym_42 = $zym_41['0']['siteid'];
        $this->setTableId($zym_38);
        $zym_32 = new compare();
        $zym_36 = $this->flush('novelsearch_info', $zym_38);
        if (!$zym_36['source']['orderid'] && C('collect_reorder')) {
           $zym_33 = new Collect_OpModel();
            $zym_33->reorder($zym_38, [$zym_36['source']['siteid']], false);
        }
		
        $zym_50 = $this->where(array('novelid' => $zym_38, 'siteid' => $zym_42, 'oid' => ['>', 0]))->field('id,url,oid')->order('id asc')->select();
 
        if ($zym_50) {
            $zym_34 = $zym_35 = array();
            foreach ($zym_50 as $zym_47) {
                $zym_35[] = $zym_47['url'];
            }
            foreach ($zym_41 as $zym_28 => $zym_47) {
                if (in_array($zym_47['url'], $zym_35)) {
                    unset($zym_41[$zym_28]);
                } else {
                    $zym_35[] = $zym_47['url'];
                }
            }
            $zym_41 = array_values($zym_41);
        }
		
        if ($zym_41 == []) {
            return 0;
        }
        if ($zym_36['source']['siteid'] == $zym_42) {
            $zym_29 = end($zym_50);
            $zym_30 = isset($zym_29['oid']) ? $zym_29['oid'] : 0;
            $zym_37 = $zym_29['id'];
            foreach ($zym_41 as $zym_28 => $zym_47) {
                $zym_30++;
                $zym_41[$zym_28]['oid'] = $zym_30;
            }
			
            $zym_50 = $this->insertAll($zym_41);
  
		
            if ($zym_50) {
                $zym_40 = $this->where(array('novelid' => $zym_38, 'id' => ['>=', $zym_37]))->field('id,url,oid')->order('id asc')->select();
                $zym_52 = $this->field('oid')->where(array('novelid' => $zym_38, 'siteid' => $zym_42))->order('id asc')->select();
                $zym_44 = $zym_32->run($zym_40, $zym_52, $zym_36, 0, false);
                foreach ($zym_44 as $zym_47) {
                    $this->where(['id' => $zym_47['id']])->update(['oid' => $zym_47['oid']]);
                }
                (new NovelSearch_infoModel())->where(['id' => $zym_36['novel']['id']])->update(['orderid' => $zym_30]);
                (new NovelSearch_LogModel())->where(['novelid' => $zym_38, 'siteid' => $zym_42])->update(['oid' => $zym_30]);
                return $zym_30;
            } else {
                return false;
            }
        } else {
            $zym_52 = $this->field('oid')->where(array('novelid' => $zym_38))->group('oid')->order('oid asc,id asc')->select();
            $zym_43 = (new NovelSearch_LogModel())->where(['novelid' => $zym_38, 'siteid' => $zym_42])->getField('oid');
            $zym_39 = $zym_32->run($zym_41, $zym_52, $zym_36, $zym_43);
            $zym_50 = $this->insertAll($zym_39);
            $zym_31 = $this->where(['novelid' => $zym_38, 'siteid' => $zym_42])->order('oid desc')->getField('oid');
            (new NovelSearch_LogModel())->where(['novelid' => $zym_38, 'siteid' => $zym_42])->update(['oid' => $zym_31]);
            if ($zym_50) {
                return $this->where(array('novelid' => $zym_38))->order('oid desc')->getfield('oid');
            } else {
                return false;
            }
        }
    }
    public function getchapterlist($zym_38, $zym_42, $zym_27, $zym_11)
    {
        $zym_12 = $zym_27 < 5 && !APP_DEBUG && isset($_GET['clearcache']);
        if ($zym_12) {
            $zym_49 = "chapterlist_{$zym_38}_{$zym_42}_{$zym_27}_{$zym_11}";
            $zym_52 = cache::get($zym_49);
            if ($zym_52 !== null) {
                return $zym_52;
            }
        }
        $this->setTableId($zym_38);
        $zym_48 = array('novelid' => $zym_38);
        $zym_51 = 'id desc';
        if ($zym_42 > 0) {
            $zym_48['siteid'] = $zym_42;
        } else {
            $zym_48['siteid'] = array('in', M('novelsearch_site')->getipsites());
            $zym_51 = 'oid desc,id desc';
        }
        if ($zym_11 == 0) {
            $zym_52 = $this->where($zym_48)->field('id,siteid,oid,time')->order($zym_51)->select();
        } else {
            $zym_52 = $this->where($zym_48)->field('id,siteid,oid,time')->page($zym_27)->limit($zym_11)->order($zym_51)->select();
        }
        if ($zym_52) {
            $zym_13 = dc::get('novelsearch_info', $zym_38, 'novel.pinyin');
            foreach ($zym_52 as $zym_28 => $zym_47) {
            }
            $zym_10 = $zym_52['0']['oid'];
            $zym_15 = M('novelsearch_site')->getnamelist();
            foreach ($zym_52 as $zym_28 => $zym_47) {
                if (!$zym_42) {
                    $zym_52[$zym_28]['sign'] = 0;
                    if ($zym_47['oid'] && $zym_47['oid'] < $zym_10 && isset($zym_52[$zym_28 - 1])) {
                        $zym_52[$zym_28 - 1]['sign'] = 1;
                        $zym_10 = $zym_47['oid'];
                    }
                }
                $zym_52[$zym_28]['url_read'] = U('novelsearch.chapter.' . $this->getshowtype($zym_47['siteid']), array('chapterid' => $zym_47['id'], 'novelid' => $zym_38, 'novelkey' => $zym_13));
                $zym_52[$zym_28]['url_frame'] = U('novelsearch.chapter.green', array('chapterid' => $zym_47['id'], 'novelid' => $zym_38, 'novelkey' => $zym_13));
                $zym_52[$zym_28]['url_green'] = U('novelsearch.chapter.frame', array('chapterid' => $zym_47['id'], 'novelid' => $zym_38, 'novelkey' => $zym_13));
                if ($zym_47['siteid']) {
                    if (isset($zym_15[$zym_47['siteid']])) {
                        $zym_52[$zym_28]['sitename'] = $zym_15[$zym_47['siteid']]['name'];
                        $zym_52[$zym_28]['sitestyle'] = $zym_15[$zym_47['siteid']]['style'];
                        $zym_52[$zym_28]['sitedesc'] = $zym_15[$zym_47['siteid']]['desc'];
                        $zym_52[$zym_28]['url_dir'] = U('novelsearch.novel.dir', array('siteid' => $zym_47['id'], 'sitekey' => $zym_15[$zym_47['siteid']]['key'], 'novelid' => $zym_38, 'novelkey' => $zym_13));
                        $zym_52[$zym_28]['url_chapter'] = U('novelsearch.chapter.list', array('siteid' => $zym_47['siteid'], 'sitekey' => $zym_15[$zym_47['siteid']]['key'], 'novelid' => $zym_38, 'novelkey' => $zym_13, 'page' => 1));
                    } else {
                        unset($zym_52[$zym_28]);
                    }
                } else {
                    $zym_52[$zym_28]['sitename'] = '本站原创';
                    $zym_52[$zym_28]['sitestyle'] = '';
                    $zym_52[$zym_28]['sitedesc'] = '';
                    $zym_52[$zym_28]['url_dir'] = U('novelsearch.novel.dir', array('novelid' => $zym_38, 'novelkey' => $zym_13));
                    $zym_52[$zym_28]['url_chapter'] = '';
                }
                unset($zym_52[$zym_28]['oid']);
            }
            $zym_52 = array_values($zym_52);
            return $zym_52;
        } else {
            $zym_52 = array();
        }
        if ($zym_12) {
            cache::set($zym_49, $zym_52, 60);
        }
        return $zym_52;
    }
    public function getlist($zym_38, $zym_42 = 0, $zym_27 = 1, $zym_11 = 0)
    {
        $zym_12 = $zym_27 < 5 && !APP_DEBUG && isset($_GET['clearcache']);
        if ($zym_12) {
            $zym_49 = "chapterolist_{$zym_38}_{$zym_42}_{$zym_27}_{$zym_11}";
            $zym_52 = cache::get($zym_49);
            if ($zym_52 !== null) {
                return $zym_52;
            }
        }
        $this->setTableId($zym_38);
        $zym_48 = array('novelid' => $zym_38);
        $zym_51 = 'id desc';
        if ($zym_42 > 0) {
            $zym_48['siteid'] = $zym_42;
        } else {
            $zym_48['siteid'] = array('in', M('novelsearch_site')->getipsites());
            $zym_51 = 'oid desc,id desc';
            $this->group('oid');
        }
        if ($zym_11 == 0) {
            $zym_52 = $this->where($zym_48)->field('id,siteid,oid,time')->order($zym_51)->select();
        } else {
            $zym_52 = $this->where($zym_48)->field('id,siteid,oid,time')->page($zym_27)->limit($zym_11)->order($zym_51)->select();
        }
        if ($zym_52) {
            $zym_13 = dc::get('novelsearch_info', $zym_38, 'novel.pinyin');
            foreach ($zym_52 as $zym_28 => $zym_47) {
            }
            $zym_10 = $zym_52['0']['oid'];
            $zym_15 = (new NovelSearch_SiteModel())->getnamelist();
            foreach ($zym_52 as $zym_28 => $zym_47) {
                if (!$zym_42) {
                    $zym_52[$zym_28]['sign'] = 0;
                    if ($zym_47['oid'] && $zym_47['oid'] < $zym_10 && isset($zym_52[$zym_28 - 1])) {
                        $zym_52[$zym_28 - 1]['sign'] = 1;
                        $zym_10 = $zym_47['oid'];
                    }
                }
                $zym_52[$zym_28]['url_read'] = U('novelsearch.chapter.' . $this->getshowtype($zym_47['siteid']), array('chapterid' => $zym_47['id'], 'novelid' => $zym_38, 'novelkey' => $zym_13));
                $zym_52[$zym_28]['url_frame'] = U('novelsearch.chapter.green', array('chapterid' => $zym_47['id'], 'novelid' => $zym_38, 'novelkey' => $zym_13));
                $zym_52[$zym_28]['url_green'] = U('novelsearch.chapter.frame', array('chapterid' => $zym_47['id'], 'novelid' => $zym_38, 'novelkey' => $zym_13));
                if ($zym_47['siteid']) {
                    if (isset($zym_15[$zym_47['siteid']])) {
                        $zym_52[$zym_28]['sitename'] = $zym_15[$zym_47['siteid']]['name'];
                        $zym_52[$zym_28]['sitestyle'] = $zym_15[$zym_47['siteid']]['style'];
                        $zym_52[$zym_28]['sitedesc'] = $zym_15[$zym_47['siteid']]['desc'];
                        $zym_52[$zym_28]['url_dir'] = U('novelsearch.novel.dir', array('siteid' => $zym_47['id'], 'sitekey' => $zym_15[$zym_47['siteid']]['key'], 'novelid' => $zym_38, 'novelkey' => $zym_13));
                        $zym_52[$zym_28]['url_chapter'] = U('novelsearch.chapter.list', array('siteid' => $zym_47['siteid'], 'sitekey' => $zym_15[$zym_47['siteid']]['key'], 'novelid' => $zym_38, 'novelkey' => $zym_13, 'page' => 1));
                    } else {
                        unset($zym_52[$zym_28]);
                    }
                } else {
                    $zym_52[$zym_28]['sitename'] = '本站原创';
                    $zym_52[$zym_28]['sitestyle'] = '';
                    $zym_52[$zym_28]['sitedesc'] = '';
                    $zym_52[$zym_28]['url_dir'] = U('novelsearch.novel.dir', array('novelid' => $zym_38, 'novelkey' => $zym_13));
                    $zym_52[$zym_28]['url_chapter'] = '';
                }
                unset($zym_52[$zym_28]['oid']);
            }
            return $zym_52;
        } else {
            $zym_52 = array();
        }
        if ($zym_12) {
            cache::set($zym_49, $zym_52, 1);
        }
        $zym_52 = array_values($zym_52);
        return $zym_52;
    }
    public function getcount($zym_38, $zym_42)
    {
        $zym_49 = "chapterlist_count_{$zym_38}_{$zym_42}";
        $zym_8 = cache::get($zym_49);
        if (APP_DEBUG || !$zym_8) {
            $this->setTableId($zym_38);
            $zym_48 = array('novelid' => $zym_38);
            if ($zym_42 > 0) {
                $zym_48['siteid'] = $zym_42;
            } else {
                $zym_48['siteid'] = array('in', M('novelsearch_site')->getipsites());
            }
            $zym_8 = $this->where($zym_48)->count();
            cache::set($zym_49, $zym_8, 1800);
        }
        return intval($zym_8);
    }
    public function getinfo($zym_38, $zym_6, $zym_36 = array(), $zym_5 = true, $zym_9 = true, $zym_7 = 'id', $zym_14 = '')
    {
        if (!$zym_14) {
            $zym_14 = ACTION_NAME;
        }
        if (!$zym_36) {
            $zym_36 = $this->get('novelsearch_info', $zym_38);
        }
        $this->setTableId($zym_38);
        $zym_53 = $this->where(array($zym_7 => $zym_6, 'novelid' => $zym_38))->find();
        if (!$zym_53) {
            return [];
        }
        $zym_53['url_mark'] = U('user.mark.add', ['novelid' => $zym_38, 'chapterid' => $zym_53['oid']]);
        $zym_53['url_green'] = U('novelsearch.chapter.green', array('novelid' => $zym_38, 'novelkey' => $zym_36['novel']['pinyin'], 'chapterid' => $zym_53['id']));
        $zym_53['url_frame'] = U('novelsearch.chapter.frame', array('novelid' => $zym_38, 'novelkey' => $zym_36['novel']['pinyin'], 'chapterid' => $zym_53['id']));
        $zym_53['url_read'] = U('novelsearch.chapter.read', array('novelid' => $zym_38, 'novelkey' => $zym_36['novel']['pinyin'], 'chapterid' => $zym_53['oid']));
        if ($zym_5) {
            $zym_53['preinfo'] = $this->getpreinfo($zym_53, $zym_36, $zym_14);
            $zym_53['nextinfo'] = $this->getnextinfo($zym_53, $zym_36, $zym_14);
        }
        if ($zym_53['siteid'] == 0 && $zym_36['source']['siteid'] == 0) {
            $zym_53['content'] = F(DATA_PATH . '/chapter/' . subid($zym_38) . '/' . $zym_38 . '/' . $zym_6 . '.txt');
            return $zym_53;
        } else {
            $zym_26 = $this->get('novelsearch_site', $zym_53['siteid']);
           // $zym_53['sitename'] = $zym_26['name'];
            $zym_53['url_dir'] = U('novelsearch.novel.dir', array('siteid' => $zym_26['id'], 'sitekey' => $zym_26['key'], 'novelid' => $zym_38, 'novelkey' => $zym_36['novel']['pinyin']));
        }
        if ($zym_9) {
            $zym_50 = $this->getlistbyoid($zym_38, $zym_53['oid']);
            $zym_52 = [['url' => 'javascript:void(0);', 'name' => $zym_26['name'], 'style' => '', 'desc' => '']];
            $zym_15 = (new NovelSearch_SiteModel())->getnamelist();
            foreach ($zym_50 as $zym_28 => $zym_47) {
                if ($zym_47['siteid'] == $zym_26['id'] || empty($zym_15[$zym_47['siteid']])) {
                    continue;
                }
                $zym_52[] = array('url' => U('novelsearch.chapter.' . $this->getshowtype($zym_47['siteid']), array('novelid' => $zym_38, 'novelkey' => $zym_36['novel']['pinyin'], 'chapterid' => $zym_47['id'])), 'name' => $zym_15[$zym_47['siteid']]['name'], 'style' => $zym_15[$zym_47['siteid']]['style'], 'desc' => $zym_15[$zym_47['siteid']]['desc']);
            }
            $zym_53['samelist'] = $zym_52;
        }
        return $zym_53;
    }
    public function getpreinfo($zym_23, $zym_36, $zym_14 = '')
    {
        if ($this->request->isMobile() && $this->config->get('wap_tc2read')) {
            $zym_14 = 'read';
        } elseif (!$zym_14) {
            $zym_14 = ACTION_NAME;
        }
        $this->setTableId($zym_23['novelid']);
        if ($zym_14 == 'read') {
            $zym_45 = $zym_23['oid'] > 0 ? --$zym_23['oid'] : 0;
            $zym_53 = $zym_45 ? $this->field('name,oid as id')->where(array('novelid' => $zym_23['novelid'], 'oid' => $zym_45))->limit('1')->find() : array();
        } else {
            $zym_53 = $this->field('name,id')->where(array('novelid' => $zym_23['novelid'], 'siteid' => $zym_23['siteid'], 'id' => array('<', $zym_23['id'])))->order('id desc')->find();
        }
        if ($zym_53) {
            $zym_53['url'] = U('novelsearch.chapter.' . $zym_14, array('chapterid' => $zym_53['id'], 'novelid' => $zym_23['novelid'], 'novelkey' => $zym_36['novel']['pinyin']));
        } else {
            $zym_53['id'] = 0;
            $zym_53['name'] = "没有了";
            $zym_53['url'] = $zym_36['url']['info'];
        }
        return $zym_53;
    }
    public function getnextinfo($zym_23, $zym_36, $zym_14 = '')
    {
        if ($this->request->isMobile() && $this->config->get('wap_tc2read')) {
            $zym_14 = 'read';
        } elseif (!$zym_14) {
            $zym_14 = ACTION_NAME;
        }
        $this->setTableId($zym_23['novelid']);
        if ($zym_14 == 'read') {
            $zym_45 = $zym_23['oid'] < $zym_36['last']['id'] ? ++$zym_23['oid'] : 0;
            $zym_53 = $zym_45 ? $this->field('name,oid as id')->where(array('novelid' => $zym_23['novelid'], 'oid' => $zym_45))->limit('1')->find() : array();
        } else {
            $zym_53 = $this->field('name,id')->where(array('novelid' => $zym_23['novelid'], 'siteid' => $zym_23['siteid'], 'id' => array('>', $zym_23['id'])))->order('id asc')->find();
        }
        if ($zym_53) {
            $zym_53['url'] = U('novelsearch.chapter.' . $zym_14, array('chapterid' => $zym_53['id'], 'novelid' => $zym_23['novelid'], 'novelkey' => $zym_36['novel']['pinyin']));
        } else {
            $zym_53['id'] = 0;
            $zym_53['name'] = "没有了";
            switch ($this->config->get('readend_type', 1)) {
                case 1:
                    $zym_53['url'] = $zym_36['url']['info'];
                    break;
                case 2:
                    $zym_53['url'] = $zym_36['url']['chapterlist'];
                    break;
                case 0:
                    $zym_53['url'] = $zym_36['url']['readend'];
                    break;
                default:
                    $zym_53['url'] = $zym_36['url']['info'];
            }
        }
        return $zym_53;
    }
    public function getlistbyoid($zym_38, $zym_30)
    {
        $this->setTableId($zym_38);
        $zym_50 = $this->where(array('novelid' => $zym_38, 'oid' => $zym_30))->field('id,siteid,time')->select();
        $zym_52 = array_column($zym_50, null, 'siteid');
        return $zym_52;
    }
    public function getolist($zym_38, $type)
    {
        $zym_49 = 'downolist_' . $zym_38.$type;
        $zym_52 = $this->cache->get($zym_49);
        if (APP_DEBUG || !$zym_52) {
            $this->setTableId($zym_38);
            $zym_52 = $this->where(array('novelid' => $zym_38,'type' => $type))->group('oid')->field('*')->order('oid asc')->select();
            $zym_13 = $this->get('novelsearch_info', $zym_38, 'novel.name'); 
			$zym_15 = M('novelsearch_site')->getnamelist();
            foreach ($zym_52 as &$zym_47) {
                //$zym_47['url_read'] = U('novelsearch.chapter.read', array('novelid' => $zym_38, 'novelkey' => $zym_13, 'chapterid' => $zym_47['oid']));
				$zym_47['sitename'] = $zym_15[$zym_47['siteid']]['name'];
				$zym_47['url_down'] ="/down/downurl.php?novelid=$zym_38&name=".$zym_47['sitename']."&url=".base64_encode($zym_47['url']);
			   if(!$zym_47['size']){
					$headers = get_headers($zym_47['url'], TRUE);
					//$zym_47['size'] = $headers['Content-Length'];
					if($zym_47['size']){
				        $this->where(array('novelid' => $zym_38,'id' => $zym_47['id']))->update(['size' => $zym_47['size']]);
					}
				}
            }
            $this->cache->set($zym_49, $zym_52, 300);
        }
        return $zym_52;
    }
    public function getshowtype($zym_42)
    {
        static $greensite = null, $zym_16, $zym_24;
        if ($greensite === null) {
            $greensite = $this->model('rule')->where(['chapter_content' => ['<>', '']])->getfield('siteid', true);
            $zym_16 = cookie('readtype') ? cookie('readtype') : C('read_type');
            $zym_24 = C('read_type2');
        }
        if ($zym_16 == 'green') {
            if (in_array($zym_42, $greensite)) {
                return 'green';
            } else {
                return $zym_24;
            }
        } else {
            return $zym_16;
        }
    }
    public function ban($zym_38, $zym_25)
    {
        $this->setTableId($zym_38);
        $zym_25 = explode("\n", trim($zym_25));
        foreach ($zym_25 as &$zym_47) {
            $zym_47 = intval(trim($zym_47));
        }
        $this->where(['novelid' => $zym_38, 'id' => ['in', $zym_25]])->update(['oid' => 0]);
        return;
    }
    public function getweightlistbyoid($zym_38, $zym_30)
    {
        $zym_46 = ['vip' => [], 'free' => []];
        $this->setTableId($zym_38);
        $zym_50 = $this->where(array('novelid' => $zym_38, 'oid' => $zym_30))->field('id,siteid,time')->select();
        $zym_52 = array_column($zym_50, null, 'siteid');
        $zym_22 = array_keys($zym_52);
        $zym_21 = (new NovelSearch_SiteModel())->field('id,isoriginal,status')->where(['id' => ['in', $zym_22]])->select();
        foreach ($zym_21 as $zym_47) {
            if ($zym_47['status']) {
                if ($zym_47['isoriginal']) {
                    $zym_46['vip'][$zym_47['id']] = $zym_52[$zym_47['id']];
                } else {
                    $zym_46['free'][$zym_47['id']] = $zym_52[$zym_47['id']];
                }
            }
        }
        return $zym_46;
    }
    public function selectChapter($zym_52)
    {
        if (count($zym_52) == 1) {
            return current($zym_52);
        }
        switch ($this->config->get('chapter_show_type', 1)) {
            case 1:
                $zym_17 = $this->model('novelsearch_site')->getweight();
                foreach ($zym_17 as $zym_28 => $zym_47) {
                    if (isset($zym_52[$zym_28])) {
                        return $zym_52[$zym_28];
                    }
                }
                return current($zym_52);
            case 2:
                $zym_53 = ['time' => 2000000000];
                foreach ($zym_52 as $zym_47) {
                    if ($zym_47['time'] < $zym_53['time']) {
                        $zym_53 = $zym_47;
                    }
                }
                return $zym_53;
            case 3:
                $zym_53 = ['time' => 0];
                foreach ($zym_52 as $zym_47) {
                    if ($zym_47['time'] > $zym_53['time']) {
                        $zym_53 = $zym_47;
                    }
                }
                return $zym_53;
            default:
                $zym_18 = [];
                $zym_17 = $this->model('novelsearch_site')->getweight();
                foreach ($zym_17 as $zym_42 => $zym_47) {
                    if (isset($zym_52[$zym_42])) {
                        $zym_18 = array_merge($zym_18, array_fill(0, $zym_47, $zym_42));
                    }
                }
                return $zym_52[$zym_18[array_rand($zym_18)]];
        }
    }
    public function getRead($zym_36, $zym_30, $zym_42 = 0)
    {
        if ($zym_36['source']['siteid'] == 0) {
            $zym_23 = $this->getinfo($zym_36['novel']['id'], $zym_30, $zym_36, true, false, 'oid');
            (new User_MarkModel())->autorecord($zym_36['novel']['id'], $zym_23['oid']);
            return ['showtype' => 'green', 'sitename' => $this->config->get('sitename'), 'chapter' => $zym_23];
        }
        if ($this->config->get('read_auto_show', 1)) {
            $zym_52 = $this->model('novelsearch_chapter')->getweightlistbyoid($zym_36['novel']['id'], $zym_30);
            if (count($zym_52['free']) > 0) {
                $zym_53 = $this->model('novelsearch_chapter')->selectchapter($zym_52['free']);
            } else {
                $zym_53 = $this->model('novelsearch_chapter')->selectchapter($zym_52['vip']);
            }
            return [];
            define('SHOWTYPE', $this->model('novelsearch_chapter')->getshowtype($zym_53['siteid']));
            $zym_19 = 'show' . SHOWTYPE;
            $this->chapterid = $zym_53['id'];
            $this->{$zym_19}();
        } else {
            $zym_52 = $this->model('novelsearch_chapter')->getlistbyoid($zym_36['novel']['id'], $zym_30);
            $zym_20 = $this->Model('novelsearch_site')->getnamelist();
            foreach ($zym_52 as &$zym_47) {
                $zym_47['sitename'] = $zym_20[$zym_47['siteid']]['name'];
                $zym_19 = $this->model('novelsearch_chapter')->getshowtype($zym_47['siteid']);
                $zym_47['url'] = U('novelsearch.chapter.' . $zym_19, array('novelid' => $this->novelid, 'novelkey' => $this->view->novel['pinyin'], 'chapterid' => $zym_47['id']));
            }
            $this->assign('chapterlist', $zym_52);
            $this->display('chapterchoose');
        }
    }
}
