# NUSA — Social Impact & Humanitarian Crowdfunding Platform

> **Tagline:** *Together, We Make a Difference.*  
> **Subheading:** *A collective platform for a more resilient, empowered, and sustainable Indonesia.*

**NUSA** is a web-based crowdfunding and humanitarian action platform designed to facilitate public participation in addressing Indonesia's social, environmental, economic, and humanitarian challenges.

The platform provides a centralized space where individuals can discover fundraising initiatives, contribute financial assistance, monitor campaign progress, and learn about the collective impact of their contributions.

---

## 6 Primary Focus Areas

1. 🌿 **Environmental Protection** — Mangrove belt conservation, coastal ecosystem restoration, and sustainable environmental initiatives.
2. 🚨 **Disaster Relief and Recovery** — Emergency rapid response, nutritional support, and temporary shelter reconstruction for disaster-affected families.
3. 🩺 **Health and Wellbeing** — Critical pediatric medical interventions, mobile island clinics, and stunting prevention.
4. 📈 **Economic Empowerment** — Traditional fishermen equipment funding, micro-agriculture support, and rural MSME assistance.
5. 🎓 **Education** — Higher education scholarships and school facility renovations across rural 3T regions.
6. 🤝 **Social Welfare** — Nutritious food packages for solitary impoverished seniors, disability support, and orphaned youth aid.

---

## Tech Stack & Architecture

- **Backend Framework:** Laravel 11/12 (PHP 8.2+)
- **Database:** SQLite (default local development) / MySQL compatible
- **Frontend & Styling:**
  - **Headings Font:** Metropolis (Chris Simpson's authentic geometric sans, self-hosted)
  - **Body / UI Font:** Inter
  - **Design Palette:** Vermilion (`#D84941`), Charcoal (`#252F39`), Warm White (`#F4F3EE`), Muted Green (`#668A78`)
- **Admin Dashboard:** NUSA Console (customized Bootstrap 5 back-office)

---

## Getting Started

### 1. Requirements
- PHP >= 8.2 with PDO, OpenSSL, and Mbstring extensions
- Composer 2.x
- Node.js & npm (optional for Vite assets)

### 2. Installation
```bash
# Clone the repository
git clone https://github.com/rinzler69-wastaken/pa-pbfw.git
cd pa-pbfw

# Install composer dependencies
composer install

# Copy environment file & generate app key
cp .env.example .env
php artisan key:generate

# Run database migrations
php artisan migrate

# Start local development server
php artisan serve
```

### 3. Application Routes
- **Public Landing Page:** `http://127.0.0.1:8000`
- **Initiatives Directory:** `http://127.0.0.1:8000/campaigns`
- **Initiative Detail:** `http://127.0.0.1:8000/campaigns/1`
- **Online Donation Form:** `http://127.0.0.1:8000/donate`
- **Admin Console:** `http://127.0.0.1:8000/admin`
- **Admin Initiatives Management:** `http://127.0.0.1:8000/admin/campaigns`
- **Admin Donation Transactions:** `http://127.0.0.1:8000/admin/donations`

---

## Coursework Metadata
- **Course:** Pemrograman Berbasis Framework (PBF)
- **Institution:** Project Akhir Semester 7
- **Author:** Art Fazil ([@rinzler69-wastaken](https://github.com/rinzler69-wastaken))
