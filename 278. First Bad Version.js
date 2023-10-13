/**
 * Definition for isBadVersion()
 * 
 * @param {integer} version number
 * @return {boolean} whether the version is bad
 * isBadVersion = function(version) {
 *     ...
 * };
 */

/**
 * @param {function} isBadVersion()
 * @return {function}
 */
var solution = function(isBadVersion) {
    /**
     * @param {integer} n Total versions
     * @return {integer} The first bad version
     */
    return function(n) {
        let min = 1; 
        let max = n;
        let mid = min;
        let bad = max;
        while( max >= min ){
            mid = Math.floor( ( min + max ) / 2 );
            if( isBadVersion(mid) ) {
                max = mid - 1;
                bad = mid;
            } else {
                min = mid + 1;
            }
        }
        return(bad);   
    };
};