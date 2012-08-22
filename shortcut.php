<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgSystemShortcut extends JPlugin {
   function plgSystemShortcut( &$subject, $config )
   {
       parent::__construct( $subject, $config );
   }

    function onAfterInitialise()
    {
      $app = JFactory::getApplication();
      if ($app->isAdmin()) {
        $doc = &JFactory::getDocument();
        $doc->addScript( 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js' );
        $doc->addScript( '../plugins/system/shortcut/js/acunote-shortcuts.js' );
        $doc->addScript( '../plugins/system/shortcut/js/shortcuts.js' );
        $doc->addStyleSheet( '../plugins/system/shortcut/css/shortcuts.css' );
      }
    }

    function onAfterRender()
    {
      $app = JFactory::getApplication();
      if ($app->isAdmin()) {
        $response     = JResponse::getBody();
        $replace      = '</body>';
        $newContent   = '<div id="shortcuts-list">';
        $newContent  .= '<div class="inside-sc">';
        $newContent  .= '<div class="title-page-sc">';
        $newContent  .= '<h3>Keyboard ShortCuts</h3>';
        $newContent  .= '<a id="sc-close-button">Fechar</a>';
        $newContent  .= '</div>';
        $newContent  .= '<div id="shortcuts-items">';
        $newContent  .= '<div class="left-c">';
        $newContent  .= '<h5>Content</h5>';
        $newContent  .= '<p><span class="letter">a <span>then</span> n</span><span class="sc-description"> : Create an article page</span></p>';
        $newContent  .= '<p><span class="letter">a <span>then</span> a</span><span class="sc-description"> : Article Manager page</span></p>';
        $newContent  .= '<p><span class="letter">a <span>then</span> c</span><span class="sc-description"> : Create category page</span></p>';
        $newContent  .= '<p><span class="letter">a <span>then</span> m</span><span class="sc-description"> : Category Manager page</span></p>';
        $newContent  .= '<p><span class="letter">a <span>then</span> f</span><span class="sc-description"> : Featured Article page</span></p>';
        $newContent  .= '<p><span class="letter">a <span>then</span> e</span><span class="sc-description"> : Media Manager page</span></p>';
        $newContent  .= '<h5>General</h5>';
        $newContent  .= '<p><span class="letter">g <span>then</span> d</span><span class="sc-description"> : Control Panel page</span></p>';
        $newContent  .= '<p><span class="letter">g <span>then</span> g</span><span class="sc-description"> : Global Configuration page</span></p>';
        $newContent  .= '<p><span class="letter">g <span>then</span> c</span><span class="sc-description"> : Global Check-in page</span></p>';
        $newContent  .= '<p><span class="letter">g <span>then</span> i</span><span class="sc-description"> : System Information page</span></p>';
        $newContent  .= '<h5>User</h5>';
        $newContent  .= '<p><span class="letter">u <span>then</span> u</span><span class="sc-description"> : User Manager page</span></p>';
        $newContent  .= '<p><span class="letter">u <span>then</span> c</span><span class="sc-description"> : Create User page</span></p>';
        $newContent  .= '<p><span class="letter">u <span>then</span> g</span><span class="sc-description"> : User Groups page</span></p>';
        $newContent  .= '<p><span class="letter">u <span>then</span> l</span><span class="sc-description"> : User Level page</span></p>';
        $newContent  .= '</div>';
        $newContent  .= '<div class="right-c">';
        $newContent  .= '<h5>Components</h5>';
        $newContent  .= '<p><span class="letter">c <span>then</span> b</span><span class="sc-description"> : Component Banner</span></p>';
        $newContent  .= '<p><span class="letter">c <span>then</span> c</span><span class="sc-description"> : Component Contact</span></p>';
        $newContent  .= '<p><span class="letter">c <span>then</span> m</span><span class="sc-description"> : Component Messaging</span></p>';
        $newContent  .= '<p><span class="letter">c <span>then</span> n</span><span class="sc-description"> : Component Newsfeed</span></p>';
        $newContent  .= '<p><span class="letter">c <span>then</span> r</span><span class="sc-description"> : Component Redirect</span></p>';
        $newContent  .= '<p><span class="letter">c <span>then</span> s</span><span class="sc-description"> : Component Search</span></p>';
        $newContent  .= '<p><span class="letter">c <span>then</span> a</span><span class="sc-description"> : Component Smart Search</span></p>';
        $newContent  .= '<p><span class="letter">c <span>then</span> w</span><span class="sc-description"> : Component Weblinks</span></p>';
        $newContent  .= '<p><span class="letter">c <span>then</span> k</span><span class="sc-description"> : Component K2</span></p>';
        $newContent  .= '<h5>Extensions</h5>';
        $newContent  .= '<p><span class="letter">e <span>then</span> m</span><span class="sc-description"> : Extension Manager</span></p>';
        $newContent  .= '<p><span class="letter">e <span>then</span> p</span><span class="sc-description"> : Plugin Manager</span></p>';
        $newContent  .= '<p><span class="letter">e <span>then</span> t</span><span class="sc-description"> : Template Manager</span></p>';
        $newContent  .= '<p><span class="letter">e <span>then</span> l</span><span class="sc-description"> : Language Manager</span></p>';
        $newContent  .= '</div>';
        $newContent  .= '</div>';
        $newContent  .= '</div>';
        $newContent  .= '</div>';
        $newContent  .= '</body>';
        $response     = str_replace($replace, $newContent, $response);
        JResponse::setBody($response);
      }
    }
    
}

?>