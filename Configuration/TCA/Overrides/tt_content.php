<?php

declare(strict_types=1);

use Maispace\MaiBase\TableConfigurationArray\CType;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Migrated from: .lookup/typo3-extension-elements/Configuration/TCA/Overrides/tt_content.php
 *
 * Migration notes:
 *   element-headline  → element-heading   (renamed for consistency)
 *   element-text      → element-richtext  (was RTE; plain element-text is new)
 *   element-html      → element-code      (renamed; code/HTML editor)
 *
 * IRRE child tables referenced below need companion TCA files in Configuration/TCA/:
 *   tx_maielements_accordion_item, tx_maielements_slider_item,
 *   tx_maielements_tab_item,       tx_maielements_link_item,
 *   tx_maielements_data_item,      tx_maielements_review_item
 */

$lang = static function (string $key): string {
    return 'LLL:EXT:mai_elements/Resources/Private/Language/Default/locallang_tca.xlf:' . $key;
};

// =============================================================================
// Custom columns added to tt_content
// =============================================================================
ExtensionManagementUtility::addTCAcolumns('tt_content', [

    // -------------------------------------------------------------------------
    // Link
    // -------------------------------------------------------------------------
    'tx_maielements_link' => [
        'label' => $lang('tt_content.tx_maielements_link'),
        'config' => ['type' => 'link'],
    ],
    'tx_maielements_link_text' => [
        'label' => $lang('tt_content.tx_maielements_link_text'),
        'config' => ['type' => 'input', 'size' => 30, 'max' => 100, 'eval' => 'trim'],
    ],

    // -------------------------------------------------------------------------
    // Layout / Appearance
    // -------------------------------------------------------------------------
    'tx_maielements_layout_variant' => [
        'label' => $lang('tt_content.tx_maielements_layout_variant'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maielements_layout_variant.default'), 'value' => 'default'],
                ['label' => $lang('tt_content.tx_maielements_layout_variant.compact'), 'value' => 'compact'],
                ['label' => $lang('tt_content.tx_maielements_layout_variant.featured'), 'value' => 'featured'],
                ['label' => $lang('tt_content.tx_maielements_layout_variant.overlay'), 'value' => 'overlay'],
            ],
            'default' => 'default',
        ],
    ],
    'tx_maielements_anchor_id' => [
        'label' => $lang('tt_content.tx_maielements_anchor_id'),
        'config' => ['type' => 'input', 'size' => 30, 'max' => 100, 'eval' => 'trim,alphanum_x'],
    ],

    // -------------------------------------------------------------------------
    // Icon
    // -------------------------------------------------------------------------
    'tx_maielements_icon' => [
        'label' => $lang('tt_content.tx_maielements_icon'),
        'config' => ['type' => 'input', 'size' => 30, 'max' => 100, 'eval' => 'trim'],
    ],

    // -------------------------------------------------------------------------
    // Author (testimonial, quote, profile)
    // -------------------------------------------------------------------------
    'tx_maielements_author' => [
        'label' => $lang('tt_content.tx_maielements_author'),
        'config' => ['type' => 'input', 'size' => 30, 'max' => 100, 'eval' => 'trim'],
    ],
    'tx_maielements_author_role' => [
        'label' => $lang('tt_content.tx_maielements_author_role'),
        'config' => ['type' => 'input', 'size' => 30, 'max' => 100, 'eval' => 'trim'],
    ],
    'tx_maielements_author_image' => [
        'label' => $lang('tt_content.tx_maielements_author_image'),
        'config' => ['type' => 'file', 'allowed' => 'common-image-types', 'maxitems' => 1],
    ],

    // -------------------------------------------------------------------------
    // Counter / Statistic
    // -------------------------------------------------------------------------
    'tx_maielements_counter_value' => [
        'label' => $lang('tt_content.tx_maielements_counter_value'),
        'config' => ['type' => 'number', 'format' => 'decimal'],
    ],
    'tx_maielements_counter_prefix' => [
        'label' => $lang('tt_content.tx_maielements_counter_prefix'),
        'config' => ['type' => 'input', 'size' => 10, 'max' => 20, 'eval' => 'trim'],
    ],
    'tx_maielements_counter_suffix' => [
        'label' => $lang('tt_content.tx_maielements_counter_suffix'),
        'config' => ['type' => 'input', 'size' => 10, 'max' => 20, 'eval' => 'trim'],
    ],

    // -------------------------------------------------------------------------
    // Price
    // -------------------------------------------------------------------------
    'tx_maielements_price' => [
        'label' => $lang('tt_content.tx_maielements_price'),
        'config' => ['type' => 'input', 'size' => 20, 'max' => 50, 'eval' => 'trim'],
    ],
    'tx_maielements_price_period' => [
        'label' => $lang('tt_content.tx_maielements_price_period'),
        'config' => ['type' => 'input', 'size' => 20, 'max' => 50, 'eval' => 'trim'],
    ],

    // -------------------------------------------------------------------------
    // Alert / Notification
    // -------------------------------------------------------------------------
    'tx_maielements_alert_type' => [
        'label' => $lang('tt_content.tx_maielements_alert_type'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maielements_alert_type.info'), 'value' => 'info'],
                ['label' => $lang('tt_content.tx_maielements_alert_type.success'), 'value' => 'success'],
                ['label' => $lang('tt_content.tx_maielements_alert_type.warning'), 'value' => 'warning'],
                ['label' => $lang('tt_content.tx_maielements_alert_type.error'), 'value' => 'error'],
            ],
            'default' => 'info',
        ],
    ],

    // -------------------------------------------------------------------------
    // Map
    // -------------------------------------------------------------------------
    'tx_maielements_map_address' => [
        'label' => $lang('tt_content.tx_maielements_map_address'),
        'config' => ['type' => 'input', 'size' => 50, 'max' => 255, 'eval' => 'trim'],
    ],
    'tx_maielements_map_lat' => [
        'label' => $lang('tt_content.tx_maielements_map_lat'),
        'config' => ['type' => 'input', 'size' => 20, 'max' => 30, 'eval' => 'trim'],
    ],
    'tx_maielements_map_lng' => [
        'label' => $lang('tt_content.tx_maielements_map_lng'),
        'config' => ['type' => 'input', 'size' => 20, 'max' => 30, 'eval' => 'trim'],
    ],
    'tx_maielements_map_zoom' => [
        'label' => $lang('tt_content.tx_maielements_map_zoom'),
        'config' => [
            'type' => 'number',
            'format' => 'integer',
            'range' => ['lower' => 1, 'upper' => 20],
            'default' => 13,
        ],
    ],

    // -------------------------------------------------------------------------
    // Slider settings
    // -------------------------------------------------------------------------
    'tx_maielements_autoplay' => [
        'label' => $lang('tt_content.tx_maielements_autoplay'),
        'config' => ['type' => 'check', 'renderType' => 'checkboxToggle', 'default' => 0],
    ],
    'tx_maielements_interval' => [
        'label' => $lang('tt_content.tx_maielements_interval'),
        'config' => [
            'type' => 'number',
            'format' => 'integer',
            'range' => ['lower' => 500],
            'default' => 5000,
        ],
    ],

    // -------------------------------------------------------------------------
    // Gallery settings
    // -------------------------------------------------------------------------
    'tx_maielements_lightbox' => [
        'label' => $lang('tt_content.tx_maielements_lightbox'),
        'config' => ['type' => 'check', 'renderType' => 'checkboxToggle', 'default' => 0],
    ],
    'tx_maielements_gallery_columns' => [
        'label' => $lang('tt_content.tx_maielements_gallery_columns'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => '2', 'value' => 2],
                ['label' => '3', 'value' => 3],
                ['label' => '4', 'value' => 4],
            ],
            'default' => 3,
        ],
    ],
    'tx_maielements_gallery_layout' => [
        'label' => $lang('tt_content.tx_maielements_gallery_layout'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maielements_gallery_layout.grid'), 'value' => 'grid'],
                ['label' => $lang('tt_content.tx_maielements_gallery_layout.masonry'), 'value' => 'masonry'],
            ],
            'default' => 'grid',
        ],
    ],

    // -------------------------------------------------------------------------
    // Chart / Graph
    // -------------------------------------------------------------------------
    'tx_maielements_chart_type' => [
        'label' => $lang('tt_content.tx_maielements_chart_type'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maielements_chart_type.bar'), 'value' => 'bar'],
                ['label' => $lang('tt_content.tx_maielements_chart_type.line'), 'value' => 'line'],
                ['label' => $lang('tt_content.tx_maielements_chart_type.pie'), 'value' => 'pie'],
                ['label' => $lang('tt_content.tx_maielements_chart_type.doughnut'), 'value' => 'doughnut'],
                ['label' => $lang('tt_content.tx_maielements_chart_type.area'), 'value' => 'area'],
            ],
            'default' => 'bar',
        ],
    ],
    'tx_maielements_chart_data' => [
        'label' => $lang('tt_content.tx_maielements_chart_data'),
        'description' => $lang('tt_content.tx_maielements_chart_data.description'),
        'config' => ['type' => 'text', 'rows' => 10, 'cols' => 50, 'eval' => 'trim'],
    ],

    // -------------------------------------------------------------------------
    // Progress Bar
    // -------------------------------------------------------------------------
    'tx_maielements_progress_value' => [
        'label' => $lang('tt_content.tx_maielements_progress_value'),
        'config' => [
            'type' => 'number',
            'format' => 'integer',
            'range' => ['lower' => 0, 'upper' => 100],
            'default' => 0,
        ],
    ],

    // -------------------------------------------------------------------------
    // Search Box
    // -------------------------------------------------------------------------
    'tx_maielements_search_placeholder' => [
        'label' => $lang('tt_content.tx_maielements_search_placeholder'),
        'config' => ['type' => 'input', 'size' => 50, 'max' => 100, 'eval' => 'trim'],
    ],
    'tx_maielements_search_target' => [
        'label' => $lang('tt_content.tx_maielements_search_target'),
        'config' => [
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
        ],
    ],

    // -------------------------------------------------------------------------
    // Form (EXT:form reference)
    // -------------------------------------------------------------------------
    'tx_maielements_form_identifier' => [
        'label' => $lang('tt_content.tx_maielements_form_identifier'),
        'config' => ['type' => 'input', 'size' => 50, 'max' => 255, 'eval' => 'trim'],
    ],

    // -------------------------------------------------------------------------
    // Modal
    // -------------------------------------------------------------------------
    'tx_maielements_modal_content' => [
        'label' => $lang('tt_content.tx_maielements_modal_content'),
        'config' => [
            'type' => 'text',
            'rows' => 10,
            'cols' => 50,
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
        ],
    ],

    // -------------------------------------------------------------------------
    // Job Posting
    // -------------------------------------------------------------------------
    'tx_maielements_job_location' => [
        'label' => $lang('tt_content.tx_maielements_job_location'),
        'config' => ['type' => 'input', 'size' => 50, 'max' => 255, 'eval' => 'trim'],
    ],
    'tx_maielements_job_type' => [
        'label' => $lang('tt_content.tx_maielements_job_type'),
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => $lang('tt_content.tx_maielements_job_type.fulltime'), 'value' => 'fulltime'],
                ['label' => $lang('tt_content.tx_maielements_job_type.parttime'), 'value' => 'parttime'],
                ['label' => $lang('tt_content.tx_maielements_job_type.volunteer'), 'value' => 'volunteer'],
                ['label' => $lang('tt_content.tx_maielements_job_type.internship'), 'value' => 'internship'],
            ],
            'default' => 'fulltime',
        ],
    ],
    'tx_maielements_job_deadline' => [
        'label' => $lang('tt_content.tx_maielements_job_deadline'),
        'config' => ['type' => 'datetime', 'format' => 'date'],
    ],

    // -------------------------------------------------------------------------
    // IRRE item relations (child tables to be created separately)
    // -------------------------------------------------------------------------
    'tx_maielements_accordion_items' => [
        'label' => $lang('tt_content.tx_maielements_accordion_items'),
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_maielements_accordion_item',
            'foreign_field' => 'tt_content_uid',
            'foreign_sortby' => 'sorting',
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'newRecordLinkAddTitle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
            ],
        ],
    ],
    'tx_maielements_slider_items' => [
        'label' => $lang('tt_content.tx_maielements_slider_items'),
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_maielements_slider_item',
            'foreign_field' => 'tt_content_uid',
            'foreign_sortby' => 'sorting',
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'newRecordLinkAddTitle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
            ],
        ],
    ],
    'tx_maielements_tab_items' => [
        'label' => $lang('tt_content.tx_maielements_tab_items'),
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_maielements_tab_item',
            'foreign_field' => 'tt_content_uid',
            'foreign_sortby' => 'sorting',
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'newRecordLinkAddTitle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
            ],
        ],
    ],
    'tx_maielements_link_items' => [
        'label' => $lang('tt_content.tx_maielements_link_items'),
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_maielements_link_item',
            'foreign_field' => 'tt_content_uid',
            'foreign_sortby' => 'sorting',
            'appearance' => [
                'collapseAll' => false,
                'expandSingle' => true,
                'newRecordLinkAddTitle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
            ],
        ],
    ],
    'tx_maielements_data_items' => [
        'label' => $lang('tt_content.tx_maielements_data_items'),
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_maielements_data_item',
            'foreign_field' => 'tt_content_uid',
            'foreign_sortby' => 'sorting',
            'appearance' => [
                'collapseAll' => false,
                'expandSingle' => true,
                'newRecordLinkAddTitle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
            ],
        ],
    ],
    'tx_maielements_review_items' => [
        'label' => $lang('tt_content.tx_maielements_review_items'),
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_maielements_review_item',
            'foreign_field' => 'tt_content_uid',
            'foreign_sortby' => 'sorting',
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'newRecordLinkAddTitle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
            ],
        ],
    ],
]);

