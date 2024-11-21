<style>
    #banner-section .form-wrap {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

#banner-section .search-filter-wrap {
  display: flex;
  align-items: center;
  gap: 15px;
  flex-wrap: wrap;
}

#banner-section .input-group {
  position: relative;
  display: flex;
  align-items: center;
}

#banner-section .input-group .icon {
  position: absolute;
  left: 10px;
  font-size: 1.2rem;
  color: #ff5722;
}

#banner-section .input-group input[type="text"],
#banner-section .input-group select {
  padding: 10px 15px 10px 40px;
  border: none;
  border-radius: 4px;
  font-size: 1rem;
  width: 250px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

#banner-section .input-group input::placeholder {
  color: #aaa;
}

#banner-section .search-filter-wrap .search-job-btn {
  padding: 10px 20px;
  background-color: #ff5722;
  border: none;
  border-radius: 4px;
  color: white;
  cursor: pointer;
  font-size: 1rem;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

#banner-section .search-filter-wrap .search-job-btn:hover {
  background-color: #e64a19;
}
</style>
<?php
/**
 * Banner Section
 * 
 * @package JobScout
 */

$ed_banner         = get_theme_mod( 'ed_banner_section', true );
$banner_title      = get_theme_mod( 'banner_title', __( 'Find Your Dream Jobs', 'jobscout' ) );
$banner_subtitle   = get_theme_mod( 'banner_subtitle', __( 'The secret behind our company is simple: to always put ourselves in the other person’s shoes—employee, guest, or customer.', 'jobscout' ) );
$find_a_job_link   = get_option( 'job_manager_jobs_page_id', 0 );

if ( $ed_banner && has_custom_header() ) { ?>
    <div id="banner-section" class="site-banner<?php if ( has_header_video() ) echo esc_attr( ' video-banner' ); ?>">
        <div class="item">
            <?php the_custom_header_markup(); ?>
            <div class="banner-caption">
                <div class="container">
                    <div class="caption-inner">
                        <?php 
                            // Kiểm tra giá trị tiêu đề và phụ đề trước khi hiển thị
                            if ( !empty( $banner_title ) ) {
                                echo '<h2 style="text-align:left;" class="title";>' . esc_html( $banner_title ) . '</h2>';
                            }
                            if ( !empty( $banner_subtitle ) ) {
                                echo '<div style="text-align:left;" class="description">' . wpautop( wp_kses_post( $banner_subtitle ) ) . '</div>';
                            }
                        ?>
                      <div class="form-wrap">
    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form">
        <div class="search-filter-wrap">
            <!-- Search input -->
            <div class="input-group">
                <span class="icon"><i class="fas fa-search"></i></span>
                <input type="text" name="s" placeholder="<?php esc_attr_e( 'Search for jobs, companies, skills', 'jobscout' ); ?>" />
            </div>
            <!-- Location dropdown -->
            <div class="input-group search_location">
                <?php
                global $wpdb;
                $table = $wpdb->prefix . 'postmeta';
                $sql = "SELECT DISTINCT SUBSTRING_INDEX(`meta_value`, ',', -1) as location 
                        FROM `wp_postmeta` 
                        WHERE `meta_key` LIKE '%location%' 
                        ORDER BY location";
                $data = $wpdb->get_results($sql); // Không cần prepare vì không có tham số động.
                ?>
                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                <select id="search_location" name="search_location">
                    <option value=""><?php esc_html_e( 'Khu vực', 'jobscout' ); ?></option>
                    <?php if ($data): ?>
                        <?php foreach ($data as $value): ?>
                            <option value="<?php echo esc_attr($value->location); ?>">
                                <?php echo esc_html($value->location); ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <!-- Search button -->
            <button type="submit" class="search-job-btn">
                <?php esc_html_e( 'Search Job', 'jobscout' ); ?>
            </button>
        </div>
    </form>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>