function processData(input) {
    //The Code is here 
    const inputLines = input.split('\n');
    
    const N = parseInt( inputLines[0], 10);
    
    const Array = inputLines[1].split(' ').map( (s) => parseInt(s, 10)).sort((a,b)=>(a-b));
    
    //console.log(N, Array); 
    //return;
    
    let Sum=0, Mean=0, Median=0, Mode=0;
    let CurrMode, Count, MaxCount;
    
    for(var i=0; i<N; i++){
        
        Sum += Array[i];
        
        if( i==0 ) {
            Mode = CurrMode = Array[i];
            Count = MaxCount = 1; 
        } else {
            if( CurrMode == Array[i] ) {
                Count++;
            } else {                
                if( Count > MaxCount) {
                    Mode = CurrMode;
                    MaxCount = Count;
                }
                CurrMode = Array[i];
                Count = 1;
            }
        }
    }    
    if( Count > MaxCount) {
        Mode = CurrMode;
    }
    
    Mean = Sum / N;
    
    if( (N % 2) == 0 ) {
        var j = N/2;
        Median = (Array[j-1]+Array[j])/2;    
    } else {
        Median = Array[ (N+1)/2 - 1];        
    }
    
    //console.log(Sum, N, Mean); 
    
    process.stdout.write(Mean.toFixed(1) + "\n");
    
    process.stdout.write(Median.toFixed(1) + "\n");
    
    process.stdout.write(Mode + "\n");
    
    /*
    ws.write(Mean.toPrecision(1).toString().concat('\n', 
             ' ', '\n', 
             ' ', '\n' )  );

    */
} 

process.stdin.resume();
process.stdin.setEncoding("ascii");
let _input = "";
process.stdin.on("data", function (input) {
    _input += input;
});

process.stdin.on("end", function () {
   processData(_input);
});
