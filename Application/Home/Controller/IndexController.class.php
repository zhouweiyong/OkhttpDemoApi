<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show("Hello Home;;;");
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    //模版位置:模块目录下面的 View/控制器名/操作名.html
    public function sayHello($name="winson"){
//        echo "Hello ".$name;
        //$this->show("hello>>>".$name);

        //传参数给模版
        $this->assign("name",$name);
        //显示对应的模版
        $this->display();
    }

    //读取数据库
    public function helloDb(){
        //创建data模型对象
        $data = M("data");
//        var_dump($data);
        //获取同名表单中的第一条信息
        $res = $data->find(1);
        //echo $res['data'];
        
        $this->assign("result",$res);
        $this->display();
    }
}