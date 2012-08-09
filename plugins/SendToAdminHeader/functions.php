<?php

/*
** load plugin CSS and JS in footer
*/

function stah_admin_theme_footer($request)
{
    if (($request->getControllerName() == 'items' && $request->getActionName() == 'edit')||($request->getControllerName() == 'items' && $request->getActionName() == 'add')||($request->getControllerName() == 'files' && $request->getActionName() == 'edit')) {
        echo '<link href="'.WEB_ROOT.'/plugins/SendToAdminHeader/stah-footer.css" media="all" rel="stylesheet" type="text/css" > ';
        echo '<script language="javascript" src="'.WEB_ROOT.'/plugins/SendToAdminHeader/stah-footer.js"></script>';
    }

} 

/*
** modify item/add tabs (currently using default values, but keeping this handy just in case)
*/

function stah_admin_theme_tabs($tabs,$item){
 
  return $tabs;
}


?>