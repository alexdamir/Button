var detectCycle = function(head) {
    let map = new Map;
    while(head){
        if( map.has(head) ) {
            return(head);
        } else {
            map.set(head);
        }
        head = head.next;
    }
    return(null);
};