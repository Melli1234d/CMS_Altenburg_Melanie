
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
<div class="slider-container">
    <div class="left-slide">
        <div style="background-color: #576b89">
            <h2 class="h2_text_white"><?php echo $this->item->jcfields[64]->rawvalue; ?></h2>
            <p class="p_text_white"><?php echo $this->item->jcfields[65]->rawvalue; ?></p>
            <button class="button_whiteraduis"> <?php echo $this->item->jcfields[67]->rawvalue; ?> </button>
            <p class="p_GSC_watermark"><?php echo $this->item->jcfields[74]->rawvalue; ?></p>
        </div>
        <div style="background-color: rgb(146,146,147)">
            <h2 class="h2_text_white"><?php echo $this->item->jcfields[85]->rawvalue; ?></h2>
            <p class="p_text_white"><?php echo $this->item->jcfields[88]->rawvalue; ?></p>
            <button class="button_whiteraduis"> <?php echo $this->item->jcfields[92]->rawvalue; ?> </button>
            <p class="p_GSC_watermark"><?php echo $this->item->jcfields[74]->rawvalue; ?></p>
        </div>
        <div style="background-color: rgb(68,106,70)">
            <h2 class="h2_text_white"><?php echo $this->item->jcfields[86]->rawvalue; ?></h2>
            <p class="p_text_white"><?php echo $this->item->jcfields[89]->rawvalue; ?></p>
            <button class="button_whiteraduis"> <?php echo $this->item->jcfields[93]->rawvalue; ?> </button>
            <p class="p_GSC_watermark"><?php echo $this->item->jcfields[74]->rawvalue; ?></p>
        </div>
        <div style="background-color: rgb(114,3,3)">
            <h2 class="h2_text_white"><?php echo $this->item->jcfields[87]->rawvalue; ?> </h2>
            <p class="p_text_white"><?php echo $this->item->jcfields[90]->rawvalue; ?></p>
            <button class="button_whiteraduis"> <?php echo $this->item->jcfields[94]->rawvalue; ?> </button>
            <p class="p_GSC_watermark"><?php echo $this->item->jcfields[74]->rawvalue; ?></p>
        </div>
    </div>
    <div class="right-slide">
        <div style="background-image: url('<?php echo $this->item->jcfields[68]->rawvalue; ?>');"></div>
        <div style="background-image: url('<?php echo $this->item->jcfields[95]->rawvalue; ?>');"></div>
        <div style="background-image: url('<?php echo $this->item->jcfields[96]->rawvalue; ?>');"></div>
        <div style="background-image: url('<?php echo $this->item->jcfields[97]->rawvalue; ?>');"></div>
    </div>
    <div class="action-buttons">
        <button class="down-button">
            <i class="fas fa-arrow-down"></i>
        </button>
        <button class="up-button">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
</div>






<script>
    const sliderContainer = document.querySelector('.slider-container')
    const slideRight = document.querySelector('.right-slide')
    const slideLeft = document.querySelector('.left-slide')
    const upButton = document.querySelector('.up-button')
    const downButton = document.querySelector('.down-button')
    const slidesLength = slideRight.querySelectorAll('div').length

    let activeSlideIndex = 0

    slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`

    upButton.addEventListener('click', () => changeSlide('up'))
    downButton.addEventListener('click', () => changeSlide('down'))

    const changeSlide = (direction) => {
        const sliderHeight = sliderContainer.clientHeight
        if(direction === 'up') {
            activeSlideIndex++
            if(activeSlideIndex > slidesLength - 1) {
                activeSlideIndex = 0
            }
        } else if(direction === 'down') {
            activeSlideIndex--
            if(activeSlideIndex < 0) {
                activeSlideIndex = slidesLength - 1
            }
        }

        slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`
        slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`
    }
</script>
</body>

