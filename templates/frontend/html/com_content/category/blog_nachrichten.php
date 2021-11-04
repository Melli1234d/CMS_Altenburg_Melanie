
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






<div class="wrapper-slider">
    <div class="items">



        <div class="item item1">
            <h2 id="h2new"> <?php echo $this->item->jcfields[27]->rawvalue; ?></h2>
            <div class="newsorderhead">
                <p id="h3new"><?php echo $this->item->jcfields[50]->rawvalue; ?></p>
                <p class="datumnrews" > <?php echo $this->item->jcfields[56]->rawvalue; ?> </p>
            </div>
            <p class="textpnews"><?php echo $this->item->jcfields[31]->rawvalue; ?></p>
            <button class="buttonnews"><?php echo $this->item->jcfields[39]->rawvalue; ?></button></div>










        <div class="item item2">
            <h2 id="h2new"> <?php echo $this->item->jcfields[28]->rawvalue; ?></h2>
            <div class="newsorderhead">
                <p id="h3new"> <?php echo $this->item->jcfields[51]->rawvalue; ?></p>
                <p class="datumnrews" > <?php echo $this->item->jcfields[57]->rawvalue; ?> </p>
            </div>
            <p class="textpnews"><?php echo $this->item->jcfields[32]->rawvalue; ?></p>
            <button class="buttonnews"><?php echo $this->item->jcfields[40]->rawvalue; ?></button></div>











        <div class="item item3">
            <h2 id="h2new"><?php echo $this->item->jcfields[29]->rawvalue; ?></h2>
            <div class="newsorderhead">
                <p id="h3new"> <?php echo $this->item->jcfields[52]->rawvalue; ?></p>
                <p class="datumnrews" > <?php echo $this->item->jcfields[58]->rawvalue; ?> </p>
            </div>
            <p class="textpnews"><?php echo $this->item->jcfields[33]->rawvalue; ?></p>
            <button class="buttonnews"><?php echo $this->item->jcfields[41]->rawvalue; ?></button>
        </div>


        <div class="item item4">
            <h2 id="h2new"> <?php echo $this->item->jcfields[30]->rawvalue; ?></h2>
            <div class="newsorderhead">
            <p id="h3new"><?php echo $this->item->jcfields[53]->rawvalue; ?></p>
            <p class="datumnrews" > <?php echo $this->item->jcfields[59]->rawvalue; ?> </p>
            </div>
            <p class="textpnews"><?php echo $this->item->jcfields[34]->rawvalue; ?></p>
            <button class="buttonnews"><?php echo $this->item->jcfields[42]->rawvalue; ?></button>
        </div>


        <div class="item item5">
            <h2 id="h2new"> <?php echo $this->item->jcfields[44]->rawvalue; ?></h2>
            <div class="newsorderhead">
                <p id="h3new"> <?php echo $this->item->jcfields[54]->rawvalue; ?></p>
                <p class="datumnrews" > <?php echo $this->item->jcfields[60]->rawvalue; ?> </p>
            </div>
            <p class="textpnews"><?php echo $this->item->jcfields[48]->rawvalue; ?></p>
            <button class="buttonnews"><?php echo $this->item->jcfields[46]->rawvalue; ?></button></div>


        <div class="item item6">
            <h2 id="h2new"> <?php echo $this->item->jcfields[45]->rawvalue; ?></h2>
            <div class="newsorderhead">
                <p id="h3new"> <?php echo $this->item->jcfields[55]->rawvalue; ?></p>
                <p class="datumnrews" > <?php echo $this->item->jcfields[61]->rawvalue; ?> </p>
            </div>
            <p class="textpnews"><?php echo $this->item->jcfields[49]->rawvalue; ?></p>
            <button class="buttonnews"><?php echo $this->item->jcfields[47]->rawvalue; ?></button></div>



    </div>
</div>

