<?php

//func_get_arg($i);
$c = 100;
function name($a,$b) {
    $b = func_get_arg(1);
    global $d;
    $d = 10;
    //匿名函数当参数
    //echo $a+$b() + $GLOBALS['c'];
}
//name('zhangsan','lisi');

$a = function(){
    //echo func_get_arg(0);
   // echo func_get_arg(1);
};
//$b = $a;
$a('zhangsan',24);

/*name(10,function(){
    return 10+20;
});*/

function showinfo() {
    static $a = '';
    $a .= 10;
    echo $a."<br>";
}
for ($i=0;$i<5;$i++) {
    showinfo();
}

 var_dump(function_exists("12312"));

function fact($n) {
    if ($n ==1) {
        return 1;
    } else {
       return $n * fact($n-1);
    }
}
var_dump(fact(2));

function fact2($n) {
    $r = 1;
    for ($i=2;$i<=$n;$i++) {
        $r = $r * $i;
    }
    return $r;
}
echo fact2(3);

class cl {
	
	function __construct(argument)
	{
		# code...
	}
	private static $name;

	public function name() {
		echo $name .= 10;
	}
}
$c = new cl();
echo $c->name();
