<?php

/**
 * Theme Customizer
 * 
 * Add customizer options for header logos and footer content
 *
 * @package embs
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function embs_customize_register($wp_customize)
{

  // ===================================================================
  // HEADER SECTION
  // ===================================================================
  $wp_customize->add_section('embs_header_section', array(
    'title'       => __('Header Settings', 'embs'),
    'description' => __('Manage header logos', 'embs'),
    'priority'    => 30,
  ));

  // Left Logo 1 (EMBS Logo)
  $wp_customize->add_setting('embs_logo_left_1', array(
    'default'           => get_template_directory_uri() . '/assets/images/embs-logo.png',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_logo_left_1', array(
    'label'       => __('Left Logo 1 (EMBS)', 'embs'),
    'section'     => 'embs_header_section',
    'settings'    => 'embs_logo_left_1',
  )));

  // Left Logo 2 (KU Logo)
  $wp_customize->add_setting('embs_logo_left_2', array(
    'default'           => get_template_directory_uri() . '/assets/images/ku-logo.png',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_logo_left_2', array(
    'label'       => __('Left Logo 2 (Khalifa University)', 'embs'),
    'section'     => 'embs_header_section',
    'settings'    => 'embs_logo_left_2',
  )));

  // Right Logo (IEEE Logo)
  $wp_customize->add_setting('embs_logo_right', array(
    'default'           => get_template_directory_uri() . '/assets/images/ieee-logo.png',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_logo_right', array(
    'label'       => __('Right Logo (IEEE)', 'embs'),
    'section'     => 'embs_header_section',
    'settings'    => 'embs_logo_right',
  )));

  // ===================================================================
  // FOOTER SECTION
  // ===================================================================
  $wp_customize->add_section('embs_footer_section', array(
    'title'       => __('Footer Settings', 'embs'),
    'description' => __('Manage footer content, email, and social links', 'embs'),
    'priority'    => 31,
  ));

  // Footer Email Label
  $wp_customize->add_setting('embs_footer_email_label', array(
    'default'           => 'Email Us',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_footer_email_label', array(
    'label'       => __('Email Label', 'embs'),
    'section'     => 'embs_footer_section',
    'settings'    => 'embs_footer_email_label',
    'type'        => 'text',
  ));

  // Footer Email Address
  $wp_customize->add_setting('embs_footer_email_address', array(
    'default'           => 'embsclub@ku.ac.ae',
    'sanitize_callback' => 'sanitize_email',
  ));
  $wp_customize->add_control('embs_footer_email_address', array(
    'label'       => __('Email Address', 'embs'),
    'section'     => 'embs_footer_section',
    'settings'    => 'embs_footer_email_address',
    'type'        => 'email',
  ));

  // Footer Email Icon
  $wp_customize->add_setting('embs_footer_email_icon', array(
    'default'           => get_template_directory_uri() . '/assets/images/footer-mail.png',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_footer_email_icon', array(
    'label'       => __('Email Icon', 'embs'),
    'section'     => 'embs_footer_section',
    'settings'    => 'embs_footer_email_icon',
  )));

  // Footer Address
  $wp_customize->add_setting('embs_footer_address', array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_footer_address', array(
    'label'       => __('Address', 'embs'),
    'section'     => 'embs_footer_section',
    'settings'    => 'embs_footer_address',
    'type'        => 'text',
    'description' => __('Enter the office address to display in the footer (optional)', 'embs'),
  ));

  // Footer Copyright Organization
  $wp_customize->add_setting('embs_footer_copyright_org', array(
    'default'           => 'Khalifa University',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_footer_copyright_org', array(
    'label'       => __('Copyright Organization', 'embs'),
    'section'     => 'embs_footer_section',
    'settings'    => 'embs_footer_copyright_org',
    'type'        => 'text',
  ));

  // Footer Copyright Text
  $wp_customize->add_setting('embs_footer_copyright_text', array(
    'default'           => 'All Rights Reserved',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_footer_copyright_text', array(
    'label'       => __('Copyright Text', 'embs'),
    'section'     => 'embs_footer_section',
    'settings'    => 'embs_footer_copyright_text',
    'type'        => 'text',
  ));

  // ===================================================================
  // SOCIAL LINKS SECTION
  // ===================================================================
  $wp_customize->add_section('embs_social_section', array(
    'title'       => __('Social Media Links', 'embs'),
    'description' => __('Manage footer social media links (up to 5)', 'embs'),
    'priority'    => 32,
  ));

  // Social Link 1
  $wp_customize->add_setting('embs_social_name_1', array(
    'default'           => 'LinkedIn',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_social_name_1', array(
    'label'    => __('Social Link 1 - Platform Name', 'embs'),
    'section'  => 'embs_social_section',
    'type'     => 'text',
  ));

  $wp_customize->add_setting('embs_social_url_1', array(
    'default'           => 'https://linkedin.com',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('embs_social_url_1', array(
    'label'   => __('Social Link 1 - URL', 'embs'),
    'section' => 'embs_social_section',
    'type'    => 'url',
  ));

  $wp_customize->add_setting('embs_social_icon_1', array(
    'default'           => get_template_directory_uri() . '/assets/images/linkedin.png',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_social_icon_1', array(
    'label'   => __('Social Link 1 - Icon', 'embs'),
    'section' => 'embs_social_section',
  )));

  // Social Link 2
  $wp_customize->add_setting('embs_social_name_2', array(
    'default'           => 'Instagram',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_social_name_2', array(
    'label'    => __('Social Link 2 - Platform Name', 'embs'),
    'section'  => 'embs_social_section',
    'type'     => 'text',
  ));

  $wp_customize->add_setting('embs_social_url_2', array(
    'default'           => 'https://instagram.com',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('embs_social_url_2', array(
    'label'   => __('Social Link 2 - URL', 'embs'),
    'section' => 'embs_social_section',
    'type'    => 'url',
  ));

  $wp_customize->add_setting('embs_social_icon_2', array(
    'default'           => get_template_directory_uri() . '/assets/images/instagram.png',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_social_icon_2', array(
    'label'   => __('Social Link 2 - Icon', 'embs'),
    'section' => 'embs_social_section',
  )));

  // Social Link 3
  $wp_customize->add_setting('embs_social_name_3', array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_social_name_3', array(
    'label'    => __('Social Link 3 - Platform Name', 'embs'),
    'section'  => 'embs_social_section',
    'type'     => 'text',
  ));

  $wp_customize->add_setting('embs_social_url_3', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('embs_social_url_3', array(
    'label'   => __('Social Link 3 - URL', 'embs'),
    'section' => 'embs_social_section',
    'type'    => 'url',
  ));

  $wp_customize->add_setting('embs_social_icon_3', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_social_icon_3', array(
    'label'   => __('Social Link 3 - Icon', 'embs'),
    'section' => 'embs_social_section',
  )));

  // Social Link 4
  $wp_customize->add_setting('embs_social_name_4', array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_social_name_4', array(
    'label'    => __('Social Link 4 - Platform Name', 'embs'),
    'section'  => 'embs_social_section',
    'type'     => 'text',
  ));

  $wp_customize->add_setting('embs_social_url_4', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('embs_social_url_4', array(
    'label'   => __('Social Link 4 - URL', 'embs'),
    'section' => 'embs_social_section',
    'type'    => 'url',
  ));

  $wp_customize->add_setting('embs_social_icon_4', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_social_icon_4', array(
    'label'   => __('Social Link 4 - Icon', 'embs'),
    'section' => 'embs_social_section',
  )));

  // Social Link 5
  $wp_customize->add_setting('embs_social_name_5', array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('embs_social_name_5', array(
    'label'    => __('Social Link 5 - Platform Name', 'embs'),
    'section'  => 'embs_social_section',
    'type'     => 'text',
  ));

  $wp_customize->add_setting('embs_social_url_5', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('embs_social_url_5', array(
    'label'   => __('Social Link 5 - URL', 'embs'),
    'section' => 'embs_social_section',
    'type'    => 'url',
  ));

  $wp_customize->add_setting('embs_social_icon_5', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'embs_social_icon_5', array(
    'label'   => __('Social Link 5 - Icon', 'embs'),
    'section' => 'embs_social_section',
  )));
}
add_action('customize_register', 'embs_customize_register');

/**
 * Get header logo from customizer
 *
 * @param string $position 'left_1', 'left_2', or 'right'
 * @return string Logo URL
 */
