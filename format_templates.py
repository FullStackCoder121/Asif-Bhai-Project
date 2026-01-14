import re
import os

# List of all page template files to format
page_files = [
    'page-over-ons.php',
    'page-cases.php',
    'page-diensten.php',
    'page-diensten-website-seo.php',
    'page-diensten-data-tracking.php',
    'page-diensten-advertising.php',
    'page-diensten-creative-excellence.php',
    'page-diensten-organic-social.php'
]

theme_dir = r'd:\AWAIS\Asif Bhai Project\TNG WORDPRESS'

for page_file in page_files:
    file_path = os.path.join(theme_dir, page_file)
    
    if not os.path.exists(file_path):
        print(f"❌ File not found: {page_file}")
        continue
    
    print(f"🔧 Formatting: {page_file}")
    
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Add line break after get_header();
    content = content.replace('get_header(); ?>', 'get_header(); \n?>\n\n')
    
    # Add line break before get_footer();
    content = content.replace('<?php get_footer(); ?>', '\n\n<?php get_footer(); ?>')
    
    # Write the formatted content back
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f"✅ Formatted: {page_file}")

print("\n✨ All page templates formatted with proper line breaks!")
