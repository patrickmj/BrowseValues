<?php

class BrowseValuesPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array('admin_navigation_main');
    
    
    public function filterAdminNavigationMain($nav)
    {
            $nav[] = array(
                        'uri'=> url('browse-values'),
                        'label'=>__('Browse Values')
                
            );
        
        return $nav;
    }
}
