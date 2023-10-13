'use strict';

const fs = require('fs');

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', function(inputStdin) {
    inputString += inputStdin;
});

process.stdin.on('end', function() {
    inputString = inputString.split('\n');

    main();
});

function readLine() {
    return inputString[currentLine++];
}

/*
 * Complete the 'quartiles' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function quartiles(arr) {
    // Write your code here
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
    const Array = arr.sort((a,b)=>(a-b));
    const length = Array.length; 
    let Q1, Q2, Q3, end1, start2;
    if( (length % 2) == 0 ) {
        end1 = length/2  ;
        start2 = end1;
    } else {
        end1 = (length-1)/2 ;
        start2 = end1 + 1;
    }
    Q1 = Median( Array.slice(0, end1));
    Q2 = Median( Array );
    Q3 = Median( Array.slice(start2, length));
    
    /*console.log(Array, end1, start2, Array.slice(0, end1),
    Array.slice(start2, length)); */
    
    return([Q1,Q2,Q3]);
    
}

function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);

    const n = parseInt(readLine().trim(), 10);

    const data = readLine().replace(/\s+$/g, '').split(' ').map(dataTemp => parseInt(dataTemp, 10));

    const res = quartiles(data);

    ws.write(res.join('\n') + '\n');

    ws.end();
}
