# TNG Agency WordPress Theme

Complete WordPress theme conversion of the TNG Agency website.

## Description

This is a pixel-perfect WordPress conversion of the TNG Agency website. The theme maintains all the original design, animations, and functionality from the static Webflow website.

## Features

- ✅ Exact replica of the original TNG Agency website
- ✅ Fully responsive design
- ✅ GSAP animations and scroll effects
- ✅ Contact form functionality
- ✅ Blog/Insights section
- ✅ Service pages structure
- ✅ Client logos marquee
- ✅ WordPress Customizer integration
- ✅ Navigation menus
- ✅ Social media links
- ✅ SEO friendly

## Installation

### Requirements
- WordPress 5.0 or higher
- PHP 7.4 or higher
- MySQL 5.6 or higher

### Steps

1. **Upload Theme**
   - Download the theme folder
   - Navigate to WordPress Admin → Appearance → Themes
   - Click "Add New" → "Upload Theme"
   - Upload the theme ZIP file or use FTP to upload to `/wp-content/themes/`

2. **Activate Theme**
   - Go to Appearance → Themes
   - Find "TNG Agency" and click "Activate"

3. **Setup Menus** (Optional)
   - Go to Appearance → Menus
   - Create menus for:
     - Primary Menu
     - Footer Sitemap
     - Footer Partners
     - Footer Contact

4. **Customize Settings**
   - Go to Appearance → Customize
   - Configure:
     - Hero Section (heading and description)
     - About Section (title and description)
     - Social Media Links
     - Company Information (VAT and KVK numbers)

5. **Create Pages**
   Create the following pages for full site functionality:
   - Home (set as front page)
   - Over ons (About Us)
   - Diensten (Services)
   - Diensten - Website & SEO
   - Diensten - Data & Tracking
   - Diensten - Advertising
   - Diensten - Creative Excellence
   - Diensten - Organic Social
   - Insights (Blog)
   - Onze Klanten (Our Clients)
   - Partners en Tools
   - Vacatures
   - Algemene Voorwaarden
   - Privacy Policy

6. **Set Homepage**
   - Go to Settings → Reading
   - Select "A static page" under "Your homepage displays"
   - Choose your Home page as "Homepage"

## File Structure

```
TNG WORDPRESS/
├── assets/
│   ├── css/
│   │   └── webflow.css
│   ├── js/
│   └── images/
├── 404.php
├── archive.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── single.php
├── style.css
└── README.md
```

## Theme Files

- **style.css** - Main stylesheet with WordPress theme headers
- **functions.php** - Theme setup, scripts/styles enqueuing, customizer
- **header.php** - Site header with navigation and contact modal
- **footer.php** - Site footer with scripts
- **front-page.php** - Homepage template with all sections
- **page.php** - Default page template
- **single.php** - Single blog post template
- **archive.php** - Archive/category template
- **index.php** - Blog listing template
- **404.php** - 404 error page template

## Customization

### Theme Customizer Options

Navigate to **Appearance → Customize** to modify:

1. **Hero Section**
   - Hero Heading
   - Hero Description

2. **About Section**
   - About Title
   - About Description

3. **Social Media Links**
   - LinkedIn URL
   - Instagram URL
   - Facebook URL
   - Twitter URL

4. **Company Information**
   - VAT Number
   - KVK Number

### Custom CSS

To add custom CSS:
- Go to Appearance → Customize → Additional CSS
- Add your custom styles

### PHP Customization

Edit template files to customize:
- Header navigation: `header.php`
- Footer content: `footer.php` and `front-page.php` (footer section)
- Homepage sections: `front-page.php`
- Service listings: `front-page.php` (services array)
- Client logos: `front-page.php` (client logos arrays)

## Contact Form

The theme includes a built-in contact form that:
- Sends emails to the WordPress admin email
- Includes spam protection (nonce verification)
- Displays success/error messages
- Sanitizes all form inputs

## Scripts and Libraries

The theme uses the following external libraries:
- jQuery 3.5.1
- GSAP 3.11.4
- ScrollTrigger (GSAP plugin)
- Split Type
- Webflow scripts (3 files)
- Google Fonts (Open Sans & Inter)

All scripts are loaded from CDN for optimal performance.

## Browser Compatibility

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Support

For issues or questions:
- Email: info@tng.agency
- Website: https://www.tng.agency

## Credits

- **Design**: TNG Agency
- **Original Website**: Webflow
- **WordPress Conversion**: Custom development
- **Animations**: GSAP
- **Fonts**: Google Fonts (Open Sans, Inter)

## License

This theme is proprietary and developed specifically for TNG Agency.

## Changelog

### Version 1.0.0
- Initial release
- Complete conversion of TNG Agency website to WordPress
- All pages and sections implemented
- Contact form functionality
- Blog/Insights integration
- WordPress Customizer options
- Responsive design
- Animations and interactions
