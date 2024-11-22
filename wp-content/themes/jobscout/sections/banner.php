<?php
/**
 * Banner Section
 * 
 * @package JobScout
 */

$ed_banner         = get_theme_mod( 'ed_banner_section', true );
$banner_title      = get_theme_mod( 'banner_title', __( 'MỤC TIÊU CAO HƠN', 'jobscout' ) );
$banner_subtitle   = get_theme_mod( 'banner_subtitle', __( 'Tất nhiên, nếu bạn không nỗ lực, ước mơ của bạn sẽ chẳng là gì cả mà chỉ đơn thuần là những điều ảo tưởng. Nỗ lực, làm việc chăm chỉ, đó chính là chiếc cầu nối ước mơ của chúng ta với hiện thực. Người luôn luôn nỗ lực là những người luôn tràn đầy hy vọng.', 'jobscout' ) );
$find_a_job_link   = get_option( 'job_manager_jobs_page_id', 0 );
        
if( $ed_banner && has_custom_header() ){ ?>
    <div id="find-custom">
        <div id="banner-section" class="site-banner<?php if( has_header_video() ) echo esc_attr( ' video-banner' ); ?>">
            <div class="item">
                <?php the_custom_header_markup(); ?>
                <div class="banner-caption">
                    <div class="container">
                        <div class="caption-inner">
                            <?php 
                                if( $banner_title ) echo '<h2 class="title">' . esc_html( $banner_title ) . '</h2>';
                                if( $banner_subtitle ) echo '<div class="description">' . wpautop( wp_kses_post( $banner_subtitle ) ) . '</div>';
                            ?>
                            <div class="form-wrap">
                                <div class="search-filter-wrap">
                                <?php 
                                    if ( jobscout_is_wp_job_manager_activated() ) { 
                                        if( $find_a_job_link ){
                                            get_template_part('template-parts/header','form');
                                        }else{
                                            get_template_part('template-parts/header','form');
                                        }
                                    }else{
                                        get_template_part('template-parts/header','form');
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}




