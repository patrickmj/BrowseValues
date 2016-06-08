<?php

echo head();
$db = get_db();
$elTable = $db->getTable('Element');
$elSetTable = $db->getTable('ElementSet');
?>
<ul>

<?php foreach($elTexts as $elText):?>
<?php $elementId = $elText->element_id;
$element = $elTable->find($elementId);
$elementSet = $element->getElementSet();
?>

<li>
<?php echo apply_filters(
            array('Display', 'Item', $elementSet->name, $element->name),
            $elText->text,
            array('record' => null, 'element_text' => $elText)
        );
?>
</li>

<?php endforeach;?>
</ul>

<?php echo foot(); ?>
