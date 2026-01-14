# 📝 WORDPRESS PAGES - COMPLETE SETUP GUIDE

## 🎯 HAR PAGE KI EXACT SETTINGS

WordPress Admin → **Pages → Add New** kar ke har page ke liye yeh exact settings use karo:

---

## 📄 PAGE 1: HOME

```
Title: Home
Permalink: (leave empty - will be homepage)

Page Attributes:
├── Parent: (no parent)
└── Template: Home Page

Status: Publish
```

**After Publishing:**
- Go to: **Settings → Reading**
- Select: **A static page**
- Homepage: **Home**
- Save Changes

---

## 📄 PAGE 2: OVER ONS

```
Title: Over ons
Permalink: over-ons

Page Attributes:
├── Parent: (no parent)
└── Template: Over Ons

Status: Publish
```

---

## 📄 PAGE 3: CASES

```
Title: Cases
Permalink: cases

Page Attributes:
├── Parent: (no parent)
└── Template: Cases

Status: Publish
```

---

## 📄 PAGE 4: DIENSTEN (Main Services Page)

```
Title: Diensten
Permalink: diensten

Page Attributes:
├── Parent: (no parent)
└── Template: Diensten

Status: Publish
```

---

## 📄 PAGE 5: WEBSITE & SEO

```
Title: Website & SEO
Permalink: diensten-website-seo

Page Attributes:
├── Parent: Diensten  ← IMPORTANT!
└── Template: Website & SEO

Status: Publish
```

**Note:** Parent = "Diensten" kyunki yeh service ka sub-page hai

---

## 📄 PAGE 6: DATA & TRACKING

```
Title: Data & Tracking
Permalink: diensten-data-tracking

Page Attributes:
├── Parent: Diensten  ← IMPORTANT!
└── Template: Data & Tracking

Status: Publish
```

---

## 📄 PAGE 7: ADVERTISING

```
Title: Advertising
Permalink: diensten-advertising

Page Attributes:
├── Parent: Diensten  ← IMPORTANT!
└── Template: Advertising

Status: Publish
```

---

## 📄 PAGE 8: CREATIVE EXCELLENCE

```
Title: Creative Excellence
Permalink: diensten-creative-excellence

Page Attributes:
├── Parent: Diensten  ← IMPORTANT!
└── Template: Creative Excellence

Status: Publish
```

---

## 📄 PAGE 9: ORGANIC SOCIAL

```
Title: Organic Social
Permalink: diensten-organic-social

Page Attributes:
├── Parent: Diensten  ← IMPORTANT!
└── Template: Organic Social

Status: Publish
```

---

## 📄 PAGE 10: INSIGHTS

```
Title: Insights
Permalink: insights

Page Attributes:
├── Parent: (no parent)
└── Template: Default Template

Status: Publish
```

---

## 📋 QUICK REFERENCE TABLE:

| Page Title | Parent | Template | Permalink |
|------------|--------|----------|-----------|
| Home | (no parent) | **Home Page** | (empty) |
| Over ons | (no parent) | **Over Ons** | over-ons |
| Cases | (no parent) | **Cases** | cases |
| Diensten | (no parent) | **Diensten** | diensten |
| Website & SEO | **Diensten** ← | **Website & SEO** | diensten-website-seo |
| Data & Tracking | **Diensten** ← | **Data & Tracking** | diensten-data-tracking |
| Advertising | **Diensten** ← | **Advertising** | diensten-advertising |
| Creative Excellence | **Diensten** ← | **Creative Excellence** | diensten-creative-excellence |
| Organic Social | **Diensten** ← | **Organic Social** | diensten-organic-social |
| Insights | (no parent) | **Default Template** | insights |

---

## 🎯 PARENT PAGE EXPLANATION:

### **Why "Diensten" as Parent?**

5 service pages ki parent "Diensten" honi chahiye kyunki:

1. **Hierarchy:** Diensten → Services → Individual Service Pages
2. **URL Structure:** 
   - Main: `yoursite.com/diensten`
   - Sub: `yoursite.com/diensten/website-seo`
3. **Breadcrumbs:** Home → Diensten → Website & SEO
4. **Organization:** Admin panel mein organized dikhega

### **Pages with NO Parent:**

- Home
- Over ons
- Cases
- Diensten (main page)
- Insights

### **Pages WITH Parent (Diensten):**

- Website & SEO
- Data & Tracking
- Advertising
- Creative Excellence
- Organic Social

---

## 🖼️ STEP-BY-STEP SCREENSHOTS GUIDE:

### Creating a Page:

**Step 1:** Pages → Add New
```
┌─────────────────────────────────┐
│ Add New Page                     │
├─────────────────────────────────┤
│ Title: [Over ons]               │
│                                  │
│ Content: (leave empty)           │
│                                  │
│ Page Attributes →               │
│   Parent: (no parent) ▼         │
│   Template: Over Ons ▼          │
│                                  │
│ [Publish]                        │
└─────────────────────────────────┘
```