<script>
    /*global $, console*/
    var slider = document.querySelector('.items'),
        arrows = document.querySelectorAll('.wrapper-slider .arrow-left, .wrapper-slider .arrow-right'),
        isDown = false,
        startX,
        scrollLeft;

    slider.scrollLeft = 1970;

    slider.onmousedown = function (e) {
        'use strict';
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    };

    slider.onmouseup = function () {
        'use strict';
        isDown = false;
        slider.classList.remove('active');
    };

    slider.onmouseleave = function () {
        'use strict';
        isDown = false;
        slider.classList.remove('active');
    };

    slider.onmousemove = function (e) {
        'use strict';
        if (!isDown) { return; }
        e.preventDefault();
        var x = e.pageX - slider.offsetLeft,
            walk = x - startX;
        slider.scrollLeft = scrollLeft - walk;
    };

    function controlsSlider(num) {
        'use strict';
        var smooth = setInterval(function () {
            slider.scrollLeft += num;
        }, 10);
        setTimeout(function () {
            clearInterval(smooth);
        }, 210);
    }
    arrows[0].onclick = function () {
        'use strict';
        controlsSlider(-10);
    };

    arrows[1].onclick = function () {
        'use strict';
        controlsSlider(10);
    };

    window.onkeydown = function (e) {
        'use strict';
        var key = e.keyCode;
        if (key === 39) {
            controlsSlider(10);
        }
        if (key === 37) {
            controlsSlider(-10);
        }
    };
</script>


<!--
<div class="wrapper-slider">
    <div class="arrow-left"></div>
    <div class="arrow-right"></div>
    <div class="items">


<div class="containergscinfo">
    <img src="images/Startseite/sliderbild1.jpeg" alt="Bild 1" style="width:100% height:100%;">
    <div class="contentgscinfo">
        <h3>Heading</h3>
    </div>
    <div class="overlaydreikategorien">
        <div class="textdreikategorien">
            <h3 class="overlayh3dreikategorie">Heading 2</h3>
            <h2 class="overlayh3dreikategorie">Heading 3</h2>
            <p class="dreikategorie_p">Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>

            <div class="dreikategorielink">
                Erfahre mehr >
            </div>
        </div>
    </div>

</div>








<div class="containergscinfo">
    <img src="images/Startseite/sliderbild1.jpeg" alt="Bild 1" style="width:100% height:100%;">
    <div class="contentgscinfo">
        <h3>Heading</h3>
    </div>
    <div class="overlaydreikategorien">
        <div class="textdreikategorien">
            <h3 class="overlayh3dreikategorie">Heading 2</h3>
            <h2 class="overlayh3dreikategorie">Heading 3</h2>
            <p class="dreikategorie_p">Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>

            <div class="dreikategorielink">
                Erfahre mehr >
            </div>
        </div>
    </div>

</div>






<div class="containergscinfo">
    <img src="images/Startseite/sliderbild1.jpeg" alt="Bild 1" style="width:100% height:100%;">
    <div class="contentgscinfo">
        <h3>Heading</h3>
    </div>
    <div class="overlaydreikategorien">
        <div class="textdreikategorien">
            <h3 class="overlayh3dreikategorie">Heading 2</h3>
            <h2 class="overlayh3dreikategorie">Heading 3</h2>
            <p class="dreikategorie_p">Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>

            <div class="dreikategorielink">
                Erfahre mehr >
            </div>
        </div>
    </div>

</div>


<div class="containergscinfo">
    <img src="images/Startseite/sliderbild1.jpeg" alt="Bild 1" style="width:100% height:100%;">
    <div class="contentgscinfo">
        <h3>Heading</h3>
    </div>
    <div class="overlaydreikategorien">
        <div class="textdreikategorien">
            <h3 class="overlayh3dreikategorie">Heading 2</h3>
            <h2 class="overlayh3dreikategorie">Heading 3</h2>
            <p class="dreikategorie_p">Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>

            <div class="dreikategorielink">
                Erfahre mehr >
            </div>
        </div>
    </div>

</div>



</div>



</div>
-->







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
