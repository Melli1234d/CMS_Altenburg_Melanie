
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
<div>
    <section class="row">
        <div class="col-md-12">
            <div class="title-wrap">



            </div>
            <div class="wrap">
                <div class="elements">
                    <div class="pic">
                        <a href="">
                            <img class="picinfogscround" alt="" src="<?php echo $this->item->jcfields[7]->rawvalue; ?>" >
                        </a>
                    </div>
                    <div >
                    <h2 class="element-info"><?php echo $this->item->jcfields[30]->rawvalue; ?></h2>
                    </div>
                    <div class="info">
                    <p class="sdCustomSliderHeadig"> <?php echo $this->item->jcfields[34]->rawvalue; ?></p>
                        <button class="SdClientName"><?php echo $this->item->jcfields[39]->rawvalue; ?></button>
                    </div>
                </div>






                <div class="elements">
                    <div class="pic" style="">
                        <a href="">
                            <img class="picinfogscround" alt="" src="<?php echo $this->item->jcfields[8]->rawvalue; ?>">
                        </a>
                    </div>
                    <div >
                    <h2 class="element-info"><?php echo $this->item->jcfields[28]->rawvalue; ?></h2>
                    </div>
                    <div class="info">
                    <p class="sdCustomSliderHeadig"><?php echo $this->item->jcfields[32]->rawvalue; ?></p>
                        <button class="SdClientName"><?php echo $this->item->jcfields[40]->rawvalue; ?></button>
                    </div>
                </div>







                <div class="elements">
                    <div class="pic" style="">
                        <a href="">
                            <img class="picinfogscround" alt="" src="<?php echo $this->item->jcfields[9]->rawvalue; ?>">
                        </a>
                    </div>
                    <div >

                    <h2 class="element-info" ><?php echo $this->item->jcfields[29]->rawvalue; ?></h2>
                    </div>
                    <div class="info">
                    <p class="sdCustomSliderHeadig"><?php echo $this->item->jcfields[33]->rawvalue; ?></p>
                        <button class="SdClientName"><?php echo $this->item->jcfields[41]->rawvalue; ?></button>
                    </div>
                </div>








            </div>
        </div>
    </section>
</div>
</body>



















