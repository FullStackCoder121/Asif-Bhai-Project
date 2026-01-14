import os

# Theme directory
theme_dir = r'd:\AWAIS\Asif Bhai Project\TNG WORDPRESS'
source_dir = r'd:\AWAIS\Asif Bhai Project\www.tng.agency\www.tng.agency'

# Mapping of page files to their HTML sources
page_mapping = {
    'page-cases.php': ('cases.html', 'Cases'),
    'page-over-ons.php': ('over-ons.html', 'Over Ons'),
    'page-diensten.php': ('diensten.html', 'Diensten'),
    'page-diensten-website-seo.php': ('diensten-website-seo.html', 'Website & SEO'),
    'page-diensten-data-tracking.php': ('diensten-data-tracking.html', 'Data & Tracking'),
    'page-diensten-advertising.php': ('diensten-advertising.html', 'Advertising'),
    'page-diensten-creative-excellence.php': ('diensten-creative-excellence.html', 'Creative Excellence'),
    'page-diensten-organic-social.php': ('diensten-organic-social.html', 'Organic Social')
}

for php_file, (html_file, template_name) in page_mapping.items():
    html_path = os.path.join(source_dir, html_file)
    php_path = os.path.join(theme_dir, php_file)
    
    if not os.path.exists(html_path):
        print(f"❌ HTML source not found: {html_file}")
        continue
    
    print(f"🔧 Rebuilding: {php_file} from {html_file}")
    
    # Read the original HTML
    with open(html_path, 'r', encoding='utf-8') as f:
        html_content = f.read()
    
    # Extract only the main content sections (from first section_hero to end before closing main)
    # Find where main content starts
    start_marker = '<div class="section_hero">'
    end_marker = '</main>'
    
    start_pos = html_content.find(start_marker)
    end_pos = html_content.find(end_marker)
    
    if start_pos == -1 or end_pos == -1:
        print(f"⚠️ Could not find content markers in {html_file}")
        continue
    
    # Extract only the page content (no header, no footer, no nav, no contact modal)
    page_content = html_content[start_pos:end_pos].strip()
    
    # Create the PHP template
    php_content = f"""<?php
/*
Template Name: {template_name}
*/
get_header(); 
?>

{page_content}

<?php get_footer(); ?>
"""
    
    # Write the PHP file
    with open(php_path, 'w', encoding='utf-8') as f:
        f.write(php_content)
    
    print(f"✅ Rebuilt: {php_file}")

print("\n✨ All page templates rebuilt from original HTML!")
print("Each template now has:")
print("  - Template Name header")
print("  - get_header() - provides navigation, mobile menu, contact modal")
print("  - Page-specific content only")
print("  - get_footer() - provides footer content")
