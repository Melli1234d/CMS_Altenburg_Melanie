
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
<section class="dreikategoriecont-row" >
<article class="dreikategoriecont">

    <div class="containergscinfo">
        <img class="dreikategoriebild" src="<?php echo $this->item->jcfields[68]->rawvalue; ?>" alt="Bild 1" >
        <div class="contentgscinfo">
            <h2 class="dreikategorieh2"><?php echo $this->item->jcfields[64]->rawvalue; ?></h2>
        </div>
        <div class="overlaydreikategorien">
            <div class="textdreikategorien">
                <h2 class="overlayh3dreikategorie"><?php echo $this->item->jcfields[75]->rawvalue; ?></h2>
                <p class="dreikategorie_p"><?php echo $this->item->jcfields[72]->rawvalue; ?></p>

                <div class="dreikategorielink">
                    <?php echo $this->item->jcfields[73]->rawvalue; ?>
                </div>
            </div>
        </div>

    </div>


</article>

</section>
</body>

