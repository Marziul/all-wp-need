add_theme_support('onepager');
if(function_exists('onepager')){
OnePager::registerBlocks (); // this is for our template
OnePager::disableCoreBlocks (); // this will disable the defaults one pager template
}