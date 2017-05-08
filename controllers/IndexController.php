<?php

class BrowseValues_IndexController extends Omeka_Controller_AbstractActionController
{
    
    public function indexAction()
    {
        $db = get_db();
        if ($this->getRequest()->isPost()) {
            $elementId = $_POST['element_id'];
            $elTextTable = $db->getTable('ElementText');
            $select = $elTextTable->getSelectForFindBy(array('element_id' => $elementId));
            $select->group('text');
            
            $elTexts = $elTextTable->fetchObjects($select);
            $this->view->elTexts = $elTexts;
        } else {
            $elementTable = $db->getTable('Element');
            $elements = $elementTable->findAll();
            $elementValues = array();
            
            foreach($elements as $element) {
                $elementValues[$element->id] = $element->name;
            }
            $this->view->elementValues = $elementValues;
        }
        
    }
}
