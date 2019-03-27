  <?php
namespace Shopware\Themes\SPTWO;

use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Form as Form;
use Shopware\Components\Theme\ConfigSet;

class Theme extends \Shopware\Components\Theme



{
    /**
     * Defines which theme your custom
     * theme is extending from
     * @var string
     */
    protected $extend = 'Responsive';
    /**
     * Defines the human readable theme name
     * which displayed in the backend
     * @var string
     */
    protected $name = '__theme_name__';

    protected $injectBeforePlugins =  true;


    /**
     * Allows to define a description text
     * for the theme
     * @var null
     */
    protected $description = '__theme_description__';

    /** @var string The author of the theme */
    protected $author = 'SHAPO GmbH & Co KG.';
    /** @var string License of the theme */
    protected $license = 'MIT';
}