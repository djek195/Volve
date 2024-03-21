<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>


<section class="experience__wrapper">
    <div class="experience__title">
        <p>Get more done in less time</p>
        <h2>Experience Volve corporate 2-in-1 solution</h2>
    </div>
    <div class="swiper experience__swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide experience__swiper--slide">
                <div class="experience__swiper--slide-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-phone.png" alt="Swiper">
                </div>
                <div class="experience__swiper--slide-description">
                    <h3>Responsible Spending</h3>
                    <p>Employees are in control of authorized budgets</p>
                    <button>Explore Features</button>
                </div>
            </div>
            <div class="swiper-slide experience__swiper--slide">
                <div class="experience__swiper--slide-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide2.png" alt="Swiper">
                </div>
                <div class="experience__swiper--slide-description">
                    <h3>Everywhere, Anywhere</h3>
                    <p>Approve expenses and manage budgets on-the-go</p>
                    <button>Explore Features</button>
                </div>
            </div>
            <div class="swiper-slide experience__swiper--slide">
                <div class="experience__swiper--slide-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide3.png" alt="Swiper">
                </div>
                <div class="experience__swiper--slide-description">
                    <h3>Connected Overview</h3>
                    <p>Approve expenses and manage budgets on-the-go</p>
                    <button>Explore Features</button>
                </div>
            </div>
            <div class="swiper-slide experience__swiper--slide">
                <div class="experience__swiper--slide-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide4.png" alt="Swiper">
                </div>
                <div class="experience__swiper--slide-description">
                    <h3>Visibility and Control</h3>
                    <p>Complete and accurate view of company-wide spending in real-time</p>
                    <button>Explore Features</button>
                </div>
            </div>
            <div class="swiper-slide experience__swiper--slide">
                <div class="experience__swiper--slide-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-phone.png" alt="Swiper">
                </div>
                <div class="experience__swiper--slide-description">
                    <h3>Fast and Painless</h3>
                    <p>Finance reconciliations become an effortless exercise</p>
                    <button>Explore Features</button>
                </div>
            </div>
        </div>
        <div class="experience__swiper--buttons">
            <img class="experience__swiper--buttons-prev"
                 src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-prev.png"
                 alt="Previous"
            >
            <img class="experience__swiper--buttons-next"
                 src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-next.svg" alt="Next"
            >
        </div>
</section>