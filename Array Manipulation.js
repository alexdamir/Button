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
 * Complete the 'arrayManipulation' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. 2D_INTEGER_ARRAY queries
 */

function arrayManipulation(n, queries) {
    var max = 0, a, b, k, e, arr=new Array(n);
    for(var i=0; i<queries.length; i++){
        a = queries[i][0]-1;
        b = queries[i][1]-1;
        k = queries[i][2];
        if(!(e = arr[a])) e=0;
        e += k;
        arr[a] = e;
        if(b+1<arr.length){
            if(!(e = arr[b+1])) e=0;
            e -= k;
            arr[b+1] = e;   
        }
    }
    var c = 0; max = 0;
    for(var j=0; j<arr.length; j++){
        c += arr[j];
        if(max<c) max = c;
    }
    return(max); 
}

function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);

    const firstMultipleInput = readLine().replace(/\s+$/g, '').split(' ');

    const n = parseInt(firstMultipleInput[0], 10);

    const m = parseInt(firstMultipleInput[1], 10);

    let queries = Array(m);

    for (let i = 0; i < m; i++) {
        queries[i] = readLine().replace(/\s+$/g, '').split(' ').map(queriesTemp => parseInt(queriesTemp, 10));
    }

    const result = arrayManipulation(n, queries);

    ws.write(result + '\n');

    ws.end();
}
