<?php
namespace Shopware\Themes\SPTWO;

use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Form as Form;
use Shopware\Components\Theme\ConfigSet;

class Theme extends \Shopware\Components\Theme
{
    /** @var string Defines the parent theme */
    protected $extend = 'Responsive';

    /** @var string Defines the human readable name */
    protected $name = 'SPTWO';

    /** @var string Description of the theme */
    protected $description = '__theme_description__';

    /** @var string The author of the theme */
    protected $author = '__author__';

    /** @var string License of the theme */
    protected $license = '__license__';


    protected $injectBeforePlugins =  false;



    /** @var array Defines the files which should be compiled by the javascript compressor */
    protected $javascript = array(
        //SHOPWARE 

         'src/js/hover.desable.js',
         'src/js/jquery.top-filter.js',
         'src/js/jquery.search-trigger.js',
         'src/js/jquery.listing-note.js',
         'src/js/jquery.override-offcanvas.js',

        // PLUGINS
        'src/js/vendors/slick/slick.js',
        'src/js/vendors/moment/moment.min.js',
        'src/js/vendors/stick-to-me/stick-to-me.js',

        // SHAPO STUFF
        'src/js/shapo.js',
        


    );












































}