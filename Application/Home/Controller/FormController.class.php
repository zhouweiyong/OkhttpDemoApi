<?php
namespace Home\Controller;

use Think\Controller;

class FormController extends Controller{


    //获取表单提交的信息,并写入数据库
    public function insert(){
        //数据库表单名称后缀需要和model需一致

        //实例化自定义模型类
        $Form = D("form");
        //创建数据对象
        if ($Form->create()){
            //把数据添加到同名数据库表单中
            $result = $Form->add();
            if ($result){
                $this->success("数据添加成功");
            }else{
                $this->error("数据添加失败");
            }
        }else{
            $this->error($Form->getError());
        }
    }
}