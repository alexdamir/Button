var canConstruct = function(ranscomNote, magazine) {
    let map = {};
    for( let letter of magazine){
        if( !map[letter]) {
            map[letter] = 0;    
        }
        map[letter]++;
    }
    for( let letter of ranscomNote){
        if(map[letter]){
            map[letter]--;
        } else {
            return(false);
        }

    }
     return(true);
};