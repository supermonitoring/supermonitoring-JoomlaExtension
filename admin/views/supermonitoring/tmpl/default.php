<?php
/**
 * @package Component SuperMonitoring for Joomla! 2.5.x - 3.x
 * @version $Id: default.php 100 2015-01-13 19:00:00Z Łukasz Chrzanowski $
 * @author SITEIMPULSE
 * @copyright Copyright (C) SITEIMPULSE (https://www.siteimpulse.com/). All rights reserved.
 * @license GNU/GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
**/

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
?>
<form action="<?php echo JRoute::_('index.php?option=com_supermonitoring&id=1'); ?>" method="post" name="adminForm"  id="adminForm" class="form-validate">

    <?php echo JLayoutHelper::render('joomla.edit.title_alias', $this); ?>
    <div class="form-horizontal">
        <?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>

        <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', empty($this->item->id) ? JText::_('COM_SUPERMONITORING_SETTINGS_TAB_TITLE', true) : JText::_('COM_SUPERMONITORING_SETTINGS_TAB_TITLE', true)); ?>
        <div class="row-fluid">
            <div class="span9"> 
                <div style="margin: 10px 0 20px 15px">
                    <div class="alert alert-success" role="alert"><?php echo JText::sprintf('COM_SUPERMONITORING_SETTINGS_TAB_DESCRIPTION', "?utm_source=Joomla&utm_medium=text&utm_campaign=plugin");?></div>
                </div>
            </div>    
            <div class="span9">           
                <div class="form-vertical">
                    <?php echo $this->form->getControlGroup('token'); ?>
                </div>
            </div>
            <div class="span3">
                <?php echo JLayoutHelper::render('joomla.edit.global', $this); ?>
            </div>
            <div class="span9"> 
                <div class="alert alert-info" role="alert"><?php echo JText::sprintf('COM_SUPERMONITORING_SETTINGS_TAB_DESCRIPTION2', "?utm_source=Joomla&utm_medium=text&utm_campaign=plugin");?></div>
            </div>
        </div>
        <?php echo JHtml::_('bootstrap.endTab'); ?>
    </div>
    <input type="hidden" name="task" value="" />
    <?php echo JHtml::_('form.token'); ?>
</form>