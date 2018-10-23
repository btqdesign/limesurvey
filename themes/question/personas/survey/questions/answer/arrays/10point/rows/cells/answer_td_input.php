<?php
/**
 * Array 5 point choice
 * @var $i
 * @var $myfname
 * @var $CHECKED
 * @var $checkconditionFunction
 * @var $value
 */
?>

<!-- answer_td_input -->
<tr class="answer_cell_<?php echo $i;?><?php echo ($i==="") ? ' noanswer-item':''; ?> answer-item radio-item">
   <td>
   <input
        type="radio"
        name="<?php echo $myfname; ?>"
        id="answer<?php echo $myfname; ?>-<?php echo $i;?>"
        value="<?php echo $value; ?>"
        <?php echo $CHECKED;?>
     />
    <label for="answer<?php echo $myfname;?>-<?php echo $i; ?>"  class="ls-label-xs-visibility">
        <?php echo $labelText;?>
    </label>
   </td>
</tr>
<!-- end of answer_td_input -->
