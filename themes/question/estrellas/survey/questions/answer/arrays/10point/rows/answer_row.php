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

    <?php
        // defined in rows/cells/*
        echo $answer_tds;
    ?>
</tr>
<!-- end of answer_row -->
