# Visual-Budget-Generic-Theme

Github project link: https://github.com/VIsualGovernmentInc/Visual-Budget-Generic-Theme

The VB Generic Theme is a child theme of the Genesis Framework, available from StudioPress for $60. (https://my.studiopress.com/themes/genesis/). Note that the Visual Budget plug-in will work with many WordPress themes (untested with most, however), but Visual Government uses the VB Generic Theme and Genesis for many sites we install.

## Installation Instructions

1. Upload the VisGov theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the VisGov theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## Theme Support

Please visit http://my.studiopress.com/help/ for support of the Genesis framework and child themes.

## Recommended plugins

These plugins are used on all sites installed by VisGov, and are tested for compatiblity with the VB plug and VB Generic Theme:

Easy Google Fonts (https://wordpress.org/plugins/easy-google-fonts/) - easy font management with the entire Google Fonts library
UpdraftPlus (https://wordpress.org/plugins/updraftplus/) - daily backup
Duplicator (https://wordpress.org/plugins/duplicator/) - easy way to clone a site for development, also good for backup snapshots
Google Analytics for WordPress (https://wordpress.org/plugins/google-analytics-for-wordpress/) - easy interface to Google Analytics

Sites installed by VisGov are also connected to our WordPress.com account through the JetPack plugin (https://wordpress.org/plugins/jetpack/) so we can monitor the sites.

## Branding with the VB Generic Theme

It's generally desirable to make the Visual Budget web site consistent in appearance and style with the municipality's own web site - banner, logo, backgrounds, fonts, etc. The VB Generic theme and the Genesis framework can often be branded to match "traditional" site layouts (banner, sidebars, body, foooter) without modifing the theme templates.

## WordPress Customizer

The WordPress Customizer can be used to easily change the appearance of the site, and offers Additional CSS entries to override many theme defaults. Changes made in the Customizer are shown in the preview frame immediately, but are not permanent until published.

More about the Customizer here:https://en.support.wordpress.com/customizer/.

### Typography

The easiest way to customize font faces, sizes and colors is to use the Google Easy Fonts plug-in and WordPress Customizer. Standard tags (p, h1, h2, etc.) can be set as Default Typography in the customizer.

Google Easy Fonts can be used to define Theme Typography using CSS selectors generated by the VB Generic Theme and Genesis.

#### Type selectors
Some typical selectors used in Google Easy Fonts are:

MAIN NAV = .genesis-nav-menu a - the main navigation menu, in the header
SITE TITLE - .site-title a

### Site Identity, aka the favicon
Set it using Site Identity in the Customizer. It should be a square .jpg or .png at least 512x512 pixels. The Visual Budget favicon is loaded with the theme at wp-content/themes/vb-genesis-child-generic/images/favicon.gif.
Set it using Site Identity in the Customizer. It should be a square .gif, .jpg or .png at least 512x512 pixels. The Visual Budget favicon is loaded with the theme at wp-content/themes/vb-genesis-child-generic/images/favicon.png.

### Colors
Background, link and accent colors can be set here. More detailed control is available through the Typography customizer and Additional CSS, which will override these settings.

### Header Image
Set using the Customizer - Header Image. The image is loaded through the WP Media Library. 300-400 pixels wide and 150 pixels high is a good place to start.

### Background Image
Set us the Customer - Background Image. The image is loaded through the WP Media Library. 1200 x 1600 pixels is a good place to start for a full-page image, and the customizer offers various options to fit it to the page. This could be a single large image or pattern, repeated vertically and horizontally. Note that most of the center of the image is likely to be blocked by the page body. More detailed styling can be written as Additional CSS.

### Menus
Navigation menus can be defined here, as an alternative to using the WordPress dashboard Appearance->Menus.

The VB Generic Theme offers two menu areas, at the top under the header, and in the footer. Both are often set to the same menu.

### Widgets
Widgets can be set here, as an alternative to using the WordPress dashboard, Appearance->Widgets.

Widget areas are typically available in the right side of the header, footer, and one or more sidebars. The page layout can be controlled in the Theme Settings tab.

### Homepage Settings
Here you can set the home page, either a static page or the blog page, as an alternative to using the WordPress Dashboard, Settings->Reading.

### Theme Settings
Many options built into Genesis are available here, such as controlling updates, comments, breadcrumbs, archives, header and footer scripts (JavaScript), and the default page layout template (sidebar locations, width, etc.). For example, the "Content, Primary Sidebar" layout creates a right sidebar on pages set to the default template.

### Theme SEO Settings
Sets various SEO settings, such as the page <title? tags, indexing controls, etc. They can usually be left as the default.

### Additional CSS

The following can be entered in the Customizer directly or as Additional CSS in the WP Customizer. Changes are previewed immediately, and don't impact the live site until published. This assumes general familiarity with simple CSS. A good CSS reference is here: https://www.w3schools.com/css/.

A complete visual markup guide for the Genesis framework is here: https://my.studiopress.com/documentation/customization/guides-and-references/visual-markup-guide/

You can find specific examples of Additional CSS content in the folder Additional CSS examples

#### Overall
body // defaults for the whole page
a // default link color

#### Header, banner
.site-header // full width band holding the header
.site-header .wrap // the width of the main body. The header height will shrink or expand to the wrap.

#### main navigation
.nav-primary // full-width band holding the main menu
.nav-primary wrap // width of the main body
.nav-primary .wrap ul#menu-main-menu // the nav menu itself
.nav-primary .wrap ul#menu-main-menu li // individual menu items

#### body content
.site-inner // content wrapper, including sidebars
.site-inner .content-sidebar-wrap // includes both the content and sidebar(s)
.site-inner .content-sidebar-wrap .content // content wrapper
.site-inner .content-sidebar-wrap .sidebar // sidebar wrapper
<<<<<<< HEAD
=======
.site-inner .content-sidebar-wrap .content // content section
.site-inner .content-sidebar-wrap .sidebar // sidebars

>>>>>>> 5d843eccca2dbc7ed2fa767d84849cf59b51594c
