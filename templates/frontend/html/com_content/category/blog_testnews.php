
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

<div class="news_all">
    <div class="news_row" >
        <div class="erklärung_all_news" style="flex-direction: row">
        <div class="links_bild">
            <img class="img_round" alt="" src="<?php echo $this->item->jcfields[68]->rawvalue; ?>" style="margin-right: 4rem">
        </div>
            <div class="erklärung_news" style="flex-direction: column">

                <h2 class="h2_text_grey"> <?php echo $this->item->jcfields[64]->rawvalue; ?></h2>
                <p class="datumnrews" > <?php echo $this->item->jcfields[76]->rawvalue; ?> </p>
                <p class="p_text_grey" "><?php echo $this->item->jcfields[65]->rawvalue; ?></p>
                <button class="button_greyraduis"><?php echo $this->item->jcfields[67]->rawvalue; ?></button></div>
            </div>
        </div>
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
</body>

