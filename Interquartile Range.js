function interQuartile(values, freqs) {
    // Print your answer to 1 decimal place within this function
    const S = [];
    for( let i=0; i<values.length; i++ ){
        for( let freq=0; freq<freqs[i]; freq++){
            S.push(values[i]);
        }
    }
    S.sort((a,b)=>(a-b));
    let Median = function(array){
        let median; const n = array.length;
        if( (n % 2) == 0 ) {
            var j = n/2;
            median = (array[j-1]+array[j])/2;    
        } else {
            median = array[ (n+1)/2 - 1];        
        }
        return(median);
    };
    const length = S.length; 
    let Q1, Q2, Q3, end1, start2;
    if( (length % 2) == 0 ) {
        end1 = length/2  ;
        start2 = end1;
    } else {
        end1 = (length-1)/2 ;
        start2 = end1 + 1;
    }
    Q1 = Median( S.slice(0, end1));
    //Q2 = Median( S );
    Q3 = Median( S.slice(start2, length));
    process.stdout.write((Q3-Q1).toFixed(1) + "\n");

 
}
