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
 * @return {boolean}
 */
var isValidBST = function(root) {

    const IsValid = ( node, min, max ) => {

        if( !node ) return(true);

        if( ( min===undefined || min < node.val ) && 
            ( max===undefined || max > node.val) ) {

                return( IsValid(node.left,min,node.val) && 
                        IsValid(node.right,node.val,max));

            } else return(false);
    }

    return( IsValid(root) );
};