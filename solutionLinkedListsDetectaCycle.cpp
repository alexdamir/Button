/*
Detect a cycle in a linked list. Note that the head pointer may be 'NULL' if the list is empty.

A Node is defined as: 
    struct Node {
        int data;
        struct Node* next;
    }
*/

bool has_cycle(Node* head) {
int count;
struct Node* tmp;
if ( head==NULL) {
return false;
} 
tmp = head;
count = 0;
while ( tmp != NULL ) {
if ( count > 100) {
return true;
}
count++;
tmp = tmp->next;
}
return false;
}