**Step 2:** For Service Pages (with Parent)
```
┌─────────────────────────────────┐
│ Add New Page                     │
├─────────────────────────────────┤
│ Title: [Website & SEO]          │
│                                  │
│ Content: (leave empty)           │
│                                  │
│ Page Attributes →               │
│   Parent: Diensten ▼  ← SELECT! │
│   Template: Website & SEO ▼     │
│                                  │
│ [Publish]                        │
└─────────────────────────────────┘
```

---

## ⚠️ IMPORTANT NOTES:

### ✅ DO's:

1. **Parent dropdown mein "Diensten" select karo** for 5 service pages
2. **Correct template select karo** from dropdown
3. **Permalink check karo** - automatic generate hoga but verify
4. **Publish karo** each page after creating
5. **Order doesn't matter** - kisi bhi order mein bana sakte ho

### ❌ DON'Ts:

1. **Don't add content** in page editor - templates already have content
2. **Don't use Page Builder** - keep it simple, just template select karo
3. **Don't change permalinks** manually - automatic jo bane wahi theek hai
4. **Don't skip Parent** for service pages - zaroor "Diensten" select karo

---

## 🔍 VERIFICATION:

After creating all pages, check:

### Admin Panel:
```
Pages (All Pages)
├── Home
├── Over ons
├── Cases
├── Diensten
│   ├── Website & SEO        ← Indented (child)
│   ├── Data & Tracking      ← Indented (child)
│   ├── Advertising          ← Indented (child)
│   ├── Creative Excellence  ← Indented (child)
│   └── Organic Social       ← Indented (child)
└── Insights
```

Service pages should show **indented** under "Diensten" - iska matlab Parent correct set hai!

---

## 🚀 FINAL SETTINGS:

### After All Pages Created:

**1. Set Homepage:**
```
Settings → Reading
├── Your homepage displays: A static page
├── Homepage: Home
└── Posts page: (leave blank or select Insights)
```

**2. Menus (Optional - Auto working):**
```
Appearance → Menus
Navigation automatically working hai from header.php
No need to create manual menus!
```

**3. Permalinks (Optional):**
```
Settings → Permalinks
Recommended: Post name
Example: yoursite.com/over-ons
```

---

## ✅ COMPLETE CHECKLIST:

```
☐ Page 1: Home (Parent: none, Template: Home Page)
☐ Page 2: Over ons (Parent: none, Template: Over Ons)
☐ Page 3: Cases (Parent: none, Template: Cases)
☐ Page 4: Diensten (Parent: none, Template: Diensten)
☐ Page 5: Website & SEO (Parent: Diensten ✓, Template: Website & SEO)
☐ Page 6: Data & Tracking (Parent: Diensten ✓, Template: Data & Tracking)
☐ Page 7: Advertising (Parent: Diensten ✓, Template: Advertising)
☐ Page 8: Creative Excellence (Parent: Diensten ✓, Template: Creative Excellence)
☐ Page 9: Organic Social (Parent: Diensten ✓, Template: Organic Social)
☐ Page 10: Insights (Parent: none, Template: Default Template)
☐ Settings → Reading → Set "Home" as homepage
☐ Test all pages - click links in navigation
```

---

## 🎯 COMMON MISTAKES TO AVOID:

### ❌ Mistake 1: Parent Not Set
```
Website & SEO
Parent: (no parent)  ← WRONG!
```
**Fix:** Select "Diensten" as Parent

### ❌ Mistake 2: Wrong Template
```
Over ons
Template: Default Template  ← WRONG!
```
**Fix:** Select "Over Ons" template

### ❌ Mistake 3: Content Added
```
Over ons
[Rich Text Editor with content]  ← WRONG!
```
**Fix:** Leave content area empty - template has all content

### ❌ Mistake 4: Wrong Permalink
```
Website & SEO
Permalink: website-seo  ← WRONG!
```
**Fix:** Should be "diensten-website-seo"

---

## 💡 PRO TIPS:

1. **Create "Diensten" page FIRST** - then create 5 service pages with it as Parent
2. **Check dropdown** - Parent dropdown mein "Diensten" dikhega after creating it
3. **Templates automatically show** - sabhi templates dropdown mein available honge
4. **No content needed** - templates already have complete content
5. **Order = Alphabetical** - WordPress automatically alphabetical order mein show karega
6. **Hierarchy visible** - Admin panel mein child pages indented dikhenge

---

## 🎉 DONE!

Sab pages create karne ke baad:
1. Visit: `yoursite.com`
2. Navigation test karo
3. All pages should work perfectly!

**Total Time: 10 minutes for all 10 pages** ⏱️

**Alhamdulillah - Setup Complete! 🚀**
