/**
 * Definition for a binary tree node.
 * function TreeNode(val) {
 *     this.val = val;
 *     this.left = this.right = null;
 * }
 */

/**
 * @param {TreeNode} root
 * @param {TreeNode} p
 * @param {TreeNode} q
 * @return {TreeNode}
 */
var lowestCommonAncestor = function(root, p, q) {
    const path = new Map;
    let node = root, result = root;    
    
    const runDown = function(node, target, exec){
        exec(node);
        if( node.val < target.val ) node = node.right
        else if( node.val > target.val ) node = node.left
        else return;
        runDown(node, target, exec);
    }

    runDown(root, p, (node)=>{path[node.val] = node});

    runDown(root, q, (node)=>{  if(path[node.val]) result = node });

    return(result);


}