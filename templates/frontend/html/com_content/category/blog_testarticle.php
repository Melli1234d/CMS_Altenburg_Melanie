
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






<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet">

</head>

<body>




            <div class="wrap">
                <div class="elements" >
                            <img class="img_round" alt="" src="<?php echo $this->item->jcfields[68]->rawvalue; ?>"  style="width: 20rem" >


                        <h2 class="h2_text_grey" style=" width: 20rem; text-align: center;"><?php echo $this->item->jcfields[64]->rawvalue; ?></h2>

                    <div class="info">
                        <p class="p_text_grey" style="width: 20rem"> <?php echo $this->item->jcfields[65]->rawvalue; ?></p>
                        <button class="button_greyraduis"  style="width: 20rem"><?php echo $this->item->jcfields[67]->rawvalue; ?></button>
                    </div>
                </div>



        </div>


</body>






















