<?php
class ManageController extends AdminController {
    public function init() {
        $this->tableName = 'friendlink';
        parent::init();
    }
    public function indexAction() {
        $this->list = $this->model->order('ordernum asc,id asc')->getlist();
        $this->display();
    }
    public function addAction() {
        if (IS_POST) {
            $zym_7['name'] = I('name', 'str', '');
            if (!$zym_7['name']) {
                $this->error('请输入链接名称');
            }
            $zym_7['url'] = I('url', 'str', '');
            if (!$zym_7['url']) {
                $this->error('请输入链接地址');
            }
            $zym_7['logo'] = I('logo', 'str', '');
            $zym_7['description'] = I('description', 'str', '');
            $zym_7['color'] = I('color', 'str', '');
            $zym_7['ordernum'] = I('ordernum', 'int', 50);
            $zym_7['status'] = I('status', 'int', 1);
            $zym_7['isbold'] = I('isbold', 'int', 0);
            $zym_7['create_user_id'] = $_SESSION['admin']['userid'];
            $zym_7['create_time'] = NOW_TIME;
            if ($this->model->add($zym_7)) {
                $this->success('添加成功', U('index'));
            } else {
                $this->error('添加失败');
            }
        }
        $this->display();
    }
    public function editAction() {
        $zym_6 = I('request.id', 'int', 0);
        $zym_5 = $this->model->where(array(
            'id' => $zym_6
        ))->find();
        if (IS_POST) {
            $zym_7['name'] = I('name', 'str', '');
            if (!$zym_7['name']) {
                $this->error('请输入链接名称');
            }
            $zym_7['url'] = I('url', 'str', '');
            if (!$zym_7['url']) {
                $this->error('请输入链接地址');
            }
            $zym_7['logo'] = I('logo', 'str', '');
            $zym_7['description'] = I('description', 'str', '');
            $zym_7['color'] = I('color', 'str', '');
            $zym_7['ordernum'] = I('ordernum', 'int', 50);
            $zym_7['status'] = I('status', 'int', 50);
            $zym_7['isbold'] = I('isbold', 'int', 50);
            $zym_7['update_user_id'] = $_SESSION['admin']['userid'];
            $zym_7['update_time'] = NOW_TIME;
            $zym_7['id'] = $zym_6;
            if ($this->model->edit($zym_7)) {
                $this->success('修改成功', U('index'));
            } else {
                $this->error('修改失败');
            }
        }
        $this->info = $zym_5;
        $this->display();
    }
}
?>
