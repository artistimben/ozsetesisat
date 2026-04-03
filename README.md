# ÖZSE Tesisat Yönetim Sistemi

Bu proje, Hatay Dörtyol'da faaliyet gösteren ÖZSE Tesisat için modern, yönetilebilir ve şık bir web sitesi + CRM paneli olarak geliştirilmiştir.

## Özellikler

*   **Dinamik Web Sitesi:** Slider, Hizmetler, Projeler, Galeri, S.S.S. ve Blog bölümleri.
*   **İş Yönetimi (CRM):** Müşteri kayıtları, İş emirleri, Randevu takibi.
*   **Finans Takibi:** Gelir ve Gider kayıtları, Kasa durumu (Dashboard).
*   **Site Ayarları:** Logo, Telefon, WhatsApp, Sosyal Medya ve SEO ayarlarının panelden yönetimi.
*   **Çoklu Medya:** Projeler ve Galeri albümleri için çoklu resim yükleme desteği.

## Kurulum (Local)

Kendi bilgisayarınıza indirdiğinizde çalıştırmak için şu adımları izleyin:

1.  **Repoyu Klonlayın:**
    ```bash
    git clone https://github.com/artistimben/ozsetesisat.git
    cd ozsetesisat
    ```

2.  **Bağımlılıkları Yükleyin:**
    ```bash
    composer install
    npm install
    ```

3.  **Çevresel Ayarlar:**
    `.env.example` dosyasını `.env` olarak kopyalayın ve veritabanı ayarlarını yapın (Varsayılan olarak SQLite kullanılmıştır).

4.  **Veritabanı Kurulumu:**
    ```bash
    php artisan migrate
    php artisan db:seed
    ```

5.  **Dosya Bağlantısı (Önemli):**
    Görsellerin görünmesi için mutlaka şu komutu çalıştırın:
    ```bash
    php artisan storage:link
    ```

6.  **Çalıştırın:**
    ```bash
    php artisan serve
    ```

## Admin Bilgileri

*   **URL:** `http://127.0.0.1:8000/admin`
*   **E-posta:** `admin@admin.com`
*   **Şifre:** `password`

---
Geliştiren: Antigravity AI
