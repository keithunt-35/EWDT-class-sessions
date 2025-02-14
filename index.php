
    
    changed
    <?php
    

    echo "hello world";
    print ("hello students");
    #this is a comment
    //this is also a comment
    /*
    noe this is a multi line comment
    */
    
    $num =10;
    print(gettype($num));

    $num1= array (10.5);
    print(gettype($num1));

    // white space insensitive
    $x  =    1  +  10;
    $y =4-3;
    print($x);
    echo $y;


    //constants
    define("MINSIZE", 50);
    echo MINSIZE; 

    print("<br>");
    print(__LINE__);//prints the line at which you are
    print("<br>");
    print(__FILE__);// prints the file name
    print("<br>");
    print(__DIR__);// prints the directory name
    print("<br>");

    $marks = 10+20;
    print($marks);

    //the differnce between echo and print is that echo can take multiple parameters but print can only take one parameter
    echo "hello", "world";
    print("hello");
    print("world");
    print("<br>");
    $marks1 = array(10,20,30,60);
    foreach($marks1 as $i){
        print($i." ,");
        print("<br>");
    }

    //associative array
    $marks2 = array("maths"=>10, "english"=>20, "kiswahili"=>30, "science"=>60);
    print_r($marks2);
    foreach($marks2 as $key=>$value){
        //beaceuse we are using an associative array we have to use the key value pair

        print($key."=>".$value);
        print("<br>");
    }
    //we concatnate using the dot operator
    
    //multi dimensional arrays

    //Functions
    function addNums($a, $b){
        return $a+$b;
    }
    include('lesson1.php');
    //include and require handle the same tasks
    //the only difference is in how the error is handled esp when the file that is refered to is not avaiilable
    
    //require('lesson1.php');
    
    print("<br>");
    print(addNums(5,9));
    print("<br>");
    print(mulNum(5,7));

    // string length
    $str = 'ksgsnds';
    print("<br>");
    print(strlen($str));
    print("<br>");

    print(stripos($str, 's'));
    print("<br>");
    print("<br>");

    //global variables
    $name = "praise";
    //super global variables can be accessed anywhere
    // can use the Global keyword
    #global $name;
    #echo $name;
    function pri(){

        $name = "keith";
        echo $GLOBALS['name'];
        print("<br>");

        print($name);
        print("<br>");
    }
    pri();

    // other variables like $server
    echo $_SERVER ['SERVER_NAME'];
    print("<br>");
    echo $_SERVER ['SCRIPT_FILENAME'];
    print("<br>");



    ?>
