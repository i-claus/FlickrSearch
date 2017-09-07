//: Playground - noun: a place where people can play

import UIKit


//func printNPrimes |  Claudio Vega | iOS Dev


//parameter or amount to print
let N = 5

let maxP = 1000
var isPrime: [Bool] = []
var primes: [Int] = []

    for i in 0...maxP {
    isPrime.append(true)
    }

    isPrime[0] = false
    isPrime[1] = false

    for i in 2...maxP {
    
        if isPrime[i] == true {
        var j = i*i
        while j <= maxP {
            isPrime[j] = false
            j += i
        }
        primes.append(i)
    }
}

    for i in 0..<N {
    print(primes[i])
}


