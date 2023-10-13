<?php
//--------------------------------------------------------------------------------------------------------

class Solution{

    public $stack;
    public $queue;

    function __construct()  {
        $this->stack = array();
        $this->queue = array();
    }
    function pushCharacter($ch) {
      echo "\npushCharacter: in:$ch before:".print_r($this->stack,true);
      $this->stack[] = $ch;
      echo " after:".print_r($this->stack,true)."\n";
    }
    function enqueueCharacter($ch) {
      echo "\nenqueueCharacter: in:$ch before:".print_r($this->queue,true);
      array_unshift($this->queue, $ch);
      echo " after:".print_r($this->queue,true)."\n";
    }
    function popCharacter() {
      echo "\npopCharacter: before:".print_r($this->stack,true);
      $ch = array_pop($this->stack);
      echo " out:$ch after:".print_r($this->stack,true)."\n";
      return $ch;
    }
    function dequeueCharacter() {
      echo "\ndequeueCharacter: before:".print_r($this->queue,true);
      $ch = array_shift($this->queue);
      echo " out:$ch after:".print_r($this->queue,true)."\n";
      return $ch; 
    }
}

//--------------------------------------------------------------------------------------------------------
// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;
      
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>