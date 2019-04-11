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
        'font-base-stack' => '@shapo-base',
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


    // Create the fieldset which is the container of our field
    $attributes = array_merge($this->fieldSetDefaults, ['height' => 220]);
    $fieldset = $this->createFieldSet(
        'social_media_settings',
        'Social Media Links',
        ['attributes' => $attributes]

    );


    // Create the textfield
    $social = $this->createCheckboxField(
        'social_icons',
        'Social Media Icons',
        true,
        ['attributes' => $checkboxDefaults]

    );

    $fieldset->addElement($social);


    // SocialMediaFacebook
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'SocialMediaFacebook']);
    $SocialMediaFacebook = $this->createTextField(
        'SocialMediaFacebook',
        'Facebook',
         null,
         ['attributes' => $attributes]
    );

    // SocialMediaTwitter
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'SocialMediaTwitter']);
    $SocialMediaTwitter = $this->createTextField(
        'SocialMediaTwitter',
        'Twitter',
         null,
         ['attributes' => $attributes]
    );

    // SocialMediaInstagram
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'SocialMediaInstagram']);
    $SocialMediaInstagram = $this->createTextField(
        'SocialMediaInstagram',
        'Instagram',
         null,
         ['attributes' => $attributes]
    );
    // SocialMediaPinterest
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'SocialMediaPinterest']);
    $SocialMediaPinterest = $this->createTextField(
        'SocialMediaPinterest',
        'Pinterest',
         null,
         ['attributes' => $attributes]
    );
    // SocialMediaGoogleplus
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'SocialMediaGoogleplus']);
    $SocialMediaGoogleplus = $this->createTextField(
        'SocialMediaGoogleplus',
        'Googleplus',
         null,
         ['attributes' => $attributes]
    );





    // Adding the fields to the fieldset
    $fieldset->addElement($SocialMediaFacebook);
    $fieldset->addElement($SocialMediaTwitter);
    $fieldset->addElement($SocialMediaInstagram);
    $fieldset->addElement($SocialMediaPinterest);
    $fieldset->addElement($SocialMediaGoogleplus);


    // Create the tab which will be named "My custom colors"
    $tab = $this->createTab(
        'social_media_tab',
        'Social Media Icons'
    );

    // ...add the fieldset to the tab
    $tab->addElement($fieldset);

    // ...last but not least add the tab to the container, which is a tab panel.
    $container->addTab($tab);



    // FIELD SET -- Newsletter
    $attributes = array_merge($this->fieldSetDefaults, ['height' => 420]);
    $fieldset = $this->createFieldSet(
        'newsletter_settings',
        'Newsletter Einstellungen',
        ['attributes' => $attributes]

    );

     $newsletter_active = $this->createCheckboxField(
        'newsletter_active',
        'Newsletter aktiv?',
        true,
        ['attributes' => $checkboxDefaults]
    );
     $newsletter_benefits = $this->createCheckboxField(
        'newsletter_benefits',
        'Newsletter Benefits aktiv?',
        false,
        ['attributes' => $checkboxDefaults]
    );

    // Newsletter Content
    $newsletter_header = $this->createTextField(
        'newsletter_header',
        'Newsletter Header',
        ''
    );
    $newsletter_content = $this->createTextField(
        'newsletter_content',
        'Newsletter Inhalt',
        ''
    );
    $newsletter_image = $this->createMediaField(
        'newsletter_image',
        'Newsletter Bild',
        ''
    );
    $newsletter_value = $this->createTextField(
        'newsletter_value',
        'Newsletter Rabatt',
        ''
    );

    // Adding the fields to the fieldset
    $fieldset->addElement($newsletter_active);
    $fieldset->addElement($newsletter_benefits);

    $fieldset->addElement($newsletter_header);
    $fieldset->addElement($newsletter_content);
    $fieldset->addElement($newsletter_value);
    $fieldset->addElement($newsletter_image);

    // Create the tab which will be named "My custom colors"
    $tab = $this->createTab(
        'newsletter_tab',
        'Newsletter Einstellungen'
    );

    // ...add the fieldset to the tab
    $tab->addElement($fieldset);

    // ...last but not least add the tab to the container, which is a tab panel.
    $container->addTab($tab);






    // TOP BAR ICONS + TEXT
    $attributes = array_merge($this->fieldSetDefaults, ['autoScroll' => true, 'height' => 440]);
    $fieldset = $this->createFieldSet(
        'top_bar_feat_detail_settings',
        'Top Bar',
        ['attributes' => $attributes]

    );

    $topbar_active = $this->createCheckboxField(
        'topbar_active',
        'Topbar aktiv?',
         true,
        ['attributes' => $attributes]

    );


    // USP 1
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'url']);
    $topbar_feat_link_1 = $this->createTextField(
        'topbar_feat_link_1',
        'Link 1',
         null,
         ['attributes' => $attributes]
    );

    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'icon']);
    $topbar_feat_icon_1 = $this->createTextField(
        'topbar_feat_icon_1',
        'ICON 1',
         null,
         ['attributes' => $attributes]
    );

    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'USP']);
    $topbar_feat_text_1 = $this->createTextField(
        'topbar_feat_text_1',
        'USP 1',
         null,
         ['attributes' => $attributes]
    );

    // USP 2
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'url']);
    $topbar_feat_link_2 = $this->createTextField(
        'topbar_feat_link_2',
        'Link 2',
         null,
         ['attributes' => $attributes]
    );

    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'icon']);
    $topbar_feat_icon_2 = $this->createTextField(
        'topbar_feat_icon_2',
        'ICON 2',
         null,
         ['attributes' => $attributes]
    );

    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'USP']);
    $topbar_feat_text_2 = $this->createTextField(
        'topbar_feat_text_2',
        'USP 2',
         null,
         ['attributes' => $attributes]
    );
 
     // USP 3
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'url']);
    $topbar_feat_link_3 = $this->createTextField(
        'topbar_feat_link_3',
        'Link 3',
         null,
         ['attributes' => $attributes]
    );

    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'icon']);
    $topbar_feat_icon_3 = $this->createTextField(
        'topbar_feat_icon_3',
        'ICON 3',
         null,
         ['attributes' => $attributes]
    );

    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'USP']);
    $topbar_feat_text_3 = $this->createTextField(
        'topbar_feat_text_3',
        'USP 3',
         null,
         ['attributes' => $attributes]
    ); 

    // USP 4
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'url 4']);
    $topbar_feat_link_4 = $this->createTextField(
        'topbar_feat_link_4',
        'Link 4',
         null,
         ['attributes' => $attributes]
    );

    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'icon 4']);
    $topbar_feat_icon_4 = $this->createTextField(
        'topbar_feat_icon_4',
        'ICON 4',
         null,
         ['attributes' => $attributes]
    );

    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'USP 4']);
    $topbar_feat_text_4 = $this->createTextField(
        'topbar_feat_text_4',
        'USP 4',
         null,
         ['attributes' => $attributes]
    );






    // Adding the fields to the fieldset
    $fieldset->addElement($topbar_active);

    $fieldset->addElement($topbar_feat_link_1);
    $fieldset->addElement($topbar_feat_icon_1);
    $fieldset->addElement($topbar_feat_text_1);

    $fieldset->addElement($topbar_feat_link_2);
    $fieldset->addElement($topbar_feat_icon_2);
    $fieldset->addElement($topbar_feat_text_2);

    $fieldset->addElement($topbar_feat_link_3);
    $fieldset->addElement($topbar_feat_icon_3);
    $fieldset->addElement($topbar_feat_text_3);

    $fieldset->addElement($topbar_feat_link_4);
    $fieldset->addElement($topbar_feat_icon_4);
    $fieldset->addElement($topbar_feat_text_4);



    // Create the tab which will be named "My custom colors"
    $tab = $this->createTab(
        'top_bar_feat_detail_tab',
        'Topbar (USPs)'
    );

    // ...add the fieldset to the tab
    $tab->addElement($fieldset);

    // ...last but not least add the tab to the container, which is a tab panel.
    $container->addTab($tab);




 // FIELD SET -- BANNER ADS
    $fieldset = $this->createFieldSet(
        'banner_ads_settings',
        'Banner Ads'
    );

     $banner_ads_active = $this->createCheckboxField(
        'banner_ads_active',
        'Banner Ads',
        false
    );


    // Banner ADS Header
    $banner_ads_header = $this->createTextField(
        'banner_ads_header',
        'Banner Header',
        ''
    );
    $banner_ads_link = $this->createTextField(
        'banner_ads_link',
        'Banner Link',
        ''
    );
    // Adding the fields to the fieldset
    $fieldset->addElement($banner_ads_active);
    $fieldset->addElement($banner_ads_header);
    $fieldset->addElement($banner_ads_link);

    // Create the tab which will be named "My custom colors"
    $tab = $this->createTab(
        'banner_ads_tab',
        'Banner (Flashsale)'
    );

    // ...add the fieldset to the tab
    $tab->addElement($fieldset);

    // ...last but not least add the tab to the container, which is a tab panel.
    $container->addTab($tab);









}















// END
}