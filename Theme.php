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
    // SocialMediaYoutube
    $attributes = array_merge($textFieldDefaults, ['emptyText' => 'SocialMediaYoutube']);
    $SocialMediaYoutube = $this->createTextField(
        'SocialMediaYoutube',
        'Youtube',
         null,
         ['attributes' => $attributes]
    );



    // Adding the fields to the fieldset
    $fieldset->addElement($SocialMediaFacebook);
    $fieldset->addElement($SocialMediaTwitter);
    $fieldset->addElement($SocialMediaInstagram);
    $fieldset->addElement($SocialMediaPinterest);
    $fieldset->addElement($SocialMediaGoogleplus);
    $fieldset->addElement($SocialMediaYoutube);


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
    $fieldset = $this->createFieldSet(
        'newsletter_settings',
        'Newsletter Einstellungen'
    );

     $newsletter_active = $this->createCheckboxField(
        'newsletter_active',
        'Newsletter aktiv?',
        false
    );
     $newsletter_benefits = $this->createCheckboxField(
        'newsletter_benefits',
        'Newsletter Benefits aktiv?',
        false
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
    $fieldset = $this->createFieldSet(
        'top_bar_feat_detail_settings',
        'Top Bar'
    );

     $topbar_active = $this->createCheckboxField(
        'topbar_active',
        'Topbar aktiv?',
        false
    );


    // Detail Feat
    $topbar_feat_link_1 = $this->createTextField(
        'topbar_feat_link_1',
        'Link 1',
        ''
    );
    $topbar_feat_icon_1 = $this->createTextField(
        'topbar_feat_icon_1',
        'ICON 1',
        ''
    );

    $topbar_feat_text_1 = $this->createTextField(
        'topbar_feat_text_1',
        'USP 1',
        ''
    );
    // Detail Feat
    $topbar_feat_link_2 = $this->createTextField(
        'topbar_feat_link_2',
        'Link 2',
        ''
    );
    $topbar_feat_icon_2 = $this->createTextField(
        'topbar_feat_icon_2',
        'ICON 2',
        ''
    );

    $topbar_feat_text_2 = $this->createTextField(
        'topbar_feat_text_2',
        'USP TEXT 2',
        ''
    );
    // Detail Feat
    $topbar_feat_link_3 = $this->createTextField(
        'topbar_feat_link_3',
        'Link 3',
        ''
    );
    $topbar_feat_icon_3 = $this->createTextField(
        'topbar_feat_icon_3',
        'ICON 3',
        ''
    );
    $topbar_feat_text_3 = $this->createTextField(
        'topbar_feat_text_3',
        'USP TEXT 3',
        ''
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




    /** @var array Defines the files which should be compiled by the javascript compressor */
    protected $javascript = array(
        'src/js/vendors/moment/moment.min.js',
        'src/js/vendors/stick-to-me/stick-to-me.js',
        'src/js/shapo.js',
        'src/js/hover.desable.js',
        'src/js/jquery.top-filter.js',
        'src/js/jquery.search-trigger.js',
        'src/js/jquery.listing-note.js',
        'src/js/jquery.override-offcanvas.js',


        /*'src/js/vendors/ysExit/ysExit.js',
        /*'src/js/vendors/progressively/progressively.js',
        /*'src/js/vendors/ysExit/ysExit.js',*/
    );












































}