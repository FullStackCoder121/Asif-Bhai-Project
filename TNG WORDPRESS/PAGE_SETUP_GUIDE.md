# 📄 WORDPRESS PAGES SETUP GUIDE

## 🎯 Har Page Ka Naam Aur Template

WordPress Admin mein **Pages → Add New** kar ke yeh pages banayein:

---

### ✅ **1. HOME PAGE**
- **Page Title:** `Home`
- **Template:** Home Page (front-page.php)
- **Settings → Reading:** Set as Front page
- **Slug:** Leave empty (will be homepage)

---

### ✅ **2. OVER ONS (ABOUT US)**
- **Page Title:** `Over ons`
- **Template:** Over Ons
- **Slug:** `over-ons`
- **URL:** www.yoursite.com/over-ons

---

### ✅ **3. CASES**
- **Page Title:** `Cases`
- **Template:** Cases
- **Slug:** `cases`
- **URL:** www.yoursite.com/cases

---

### ✅ **4. DIENSTEN (SERVICES)**
- **Page Title:** `Diensten`
- **Template:** Diensten
- **Slug:** `diensten`
- **URL:** www.yoursite.com/diensten

---

### ✅ **5. WEBSITE & SEO SERVICE**
- **Page Title:** `Website & SEO`
- **Template:** Website & SEO
- **Slug:** `diensten-website-seo`
- **URL:** www.yoursite.com/diensten-website-seo

---

### ✅ **6. DATA & TRACKING SERVICE**
- **Page Title:** `Data & Tracking`
- **Template:** Data & Tracking
- **Slug:** `diensten-data-tracking`
- **URL:** www.yoursite.com/diensten-data-tracking

---

### ✅ **7. ADVERTISING SERVICE**
- **Page Title:** `Advertising`
- **Template:** Advertising
- **Slug:** `diensten-advertising`
- **URL:** www.yoursite.com/diensten-advertising

---

### ✅ **8. CREATIVE EXCELLENCE SERVICE**
- **Page Title:** `Creative Excellence`
- **Template:** Creative Excellence
- **Slug:** `diensten-creative-excellence`
- **URL:** www.yoursite.com/diensten-creative-excellence

---

### ✅ **9. ORGANIC SOCIAL SERVICE**
- **Page Title:** `Organic Social`
- **Template:** Organic Social
- **Slug:** `diensten-organic-social`
- **URL:** www.yoursite.com/diensten-organic-social

---

### ✅ **10. INSIGHTS (BLOG)**
- **Page Title:** `Insights`
- **Template:** Default Template (index.php automatic hai)
- **Slug:** `insights`
- **Note:** Blog posts automatically is page pe show hongay

---

### ✅ **11. CONTACT**
- **No separate page needed!**
- Contact form modal hai jo header mein included hai
- "Contact" button click karne pe popup khulta hai

---

## 🚀 QUICK SETUP STEPS:

### Step 1: Upload Theme
1. Theme folder ko ZIP karo
2. WordPress Admin → Appearance → Themes → Add New → Upload
3. Activate karo

### Step 2: Create Pages (Copy-Paste Ready!)

WordPress Admin mein **Pages → Add New** kar ke yeh pages banao:

```
PAGE 1:
Title: Home
Template: Home Page
Slug: (leave empty)
✅ Publish

PAGE 2:
Title: Over ons
Template: Over Ons
Slug: over-ons
✅ Publish

PAGE 3:
Title: Cases
Template: Cases
Slug: cases
✅ Publish

PAGE 4:
Title: Diensten
Template: Diensten
Slug: diensten
✅ Publish

PAGE 5:
Title: Website & SEO
Template: Website & SEO
Slug: diensten-website-seo
✅ Publish

PAGE 6:
Title: Data & Tracking
Template: Data & Tracking
Slug: diensten-data-tracking
✅ Publish

PAGE 7:
Title: Advertising
Template: Advertising
Slug: diensten-advertising
✅ Publish

PAGE 8:
Title: Creative Excellence
Template: Creative Excellence
Slug: diensten-creative-excellence
✅ Publish

PAGE 9:
Title: Organic Social
Template: Organic Social
Slug: diensten-organic-social
✅ Publish

PAGE 10:
Title: Insights
Template: Default Template
Slug: insights
✅ Publish
```

### Step 3: Set Front Page
1. WordPress Admin → **Settings → Reading**
2. "Your homepage displays" → Select **A static page**
3. Homepage: Select **Home**
4. Posts page: Leave as **— Select —** (optional: create Blog page)
5. **Save Changes**

---

## 📋 COMPLETE CHECKLIST:

- [ ] Theme uploaded & activated
- [ ] Page 1: Home (front page set)
- [ ] Page 2: Over ons
- [ ] Page 3: Cases
- [ ] Page 4: Diensten
- [ ] Page 5: Website & SEO
- [ ] Page 6: Data & Tracking
- [ ] Page 7: Advertising
- [ ] Page 8: Creative Excellence
- [ ] Page 9: Organic Social
- [ ] Page 10: Insights
- [ ] Settings → Reading configured
- [ ] Test all navigation links
- [ ] Test contact form modal

---

## 🎯 IMPORTANT NOTES:

### Slug Names (URL) - EXACT SAME RAKHO:
```
over-ons (NOT over_ons or overons)
cases
diensten
diensten-website-seo (NOT website-seo)
diensten-data-tracking (NOT data-tracking)
diensten-advertising (NOT advertising)
diensten-creative-excellence (NOT creative-excellence)
diensten-organic-social (NOT organic-social)
insights
```

### Template Names in Dropdown:
```
Home Page
Over Ons
Cases
Diensten
Website & SEO
Data & Tracking
Advertising
Creative Excellence
Organic Social
```

---

## ✅ DONE!

Sab pages create karne ke baad, website bilkul live site jaisa dikhega!

**Navigation automatically work karega kyunki header.php mein URLs already correct hain!**

🎉 **Total Time: 10-15 minutes for all pages!**
