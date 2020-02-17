<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
    <h1>This is heading one</h1>
<?php
 $name = "Saurabh";
 $age = 23;
 echo "My name is " . $name . " .I am " . $age ."years old.";
 define("NAME","ENGLAND");
 echo "I belongs to" . NAME;
 echo "</br>";
 $bolleanVariable = (5>6);
 var_dump($bolleanVariable);
 $justArray = array("Saurabh","is","one");
 print_r($justArray);
 echo "<br />";
 echo $justArray[0];
 $newArray = array("a"=>"Saurabh","b"=>"Gaurabh","c"=>"Abh");
 print_r($newArray);
 echo $newArray[a];
 var_dump($newArray);
 // This is for class
 class car{
    // Properties
     public $name = "Ford";
     private $engine = "Off";
    // Methods
    function engine_on(){
        $this-> engine = "On";
    // So to get my private function I have to do
    function getstatus(){
        return $this->engine;
    }
    }
 }
 // Taking the properties of car class
 $myclass = new car;
 
 var_dump($myclass);
 echo $myclass-> name;
$myclass-> engine_on();
var_dump($myclass);

// This is for String data type
$message = "Saurabh wants some water.";
echo "Hello Mr.Saurabh Kumar " .strlen($message);
echo "Word count " .str_word_count($message);
echo str_replace("wants","need",$message,$number_of_words_replaced);

?>
</body>
</html>