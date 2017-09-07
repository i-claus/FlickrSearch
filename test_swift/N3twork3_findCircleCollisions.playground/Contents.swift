//: Playground - noun: a place where people can play

import UIKit

// find Circles Collisions | Claudio Vega | iOS Dev

func findCircleCollisions(x1: Int, x2: Int, y1: Int, y2: Int, radius1: Int, radius2: Int)  {
    
    if ( sqrt( Double( Int(Float(x2) - Float(x1)) * Int(Float(x2) - Float(x1)) + Int(Float(y2) - Float(y1)) * Int(Float(y2) - Float(y1))) ) < Double(Float(radius1) + Float(radius2)) )  {
        
        print ("the 2 circles are colliding!")
    }
}

findCircleCollisions(x1: 3, x2: 6, y1: 4, y2: 8, radius1: 3, radius2: 5)







