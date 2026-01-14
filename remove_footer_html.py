import os
import re

# Theme directory
theme_dir = r'd:\AWAIS\Asif Bhai Project\TNG WORDPRESS'

page_files = [
    'page-cases.php',
    'page-over-ons.php',
    'page-diensten.php',
    'page-diensten-website-seo.php',
    'page-diensten-data-tracking.php',
    'page-diensten-advertising.php',
    'page-diensten-creative-excellence.php',
    'page-diensten-organic-social.php'
]

for php_file in page_files:
    php_path = os.path.join(theme_dir, php_file)
    
    print(f"🔧 Cleaning footer from: {php_file}")
    
    with open(php_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Remove everything from <div class="footer"> onwards (but keep the <?php get_footer(); ?> at the end)
    # Pattern: Find <div class="footer"> and remove everything until </div></div></div> (the final closing tags of footer)
    footer_pattern = r'<div class="footer">.*?</div></div></div></div>'
    content = re.sub(footer_pattern, '', content, flags=re.DOTALL)
    
    with open(php_path, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f"✅ Cleaned: {php_file}")

print("\n✨ Footer HTML removed from all page templates!")
print("Footer will now come from footer.php universally")
