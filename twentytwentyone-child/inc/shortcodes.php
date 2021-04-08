<?php

function create_time_banner() {

    $data = [
        'banner_module_title' => 'Color changing title',
        'buttons'             => [
            [
                'button_text'  => 'Pink',
                'button_color' => '#f193de'
            ],
            [
                'button_text'  => 'Green',
                'button_color' => '#93f1aa'
            ],
            [
                'button_text'  => 'Red',
                'button_color' => '#cb1a1a'
            ],
            [
                'button_text'  => 'Yellow',
                'button_color' => '#eade5d'
            ],
            [
                'button_text'  => 'Blue',
                'button_color' => '#5d95ea'
            ],
        ]
    ];

    ob_start();
    ?>

    <section class="banner">
        <div class="custom-container">

            <?php if ( isset( $data['banner_module_title'] ) && $data['banner_module_title'] ): ?>
                <h2 class="banner__title"> <?php echo $data['banner_module_title']; ?></h2>
            <?php endif; ?>

            <div class="banner__timer">
                <time class="countdown"><?php echo _e( 'Countdown', 'my-child-theme' ); ?></time>
            </div>

            <?php if ( isset( $data['buttons'] ) && $data['buttons'] ): ?>
                <div class="banner-buttons">
                    <?php foreach ( $data['buttons'] as $button ): ?>

                        <button class="banner-buttons__item"
                                data-color="<?php echo $button['button_color'] ? : '#fff'; ?>"
                                style="background: <?php echo $button['button_color'] ? : '#fff'; ?>">
                            <?php echo $button['button_text']; ?>
                        </button>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <?php
    $content = ob_get_clean();
    return $content;
}

add_shortcode( 'show_time_banner', 'create_time_banner' );

?>
