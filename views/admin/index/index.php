<?php

echo head(array('title' => 'Browse Values'));

?>


<?php if (isset($elementValues)): ?>
<form method="post">
<button>Find values for selected element</button>
<br />
<?php echo $this->formRadio('element_id', array(), null, $elementValues ); ?>
</form>
<?php else: ?>


<ul>

<?php foreach($elTexts as $elText):?>

<li>
<?php echo $elText->text; ?>
</li>

<?php endforeach;?>

</ul>

<?php endif; ?>

<?php echo foot(); ?>
