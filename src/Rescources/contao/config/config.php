<?php

/**
 * Back end modules
 */

array_insert($GLOBALS['BE_MOD']['calendar_booking'], sizeof($GLOBALS['BE_MOD']['calendar_booking']), array('lb_costtype' => array
    (
        'tables'        => array('tl_lb_costType')
    )
));

if(\Input::get('do') == 'calendar'&&\Input::get('id')==5)
{
   file_put_contents("calendar","");
  // $GLOBALS['TL_JAVASCRIPT'][] = '/bundles/extendedproductdetail/js/backend.js';
   // $GLOBALS['TL_CSS'][] = '/bundles/extendedproductdetail/js/backend.css';
}  
