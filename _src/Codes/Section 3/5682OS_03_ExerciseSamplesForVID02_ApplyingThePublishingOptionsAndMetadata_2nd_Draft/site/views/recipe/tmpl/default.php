<?php
defined('_JEXEC') or die;
?>
<div class="item-page goodcook-recipe">
<?php   if (empty($this->item)) { ?>
	        <p><?php echo JText::_('COM_GOODCOOK_NO_RECIPE'); ?></p>
<?php   }
        else {  ?>
	    	<h3><?php echo $this->item->title; ?></h3>
            <p><?php echo $this->item->recipe; ?></p>


            <div class="recipe-submission-info">
                <div class="recipe-author">
                	<span class="gc-label">
                    	<?php echo JText::_('COM_GOODCOOK_RECIPE_AUTHOR'); ?>
                    </span>
                    <span class="gc-data">
                    	<?php echo $this->item->author; ?>
                    </span>
                </div>
                <div class="recipe-created-date">
                	<span class="gc-label">
                    	<?php echo JText::_('COM_GOODCOOK_RECIPE_CREATED_DATE'); ?>
                    </span>
                    <span class="gc-data">
                    	<?php echo date('M j, Y', strtotime($this->item->created));  ?>
                    </span>
                </div>
                <div style="clear:both;"></div>
            </div>       


<?php   }
?>
</div>