<?php

class BrowseValues_IndexController extends Omeka_Controller_AbstractActionController
{
    
    public function indexAction()
    {
        $db = get_db();
        $elementId = 45; //dc publisher
        $elTextTable = $db->getTable('ElementText');
        $select = $elTextTable->getSelectForFindBy(array('element_id' => $elementId));
        $select->group('text');
        
        $elTexts = $elTextTable->fetchObjects($select);
        $this->view->elTexts = $elTexts;
    }
}
