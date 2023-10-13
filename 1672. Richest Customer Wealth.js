/**
 * @param {number[][]} accounts
 * @return {number}
 */
var maximumWealth = function(accounts) {
    let wealth = 0, sum;
    for(var customer=0; customer<accounts.length; customer++) {
        sum = 0;
        //console.log(accounts[customer]);
        for(bank=0; bank<accounts[customer].length; bank++){
            sum += accounts[customer][bank];
        }
        if(wealth < sum){
            wealth = sum;
        }
        //console.log(sum);
    } 
    return(wealth) ;
};