/* Hidden stub code will pass a root argument to the function below. Complete the function to solve the challenge. Hint: you may want to write one or more helper functions.  

The Node struct is defined as follows:
   struct Node {
      int data;
      Node* left;
      Node* right;
   }
*/
bool checkBST(Node* root) {
bool result = false;
//cout << root->data;
if ( checkUp(root->right,root->data,2147483647) ) {
result = checkDown(root->left,-2147483647,root->data);
} 
return (result);
}
bool checkUp(Node* node, int min, int max) {
bool result = false;
if ( node==NULL ) {
return (true);
}
//cout << node->data << " > " << d << "\n";
if ( (node->data > min) && (node->data <max)) {
if ( checkUp(node->right,node->data, max) ) {
result = checkDown(node->left,min,node->data);
} 
return (result);
} else {
return false;
}      
}
bool checkDown(Node* node, int min, int max) {
bool result = false;
if ( node==NULL ) {
return (true);
}
//cout << node->data << " < " << d << "\n";
if ( (node->data > min) && (node->data <max)) {
if ( checkUp(node->right,node->data,max
) ) {
result=checkDown(node->left,min,node->data);
}
return (result);
} else {
return false;
}      
}
