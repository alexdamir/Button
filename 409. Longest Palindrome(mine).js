var longestPalindrome = function(s) {
    let map={}, longest=0, isOne=false;
    for( const char of s ){
        if( !map[char] ){
            map[char] = 0;    
        }
        map[char]++;
    }
    for( const char in map ){
        if( map[char] %2 ){ //odd
            if( !isOne ){
                isOne = true;
                longest++;            
            }
            longest += map[char]-1;
        } else {
            longest += map[char];    
        }
    }
    return(longest);
}