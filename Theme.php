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
    protected $author = 'shopware AG';

    /** @var string License of the theme */
    protected $license = 'MIT';
}