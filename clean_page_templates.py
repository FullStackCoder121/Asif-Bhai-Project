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
    
    print(f"🔧 Cleaning: {page_file}")
    
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Remove the contact section (it's already in header.php)
    # Pattern: <div class="section_contact">...entire contact modal...</div></div>
    contact_pattern = r'<div class="section_contact">.*?</div></div></div>'
    content = re.sub(contact_pattern, '', content, flags=re.DOTALL)
    
    # Make sure we have proper structure:
    # 1. Template header comment
    # 2. get_header()
    # 3. Page content starting with <div class="section_hero">
    # 4. get_footer()
    
    # Write the cleaned content back
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f"✅ Cleaned: {page_file}")

print("\n✨ All page templates cleaned!")
print("Contact modal removed from page templates (already in header.php)")
