<?php
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;

//use yii;

class HelloController extends Controller{

    public $layout = 'common';
    public function actionIndex(){
//        $request = \YII::$app->request;
//        $data = $request->get('id',40);
//        $data = $request->post('name',11);
//        if($request->getIsGet()){
//            echo 'isget';
//        }
//        if($request->getIsPost()){
//            echo 'ispost';
//        }
        $res = \yii::$app->response;
//        $res->statusCode='404';
//        $res->headers->add('pragma','no-cache');
//        $this->redirect('http://www.baidu.com',302);
//        $session = \yii::$app->session;
//        $session->open();
//        $session->set('user','tt');
//        $s = $session->get('user');
//        $c = array('name'=>'yy','value'=>'67y');
//        $res->cookies->add(new Cookie($c));
//        $res->cookies->remove();

        //获取cookie的方法
//        $cookies = \yii::$app->request->cookies->getValue('yy');
//        var_dump($cookies);
        $h_str = 'hello<script>alert(2)</script>';
        $data = array();
        //把数据放到数组中
        $data['view_hello'] = $h_str;
//        return $this->renderPartial('index');
        //使用另外的render 方法
        return $this->render('about');//$content
    }
}