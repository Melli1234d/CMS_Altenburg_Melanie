
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

<article class="flipcard">
    <div class="FlipCardRow">

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img class="flipcardimage" src="<?php echo $this->item->jcfields[68]->rawvalue; ?>" alt="Killer" >

                </div>
                <div class="flip-card-back">
                    <h2 id="flipcardheadlineback"><?php echo $this->item->jcfields[79]->rawvalue; ?></h2>
                    <p id="flipcardpback"><?php echo $this->item->jcfields[83]->rawvalue; ?></p>

                </div>
            </div>
        </div>


        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img class="flipcardimage" src="<?php echo $this->item->jcfields[82]->rawvalue; ?>" alt="Archiver" >

                </div>
                <div class="flip-card-back">
                    <h2 id="flipcardheadlineback"><?php echo $this->item->jcfields[80]->rawvalue; ?></h2>
                    <p id="flipcardpback"><?php echo $this->item->jcfields[84]->rawvalue; ?></p>

                </div>
            </div>
        </div>

        <div class="erklärung">
            <h2 id="flipcardheadline"><?php echo $this->item->jcfields[64]->rawvalue; ?> </h2>
            <div id="flipcardp">
                <p id="flipcardp"> <?php echo $this->item->jcfields[65]->rawvalue; ?> </p>
                <button class="flipcardbutton" align="center"> <?php echo $this->item->jcfields[67]->rawvalue; ?>
                </button>

            </div></div>






    </div>


</article>
</body>

