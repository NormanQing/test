<?php

define('BASEDIR', __DIR__);
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');
echo '<meta http-equiv="content-type" content="text/html;charset=utf-8">';

//$a=array(1,3,4,5,6,8);
//$b=array(1,2,3,5,6,8,10);
//var_dump(array_merge(array_flip($a),  array_flip($b)));
//echo "<hr />";
//var_dump(array_flip(array_flip($a)+array_flip($b)));
//
//$c=array(1,2,3,4,5,6,8,10);


/* * ****工厂模式******* */

//$db= IMooc\Factory::createDatabase();
/* * ****工厂模式******* */

/* * ****单例模式******* */
//$db= IMooc\Database::getInstance();
//$db= IMooc\Database::getInstance();//同上
//$db= IMooc\Database::getInstance();//同上
//$db= IMooc\Database::getInstance();//同上
/* * ****单例模式******* */

/* * ****注册器模式************ */
//$db=IMooc\Register::get('db1');
/* * ****注册器模式************ */

/* * ****适配器模式************ */
//$db=new IMooc\Database\MySQL();
//$db->connect('127.0.0.1', 'root', 'root', 'test');
//$db->query('show databases');
//$db->close();
/* * ****适配器模式************ */

/* * ****策略模式************ */
//class Page {
//
//    protected $strategy;
//    public function index() {
//        echo "AD:";
//        $this->strategy->showAd();
//        echo "<hr />";
//        echo "category:";
//        $this->strategy->showCategory();
//    }
//
//    public function setStrategy(IMooc\UserStrategy $strategy) {
//        $this->strategy = $strategy;
//    }
//
//}
//$page =new Page;
//if(isset($_GET['female'])){
//    $strategy=  new \IMooc\FemaleUserStrategy();
//}else{
//    $strategy=  new \IMooc\ManUserStrategy();
//}
//$page->setStrategy($strategy);
//$page->index();
//解耦
/* * ****策略模式************ */

/* * ***数据对象映射模式***************** */
//ORM
//$user = new IMooc\User(1);
////var_dump($user->id,$user->name,$user->mobile,$user->regtime);
//$user->name='test';
//$user->mobile='13267744142';
//$user->regtime=  date('Y-m-d H:i:s');
//class Page {
//
//    public function index() {
////        $user = new IMooc\User(1);
//         $user = IMooc\Factory::getUser(1);
////         var_dump($user);
//        $user->name = 'test22';
//        $this->test();
//        echo 'ok';
//    }
//
//    public function test() {
////        $user = new IMooc\User(1);
//        $user = IMooc\Factory::getUser(1);
////        var_dump($user);
//        $user->mobile = '13267744141';
//    }
//
//}
//
//$page = new Page;
//$page->index();

/* * ***数据对象映射模式***************** */

/* * ***观察者模式***************** */
//class Event {
//
//    public function trigger() {
//        echo "Event\n";
//
//        //update
//
//        echo "逻辑1";
//        echo "逻辑2";
//        echo "逻辑3";
//        echo "逻辑4";
//    }
//
//}

//class Event extends IMooc\EventGenerator {
//
//    public function trigger() {
//        echo "Event\n";
//
//        //update
//        $this->notify();
//    }
//
//}
//class Observer1 implements IMooc\Observer{
//    public function update($observer=null){
//        echo "逻辑1";
//    }
//}
//class Observer2 implements IMooc\Observer{
//    public function update($observer=null){
//        echo "逻辑2";
//    }
//}
//
//$event = new Event();
//$event->addObserver(new Observer1());
//$event->addObserver(new Observer2());
//$event->trigger();

/*****观察者模式******************/

/*****原型模式******************/
//$canvas1=new IMooc\Canvas();
//$canvas1->init();
//$canvas1->rect(3, 6, 4, 12);
//$canvas1->draw();
//echo "<hr />";
//$canvas2=new IMooc\Canvas();
//$canvas2->init();
//$canvas1->rect(1, 3, 2, 6);
//$canvas1->draw();

//原型
//$prototype=new IMooc\Canvas();
//$prototype->init();
//
//$canvas1=  clone $prototype;
//$canvas1->rect(3, 6, 4, 12);
//$canvas1->draw();
//echo "<hr />";
//$canvas2=  clone $prototype;
//$canvas1->rect(1, 3, 2, 6);
//$canvas1->draw();
/*****原型模式******************/

/*****装饰器模式******************/

//class Canvas2 extends IMooc\Canvas{
//    public function draw() {
//        echo "<div style='color:red'>";
//        parent::draw();
//        echo "</div>";
//    }
//}
//
//$canvas1=new Canvas2();
//$canvas1->init();
//$canvas1->rect(3, 6, 4, 12);
//$canvas1->draw();

$canvas1=new IMooc\Canvas();
$canvas1->init();
$canvas1->addDecorator(new \IMooc\ColorDrawDecorator('green'));
$canvas1->addDecorator(new \IMooc\SizeDrawDecorator('20px'));
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw();

/*****装饰器式******************/

/*****迭代器式******************/

//$users = new \IMooc\AllUser();
//foreach($users as $user){
//    var_dump($user->name);
//    $user->name='test00';
//}

/*****迭代器式******************/

/*****代理模式******************/
//$db=  IMooc\Factory::getDatabase('slave');
//$info=$db->query("select * from user where id=1");
//$db=  IMooc\Factory::getDatabase('master');
//$db->query("update user set name='test' where id=1");

//$proxy=new \IMooc\Proxy();
//$proxy->getUserName($id);
//$proxy->setUserName($id, $name);
/*****代理模式******************/



/*******魔术方法********/
//$obj =new IMooc\Object();
//$obj->title='hello';
//echo $obj->title;
//$obj->test('dfd','dfdf');
//IMooc\Object::test1('dfd','dfdf');
//echo $obj;
//$obj('dfdf');
/*******魔术方法********/
//$db=new IMooc\Database();
//IMooc\Object::test();
//App\Controller\Home\Index::test();
/********SPL*****/
/*****栈*********/
//$stack= new SplStack;
//$stack->push('data1\n');//入栈
//$stack->push('data2\n');//入栈
//
//echo $stack->pop();//出栈 data2
//echo $stack->pop();//出栈 data1
//先进后出
/*****栈*********/

/*********栈 队列*********/
//先进先出，后进后出
//$queue =new SplQueue;
//$queue->enqueue('data1\n');//入栈（入队列）
//$queue->enqueue('data2\n');//入栈（入队列）
//echo $queue->dequeue();//出栈 data1
//echo $queue->dequeue();//data2
/*********栈 队列*********/

/*****堆(最小)*******/
//$queue= new SplMinHeap;
//$queue->insert('data1\n');//入
//$queue->insert('data2\n');//入
//
//echo $queue->extract();
//echo $queue->extract();
/*****堆*******/

/*********最小尺寸的数组*********/
//$array = new SplFixedArray(10);
//$array[0]=123;
//$array[9]=321;
//var_dump($array);
/*********最小尺寸的数组*********/