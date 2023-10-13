<?php
class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}
class Solution{
//--------------------------------------------------------------------------------------------------------

    public $tail;
    function __construct()  {
        $this->tail = NULL;
    }
    function insert($head,$data) {
      $next =  new Node($data);
      if ( $this->tail == NULL ) {
        $head = $next;
      } else {
        ($this->tail) -> next = $next;  
      }
      $this->tail = $next;
//print_r($head);
      return $head; 
    }

//--------------------------------------------------------------------------------------------------------
function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}
$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while($T-->0){
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);
?>
