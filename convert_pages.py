import re
import os

# Define pages to convert
pages = {
    'over-ons': 'Over Ons',
    'cases': 'Cases',
    'diensten': 'Diensten',
    'diensten-website-seo': 'Website & SEO',
    'diensten-data-tracking': 'Data & Tracking', 
    'diensten-advertising': 'Advertising',
    'diensten-creative-excellence': 'Creative Excellence',
    'diensten-organic-social': 'Organic Social'
}

source_dir = r'www.tng.agency\www.tng.agency'
dest_dir = r'TNG WORDPRESS'

for slug, name in pages.items():
    html_file = os.path.join(source_dir, f'{slug}.html')
    php_file = os.path.join(dest_dir, f'page-{slug}.php')
    
    if os.path.exists(html_file):
        with open(html_file, 'r', encoding='utf-8') as f:
            html_content = f.read()
        
        # Extract main content - start from page-loader div
        match = re.search(r'(<div class="page-loader">.*?)</main>', html_content, re.DOTALL)
        if match:
            main_content = match.group(1)
            
            # Create WordPress template
            wp_template = f'''<?php
/*
Template Name: {name}
*/
get_header(); 
?>

{main_content}

<?php get_footer(); ?>'''
            
            with open(php_file, 'w', encoding='utf-8') as f:
                f.write(wp_template)
            
            print(f'✅ Created: page-{slug}.php')
        else:
            print(f'❌ Could not extract main content from: {slug}.html')
    else:
        print(f'❌ File not found: {slug}.html')

print(f'\n🎉 Conversion complete!')
