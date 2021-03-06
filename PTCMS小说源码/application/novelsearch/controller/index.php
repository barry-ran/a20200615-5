<?php
class indexController extends CommonController {
    public function indexAction() {
        $dateStr = date('Y-m-d', time());
        M('novelsearch_info')->setvisit();
        $this->view->bookcount = M('novelsearch_info')->getcount(array('id' =>array('>','1')));
		$this->view->postcount = M('novelsearch_info')->getcount(array('postdate' =>array('>',strtotime($dateStr))));
		$this->view->lastcount = M('novelsearch_info')->getcount(array('lastupdate' =>array('>',strtotime($dateStr))));
		$this->view->odayvisit = M('novelsearch_info')->getsum('dayvisit');
		$this->view->odownnum = M('novelsearch_info')->getsum('downnum');
        $this->view->marklist = M('user_mark')->getmarklist();
        $this->display('index');
    }
    public function desktopAction() {
        $zym_5 = "[InternetShortcut]\n";
        $zym_5.= "URL=" . C('siteurl') . "\n";
        $zym_5.= "IDList=IconFile=" . C('siteurl') . "favicon.ico\n";
        $zym_5.= "IconIndex=1\n";
        $zym_5.= "[{000214A0-0000-0000-C000-000000000046}]\n";
        $zym_5.= "Prop3=19,2";
        header('Content-Type:text/xml; charset=utf-8');
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=" . urlencode(C('sitename')) . ".url;");
        echo $zym_5;
        exit;
    }
    public function topAction() {
        $this->display('topindex');
    }
    public function categoryAction() {
        $this->display('categoryindex');
    }
}
