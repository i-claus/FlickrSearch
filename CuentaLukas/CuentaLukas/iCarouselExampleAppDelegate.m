//
//  AppDelegate.m
//  CuentaLukas
//
//  Created by iClaus on 07-10-13.
//  Copyright (c) 2013 iClaus. All rights reserved.
//

#import "iCarouselExampleAppDelegate.h"
#import "iCarouselExampleViewController.h"

@implementation iCarouselExampleAppDelegate

@synthesize window;
@synthesize viewController;

- (BOOL)application:(UIApplication *)application didFinishLaunchingWithOptions:(NSDictionary *)launchOptions
{
    window = [[UIWindow alloc] initWithFrame:[UIScreen mainScreen].bounds];
    window.rootViewController = viewController;
    [window makeKeyAndVisible];
    return YES;
}

- (void)dealloc
{
    [window release];
    [viewController release];
    [super dealloc];
}

@end