// =============================================================================
// Shared palettes
// =============================================================================
$GLOBALS['TCA']['tt_content']['palettes']['mai_elements_link'] = [
    'label' => $lang('palette.mai_elements_link'),
    'showitem' => 'tx_maielements_link, tx_maielements_link_text',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_elements_author'] = [
    'label' => $lang('palette.mai_elements_author'),
    'showitem' => 'tx_maielements_author, tx_maielements_author_role, --linebreak--, tx_maielements_author_image',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_elements_counter'] = [
    'label' => $lang('palette.mai_elements_counter'),
    'showitem' => 'tx_maielements_counter_prefix, tx_maielements_counter_value, tx_maielements_counter_suffix',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_elements_map'] = [
    'label' => $lang('palette.mai_elements_map'),
    'showitem' => 'tx_maielements_map_address, --linebreak--, tx_maielements_map_lat, tx_maielements_map_lng, tx_maielements_map_zoom',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_elements_slider_settings'] = [
    'label' => $lang('palette.mai_elements_slider_settings'),
    'showitem' => 'tx_maielements_autoplay, tx_maielements_interval',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_elements_gallery_settings'] = [
    'label' => $lang('palette.mai_elements_gallery_settings'),
    'showitem' => 'tx_maielements_gallery_layout, tx_maielements_gallery_columns, tx_maielements_lightbox',
];
$GLOBALS['TCA']['tt_content']['palettes']['mai_elements_job'] = [
    'label' => $lang('palette.mai_elements_job'),
    'showitem' => 'tx_maielements_job_location, tx_maielements_job_type, tx_maielements_job_deadline',
];

