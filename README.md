### Kullandığım Paketler
Laravel Livewire paketi ile birlikte kodladım ajax kullanmak yerine livewire daha hızlı ve temiz kullanım sağlıyor. Laravel tabanını kullandığı içinde kurulum açısından basitti.

Random kişiler oluşturabilmek için https://randomuser.me/ apisini kullandım /database/seeders/CalisanlarSeeder.php içerisinde kullanımı var.

## Kurulum
Kurulum:

-git clone

-Terminal ekranına 'composer install' yazıyoruz.

-Ardından terminale 'php artisan key:generate' yaziyoruz.

-.env.example uzantılı dosyayı .example uzantısından kurtarıyoruz. Ve db name db username alanları kendimize göre değiştiriyoruz.

-Terminale 'php artisan migrate' yazıyoruz.

-Son olarak 61 tane random kullanıcı için terminale 'php artisan db:seed' yazıyoruz ve 'php artisan serve' ile uygulamamızı çalıştırıyoruz.

# İstenen Sorguların Ekran Görüntüleri
Fullstack Mevkisine Sahip Kişiler:
[![ek1](https://bazartrk.com/image/screencapture-127-0-0-1-8000-2022-08-02-15_30_26.png "ek1")](https://bazartrk.com/image/screencapture-127-0-0-1-8000-2022-08-02-15_30_26.png "ek1")

Junior Yetkinliğine Sahip 18 23 Yaş Arası Kişiler
[![ek2](https://bazartrk.com/image/screencapture-127-0-0-1-8000-2022-08-02-15_30_59.png "ek2")](https://bazartrk.com/image/screencapture-127-0-0-1-8000-2022-08-02-15_30_59.png "ek2")

Aynı Yetkinliğe, Şehire Sahip 18 25 Yaş Arası Kişiler
[![ek3](https://bazartrk.com/image/screencapture-127-0-0-1-8000-2022-08-02-15_31_47.png "ek3")](https://bazartrk.com/image/screencapture-127-0-0-1-8000-2022-08-02-15_31_47.png "ek3")

###End
