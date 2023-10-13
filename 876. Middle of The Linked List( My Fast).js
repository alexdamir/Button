var middleNode = function(head) {
    let slow = fast = head;
    while( fast.next && fast.next.next ){
        slow = slow.next;
        fast = fast.next.next;
    }
    if(fast.next){
        return(slow.next);
    } else {
        return(slow);
    }
    
};