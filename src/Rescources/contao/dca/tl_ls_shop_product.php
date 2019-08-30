<?php
/**
 * Table tl_ls_shop_product
 */


//Legenden hinzuf�gen
$GLOBALS['TL_DCA']['tl_ls_shop_product']['palettes']['default']=str_replace('{lsShopPublishAndState_legend},','{lbcostType_legend},lb_costTypeOnceList,lb_costTypeRecurrList,lb_summPurchasePriceOnce,lb_summPurchasePriceRecurr;{lsShopPublishAndState_legend},',$GLOBALS['TL_DCA']['tl_ls_shop_product']['palettes']['default'] );




$GLOBALS['TL_DCA']['tl_ls_shop_product']['fields']['lb_costTypeOnceList']= array
(
    'label'			=> &$GLOBALS['TL_LANG']['tl_ls_shop_product']['lb_costTypeOnceList'],
    'exclude' 		=> true,
    'inputType' 	=> 'multiColumnWizard',
    // 'save_callback'           => array(array('lb_tl_member','mySaveCallback')),
    'eval' 			=> array
    (
        'columnFields' => array
        (
            'costTypeOnce' => array
            (
                'label'                 => &$GLOBALS['TL_LANG']['tl_ls_shop_product']['costTypeOnce'],
                'inputType' => 'text',
                'eval'      => array('tl_class'=>'wizard','maxlength'=>255),
                'sql'       => "varchar(256) NOT NULL default 'Accordeon Label'"
            ),
            'purchasePriceOnce' => array
            (
                'label'     => &$GLOBALS['TL_LANG']['tl_ls_shop_product']['purchasePriceOnce'],
                'inputType' => 'text',
                'eval'      =>  array('maxlength'=>10, 'rgxp'=>'numberWithDecimals'),
                'sql'       => "int(10) unsigned NOT NULL default '0'"
            ),
            'purchaseQuantityOnce' => array
            (
                'label'     => &$GLOBALS['TL_LANG']['tl_ls_shop_product']['purchaseQuantityOnce'],
                'inputType' => 'text',
                'eval'      =>  array('maxlength'=>10, 'rgxp'=>'natural'),
                'sql'       => "int(10) unsigned NOT NULL default '0'"
            ),
            'purchasePrice' => array
            (
                'label'     => &$GLOBALS['TL_LANG']['tl_ls_shop_product']['purchaseQuantityOnce'],
                'inputType' => 'text',
                'eval'      =>  array('maxlength'=>10, 'rgxp'=>'natural'),
                'sql'       => "int(10) unsigned NOT NULL default '0'"
            ),
        ),
    ),
    'sql' => "blob NULL"
);
$GLOBALS['TL_DCA']['tl_ls_shop_product']['fields']['lb_costTypeRecurrList']= array
(
    'label'			=> &$GLOBALS['TL_LANG']['tl_ls_shop_product']['lb_costTypeRecurrList'],
    'exclude' 		=> true,
    'inputType' 	=> 'multiColumnWizard',
    // 'save_callback'           => array(array('lb_tl_member','mySaveCallback')),
    'eval' 			=> array
    (
        'columnFields' => array
        (
            'costTypeOnce' => array
            (
                'label'                 => &$GLOBALS['TL_LANG']['tl_ls_shop_product']['costTypeRecurr'],
                'inputType' => 'text',
                'eval'      => array('tl_class'=>'wizard','maxlength'=>255),
                'sql'       => "varchar(256) NOT NULL default 'Accordeon Label'"
            ),
            'purchasePriceOnce' => array
            (
                'label'     => &$GLOBALS['TL_LANG']['tl_ls_shop_product']['purchasePriceRecurr'],
                'inputType' => 'text',
                'eval'      =>  array('maxlength'=>10, 'rgxp'=>'numberWithDecimals'),
                'sql'       => "int(10) unsigned NOT NULL default '0'"
            ),
            'purchaseQuantityOnce' => array
            (
                'label'     => &$GLOBALS['TL_LANG']['tl_ls_shop_product']['purchaseQuantityRecurr'],
                'inputType' => 'text',
                'eval'      =>  array('maxlength'=>10, 'rgxp'=>'natural'),
                'sql'       => "int(10) unsigned NOT NULL default '0'"
            ),
            'purchasePrice' => array
            (
                'label'     => &$GLOBALS['TL_LANG']['tl_ls_shop_product']['purchaseQuantityRecurr'],
                'inputType' => 'text',
                'eval'      =>  array('maxlength'=>10, 'rgxp'=>'natural'),
                'sql'       => "int(10) unsigned NOT NULL default '0'"
            ),
        ),
    ),
    'sql' => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_ls_shop_product']['fields']['lb_summPurchasePriceOnce']= array
(
    'label'			=> &$GLOBALS['TL_LANG']['tl_ls_shop_product']['lb_summPurchasePriceOnce'],
    'exclude' 		=> true,
    'inputType' 	=> 'text',
    'eval'      =>  array('maxlength'=>10, 'rgxp'=>'natural'),
    'sql'       => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_ls_shop_product']['fields']['lb_summPurchasePriceRecurr']= array
(
    'label'			=> &$GLOBALS['TL_LANG']['tl_ls_shop_product']['lb_summPurchasePriceRecurr'],
    'exclude' 		=> true,
    'inputType' 	=> 'text',
    'eval'      =>  array('maxlength'=>10, 'rgxp'=>'natural'),
    'sql'       => "int(10) unsigned NOT NULL default '0'"
);
