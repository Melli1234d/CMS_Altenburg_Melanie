
<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (JLanguageAssociations::isEnabled() && $params->get('show_associations'));

$currentDate   = JFactory::getDate()->format('Y-m-d H:i:s');
$isUnpublished = ($this->item->state == 0 || $this->item->publish_up > $currentDate)
    || ($this->item->publish_down < $currentDate && $this->item->publish_down !== JFactory::getDbo()->getNullDate());

?>





<body>
<div class="zwischenabschnitt" style="height: 60vh;">
    <div class="zwischenabschnitt_headline_all">

        <h2 class="h2_text_grey"><?php echo $this->item->jcfields[64]->rawvalue; ?></h2>
        <p class="p_text_grey">
            <?php echo $this->item->jcfields[65]->rawvalue; ?>
        </p>


        <a href="#" class="button_greyraduis" ><?php echo $this->item->jcfields[67]->rawvalue; ?> </a>
    </div>
    <!-- in mobile remove the clippath -->
    <div class="zwischenabschnittbild clipped"  style="background-image: url(<?php echo $this->item->jcfields[68]->rawvalue; ?>);" >

    </div>
</div>
</body>

