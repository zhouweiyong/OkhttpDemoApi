<?php
namespace Home\Controller;

use Think\Controller;

/**
 * Class FormController
 * @package Home\Controller
 * 数据库的增删改查操作
 */
class FormController extends Controller{


    //获取表单提交的信息,并写入数据库
    public function insert(){
        //数据库表单名称后缀需要和model需一致

        //实例化自定义模型类
        $Form = D("form");
        //创建表单数据对象,同时验证
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

    //针对信任的数据不需要验证(create),直接add
    public function addMyData(){
        //创建自定义模型
        $Form = D("Form");

        //给模型添加数据
//        $data["title"]="data title1";
//        $data["content"]="data content1";
//        $Form->add($data);

        //给模型添加数据
        $Form->title = "my title1";
        $Form->content = "my content1";
        //添加到同名数据库表单中
        $Form->add();
    }

    //数据库读取
    public function read($id=0){
        $Form = M("form");
        $data = $Form->find($id);

        //如果你只需要查询某个字段的值，还可以使用getField方法
        // 获取标题
        //$title = $Form->where('id=3')->getField('title');
        if ($data){
            $this->assign("data",$data);
        }else{
            $this->error("数据错误");
        }
        $this->display();
    }

    //修改指定id的数据
    public function edit($id=0){
        $Form = M("Form");
        $result = $Form->find($id);
        if ($result){
            $this->assign("data",$result);
        }else{
            $this->error("数据错误");
        }
        $this->display();
    }
    //修改指定id的数据
    public function update(){
        $Form = D("Form");
        //创建表单数据对象,同时验证
        if ($Form->create()){
            //更新数据库表单数据
            $result = $Form->save();
            if ($result){
                $this->success("数据修改成功");
            }else{
                $this->error("数据修改失败");
            }
        }else{
            $this->error($Form->getError());
        }

    }

    //如果修改数据操作不依赖表单的提交
    public function update2(){
        //第一种方式
//        $Form = M("Form");
//        // 要修改的数据对象属性赋值
//        $data['id'] = 1;
//        $data['title'] = 'ThinkPHP';-----
//        $data['content'] = 'ThinkPHP3.2.3版本发布';
//        $Form->save($data); // 根据条件保存修改的数据


        //第二种方式
//        $Form = M("Form");
//        // 要修改的数据对象属性赋值
//        $data['title'] = 'ThinkPHP';
//        $data['content'] = 'ThinkPHP3.2.3版本发布';
//        $Form->where('id=5')->save($data); // 根据条件保存修改的数据

        //第三种方式
//        $Form = M("Form");
//        // 要修改的数据对象属性赋值
//        $Form->title = 'ThinkPHP';
//        $Form->content = 'ThinkPHP3.2.3版本发布';
//        $Form->where('id=5')->save(); // 根据条件保存修改的数据


        // 单独更新某个字段的值
//        $Form = M("Form");
//        // 更改title值
//        $Form->where('id=5')->setField('title','ThinkPHP');

        //对于统计字段，系统还提供了更加方便的setInc和setDec方法。
        $User = M("User"); // 实例化User对象
        $User->where('id=5')->setInc('score',3); // 用户的积分加3
        $User->where('id=5')->setInc('score'); // 用户的积分加1
        $User->where('id=5')->setDec('score',5); // 用户的积分减5
        $User->where('id=5')->setDec('score'); // 用户的积分减1
    }

    //删除
    public function delete(){
        //删除主键为5的数据
//        $Form = M('Form');
//        $Form->delete(5);

        $User = M("User"); // 实例化User对象
        $User->where('id=5')->delete(); // 删除id为5的用户数据
        $User->delete('1,2,5'); // 删除主键为1,2和5的用户数据
        $User->where('status=0')->delete(); // 删除所有状态为0的用户数据
    }
}