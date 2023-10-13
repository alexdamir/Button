/**
 * @param {string} s
 * @param {string} t
 * @return {boolean}
 */
var isSubsequence = function(s, t) {
    let posS = 0, posT = 0, result = true;
    while( posS < s.length ){
        result = false;
        while( posT < t.length ){
            if( s[posS] == t[posT] ){
                posT++;
                result = true;
                break;
            }
            posT++;
        }
        posS++;
    }
    return( result );
};