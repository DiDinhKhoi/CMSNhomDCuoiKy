<?php

/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.27.0
 */


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

global $post;
$job_salary   = get_post_meta(get_the_ID(), '_job_salary', true);
$job_featured = get_post_meta(get_the_ID(), '_featured', true);
$company_name = get_post_meta(get_the_ID(), '_company_name', true);


?>
<article <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr($post->geolocation_lat); ?>" data-latitude="<?php echo esc_attr($post->geolocation_long); ?>">

    <figure class="company-logo ">
        <?php the_company_logo('thumbnail'); ?>
    </figure>

    <div class="job-title-wrap titles">
        <h2 class="entry-title">
            <a href="<?php the_job_permalink(); ?>"><?php wpjm_the_job_title(); ?></a>
        </h2>


        <div class="job-meta">
            <?php if ($post->post_date) { ?>
                <div class="job-date">
                    <?php echo get_the_date(); ?>
                </div>
            <?php } ?>
        </div>


        <div class="job-info aaa">
            <?php
            if (get_option('job_manager_enable_types')) {
                $types = wpjm_get_the_job_types();
                if (!empty($types)) : foreach ($types as $jobtype) : ?>
                        <li class="job-type <?php echo esc_attr(sanitize_title($jobtype->slug)); ?>"><?php echo esc_html($jobtype->name); ?></li>
            <?php endforeach;
                endif;
            }
            do_action('job_listing_meta_end');
            ?>
            <div class="company-name">
                <?php the_company_name(); ?>
            </div>
            <div class="job-location">
                <?php echo get_the_job_location(); ?>
            </div>
        </div>


    </div>
    <div class="job-content noidung">
    <?php
    // Lấy nội dung và tách thành các đoạn văn
    $content = get_the_content();
    $paragraphs = preg_split('/\n\s*\n/', $content, 4, PREG_SPLIT_NO_EMPTY);
    $paragraphs = array_filter($paragraphs, function ($paragraph) {
        return trim($paragraph) !== ''; // Loại bỏ đoạn văn trống
    });

    // Hiển thị tối đa ba đoạn văn đầu tiên
    for ($i = 0; $i < min(3, count($paragraphs)); $i++) {
        $trimmed_paragraph = wp_trim_words(strip_tags($paragraphs[$i]), 10); // Cắt bớt nội dung mỗi đoạn
        echo '<li>' . $trimmed_paragraph . '</li>'; // Hiển thị mà không qua wpautop()
    }
    ?>
</div>
</article>
<style>.site-main .entry-content div.job_listings div.job_listings {
    display: flex; /* Đặt container sử dụng flexbox */
    flex-wrap: wrap; /* Đảm bảo các phần tử sẽ xuống dòng nếu không đủ chỗ */ 
    gap: 20px; /* Khoảng cách giữa các job (tuỳ chỉnh theo nhu cầu) */
    width: auto;
}
.site-main .entry-content div.job_listings div.job_listings div.job-info {
    width: 250px;
    height: 30px;
    border-radius: 5px;
    margin-top: 3px;
    font-size: 11px; 
}

.site-main .entry-content div.job_listings div.job_listings div.titles{
margin-left: 120px;
}

.site-main .entry-content div.job_listings div.job_listings div.job-info div.company-name {
margin-top: 3px;

}
.site-main .entry-content div.job_listings div.job_listings div.job-info li.job-type {            
    color: #333;                      /* Đổi màu chữ */
    text-transform: uppercase;        /* Viết hoa toàn bộ chữ */
    letter-spacing: 1px;  
    margin-left: -12px;
    margin-right: -13px;
    margin-top: 4px;
}

.site-main .entry-content div.job_listings div.job_listings div.job-info div.job-location{
margin-top: -2px;
}

.site-main .entry-content div.job_listings div.job_listings article {
    background: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.16);
    margin-bottom: 25px;
    border-radius: 5px;
    padding: 30px;
    position: relative;
    flex: 0 1 calc(50% - 20px); /* Mỗi job chiếm 50% chiều rộng trừ khoảng cách */
    overflow: hidden;
    align-items: flex-start;
    box-sizing: border-box; /* Đảm bảo padding/margin không ảnh hưởng kích thước */
}
.site-main .entry-content div.job_listings div.job_listings img {
    position: absolute;
    width: 120px;
}
.titles .entry-title a {
    font-weight: bold;
    text-decoration: none;
}
.aaa {
  display: flex; /* Đặt container sử dụng flexbox */
  flex-wrap: wrap;
  gap: 20px; /* Khoảng cách giữa các job (tuỳ chỉnh theo nhu cầu) */
  border: 1px solid #d8d8d8;
  border-radius: 5px;
  width: 300px !important;
  background-color: #ededed;
}
</style>