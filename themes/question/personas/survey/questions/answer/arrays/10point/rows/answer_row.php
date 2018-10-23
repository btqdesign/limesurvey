<?php
/**
 * Generate a row for the table
 *
 * @var $answer_tds        : the cells of each row, generated with the view rows/cells/*.php
 * @var $myfname
 * @var $answerwidth
 * @var $answertext
 * @var $value
 */
?>

<!-- answer_row -->
<tr id="javatbd<?php echo $myfname;?>" class="answers-list radio-list form-group <?php echo ($odd) ? "ls-odd" : "ls-even"; ?> <?php echo ($error) ? " ls-error-mandatory has-error" : ""; ?>"  <?php echo $sDisplayStyle; ?>  role="radiogroup"  aria-labelledby="answertext<?php echo $myfname;?>">
    <th id="answertext<?php echo $myfname;?>" class="answertext control-label<?php echo ($answerwidth==0)? " sr-only":""; ?>">
       
       carita
        <?php
        /* Value for expression manager javascript (use id) ; no need to submit */
        echo \CHtml::hiddenField("java{$myfname}",$value,array(
            'id' => "java{$myfname}",
            'disabled' => true,
        ));
        ?>
    </th>
 
</tr>

<tr id="javatbd<?php echo $myfname;?>" class="answers-list radio-list form-group <?php echo ($odd) ? "ls-odd" : "ls-even"; ?> <?php echo ($error) ? " ls-error-mandatory has-error" : ""; ?>"  <?php echo $sDisplayStyle; ?>  role="radiogroup"  aria-labelledby="answertext<?php echo $myfname;?>">
    <th id="answertext<?php echo $myfname;?>" class="answertext control-label<?php echo ($answerwidth==0)? " sr-only":""; ?>">
       
       carita
        <?php
        /* Value for expression manager javascript (use id) ; no need to submit */
        echo \CHtml::hiddenField("java{$myfname}",$value,array(
            'id' => "java{$myfname}",
            'disabled' => true,
        ));
        ?>
    </th>
 
</tr>


<!-- end of answer_row -->
