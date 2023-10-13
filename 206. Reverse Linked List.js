var reverseList = function(head) {
    if( !head || !head.next) {
        return(head);
    } else {
        let node = reverseList( head.next);
        head.next.next = head;
        head.next = null;
        return(node);
    }
    
};