// =============================================================================
// 🟢 Basic Elements
// =============================================================================

// 1. Text — plain, no RTE
(new CType('element-text', $lang('ctype.element-text'), 'content-text'))
    ->addCustomFields('bodytext')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 2. Heading — migrated from element-headline
(new CType('element-heading', $lang('ctype.element-heading'), 'content-header'))
    ->addDefaultHeaderPalette()
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 3. Rich Text — migrated from element-text (was RTE-enabled)
(new CType('element-richtext', $lang('ctype.element-richtext'), 'content-text'))
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => true, 'richtextConfiguration' => 'default']])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 4. Image
(new CType('element-image', $lang('ctype.element-image'), 'content-image'))
    ->addDefaultImageTab()
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 5. Video
(new CType('element-video', $lang('ctype.element-video'), 'content-media'))
    ->addDefaultMediaTab()
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 6. Audio
(new CType('element-audio', $lang('ctype.element-audio'), 'mimetypes-media-audio'))
    ->addDefaultMediaTab()
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 7. Button
(new CType('element-button', $lang('ctype.element-button'), 'content-elements-login'))
    ->addCustomFields('--palette--;;mai_elements_link, tx_maielements_layout_variant')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 8. Link List
(new CType('element-link-list', $lang('ctype.element-link-list'), 'content-list'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_link_items')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 9. Icon
(new CType('element-icon', $lang('ctype.element-icon'), 'mimetypes-text-image'))
    ->addCustomFields('tx_maielements_icon, tx_maielements_layout_variant')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 10. Divider
(new CType('element-divider', $lang('ctype.element-divider'), 'content-special-div'))
    ->disableGeneralPalette()
    ->addCustomFields('tx_maielements_layout_variant')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// =============================================================================
// 🔵 Content Elements
// =============================================================================

// 11. Card
(new CType('element-card', $lang('ctype.element-card'), 'content-elements-textpic'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('bodytext, image, --palette--;;mai_elements_link, tx_maielements_layout_variant')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 12. Teaser
(new CType('element-teaser', $lang('ctype.element-teaser'), 'content-elements-textpic'))
    ->addDefaultHeadersPalette()
    ->addCustomFields('bodytext, image')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 13. Hero
(new CType('element-hero', $lang('ctype.element-hero'), 'actions-device-desktop'))
    ->addDefaultHeadersPalette()
    ->addCustomFields('bodytext, image, --palette--;;mai_elements_link, tx_maielements_layout_variant')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 14. Banner
(new CType('element-banner', $lang('ctype.element-banner'), 'content-image'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('image, --palette--;;mai_elements_link, tx_maielements_layout_variant')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 15. Feature Box (icon + heading + text)
(new CType('element-feature-box', $lang('ctype.element-feature-box'), 'content-elements-textpic'))
    ->addCustomFields('tx_maielements_icon')
    ->addDefaultHeaderPalette()
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 16. Call to Action (CTA)
(new CType('element-cta', $lang('ctype.element-cta'), 'content-elements-login'))
    ->addDefaultHeadersPalette()
    ->addCustomFields('bodytext, --palette--;;mai_elements_link, tx_maielements_layout_variant')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 17. Media + Text
(new CType('element-media-text', $lang('ctype.element-media-text'), 'content-elements-textpic'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => true, 'richtextConfiguration' => 'default']])
    ->addDefaultImageTab()
    ->addCustomFields('tx_maielements_layout_variant')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 18. Profile / Team Member
(new CType('element-profile', $lang('ctype.element-profile'), 'status-user-frontend'))
    ->addDefaultHeadersPalette()
    ->addCustomFields('bodytext, --palette--;;mai_elements_author')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 19. Testimonial
(new CType('element-testimonial', $lang('ctype.element-testimonial'), 'content-text'))
    ->addCustomFields('bodytext, --palette--;;mai_elements_author, tx_maielements_layout_variant')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 20. Quote
(new CType('element-quote', $lang('ctype.element-quote'), 'content-text'))
    ->addCustomFields('bodytext, tx_maielements_author')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 21. Logo
(new CType('element-logo', $lang('ctype.element-logo'), 'content-image'))
    ->addCustomFields('image, --palette--;;mai_elements_link')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 22. Logo Showcase (single brand highlight)
(new CType('element-logo-showcase', $lang('ctype.element-logo-showcase'), 'content-image'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('image, --palette--;;mai_elements_link')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 23. Statistic / Counter
(new CType('element-statistic', $lang('ctype.element-statistic'), 'actions-view-table-expand'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('--palette--;;mai_elements_counter')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 24. Price Box
(new CType('element-price-box', $lang('ctype.element-price-box'), 'actions-system-list-open'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_price, tx_maielements_price_period, bodytext, --palette--;;mai_elements_link, tx_maielements_layout_variant')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 25. Badge / Label Display
(new CType('element-badge', $lang('ctype.element-badge'), 'content-header'))
    ->addCustomFields('header, tx_maielements_layout_variant')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// =============================================================================
// 🟣 Interactive Elements
// =============================================================================

// 26. Slider / Carousel
(new CType('element-slider', $lang('ctype.element-slider'), 'actions-move-left'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_slider_items, --palette--;;mai_elements_slider_settings')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 27. Accordion
(new CType('element-accordion', $lang('ctype.element-accordion'), 'actions-chevron-down'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_accordion_items')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 28. Tabs
(new CType('element-tabs', $lang('ctype.element-tabs'), 'actions-view-table-expand'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_tab_items, tx_maielements_layout_variant')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 29. Modal Trigger
(new CType('element-modal', $lang('ctype.element-modal'), 'actions-window-open'))
    ->addCustomFields('--palette--;;mai_elements_link, tx_maielements_modal_content')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 30. Form (EXT:form integration)
(new CType('element-form', $lang('ctype.element-form'), 'content-elements-mailform'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_form_identifier')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 31. Search Box
(new CType('element-search', $lang('ctype.element-search'), 'actions-search'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_search_placeholder, tx_maielements_search_target')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 32. Newsletter Signup
(new CType('element-newsletter', $lang('ctype.element-newsletter'), 'actions-mail'))
    ->addDefaultHeadersPalette()
    ->addCustomFields('bodytext, tx_maielements_form_identifier')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 33. Map (interactive)
(new CType('element-map', $lang('ctype.element-map'), 'mimetypes-text-image'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('--palette--;;mai_elements_map')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 34. Timeline Block (references mai_timeline records via pages/plugin)
(new CType('element-timeline', $lang('ctype.element-timeline'), 'content-elements-textpic'))
    ->addDefaultHeaderPalette()
    ->addPluginTab(false, true, true)
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 35. FAQ Block (references mai_faq records via pages/plugin)
(new CType('element-faq-block', $lang('ctype.element-faq-block'), 'actions-chevron-down'))
    ->addDefaultHeaderPalette()
    ->addPluginTab(false, true, true)
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// =============================================================================
// 🟡 Data & Structured Elements
// =============================================================================

// 36. Table — migrated from element-table
(new CType('element-table', $lang('ctype.element-table'), 'content-table'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', ['config' => ['renderType' => 'textTable', 'wrap' => 'off']])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 37. Data List (key–value pairs)
(new CType('element-data-list', $lang('ctype.element-data-list'), 'content-list'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_data_items')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 38. Gallery
(new CType('element-gallery', $lang('ctype.element-gallery'), 'content-image'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('image, --palette--;;mai_elements_gallery_settings')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 39. File List / Downloads — migrated from element-file
(new CType('element-file', $lang('ctype.element-file'), 'module-documentation'))
    ->addDefaultHeaderPalette()
    ->addDefaultMediaTab()
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 40. Code Block — migrated from element-html
(new CType('element-code', $lang('ctype.element-code'), 'content-special-html'))
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', ['config' => ['format' => 'html', 'renderType' => 'codeEditor', 'wrap' => 'off']])
    ->addDefaultAccessTab()
    ->register();

// 41. Chart / Graph
(new CType('element-chart', $lang('ctype.element-chart'), 'actions-view-table-expand'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_chart_type, tx_maielements_chart_data')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 42. Progress Bar
(new CType('element-progress', $lang('ctype.element-progress'), 'actions-view-table-expand'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_progress_value')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 43. Rating / Reviews
(new CType('element-rating', $lang('ctype.element-rating'), 'actions-favorite'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('tx_maielements_review_items')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 44. Event (references mai_project event records)
(new CType('element-event', $lang('ctype.element-event'), 'content-elements-textpic'))
    ->addDefaultHeaderPalette()
    ->addPluginTab(false, true, true)
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 45. Job Posting
(new CType('element-job', $lang('ctype.element-job'), 'actions-document-open'))
    ->addDefaultHeadersPalette()
    ->addCustomFields('bodytext, --palette--;;mai_elements_job, --palette--;;mai_elements_link')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => true, 'richtextConfiguration' => 'default']])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// =============================================================================
// 🟠 Feedback & State Elements
// =============================================================================

// 46. Alert / Message
(new CType('element-alert', $lang('ctype.element-alert'), 'status-dialog-warning'))
    ->addDefaultHeaderPalette()
    ->addCustomFields('bodytext, tx_maielements_alert_type')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 47. Notification Box
(new CType('element-notification', $lang('ctype.element-notification'), 'status-dialog-information'))
    ->addCustomFields('bodytext, tx_maielements_alert_type, tx_maielements_layout_variant')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 48. Loader / Spinner
(new CType('element-loader', $lang('ctype.element-loader'), 'spinner-circle'))
    ->disableGeneralPalette()
    ->addCustomFields('tx_maielements_layout_variant')
    ->addDefaultAccessTab()
    ->register();

// 49. Empty State
(new CType('element-empty-state', $lang('ctype.element-empty-state'), 'content-elements-textpic'))
    ->addDefaultHeadersPalette()
    ->addCustomFields('tx_maielements_icon')
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();

// 50. Success / Confirmation Message
(new CType('element-success', $lang('ctype.element-success'), 'status-dialog-ok'))
    ->addDefaultHeadersPalette()
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', ['config' => ['enableRichtext' => false]])
    ->addDefaultAppearanceTab()
    ->addDefaultAccessTab()
    ->register();
