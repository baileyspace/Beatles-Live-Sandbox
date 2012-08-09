<?php
add_plugin_hook('install', 'install');
add_filter('define_response_contexts', 'pbcoreOutputReponseContext');
add_filter('define_action_contexts', 'pbcoreOutputActionContext');
add_plugin_hook('public_theme_header', 'pbcoreThemeHeader');

function install() {
	$elementSetMetadata = array(
	    'name'        => "BeatlesLive", 
	    'description' => "This element set was created in 2012 for use with crowdsourced content contributed through the Beatles Live project."
	);
	$elements = array(

	//Maps to PBCoreTitle
		array(
			'label' => 'Title', 
			'name'  => 'Title',
		),

	//Maps to PBCoreSubject
		array(
			'label' => 'Subject', 
			'name'  => 'Subject',
		),

	//Maps to PBCoreDescription
	    array(
			'label' => 'Description', 
			'name'  => 'Description',
	    ),

	//Maps to PBCoreCoverage
	    array(
			'label' => 'Related City', 
	        'name'  => 'Related City',
	    ),

	//Maps to PBCoreAssetDate (dateType="Concert").    
	    array(
			'label' => 'Related Concert Date', 
			'name'  => 'Related Concert Date',
	     ),

	//Needs to pull email address and name from contribution plug-in. 	
		array(
			'label' => 'Creator', 
			'name'  => 'Creator',
		),
	);
	insert_element_set($elementSetMetadata, $elements);
}

add_filter('admin_items_form_tabs', 'pbcore_items_form_tabs');

function pbcore_items_form_tabs($tabs, $item)
{
	unset($tabs['Dublin Core']);
	return $tabs;
}

function pbcoreOutputReponseContext($context)
{
    $context['pbcore'] = array('suffix'  => 'pbcore', 
                            'headers' => array('Content-Type' => 'text/xml'));

    return $context;
}

function pbcoreOutputActionContext($context, $controller)
{
    if ($controller instanceof ItemsController) {
        $context['show'][] = 'pbcore';
    }

    return $context;
}

function pbcoreThemeHeader()
{
	echo pbcoreOutput();
}
   
function pbcoreOutput()
{
    $request = Zend_Controller_Front::getInstance()->getRequest();

	if ($request->getControllerName() == 'items' && $request->getActionName() == 'show') {
	    return '<link rel="alternate" type="application/rss+xml" href="'.item_uri().'?output=pbcore" id="pbcore"/>' . "\n";
	}
}