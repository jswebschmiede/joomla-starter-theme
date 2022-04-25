<?php defined('_JEXEC') or die;

// variables
$app    = JFactory::getApplication();
$doc    = JFactory::getDocument();
$params = $app->getParams();
$tpath  = $this->baseurl . '/templates/' . $this->template;
// Detecting Active Variables
$option    = $app->input->getCmd('option', '');
$view      = $app->input->getCmd('view', '');
$layout    = $app->input->getCmd('layout', '');
$task      = $app->input->getCmd('task', '');
$itemid    = $app->input->getCmd('Itemid', '');
$sitename  = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$menu      = $app->getMenu()->getActive();
$pageclass = $menu !== null ? $menu->getParams()->get('pageclass_sfx', '') : '';

// tpl params
$templateparams = $app->getTemplate(true)->params;

// get messages
$msg = $app->getMessageQueue();

// generator tag
$this->setGenerator(null);

// Output as HTML5
$this->setHtml5(true);

// get current uri
$currenturl = urlencode(JURI::current());

// check frontpage
$home                                       = false;
$menuitem                                   = $app->getMenu();
($menuitem->getActive()->home == 1) ? $home = true : $home = false;

// Set MetaData
$doc->setMetaData('X-UA-Compatible', 'IE=edge', true);
$doc->setMetaData('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no');
$doc->setMetaData('content-type', 'text/html', true);
$doc->setMetaData('HandheldFriendly', 'True');

// css
$doc->addCustomTag('<link rel="preconnect" href="https://fonts.googleapis.com">');
$doc->addCustomTag('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
$doc->addCustomTag('<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">');
$doc->addStyleSheet($tpath . '/assets/dist/css/main.css');
