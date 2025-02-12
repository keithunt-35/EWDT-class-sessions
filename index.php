
    
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



    ?>
