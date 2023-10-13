/**
 * Definition for a binary tree node.
 * function TreeNode(val, left, right) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.left = (left===undefined ? null : left)
 *     this.right = (right===undefined ? null : right)
 * }
 */
/**
 * @param {TreeNode} root
 * @return {number[][]}
 */
var levelOrder = function(root) {
    let res = [], level = -1;
    let goDown = function(node) {
        if(node){
            level++;
            if(!res[level]){
                res[level] = [];
            }
            res[level].push( node.val );
            goDown( node.left );
            goDown( node.right );
            level--;
        }
    }
    goDown(root);
    return(res);

};