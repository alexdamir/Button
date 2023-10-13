/**
 * @param {number} n
 * @return {string[]}
 */
var fizzBuzz = function(n) {
    let str, result = [];
    for( var i = 1; i <= n; i++) {
        if( ( (i % 3) == 0 ) && ( (i % 5) == 0 ) ) {
            str = "FizzBuzz";
        } else if( (i % 3) == 0 ) {
            str = "Fizz";
        } else if( (i % 5) == 0 ) {
            str = "Buzz";
        } else {
            str = i.toString();
        }
        result.push( str );
    }
    return( result );    
};