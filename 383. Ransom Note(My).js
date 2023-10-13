var canConstruct = function(ranscomNote, magazine) {
    let result = true, n, i;
    for( i=0; i<ranscomNote.length; i++){
        n = magazine.indexOf(ranscomNote[i]);
         if( n != -1){
            magazine = magazine.slice(0,n) + magazine.slice(n+1);
            
        } else {
            result = false;
            break;    
        }
    } 
    return(result);  
};