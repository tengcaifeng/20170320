# PHP学习笔记
1. 构造函数__construct() 用于一个类实列化后的初始化操作.
    析构函数__destruct() 运行时销毁一个对象实列，比如在一个方法结束时断开对数据库的连接.
```
class person{

    public $name;
    public $age;
    public $sex;
    //创建一个构造函数，用于实列化对象的时候初始变量
    function __construct($name,$age,$sex){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    public function say(){
        echo "我的名字是".$this->name."，性别".$this->age."，年龄".$this->age."现在在说话<br/>";
    }
    public function sleep(){
        echo "我的名字是".$this->name."，性别".$this->age."，年龄".$this->age."现在想睡觉<br/>";
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "我是".$this->name."再见";
    }
}

$p1 = new person("张三","13","男");
$p2 = new person("李四","14","女");
$p3 = new person("王五","33","男");
$p1->say();
$p2->sleep();
$p3->say();
$p3->sleep();
//张三说话，李四睡觉，王五说话睡觉，王五再见王五再见，李四再见，张三再见
?>
```
