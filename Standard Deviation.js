'use strict';

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
 * Complete the 'stdDev' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function stdDev(arr) {
    // Print your answers to 1 decimal place within this function
    let sum, mean, deviation;
    sum = 0;
    for(var i=0; i<arr.length; i++){
        sum += arr[i];
    }
    mean = sum / arr.length;
    
    sum = 0;
    for(var i=0; i<arr.length; i++){
        sum += (arr[i]-mean)**2;
    }
    deviation = Math.sqrt(sum / arr.length);
    
    process.stdout.write(deviation.toFixed(1) + "\n");
    
}

function main() {
    const n = parseInt(readLine().trim(), 10);

    const vals = readLine().replace(/\s+$/g, '').split(' ').map(valsTemp => parseInt(valsTemp, 10));

    stdDev(vals);
}
