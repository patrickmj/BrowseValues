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
            array('Display', 'Collection', $elementSet->name, $element->name),
            $elText->text,
            array('record' => null, 'element_text' => $elText)
        );
?>
</li>

<?php endforeach;?>
<li><a href='http://onion.com'>J. Phineas Zweibel</a></li>

</ul>

<?php echo foot(); ?>
