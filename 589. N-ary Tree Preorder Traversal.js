 /*
 {
  val: 1,
  children: [
    { val: 3, children: [Array] },
    { val: 2, children: [] },
    { val: 4, children: [] }
  ]
}
*/
var preorder = function(root) {
    let vals = [];
    let pushVal = function(node){
        if(!node) return;
        vals.push(node.val);
        for( const child of node.children ){
            pushVal(child);
        }
    }
    pushVal(root);
    return(vals);    
};