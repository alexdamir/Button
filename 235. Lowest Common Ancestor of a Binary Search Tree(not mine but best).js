/* I don't understand how it works */

var lowestCommonAncestor = function(root, p, q) {

    if((p.val < root.val) && (q.val < root.val)) 
        return lowestCommonAncestor(root.left, p, q);

    if((p.val > root.val) && (q.val > root.val)) 
        return lowestCommonAncestor(root.right, p, q);

    return root;
};