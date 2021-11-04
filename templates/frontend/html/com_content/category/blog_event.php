
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


<article class="event">
<div class="event-block"
    <div class="container-event">

        <div class="card-media">
            <!-- media container
            <div class="card-media-object-container">
                <div class="card-media-object" style="background-image: url(images/Startseite/sliderbild1.jpeg);"></div>
                <span class="card-media-object-tag subtle">COMING SOON</span>

            </div>
            <!-- body container
            <div class="card-media-body">
                <div class="card-media-body-top">
                    <span class="subtle">Samstag, APR 09, 18:00 Uhr</span>
                    <div class="card-media-body-top-icons u-float-right">
                        <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
                        </svg>
                        <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </div>
                </div>
                <span class="card-media-body-heading">nvidunt ut labore et dolore magna aliquyam erat, sed nvidunt ut </span>
                <div class="card-media-body-supporting-bottom">
                    <span class="card-media-body-supporting-bottom-text subtle">Game Science Center</span>
                    <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free</span>
                </div>
                <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                    <span class="card-media-body-supporting-bottom-text subtle">#Music #Kunst #Spiel</span>
                    <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
                </div>
            </div>
        </div>

        <div class="card-media">
            <!-- media container
            <div class="card-media-object-container">
                <div class="card-media-object" style="background-image: url(images/Startseite/sliderbild1.jpeg);"></div>
                <span class="card-media-object-tag subtle">COMING SOON</span>
            </div>
            <!-- body container
            <div class="card-media-body">
                <div class="card-media-body-top">
                    <span class="subtle">Freitag, AUG 25, 18:00 Uhr</span>
                    <div class="card-media-body-top-icons u-float-right">
                        <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
                        </svg>
                        <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </div>
                </div>
                <span class="card-media-body-heading">DAY // NIGHT - Spielemarathon</span>
                <div class="card-media-body-supporting-bottom">
                    <span class="card-media-body-supporting-bottom-text subtle">Game Science Center</span>
                    <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free</span>
                </div>
                <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                    <span class="card-media-body-supporting-bottom-text subtle">#Music #Performance #Spiel </span>
                    <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
                </div>
            </div>
        </div>

    </div>

</article>
-->








<div class="eventcont">
<div class="cardsevent">


    <div class="cards_itemevent">
        <div class="cardevent">
            <div class="card_imageevent"><img class="imgevent" src="<?php echo $this->item->jcfields[7]->rawvalue; ?>"></div>
            <div class="card_contentevent">
                <h2 class="card_titleevent"><?php echo $this->item->jcfields[27]->rawvalue; ?></h2>
                <p class="card_textevent"><?php echo $this->item->jcfields[31]->rawvalue; ?></p>
                <p class="datumevent" > <?php echo $this->item->jcfields[56]->rawvalue; ?> </p>
                <button class="btnevent card_btnevent"><?php echo $this->item->jcfields[39]->rawvalue; ?></button>
            </div>
        </div>
    </div>



    <div class="cards_itemevent">
        <div class="cardevent">
            <div class="card_imageevent"><img class="imgevent" src="<?php echo $this->item->jcfields[8]->rawvalue; ?>"></div>
            <div class="card_contentevent">
                <h2 class="card_titleevent"><?php echo $this->item->jcfields[28]->rawvalue; ?></h2>
                <p class="card_textevent"><?php echo $this->item->jcfields[32]->rawvalue; ?></p>
                <p class="datumevent" > <?php echo $this->item->jcfields[57]->rawvalue; ?> </p>
                <button class="btnevent card_btnevent"><?php echo $this->item->jcfields[40]->rawvalue; ?></button>
            </div>
        </div>
    </div>



    <div class="cards_itemevent">
        <div class="cardevent">
            <div class="card_imageevent"><img class="imgevent" src="<?php echo $this->item->jcfields[9]->rawvalue; ?>"></div>
            <div class="card_contentevent">
                <h2 class="card_titleevent"><?php echo $this->item->jcfields[29]->rawvalue; ?></h2>
                <p class="card_textevent"><?php echo $this->item->jcfields[33]->rawvalue; ?></p>
                <p class="datumevent" > <?php echo $this->item->jcfields[58]->rawvalue; ?> </p>
                <button class="btnevent card_btnevent"><?php echo $this->item->jcfields[41]->rawvalue; ?></button>
            </div>
        </div>
    </div>



</div>
</div>













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
