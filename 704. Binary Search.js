/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number}
 */
var search = function(nums, target) {
    if( !nums || !nums.length ) return(-1);
    let index;
    let min=0;
    let max = nums.length-1;

    while( min<=max ){
        index = Math.floor( (max + min)/2 );
        
        if( nums[index]==target) return(index);

        if( nums[index] < target){
            min = index+1;
        } else {
            max = index-1;
        }
    }
    return( -1 );
}