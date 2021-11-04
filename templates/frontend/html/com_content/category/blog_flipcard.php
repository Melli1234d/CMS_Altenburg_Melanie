
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
-->

<article class="flipcard">
<div class="FlipCardRow">

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img class="flipcardimage" src="<?php echo $this->item->jcfields[7]->rawvalue; ?>" alt="Killer" >

            </div>
            <div class="flip-card-back">
                <h2 id="flipcardheadlineback"><?php echo $this->item->jcfields[29]->rawvalue; ?></h2>
                <p id="flipcardpback"><?php echo $this->item->jcfields[31]->rawvalue; ?></p>

            </div>
        </div>
    </div>


    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img class="flipcardimage" src="<?php echo $this->item->jcfields[8]->rawvalue; ?>" alt="Archiver" >

            </div>
            <div class="flip-card-back">
                <h2 id="flipcardheadlineback"><?php echo $this->item->jcfields[30]->rawvalue; ?></h2>
                <p id="flipcardpback"><?php echo $this->item->jcfields[32]->rawvalue; ?></p>

            </div>
        </div>
    </div>

    <div class="erklärung">
        <h2 id="flipcardheadline"><?php echo $this->item->jcfields[27]->rawvalue; ?> </h2>
        <div id="flipcardp">
            <p id="flipcardp"> <?php echo $this->item->jcfields[48]->rawvalue; ?> </p>
                <button class="flipcardbutton" align="center"> <?php echo $this->item->jcfields[39]->rawvalue; ?>
                </button>

        </div></div>






</div>






    <div class="FlipCardRow">

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img class="flipcardimage" src="<?php echo $this->item->jcfields[9]->rawvalue; ?>" alt="Killer" >

                </div>
                <div class="flip-card-back">
                    <h2 id="flipcardheadlineback"><?php echo $this->item->jcfields[44]->rawvalue; ?></h2>
                    <p id="flipcardpback"><?php echo $this->item->jcfields[33]->rawvalue; ?>

                    </p>

                </div>
            </div>
        </div>


        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img class="flipcardimage" src="<?php echo $this->item->jcfields[10]->rawvalue; ?>" alt="Archiver" >

                </div>
                <div class="flip-card-back">
                    <h2 id="flipcardheadlineback"><?php echo $this->item->jcfields[45]->rawvalue; ?></h2>
                    <p id="flipcardpback"><?php echo $this->item->jcfields[34]->rawvalue; ?></p>

                </div>
            </div>
        </div>

        <div class="erklärung">
            <h2 id="flipcardheadline"> <?php echo $this->item->jcfields[28]->rawvalue; ?> </h2>
            <div id="flipcardp">
                <p id="flipcardp"> <?php echo $this->item->jcfields[49]->rawvalue; ?> </p>

                    <button class="flipcardbutton" align="center"> <?php echo $this->item->jcfields[40]->rawvalue; ?>
                    </button>



            </div></div>





    </div>


</article>
















<!--
<?php if ($isUnpublished) : ?>
<div class="system-unpublished">
    <?php endif; ?>

    <?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title', $this->item); ?>

    <?php if ($canEdit || $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
        <?php echo JLayoutHelper::render('joomla.content.icons', array('params' => $params, 'item' => $this->item, 'print' => false)); ?>
    <?php endif; ?>

    <?php // Todo Not that elegant would be nice to group the params ?>
    <?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
    || $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author') || $assocParam); ?>

    <?php if ($useDefList && ($info == 0 || $info == 2)) : ?>
        <?php // Todo: for Joomla4 joomla.content.info_block.block can be changed to joomla.content.info_block ?>
        <?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'above')); ?>
    <?php endif; ?>
    <?php if ($info == 0 && $params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
        <?php echo JLayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
    <?php endif; ?>

    <?php echo JLayoutHelper::render('joomla.content.intro_image', $this->item); ?>

    <?php if (!$params->get('show_intro')) : ?>
        <?php // Content is generated by content plugin event "onContentAfterTitle" ?>
        <?php echo $this->item->event->afterDisplayTitle; ?>
    <?php endif; ?>

    <?php // Content is generated by content plugin event "onContentBeforeDisplay" ?>
    <?php echo $this->item->event->beforeDisplayContent; ?>

    <?php echo $this->item->introtext; ?>

    <?php if ($info == 1 || $info == 2) : ?>
        <?php if ($useDefList) : ?>
            <?php // Todo: for Joomla4 joomla.content.info_block.block can be changed to joomla.content.info_block ?>
            <?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'below')); ?>
        <?php endif; ?>
        <?php if ($params->get('show_tags', 1) && !empty($this->item->tags->itemTags)) : ?>
            <?php echo JLayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($params->get('show_readmore') && $this->item->readmore) :
    if ($params->get('access-view')) :
        $link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
    else :
        $menu = JFactory::getApplication()->getMenu();
        $active = $menu->getActive();
        $itemId = $active->id;
        $link = new JUri(JRoute::_('index.php?option=com_users&view=login&Itemid=' . $itemId, false));
        $link->setVar('return', base64_encode(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)));
    endif; ?>

        <?php echo JLayoutHelper::render('joomla.content.readmore', array('item' => $this->item, 'params' => $params, 'link' => $link)); ?>

    <?php endif; ?>

    <?php if ($isUnpublished) : ?>
</div>
<?php endif; ?>

<?php // Content is generated by content plugin event "onContentAfterDisplay" ?>
<?php echo $this->item->event->afterDisplayContent; ?>
-->
