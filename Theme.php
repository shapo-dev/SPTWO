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
