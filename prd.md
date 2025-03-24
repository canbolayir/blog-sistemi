# Blog Sistemi Geliştirme Planı (XAMPP Uyumlu)

## Proje Özeti
Bu proje, XAMPP ortamında yerel olarak çalışabilen, WordPress benzeri ancak daha hafif ve performanslı bir blog sistemi geliştirmeyi amaçlamaktadır. Sistem, SEO odaklı tasarımı ve optimizasyonlarıyla yüksek arama motoru görünürlüğü sağlayacak şekilde tasarlanacaktır.

## Kullanılacak Teknolojiler

### Backend
- **PHP 8.2+**: Yüksek performanslı, modern özelliklere sahip
- **Laravel 10+**: Temiz kod yapısı, SEO dostu URL'ler ve güçlü ORM
- **Composer**: PHP bağımlılık yönetimi

### Veritabanı
- **MariaDB 10.5+**: MySQL'den daha performanslı, XAMPP ile tam uyumlu

### Frontend
- **Alpine.js**: Minimal boyut (33KB), hızlı yükleme süresi
- **Tailwind CSS**: Optimize CSS çıktısı, utility-first yaklaşım
- **Vanilla JavaScript**: Gerektiğinde minimum JS kullanımı
- **HTMX**: JavaScript gerektirmeyen dinamik içerik güncelleme

### SEO ve Performans Araçları
- **Schema.org PHP Generator**: Yapılandırılmış veri oluşturma
- **Laravel SEO Tools**: Meta tag ve SEO dostu URL yönetimi
- **Intervention Image**: Resim optimizasyonu için PHP kütüphanesi
- **Laravel Debugbar**: Geliştirme sırasında performans analizi
- **HTML Minifier**: Sayfa boyutunu küçültme

### Önbellek Sistemi
- **Redis**: Sayfa önbelleği, veritabanı sorguları için önbellek
- **OPcache**: PHP kodunu önbelleğe alarak hızlandırma

## Proje Durumu (24.03.2025)
- **Tamamlanan Adımlar**: Geliştirme ortamı kurulumu, Laravel projesi oluşturma, veritabanı bağlantısı, temel model ve migration dosyalarının tasarımı ve çalıştırılması, Git repository oluşturulması, gerekli Laravel paketlerinin kurulumu (SEO Tools, Schema.org, Intervention Image, Laravel Debugbar), GitHub'a proje yüklendi
- **Mevcut Durum**: Projenin ilk aşaması tamamlandı ve GitHub'a yüklendi
- **Bir Sonraki Adımlar**: İleri geliştirme aşamalarına daha sonra devam edilecek - Factory ve Seeder'ların oluşturulması, rota yapısını kurma ve kimlik doğrulama sistemini yapılandırma

## GitHub Repository
Projenin kaynak kodu aşağıdaki GitHub repository'sinde bulunmaktadır:
- **Repository URL**: https://github.com/KULLANICI_ADINIZ/blog-sistemi
- **Son Commit**: CategoryFactory dosyası eklendi ve proje GitHub için hazırlandı 