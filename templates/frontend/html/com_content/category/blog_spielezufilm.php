
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



<!--
<article class="image_text" style=" background-image:url(<?php echo $this->item->jcfields[5]->rawvalue; ?>)" >
Hi ich bin das Standardartikel
</article>


<article class="image_text">
    <div class="spieletypbutton__container">
        <div class="spieletypbutton__containertext" >
            <h2 id="spieletyp"> <?php echo $this->item->jcfields[21]->rawvalue; ?> </h2>
            <h3 id="subheadline"><?php echo $this->item->jcfields[23]->rawvalue; ?></h3>
            <p id="Spieltyptext">
                <?php echo $this->item->jcfields[24]->rawvalue; ?>
            </p>
            <div class="spieletypbutton__menu-item" type="button" >
                <div class="spieletypbutton__menu-text" align="center"> <?php echo $this->item->jcfields[22]->rawvalue; ?>
                </div>
            </div>
        </div>
        <div class="spieletypbutton__containerbild" >
            <div class="spieltypbild">
                <img class="spieleuebersichtbild" src="<?php echo $this->item->jcfields[26]->rawvalue; ?>" width="300" height="150" alt="Spiele">
            </div>
        </div>
</article>
    -->


<div class="zwischenabschnitt" style="height: 60vh;">
  <div class="zwischenabschnitt_headline_all">

    <h2 class="zwischenabschnit_headline"><?php echo $this->item->jcfields[21]->rawvalue; ?></h2>
       <p class="zwischenabschnittp">
           <?php echo $this->item->jcfields[24]->rawvalue; ?>
       </p>


    <a href="#" class="zwischenabschnittbutton" ><?php echo $this->item->jcfields[22]->rawvalue; ?> </a>
  </div>
  <!-- in mobile remove the clippath -->
  <div class="zwischenabschnittbild clipped"  style="background-image: url(<?php echo $this->item->jcfields[26]->rawvalue; ?>);" >

  </div>
</div>


























































          </script>


















