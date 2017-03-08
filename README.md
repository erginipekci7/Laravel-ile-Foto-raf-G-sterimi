# Laravel-ile-Fotogaf-Gosterimi

Laravel kullanarak, 3 adet süper kahraman görselini ekranda gösteren bir projedir.

Route Yapısı

Routes dizinin altında bulunan web.php dosyasına /foto isteği gelmesi durumunda yönleneceği dizini belirtiyoruz.

Controller Yapısı

Terminalde, projemizin bulunduğu dizine ulaşarak php artisan komutlarından olan make:controller komutunu kullanarak yeni controller ımızı oluşturuyoruz. Projede kullandığımız controller -> FotoController FotoController.php içerisine oluşturacağımız blade template de kullanacağımız değişken vb. leri, FotoControllerın içerisinde oluşturduğumuz fotogoster metodunun içerisine ekliyoruz. Daha sonra return ile göstermek isteğimiz view olan 'foto' yu ve compact fonksiyonu ile bulunduğumuz controllerdan ulaşılmasını istediğimiz değişkenleri yazarak web.php den yola çıkan rotamızı view e ulaştırmış oluyoruz.

Blade Template Yapısı

Fotoğrafları ekranda göstermek için oluşturduğumuz foto.blade.php doyasında foreach döngüsünü kullanarak görselleri ekranda gösteriyoruz.
