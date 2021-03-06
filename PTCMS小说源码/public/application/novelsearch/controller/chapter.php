<?php
class chapterController extends CommonController {
    protected $siteid;
    protected $novelid;
    protected $chapterid;
    protected $novelinfo;
    protected $isyc;
    public function init() {
        parent::init();
        $this->novelid = $this->getnovelid();
        $this->novelinfo = $this->model->get('novelsearch_info', $this->novelid);
        $this->isyc = ($this->novelinfo['source']['siteid'] == 0);
        $this->view->set($this->novelinfo);
    }
    public function listAction() {
        $this->siteid = $this->input->get('siteid', 'int', $this->input->get('sitekey', 'str', ''));
        if (!$this->siteid) {
            $this->view->siteid = 0;
            $this->view->sitename = '';
        } else if (is_numeric($this->siteid)) {
            $zym_12 = $this->model->get('novelsearch_site', $this->siteid);
            $this->view->sitename = $zym_12['name'];
            $this->view->siteid = $zym_12['id'];
            $zym_14 = $zym_12['key'];
        } else {
            $zym_12 = $this->model('novelsearch_site')->getinfobykey($this->siteid);
            $this->view->siteid = $zym_12['id'];
            $this->view->sitename = $zym_12['name'];
            $zym_14 = $zym_12['key'];
        }
        $zym_15 = new NovelSearch_chapterModel();
        $this->view->page = I('get.page', 'int', 1);
        $this->view->pagesize = C('pagesize_chapterlist');
        $this->view->totalnum = $zym_15->getcount($this->novelid, $this->view->siteid);
        $this->view->chapterlist = $zym_15->getchapterlist($this->novelid, $this->view->siteid, $this->view->page, $this->view->pagesize);
        if ($this->view->siteid) {
            $this->view->pageurl = U('novelsearch.chapter.list', array(
                'novelid' => $this->novelid,
                'novelkey' => $this->view->novel['pinyin'],
                'page' => '__PAGE__',
                'siteid' => $this->siteid,
                'sitekey' => $zym_14
            ));
        } else {
            $this->view->pageurl = U('novelsearch.chapter.list', array(
                'novelid' => $this->novelid,
                'novelkey' => $this->view->novel['pinyin'],
                'page' => '__PAGE__'
            ));
        }
        M('user_mark')->autorecord($this->novelid, $this->novelinfo['last']['id']);
        $this->display('chapterlist');
    }
    public function frameAction() {
        define('SHOWTYPE', 'frame');
        $this->chapterid = I('get.chapterid', 'int', 0);
        $this->showframe();
    }
    public function greenAction() {
        define('SHOWTYPE', 'green');
        $this->chapterid = I('get.chapterid', 'int', 0);
        $this->showgreen();
    }
    public function goAction() {
        define('SHOWTYPE', 'go');
        $this->chapterid = I('get.chapterid', 'int', 0);
        $this->showgo();
    }
    public function readAction() {
        $chapterid = I('get.chapterid', 'int', 0);
        if ($this->isyc) {
            $zym_11 = M('novelsearch_chapter');
            $zym_16 = $zym_11->getinfo($this->novelid, $chapterid, $this->novelinfo, true, false, 'oid');
            $this->record($zym_16);
            $this->view->sitename = $this->config->get('sitename');
            $zym_16['type'] = 'green';
            $this->view->chapter = $zym_16;
            $this->display('green');
            exit;
        }
        if ($this->config->get('read_auto_show', 1)) {
            $zym_18 = $this->model('novelsearch_chapter')->getweightlistbyoid($this->novelid, $chapterid);
            if (count($zym_18['free']) > 0) {
                $zym_19 = $this->model('novelsearch_chapter')->selectchapter($zym_18['free']);
            } else {
                $zym_19 = $this->model('novelsearch_chapter')->selectchapter($zym_18['vip']);
            }
            define('SHOWTYPE', $this->model('novelsearch_chapter')->getshowtype($zym_19['siteid']));
            $zym_5 = 'show' . SHOWTYPE;
            $this->chapterid = $zym_19['id'];
            $this->$zym_5();
        } else {
            $zym_18 = $this->model('novelsearch_chapter')->getlistbyoid($this->novelid, $chapterid);
            $zym_7 = $this->Model('novelsearch_site')->getnamelist();
            foreach ($zym_18 as & $zym_20) {
                $zym_20['sitename'] = $zym_7[$zym_20['siteid']]['name'];
                $zym_5 = $this->model('novelsearch_chapter')->getshowtype($zym_20['siteid']);
                $zym_20['url'] = U('novelsearch.chapter.' . $zym_5, array(
                    'novelid' => $this->novelid,
                    'novelkey' => $this->view->novel['pinyin'],
                    'chapterid' => $zym_20['id']
                ));
            }
            $this->assign('chapterlist', $zym_18);
            $this->display('chapterchoose');
        }
    }
    public function transcodeAction() {
        $siteid = $this->input->request('siteid', 'int', 0);
        $zym_9 = $this->input->request('time', 'int', $_SERVER['REQUEST_TIME']);
        $zym_8 = $this->input->request('url', 'str', '');
        $zym_21 = $this->config->get('greenread_errormsg', '转码失败！请您使用右上换源切换源站阅读或者直接前往源网站进行阅读！');;
        if ($siteid && $zym_8) {
            $zym_17 = (new CollectModel($siteid, 'siteid'))->getchapter($zym_8, $zym_9);
            if ($zym_17['status'] == 1 && strlen($zym_17['data']) > 0) {
                $zym_21 = showchapter($zym_17['data']);
            };
        }
        $this->success($zym_21);
    }
    protected function record($zym_16) {
        M('user_mark')->autorecord($this->novelid, $zym_16['oid']);
    }
    protected function showgreen() {
        $zym_11 = new NovelSearch_chapterModel();
        $zym_16 = $zym_11->getinfo($this->novelid, $this->chapterid, $this->novelinfo);
        if (empty($zym_16['name'])) {
            $this->redirect($this->novelinfo['url']['info']);
            exit;
        }
        $this->record($zym_16);
        $this->config->set('ajaxgreen', false);
        switch ($this->config->get('greenread_showtype', 0)) {
            case 0:
                if (!$this->request->isSpider() && !$this->request->isMobile()) {
                    $this->config->set('ajaxgreen', true);
                }
                break;

            case 2:
                $this->config->set('ajaxgreen', true);
                break;
        }
        if ($this->config->get('ajaxgreen')) {
            $zym_16['content'] = '';
        } else {
            $zym_17 = (new CollectModel($zym_16['siteid'], 'siteid'))->getchapter($zym_16['url'], $zym_16['time']);
            if ($zym_17['status'] == 1) {
                $zym_16['content'] = showchapter($zym_17['data']);
            } else {
                $zym_16['content'] = $this->config->get('greenread_errormsg', '转码失败！请您使用右上换源切换源站阅读或者直接前往源网站进行阅读！');
            }
        }
        if ($this->request->isMobile() || 1) {
            $zym_10 = isset($this->userinfo['id']) ? $this->userinfo['id'] : 0;
            $this->view->set('readerconfig', (new User_HabbitModel())->loadReader($zym_10));
            $this->view->set('chapterconfig', ['info' => ['id' => $zym_16['oid'], 'title' => $zym_16['name'], 'url' => $zym_16['url_read'], 'content' => ''], 'novel' => ['id' => $this->novelid, 'name' => $this->novelinfo['novel']['name'], 'marked' => isset($this->userinfo['marklist'][$this->novelid]) , 'num' => $this->novelinfo['last']['id']], 'from' => ['id' => $zym_16['siteid'], 'url' => $zym_16['url']], 'next' => ['id' => $zym_16['nextinfo']['id'], 'url' => $zym_16['nextinfo']['url']], 'prev' => ['id' => $zym_16['preinfo']['id'], 'url' => $zym_16['preinfo']['url']], ]);
        }
        $this->view->sitename = $this->model->get('novelsearch_site', $zym_16['siteid'], 'name');
        $zym_16['type'] = 'green';
        $this->view->chapter = $zym_16;
        $this->display('green');
    }
    protected function showframe() {
        $zym_11 = M('novelsearch_chapter');
        $zym_16 = $zym_11->getinfo($this->novelid, $this->chapterid, $this->novelinfo);
        if (empty($zym_16['name'])) {
            $this->redirect($this->novelinfo['url']['info']);
            exit;
        }
        $this->sitecount($zym_16['siteid']);
        $this->record($zym_16);
        $this->view->sitename = $zym_16['sitename'];
        $this->view->chapter = $zym_16;
        $this->display('frame');
    }
    protected function showgo() {
        $zym_16 = M('novelsearch_chapter')->getinfo($this->novelid, $this->chapterid, array() , false, false);
        if (empty($zym_16['url'])) {
            $this->redirect($this->novelinfo['url']['info']);
            exit;
        }
        $this->sitecount($zym_16['siteid']);
        $this->record($zym_16);
        $this->view->chapter = $zym_16;
        $this->display('go');
    }
    protected function sitecount($siteid) {
        $zym_9 = cookie('sitetime');
        $zym_6 = date('Ymd');
        $zym_11 = M('novelsearch_ipcount');
        if ($zym_9 === $zym_6) {
            $zym_13 = cookie('siteids');
            if (strpos($zym_13, '|' . $siteid . '|') === false) {
                $zym_17 = $zym_11->where(array(
                    'siteid' => $siteid,
                    'date' => $zym_6
                ))->update(array(
                    'ip' => array(
                        'exp',
                        'ip+1'
                    ) ,
                    'pv' => array(
                        'exp',
                        'pv+1'
                    )
                ));
                cookie('siteids', $zym_13 . $siteid . '|', 86400);
            } else {
                $zym_17 = $zym_11->where(array(
                    'siteid' => $siteid,
                    'date' => $zym_6
                ))->update(array(
                    'pv' => array(
                        'exp',
                        'pv+1'
                    )
                ));
            }
        } else {
            cookie('sitetime', date("Ymd") , 86400);
            cookie('siteids', '|' . $siteid . '|', 86400);
            $zym_17 = $zym_11->where(array(
                'siteid' => $siteid,
                'date' => $zym_6
            ))->update(array(
                'ip' => array(
                    'exp',
                    'ip+1'
                ) ,
                'pv' => array(
                    'exp',
                    'pv+1'
                )
            ));
        }
        if (!$zym_17) {
            $zym_18 = M('novelsearch_site')->where(['status' => 1])->field('id')->select();
            foreach ($zym_18 as $zym_20) {
                if ($zym_20['id'] == $siteid) $zym_11->insert(array(
                    'siteid' => $zym_20['id'],
                    'date' => $zym_6,
                    'ip' => 1,
                    'pv' => 1
                ));
                else {
                    $zym_11->insert(array(
                        'siteid' => $zym_20['id'],
                        'date' => $zym_6,
                        'ip' => 0,
                        'pv' => 0
                    ));
                }
            }
        }
    }
}

