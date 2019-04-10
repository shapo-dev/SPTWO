<?php
/**
 * SHAPO Shopware 5 Theme
 * Copyright (c) SHAPO GmbH & Co KG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Themes\SPTWO;

use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Form as Form;
use Shopware\Components\Theme\ConfigSet;

class Theme extends \Shopware\Components\Theme
{
    /**
     * Defines the extended Theme.
     *
     * @var string
     */
    protected $extend = 'Responsive';

    /**
     * Defines the human readable theme name which is displayed in the backend.
     *
     * @var string
     */
    protected $name = '__theme_name__';

    /**
     * Allows to define a description text for the theme.
     *
     * @var string
     */
    protected $description = '__theme_description__';

    /**
     * Name of the theme author.
     *
     * @var string
     */
    protected $author = '__author__';

    /**
     * License of the theme source code.
     *
     * @var string
     */
    protected $license = '__license__';

    /**
     * @var bool
     */
    protected $injectBeforePlugins = true;

    /**
     * Javascript files which will be used in the theme.
     *
     * @var array
     */
    protected $javascript = [
        // Third party plugins / libraries
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

        // Shopware specific plugins

    ];


    /**
     * Holds default fieldSet configuration.
     *
     * @var array
     */
    private $fieldSetDefaults = [
        'layout' => 'column',
        'height' => 170,
        'flex' => 0,
        'defaults' => ['columnWidth' => 0.5, 'labelWidth' => 180, 'margin' => '3 16 3 0'],
    ];


  /**
     * Holds default theme colors.
     *
     * @var array
     */
    private $themeColorDefaults = [
        'brand-primary' => '#000000',
        'brand-primary-light' => 'saturate(lighten(@brand-primary,12%), 5%)',
        'brand-secondary' => '#5F7285',
        'brand-secondary-dark' => 'darken(@brand-secondary, 15%)',
        'gray' => '#F5F5F8',
        'gray-light' => 'lighten(@gray, 1%)',
        'gray-dark' => 'darken(@gray-light, 10%)',
        'border-color' => '@gray-dark',
        'highlight-success' => '#2ECC71',
        'highlight-error' => '#E74C3C',
        'highlight-notice' => '#F1C40F',
        'highlight-info' => '#4AA3DF',
        'body-bg' => 'darken(@gray-light, 5%)',
        'overlay-bg' => '#000000',
        'overlay-dark-bg' => '@overlay-bg',
        'overlay-light-bg' => '#FFFFFF',
        'overlay-opacity' => '0.7',
        'text-color' => '@brand-secondary',
        'text-color-dark' => '@brand-secondary-dark',
        'link-color' => '@brand-primary',
        'link-hover-color' => 'darken(@link-color, 10%)',
        'rating-star-color' => '@highlight-notice',
        'btn-default-top-bg' => '#FFFFFF',
        'btn-default-bottom-bg' => '@gray-light',
        'btn-default-hover-bg' => '#FFFFFF',
        'btn-default-text-color' => '@text-color',
        'btn-default-hover-text-color' => '@brand-primary',
        'btn-default-border-color' => '@border-color',
        'btn-default-hover-border-color' => '@brand-primary',
        'btn-primary-top-bg' => '@brand-primary-light',
        'btn-primary-bottom-bg' => '@brand-primary',
        'btn-primary-hover-bg' => '@brand-primary',
        'btn-primary-text-color' => '#FFFFFF',
        'btn-primary-hover-text-color' => '@btn-primary-text-color',
        'btn-secondary-top-bg' => '@brand-secondary',
        'btn-secondary-bottom-bg' => '@brand-secondary-dark',
        'btn-secondary-hover-bg' => '@brand-secondary-dark',
        'btn-secondary-text-color' => '#FFFFFF',
        'btn-secondary-hover-text-color' => '@btn-secondary-text-color',
        'panel-header-bg' => '@gray-light',
        'panel-header-color' => '@text-color',
        'panel-border' => '@border-color',
        'panel-bg' => '#FFFFFF',
        'label-color' => '@text-color',
        'input-bg' => '@gray-light',
        'input-color' => '@brand-secondary',
        'input-placeholder-color' => 'lighten(@text-color, 15%)',
        'input-border' => '@border-color',
        'input-focus-bg' => '#FFFFFF',
        'input-focus-border' => '@brand-primary',
        'input-focus-color' => '@brand-secondary',
        'input-error-bg' => 'desaturate(lighten(@highlight-error, 38%), 20%)',
        'input-error-border' => '@highlight-error',
        'input-error-color' => '@highlight-error',
        'input-success-bg' => '#FFFFFF',
        'input-success-border' => '@highlight-success',
        'input-success-color' => '@brand-secondary-dark',
        'panel-table-header-bg' => '@panel-bg',
        'panel-table-header-color' => '@text-color-dark',
        'table-row-bg' => '#FFFFFF',
        'table-row-color' => '@brand-secondary',
        'table-row-highlight-bg' => 'darken(@table-row-bg, 4%)',
        'table-header-bg' => '@brand-secondary',
        'table-header-color' => '#FFFFFF',
        'badge-discount-bg' => '@highlight-error',
        'badge-discount-color' => '#FFFFFF',
        'badge-newcomer-bg' => '@brand-primary',
        'badge-newcomer-color' => '#FFFFFF',
        'badge-recommendation-bg' => '@highlight-success',
        'badge-recommendation-color' => '#FFFFFF',
        'badge-download-bg' => '@highlight-info',
        'badge-download-color' => '#FFFFFF',
    ];



    /**
     * Holds default font configuration.
     *
     * @var array
     */
    private $themeFontDefaults = [
        'font-base-stack' => '"DIN PRO", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;',
        'font-headline-stack' => '@shapo-headlines',
        'font-size-base' => 14,
        'font-base-weight' => 500,
        'font-light-weight' => 300,
        'font-bold-weight' => 700,
        'font-size-h1' => 26,
        'font-size-h2' => 21,
        'font-size-h3' => 18,
        'font-size-h4' => 16,
        'font-size-h5' => '@font-size-base',
        'font-size-h6' => 12,
        'panel-header-font-size' => 14,
        'label-font-size' => 14,
        'input-font-size' => 14,
        'btn-font-size' => 14,
        'btn-icon-size' => 10,
    ];

    /**
     * @param Form\Container\TabContainer $container
     */
    public function createConfig(Form\Container\TabContainer $container)
    {


        $checkboxDefaults = [
            'lessCompatible' => false,
            'columnWidth' => 0.2,
            'labelWidth' => 150
        ];

        $textFieldDefaults = [
            'lessCompatible' => false,
            'hideLabel' => false,
            'layout' => 'column',
            'columnWidth' => 0.5
        ];


        
        $container->addTab($this->createMainConfigTab());

        $tab = $this->createTab(
            'shapo_tab',
            '__shapo_tab__'
        );
        $container->addTab($tab);

        $tab->addElement($this->createBottomTabPanel());
    }




// END
}