function embs_get_logo($position)
{
  switch ($position) {
    case 'left_1':
      return get_theme_mod('embs_logo_left_1', get_template_directory_uri() . '/assets/images/embs-logo.png');
    case 'left_2':
      return get_theme_mod('embs_logo_left_2', get_template_directory_uri() . '/assets/images/ku-logo.png');
    case 'right':
      return get_theme_mod('embs_logo_right', get_template_directory_uri() . '/assets/images/ieee-logo.png');
    default:
      return '';
  }
}

/**
 * Get footer email from customizer
 *
 * @return array Email configuration
 */
function embs_get_footer_email()
{
  return array(
    'label'     => get_theme_mod('embs_footer_email_label', 'Email Us'),
    'address'   => get_theme_mod('embs_footer_email_address', 'embsclub@ku.ac.ae'),
    'icon'      => get_theme_mod('embs_footer_email_icon', get_template_directory_uri() . '/assets/images/footer-mail.png'),
    'icon_alt'  => 'email icon',
  );
}

/**
 * Get footer copyright from customizer
 *
 * @return array Copyright configuration
 */
function embs_get_footer_copyright()
{
  return array(
    'organization' => get_theme_mod('embs_footer_copyright_org', 'Khalifa University'),
    'text'         => get_theme_mod('embs_footer_copyright_text', 'All Rights Reserved'),
  );
}

/**
 * Get social links from customizer
 *
 * @return array Array of social links
 */
function embs_get_social_links()
{
  $social_links = array();

  // Default fallback icons for common platforms
  $default_icons = array(
    'LinkedIn' => get_template_directory_uri() . '/assets/images/linkedin.png',
    'Instagram' => get_template_directory_uri() . '/assets/images/instagram.png',
  );

  for ($i = 1; $i <= 5; $i++) {
    $name = get_theme_mod("embs_social_name_$i", '');
    $url  = get_theme_mod("embs_social_url_$i", '');
    $icon = get_theme_mod("embs_social_icon_$i", '');

    // Only add if name and URL are set
    if (! empty($name) && ! empty($url)) {
      // Use fallback icon if icon is empty
      if (empty($icon) && isset($default_icons[$name])) {
        $icon = $default_icons[$name];
      }

      $social_links[] = array(
        'name'     => $name,
        'url'      => $url,
        'icon'     => $icon,
        'icon_alt' => $name,
      );
    }
  }

  return $social_links;
}

/**
 * Get footer address from customizer
 *
 * @return string Address or empty string
 */
function embs_get_footer_address()
{
  return get_theme_mod('embs_footer_address', '');
}
