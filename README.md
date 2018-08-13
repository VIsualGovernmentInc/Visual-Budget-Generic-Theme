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

Easy Google Fonts (https://wordpress.org/plugins/easy-google-fonts/) - easy font management with the entire Google Fonts library

## Branding with the VB Generic Theme

It's generally desirable to make the Visual Budget web site consistent in appearance and style with the municipality's own web site - banner, logo, backgrounds, fonts, etc. The VB Generic theme and the Genesis framework can often be branded to match "traditional" site layouts (banner, sidebars, body, foooter) without modifing the theme templates.

## Customizer

The WordPress Customizer can be used to easily set various options for the theme, and offers Additional CSS entries to override many theme defaults. More about the Customizer here:https://en.support.wordpress.com/customizer/.

### Typography

The easiest way to customize font faces, sizes and colors is to use the Google Easy Fonts plug-in and WordPress Customizer. Standard tags (p, h1, h2, etc.) can be set as Default Typography in the customizer.

Google Easy Fonts can be used to define Theme Typography using CSS selectors generated by the VB Generic Theme and Genesis. 

#### Type selectors
Some typical selectors used in Google Easy Fonts are:

MAIN NAV = .genesis-nav-menu a - the main navigation menu, in the header

### Site Identity, aka the favicon
Set it using Site Identity in the Customizer. It should be a square .jpg or .png at least 512x512 pixels. The Visual Budget favicon is loaded with the theme at wp-content/themes/vb-genesis-child-generic/images/favicon.gif.

### Colors
Background, link and accent colors can be set here. More detailed control is available through the Typography customizer and Additional CSS, which will override these settings.

### Header Image
Set using the Customizer - Header Image. The image is loaded through the WP Media Library. 300-400 pixels wide and 150 pixels high is a good place to start.

### Background Image
Set us the Customer - Background Image. The image is loaded through the WP Media Library. 1200 x 1600 pixels is a good place to start for a full-page image, and the customizer offers various options to fit it to the page. This could be a single large image or pattern, repeated vertically and horizontally. Note that most of the center of the image is likely to be blocked by the page body. More detailed styling can be written as Additional CSS.

### Menus

### WIdgets

### Homepage Settings

### Theme Settings

### Theme SEO Settings

### Additional CSS

The following can be entered in the Customizer directly or as Additional CSS in the WP Customizer. Changes are previewed immediately, and don't impact the live site until published. This assumes general familiarity with simple CSS. A good CSS reference is here: https://www.w3schools.com/css/.

#### Overall
body // defaults for the whole page
a // default link color

#### Header, banner
.site-header { } // full width, everything above the top menu
.site-header .wrap {  } // the width of the main body. The header height will shrink or expand to the wrap.

#### main navigation

#### general links




.nav-primary,

.site-inner {
	background-color:#fff;
	padding:1em;
	border-radius: 8px;
}
.nav-primary {
	border:none;
}
.nav-primary ul,
.genesis-nav-menu {
	width:auto;
	margin:0;
	background-color:rgb(0,55,108);
	background-image:linear-gradient(rgb(0, 55, 108), rgb(0, 38, 74));
	text-align:left;
	margin-bottom:30px;
	border-radius: 8px;
}
.nav-primary ul li a {
	height:40px;
	padding:12px 15px 0 15px;
	margin:0 -3px;
}
.nav-primary ul li a:hover {
	background-color:rgb(44, 105, 164)
;;
}
.genesis-nav-menu a { color:#fff; }
.genesis-nav-menu a:hover,
.genesis-nav-menu a:focus,
.genesis-nav-menu .current-menu-item > a,
.genesis-nav-menu .sub-menu .current-menu-item > a:hover,
.genesis-nav-menu .sub-menu .current-menu-item > a:focus  {
	color:#fff;
}

/*
	CSS Migrated from Jetpack:
*/

