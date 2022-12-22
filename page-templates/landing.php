<?php
/**
 * Template Name: Customizer Landing
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head();?>
</head>
<body>
<div class="section banner">
    <h1><?php bloginfo( 'name' );?></h1>
    <?php if ( get_theme_mod( 'services_settings_checkbox', 1 ) ): ?>
    <h2><?php bloginfo( 'description' );?></h2>
    <?php endif;?>
    <br/>
    <h3 class="title"><?php echo esc_html( get_theme_mod( 'services_settings' ) ); ?></h3>
    <h4 class="subtitle"><?php echo esc_html( get_theme_mod( 'services_settings_textarea' ) ); ?></h4>
<?php
echo "<br/>";
echo esc_html( get_option( 'services_settings' ) );
?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="img-customize">
            <?php
if ( get_theme_mod( 'services_settings_checkbox' ) == 1 ) {
    ?>
    <a class="link" href=<?php echo esc_attr( get_theme_mod( 'services_settings_link' ) ); ?>>selimita</a>
<?php
}
// get image id
$image_id = attachment_url_to_postid( get_theme_mod( 'setting_image' ) );
$image_media = get_theme_mod( 'setting_media' );
$image_file = get_theme_mod( 'setting_file' );
echo "<br/>";
echo "==============";
echo "<br/>";
print_r( $image_id );
echo "<br/>";
print_r( $image_media );
echo "<br/>";
echo "Cropped Image <br/>";
print_r( $image_file );
echo "<br/>";
echo "==============";
echo "<br/>";
if ( get_theme_mod( 'setting_image' ) ):
?>
    <div class="selective-image">
        <?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
    </div>
    <?php
else: ?><div class="selective-image">
    <img src="<?php echo get_template_directory_uri() . '/inc/cake.jpg'; ?>" alt=""></div>
    <?php
endif;
?>
<br/>
<div class="selective-media">
    <?php echo wp_get_attachment_image( $image_media, 'large' ); ?>
</div>
<br/>
<div class="selective-file">
    <!-- <?php //echo wp_get_attachment_image( $image_media ); ?> -->
    <img src="<?php echo get_theme_mod( 'bio_image', get_template_directory_uri() . '/inc/cake.jpg' ); ?>">
    <br>
    <div class="refresh">
    <p class="c-text">
    <?php echo get_theme_mod( 'customize_setting' ); ?>
    </p>
    </div>
</div>

<div class="repeater">
    <ul class="rrr">
<?php
// Theme_mod settings to check.
$settings = get_theme_mod( 'repeater_setting' );
?>
	<?php
foreach ( $settings as $setting ): ?>
    <li class="ttt"><a href=""><?php echo $setting['link_text']; ?></a></li>
    <?php
endforeach;
?>
</ul>
</div>

<div class="sortbl">
<?php
echo "<br/>";
// Get the parts.
$template_parts = get_theme_mod( 'sortable_setting' );
?>

<ul class="stable">
    <li>
        <?php echo "Sortable: " . $template_parts[0] . "<br/>"; ?>
    </li>
</ul>
<br>
    <ul class="sort">
        <?php
foreach ( $template_parts as $template_part ) {
    // get_template_part( 'partial-templates/' . $template_part );
    ?>
    <li>
        <?php echo "Sortable: " . $template_part . "<br/>"; ?>
    </li>
    <?php
}
?>
    </ul>
</div>

            </div>
            <div class="mission section">
                <h1 class="heading" id="service-heading">
					<?php
echo esc_html( get_theme_mod( 'cust_services_heading', __( 'Our Mission Statement', 'customizer' ) ) );
//echo esc_html( get_option( 'cust_services_heading', __( 'Our Mission Statement', 'customizer' ) ) );
?>
                </h1>
				<?php
if ( get_theme_mod( 'cust_services_display_subheading', 1 ) ):
?>
                    <p class="subheading">
						<?php
echo esc_html( get_theme_mod( 'cust_services_subheading' ), __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.', 'customizer' ) );
?>
                    </p>
				<?php
endif;

$cust_column = get_theme_mod( 'settings_column', 4 );
?>
<div class="row sub-section selective-refresh">
<div class="col-md-<?php echo esc_attr( $cust_column ); ?>">
                        <div class="service">
                            <i class="far fa-building"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr( $cust_column ); ?>">
                        <div class="service">
                            <i class="fas fa-chart-bar"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr( $cust_column ); ?>">
                        <div class="service">
                            <i class="fas fa-city"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr( $cust_column ); ?>">
                        <div class="service">
                            <i class="fas fa-haykal"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr( $cust_column ); ?>">
                        <div class="service">
                            <i class="fas fa-broadcast-tower"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                    <div class="col-md-<?php echo esc_attr( $cust_column ); ?>">
                        <div class="service">
                            <i class="fas fa-bicycle"></i>
                            <h2>Service Name</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi dolorem eveniet
                                harum ipsum necessitatibus nihil, pariatur praesentium quia voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section footer">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cumque esse nobis recusandae ullam
        unde.
    </p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Facebook</a></li>
        <li class="list-inline-item"><a href="#">Twitter</a></li>
        <li class="list-inline-item"><a href="#">Github</a></li>
    </ul>
</div>
</body>
<?php wp_footer();?>
</html>
