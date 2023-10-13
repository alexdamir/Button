/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} head
 * @return {ListNode}
 */
var middleNode = function(head) {
    let node = head, array = [];
    do  {
            array.push( node );
        
    } while (  ( node = node.next ) != null );
    
    let len = array.length;

    if(  (len % 2) == 0 ) {
        node = array[ len/2 ];
    } else {
        node = array[ (len-1)/2 ];
    }

    return(node);
    
};