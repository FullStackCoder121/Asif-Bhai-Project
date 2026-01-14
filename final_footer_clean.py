import os
import re

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
    
    print(f"🔧 Removing footer-bottom from: {php_file}")
    
    with open(php_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Remove the footer-bottom section
    footer_bottom_pattern = r'</div></div><div class="footer-bottom">.*?</div></div></div></div>'
    content = re.sub(footer_bottom_pattern, '</div></div>', content, flags=re.DOTALL)
    
    with open(php_path, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f"✅ Cleaned: {php_file}")

print("\n✨ All footer sections completely removed!")
