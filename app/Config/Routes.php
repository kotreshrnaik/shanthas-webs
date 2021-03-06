<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$myroutes = [];
$myroutes ['about'] = 'Home::about';
$myroutes ['contact'] = 'Home::contact';

$myroutes ['/design-solutions/creatives'] = 'DesignSolutions::Creatives';
$myroutes ['/design-solutions/logo-designs'] = 'DesignSolutions::LogoDesigns';
$myroutes ['/design-solutions/webpage-design'] = 'DesignSolutions::WebPageDesign';
$myroutes ['/design-solutions/landing-page-design'] = 'DesignSolutions::LandingPageDesign';
$myroutes ['/design-solutions/brochure-design'] = 'DesignSolutions::BrochureDesign';

$myroutes ['/website-solutions/website-design'] = 'WebsiteSolutions::WebsiteDesign';
$myroutes ['/website-solutions/website-developement'] = 'WebsiteSolutions::WebsiteDevelopement';
$myroutes ['/website-solutions/landing-page-development'] = 'WebsiteSolutions::LandingPageDevelopment';
$myroutes ['/website-solutions/e-commerce-website-development'] = 'WebsiteSolutions::ECommerceWebsiteDevelopment';
$myroutes ['/website-solutions/shopify'] = 'WebsiteSolutions::Shopify';

$myroutes ['/digital-marketing-services/search-engine-optimization'] = 'DigitalMarketingServices::SearchEngineOptimization';
$myroutes ['/digital-marketing-services/search-engine-marketing'] = 'DigitalMarketingServices::SearchEngineMarketing';
$myroutes ['/digital-marketing-services/social-media-marketing'] = 'DigitalMarketingServices::SocialMediaMarketing';
$myroutes ['/digital-marketing-services/pay-per-click'] = 'DigitalMarketingServices::PayPerClick';
$myroutes ['/digital-marketing-services/content-marketing'] = 'DigitalMarketingServices::ContentMarketing';
$myroutes ['/digital-marketing-services/e-mail-marketing'] = 'DigitalMarketingServices::EmailMarketing';
$myroutes ['/digital-marketing-services/whatsapp-sms-marketing'] = 'DigitalMarketingServices::WhatsappSMSMarketing';
$myroutes ['/digital-marketing-services/app-promotions'] = 'DigitalMarketingServices::AppPromotions';

$myroutes ['blog'] = 'Blog::index';

$routes->map($myroutes);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
