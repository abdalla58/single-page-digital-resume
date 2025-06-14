# 🧾 Laravel CV/Resume Page

A personal digital resume web app built using **Laravel**, **Blade**, and **Tailwind CSS**. It allows you to display your resume dynamically which is loaded from Json or markdown, and you can export your CV as a downloadable PDF.

---

## 🛠️ Tech Stack

- [Laravel 10](https://laravel.com/)
- [Blade Templating](https://laravel.com/docs/blade)
- [Tailwind CSS](https://tailwindcss.com/)
- [dompdf](https://github.com/dompdf/dompdf) for PDF export

---

## ⚙️ Local Development Setup

To run this project locally:

1. **Clone the repository**:
   ```bash
   https://github.com/abdalla58/single-page-digital-resume.git
   cd single-page-digital-resume
2. **Install dependencies**:
    ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
3. **Run the application**:
    ```bash   
    php artisan serve 
4. **Open in browser**:
single-page-digital-resume.test

## ✏️ Editing  cv content 
you can update the content by updating the target file 

For JSON => storage/app/public/resume.json  
For Markdown => storage/app/public/resume.md

## 🧾 Testing
*you can test the app by running the following command*:
```bash   
    php artisan test
```

## 🚀 Deployment Guide
✅ Prerequisites
Before deploying, ensure your server has:

PHP 8.1 or newer

Composer

MySQL (if needed)

A web server (Apache or Nginx)

Laravel-compatible hosting (e.g., WebHostMost, Hostinger, Laravel Forge)
✅ Deployment Steps
Clone the repository to your server:
```bash
git clone h
```
✅ Deployment Steps
Clone the repository to your server:
```bash
git clone URL_ADDRESS.com/abdalla58/single-page-digital-resume.git
```
