<?php
class User_MarkModel extends Model {
    public function autorecord($zym_13, $zym_12) {
        if (!cookie('nohistory')) {
            if ($zym_14 = I('cookie.userid', 'int')) {
                $zym_15 = $this->getmarkinfo($zym_14);
                if (isset($zym_15[$zym_13])) {
                    $this->addusermark($zym_14, $zym_13, $zym_12);
                    return;
                }
            }
            $zym_20 = $this->gethistoryinfo();
            $zym_20[$zym_13] = $zym_12;
            $this->sethistory($zym_20);
        }
    }
    public function getmarkinfo($zym_14 = 0) {
        if ($zym_14 == 0) $zym_14 = I('cookie.userid', 'int');
        if (!$zym_14) return array();
        $zym_21 = 'markinfo_' . $zym_14;
        $zym_20 = $this->cache->get($zym_21);
        if ($zym_20 === null) {
            $zym_20 = array();
            $zym_19 = $this->where(array(
                'userid' => $zym_14
            ))->field('novelid,chaptersign')->select();
            if ($zym_19) {
                foreach ($zym_19 as $zym_22) {
                    $zym_20[$zym_22['novelid']] = $zym_22['chaptersign'];
                }
            }
            $this->cache->set($zym_21, $zym_20);
        }
        return $zym_20;
    }
    public function gethistoryinfo() {
        $zym_5 = cookie('history');
        $zym_19 = array();
        if ($zym_5) {
            $zym_7 = explode('|', $zym_5);
            foreach ($zym_7 as $zym_22) {
                $zym_22 = trim($zym_22);
                if ($zym_22) {
                    $zym_10 = explode(',', $zym_22);
                    $zym_19[$zym_10['0']] = empty($zym_10['1']) ? 0 : $zym_10['1'];
                }
            }
        }
        return $zym_19;
    }
    public function sethistory($zym_20) {
        if ($zym_20 == array()) {
            cookie('history', null);
        } else {
            $zym_5 = array();
            foreach ($zym_20 as $zym_9 => $zym_22) {
                $zym_5[] = $zym_9 . ',' . $zym_22;
            }
            $zym_5 = array_slice($zym_5, -20);
            $zym_5 = implode('|', $zym_5);
            cookie('history', $zym_5, '2592000');
        }
    }
    public function getmarknum($zym_8) {
        $zym_17 = 0;
        foreach ($zym_8 as $zym_9 => $zym_22) {
            $zym_6 = $this->get('novelsearch_info', $zym_9);
            if (isset($zym_6['novel']['name']) && $zym_6['last']['id'] > $zym_22) {
                $zym_17++;
            }
        }
        return $zym_17;
    }
    public function getmarklist($zym_20 = null, $zym_18 = 'auto') {
        if ($zym_20 === null) {
            if (($zym_18 == 'auto' || $zym_18 == 'mark') && $zym_14 = I('cookie.userid', 'int')) {
                $zym_20 = $this->getmarkinfo($zym_14);
            } else {
                $zym_20 = $this->gethistoryinfo();
            }
        }
        $zym_19 = array();
        foreach ($zym_20 as $zym_9 => $zym_22) {
            $zym_17 = dc::get('novelsearch_info', $zym_9);
            if (isset($zym_17['novel']['name'])) {
                $zym_16 = $zym_22 == 0 ? 1 : $zym_22;
                $zym_11 = $zym_22 == 0 ? 1 : ($zym_17['last']['id'] > $zym_16 ? $zym_22 + 1 : $zym_22);
                $zym_17['nexturl'] = U('novelsearch.chapter.read', array(
                    'chapterid' => $zym_11,
                    'novelid' => $zym_17['novel']['id'],
                    'novelkey' => $zym_17['novel']['pinyin']
                ));
                $zym_17['hsnew'] = $zym_17['last']['chaptername'];
                $zym_17['hnew'] = $zym_16;
                $zym_17['hasnew'] = $zym_17['last']['id'] - $zym_16;
                $zym_17['hasnew'] = $zym_17['hasnew'] > 0 ? $zym_17['hasnew'] : 0;
                $zym_17['lastupdate'] = $zym_17['last']['time'];
                $zym_17['sign'] = $zym_17['hasnew'] ? $zym_16 : 0;
                $zym_19[] = $zym_17;
            }
        }
        $zym_19 = msort($zym_19, 'lastupdate', 'desc');
        return $zym_19;
    }
    public function addusermark($zym_14, $zym_13, $zym_12 = 1) {
        $zym_20 = $this->getmarkinfo();
        if ($zym_20 && isset($zym_20[$zym_13])) {
            if ($zym_20[$zym_13] != $zym_12) {
                M('user_mark')->where(array(
                    'userid' => $zym_14,
                    'novelid' => $zym_13
                ))->update(array(
                    'chaptersign' => $zym_12
                ));
                cache::rm('markinfo_' . $zym_14);
            }
        } else {
            M('user_mark')->insert(array(
                'userid' => $zym_14,
                'novelid' => $zym_13,
                'chaptersign' => $zym_12
            ));
            cache::rm('markinfo_' . $zym_14);
        }
    }
    public function remove($zym_14, $zym_13) {
        if (is_array($zym_13)) {
            $this->where(['userid' => $zym_14, 'novelid' => ['in', $zym_13]])->delete();
        } else {
            $this->where(['userid' => $zym_14, 'novelid' => $zym_13])->delete();
        }
        $this->cache->rm('markinfo_' . $zym_14);
    }
}
?>          
