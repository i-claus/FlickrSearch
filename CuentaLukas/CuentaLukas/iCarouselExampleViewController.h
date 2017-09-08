//
//  AppDelegate.h
//  CuentaLukas
//
//  Created by iClaus on 07-10-13.
//  Copyright (c) 2013 iClaus. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "iCarousel.h"


@interface iCarouselExampleViewController : UIViewController <iCarouselDataSource, iCarouselDelegate>

@property (nonatomic, retain) IBOutlet iCarousel *carousel;

@end

