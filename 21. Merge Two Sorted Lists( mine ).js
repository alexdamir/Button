var mergeTwoLists = function(list1, list2) {
    let pointers = { head: null, tail: null };
    let addNode = function( p, val ){
        let newNode = new ListNode( val ) ;
        if( !p.head ){
            p.tail = p.head = newNode ;
        } else {
            p.tail.next = newNode;
            p.tail = p.tail.next;
        }
    };

    while( true ){
        if(list1 && list2){
            if( list2.val > list1.val ) {
                addNode( pointers,   list1.val  );
                list1 = list1.next;
            } else {
                addNode( pointers,   list2.val  );
                list2 = list2.next;
            }
        } else if( list1 ) {
            addNode( pointers,   list1.val  );
            list1 = list1.next;
        } else if( list2 ) {
             addNode( pointers,   list2.val  );
            list2 = list2.next;
       } else {
            break;
        }
    }

    return(pointers.head);
};