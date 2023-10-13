/**
 * @param {number[]} nums
 * @return {number}
 */
var pivotIndex = function(nums) {
    let result=-1, i, sum=0, runSum = [], prevSum=0;
    for( i=0; i<nums.length; i++){
        runSum.push( sum += nums[i] )
    }
    for( i=0; i<runSum.length; i++){
       if( prevSum==(sum - runSum[i]) ){
           result = i;
           break;
       }
       prevSum = runSum[i];
    }    
    return(result);
};