<?php

(new \Maispace\Base\RegistrationHelper\CType('element-headline', 'Überschrift', 'content-header'))
    ->addDefaultHeaderPalette()
    ->register();

(new \Maispace\Base\RegistrationHelper\CType('element-text', 'Text', 'content-text'))
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', [
        'config' => [
            'enableRichtext' => 1
        ],
    ])
    ->register();

(new \Maispace\Base\RegistrationHelper\CType('element-html', 'Html', 'content-special-html'))
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', [
        'config' => [
            'format' => 'html',
            'renderType' => 'codeEditor',
            'wrap' => 'off'
        ],
    ])
    ->register();

(new \Maispace\Base\RegistrationHelper\CType('element-table', 'Tabelle', 'content-table'))
    ->addCustomFields('bodytext')
    ->addColumnOverride('bodytext', [
        'config' => [
            'renderType' => 'textTable',
            'wrap' => 'off'
        ],
    ])
    ->register();


(new \Maispace\Base\RegistrationHelper\CType('element-image', 'Bild', 'content-image'))
    ->addCustomFields('image')
    ->register();

(new \Maispace\Base\RegistrationHelper\CType('element-video', 'Video', 'content-media'))
    ->addCustomFields('media')
    ->register();

(new \Maispace\Base\RegistrationHelper\CType('element-file', 'Dokument', 'module-documentation'))
    ->addCustomFields('media')
    ->register();
