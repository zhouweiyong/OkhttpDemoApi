<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class QueryController extends Controller {

    //传统的方式，但是安全性不高
    public function query1(){
        $data=M("form");
        $rs =$data->where("id = 9 and title='data title1'")->select();
        $this->show("id=".$rs[0]["id"]."     title=".$rs[0]["title"]."  content=".$rs[0]["content"]);
    }

    //最常用的查询方式,使用数组方式查询
    //推荐此种方式,更高效
    public function query2(){
        $mode = M("form");
        $condition["id"]=9;
        $condition["title"]="data title1";
        $rs =$mode->where($condition)->select();
        var_dump($rs);
    }
    //通过使用 _logic 定义查询逻辑`
    public function query3(){
        $mode = M("form");
        $condition["id"]=1;
        $condition["title"]="data title1";
        $condition["_logic"]="or";
        $rs= $mode->where($condition)->select();
        var_dump($rs);
    }

    //使用stdClass内置对象方式来查询
    //使用对象方式查询和使用数组查询的效果是相同的，并且是可以互换的，大多数情况下，我们建议采用数组方式更加高效。
    public function query4(){
        $mode = M("form");
        $condition = new \stdClass();
        $condition->id = 9;
        $condition->title = "data title1";
        $rs = $mode->where($condition)->select();
        var_dump($rs);
    }


    public function query5(){
        $mode = M("form");
        //查询所有的数据
//        $rs = $mode->select();
//        var_dump($rs);
//
//        //获取数据数量
//        $count = $mode->count();
//        echo $count;

        $where["title"] = 'data title1';
        $subQuery = $mode->field('id,content')->table('think_form')->where($where)->order('id')->buildSql();
        echo $subQuery;
    }

}