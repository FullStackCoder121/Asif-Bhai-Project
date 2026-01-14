import re
import os

# List of all page template files to fix
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
    
    print(f"🔧 Processing: {page_file}")
    
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Remove the duplicate page-loader at the beginning (keep only the content after it)
    # Pattern: everything from start until the first real section starts
    content = re.sub(r'get_header\(\);\s*\?>\s*<div class="page-loader"></div>', 'get_header(); ?>', content, flags=re.DOTALL)
    
    # Remove the footer section and everything after it (keep only content before footer)
    # Find the footer div and remove it plus everything after
    footer_pattern = r'<div class="footer">.*?<?php get_footer\(\); \?>'
    content = re.sub(footer_pattern, '<?php get_footer(); ?>', content, flags=re.DOTALL)
    
    # Write the fixed content back
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f"✅ Fixed: {page_file}")

print("\n✨ All page templates fixed!")
print("Navigation and footer are now universal via header.php and footer.php")
