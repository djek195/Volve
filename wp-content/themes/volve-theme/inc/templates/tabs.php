<?php


/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */

//foreach ($fields['crb_slider'] as $field) {
//    echo $field['title'];
//}

?>

<div class="tabs">
<!--    <ul class="tabs__list">-->
<!--        <li class="tabs__tab active" data-tab="0">Finance Department</li>-->
<!--        <li class="tabs__tab" data-tab="1">Budget Owners</li>-->
<!--        <li class="tabs__tab" data-tab="2">Volve Card Users</li>-->
<!--    </ul>-->
    <div class="tabs-container">
        <ul class="tabs tabs__list">
            <li data-tab="0" class="tabs__tab active">Profile</li>
            <li data-tab="1" class="tabs__tab">Experience</li>
            <li data-tab="2" class="tabs__tab">Education</li>
        </ul>
    </div>
    <div class="tabs__content active" data-tab="0">
        <div>
            <div class="tab__content--image">
                <img src="https://source.unsplash.com/1920x1280/?ukraine" alt="Swiper">
            </div>
            <div class="tabs__content--text">
                <div class="tabs__content--text-step">
                    <h3>Dynamic reporting</h3>
                    <p>Real-time updates and changes are automatically synced.No more manual reporting and waiting on
                        expense documentation. </p>
                </div>
                <div class="tabs__content--text-step">
                    <h3>Streamlined finance processing</h3>
                    <p>Instant allocation of accounting codes to every spend.
                        Visible authorisation and audit trail for each submission.</p>
                </div>
                <div class="tabs__content--text-step">
                    <h3>Streamlined finance processing </h3>
                    <p>Effortless finance reconciliations and faster month-end closings. </p>
                </div>
                <button class="tabs__content--button">Try free for 30 days</button>
            </div>
        </div>
    </div>
    <div class="tabs__content" data-tab="1">
        <div>
            <div class="tab__content--image">
                <img src="https://source.unsplash.com/1920x1280/?marvel" alt="Swiper">
            </div>
            <div class="tabs__content--text">
                <div class="tabs__content--text-step">
                    <h3>Dynamic reporting</h3>
                    <p>Real-time updates and changes are automatically synced.No more manual reporting and waiting on
                        expense documentation. </p>
                </div>
                <div class="tabs__content--text-step">
                    <h3>Streamlined finance processing</h3>
                    <p>Instant allocation of accounting codes to every spend.
                        Visible authorisation and audit trail for each submission.</p>
                </div>
                <div class="tabs__content--text-step">
                    <h3>Streamlined finance processing </h3>
                    <p>Effortless finance reconciliations and faster month-end closings. </p>
                </div>
                <button class="tabs__content--button">Try free for 30 days</button>
            </div>
        </div>
    </div>
    <div class="tabs__content" data-tab="2">
        <div>
            <div class="tab__content--image">
                <img src="https://source.unsplash.com/1920x1280/?czech" alt="Swiper">
            </div>
            <div class="tabs__content--text">
                <div class="tabs__content--text-step">
                    <h3>Dynamic reporting</h3>
                    <p>Real-time updates and changes are automatically synced.No more manual reporting and waiting on
                        expense documentation. </p>
                </div>
                <div class="tabs__content--text-step">
                    <h3>Streamlined finance processing</h3>
                    <p>Instant allocation of accounting codes to every spend.
                        Visible authorisation and audit trail for each submission.</p>
                </div>
                <div class="tabs__content--text-step">
                    <h3>Streamlined finance processing </h3>
                    <p>Effortless finance reconciliations and faster month-end closings. </p>
                </div>
                <button class="tabs__content--button">Try free for 30 days</button>
            </div>
        </div>
    </div>
</div>
