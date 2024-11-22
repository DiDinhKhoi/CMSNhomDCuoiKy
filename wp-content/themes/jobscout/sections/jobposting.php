<?php
/**
 * Job Posting Section
 * 
 * @package JobScout
 */

$job_title         = get_theme_mod( 'job_posting_section_title', __( 'Job Posting', 'jobscout' ) );
$ed_jobposting     = get_theme_mod( 'ed_jobposting', true );
$count_posts       = wp_count_posts('job_listing'); 

if ( $ed_jobposting && jobscout_is_wp_job_manager_activated() && $job_title  ) {
    ?>
<div id="content" class="site-content">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article class="page type-page status-publish hentry">
                    <?php 
                        if( $job_title ) echo '<header class="entry-header">
                            <h2 class="entry-title" style="text-align: center;letter-spacing: 2px;">TOP JOBS</h2>
                        </header>'; 
                        if( jobscout_is_wp_job_manager_activated() && $count_posts->publish != 0 ){ ?>
                            <div class="entry-content" itemprop="text">
                                <?php echo do_shortcode('[jobs show_filters="false" post_status="publish" per_page="6"]'); ?>
                            </div>
                        <?php } 
                    ?>
                </article>
            </main>
        </div>
    </div>
</div>
    <?php
}