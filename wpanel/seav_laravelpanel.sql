-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 21 Ara 2022, 14:30:28
-- Sunucu sürümü: 10.3.37-MariaDB-0ubuntu0.20.04.1
-- PHP Sürümü: 7.3.33-1+focal

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `seav_laravelpanel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `must` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `created_at`, `updated_at`, `title`, `slug`, `file`, `must`, `content`, `status`) VALUES
(37, '2021-09-17 06:34:14', '2022-03-22 14:17:31', 'Tatil Süreci', 'tatil-sureci', '6142c85b10790.jpg', 4, '<p>Macera severler için doğa keşfedilmemiş bir alandır. Doğanın her alanı mucizeler ve keşfedilmeyi bekleyen alanlarla doludur. Chingene Glamping tüm bunları gerçekleştirebileceğiniz alanlardan biridir. Sizlere farklı bir konaklama imkânı ve macera alanı oluşturan yeni nesil çadır tatili ile sizleri karşılıyoruz. Doğanın her alanını keşfedebileceğiniz &nbsp;hayatını deneyimleyebileceğiniz harika bir yer sunuyoruz. Chingene Glamping tatil süreci ile yeni bir deneyim yaşayabilir ve tatilinizin rotasını çok farklı bir yöne çevirebilirsiniz.</p><h4><strong>Sizleri Neler Bekliyor?</strong></h4><p><br><strong>ANTALYA,</strong> İtalya’da Bologna’da yaşayan çingene ruhunu yaşamanız adına oluşturulmuş bir tatil alanıdır. Olympos Plajında bulunan yerimizde sizleri çadır, karavan ve özel platform alanı ile karşılamaktayız. İster sevgiliniz ister aileniz, isterseniz de arkadaşlarınız ile kalabileceğiniz huzur ve macera dolu bir alanı sizlere sunuyoruz.</p><p>Rezervasyonunuzu bizlere ait <strong>OTA</strong> (Otel Travel Agency) kanalından yapabilir ve müsaitlik durumunu kontrol edebilirsiniz. Sürekli olarak güncellenen yapımız ve extranet alanlarımız ile sizlere her zaman son bilgileri sunmaktayız. Bu sayede konaklama noktasında istenmeyen olaylar ya da sorunlu bir tatil sürecini sizlere yaşatmıyoruz. En iyi hizmeti alabileceğiniz tatil alanımızda sizler için en iyi etkinlikleri de düzenlemekteyiz.</p><p>Konaklama olarak üç farklı alanı sizlere sunuyoruz. Çadır konaklamasında sevgiliniz ya da eşiniz ile kalabileceğiniz, otel odasını aratmayacak bir alan sunuyoruz. İçerisinde klima, duş ve tuvalet imkânı olan çadırlarımız, doğa içerisindeki lüksü sizlere sunuyor. Karavan konaklamalarımız da ise arkadaşlarınız ile kalabileceğiniz 4 kişilik alanlar sunuyoruz. Tamamen sizlere özel Çingene -Gipsy- ruhu ile hazırlanmış olan bu alanlarımız, en iyi konaklamayı sağlıyor.</p><p>VİLLA isteyen müşterilerimize kendi çadırlarını getirme imkânı da sunuyoruz. Özel platform alanımızda sizler için yer ayırarak, en iyi şekilde konaklamanızı sağlıyoruz. Konaklama noktasında en iyileri sunan tatil yapımız, sizleri doğa ve doğa sporları ile de bir araya getirmektedir.</p><ul><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li></ul>', '1'),
(36, '2021-09-17 06:34:17', '2022-03-22 14:17:31', 'Konaklama ve Aktiviteler', 'konaklama-ve-aktiviteler', '6142c7c092a0e.jpg', 5, '<p><strong>Konaklama İmkanları</strong><br>Çingene kültürüne baktığımızda çadırlar ilk evleri olarak gösterilmektedir. Belirli dönemlerde çadır içerisinde bir arada yaşayan çingeneler, bu alanları en konforlu haline getirmeyi de başarmıştır. Zamanla değişen yapıları ve ev sistemleri ile kendi göçebe hayatlarını da sürdürmektedir. Bizlerde bu özgür ruhlardan esinlenerek, sizlere unutulmaz bir tatil deneyimi yaşatmak için yeni bir konaklama sistemi sağladık.</p><p><strong>ANTALYA </strong>ile içi tam konfor ile düzenlenmiş en iyi sistemlerimizi sizlere sağlamaktayız. Eski çadır tatillerinin yanı sıra daha konforlu bir alan oluşturuyoruz. Sizler için sağladığımız otel konforunu, çadırlarımıza ve karavanlarımıza kadar uyguluyoruz. Tüm bu uygulamaları yaparken de Gipsy ruhundan ödün vermiyoruz. Tatillerinizde daha farklı deneyim yaşamak istiyorsanız ve dünyaya farklı bir kültürün gözünden bakmak istiyorsanız, bu tatil tam size göre!</p><p>Tatil anlayışı kişiden kişiye değişmektedir. Konaklama yöntemleri, aranan konfor ve olanak oranları da aynı orantıda farklılık gösterebilir. Chingene Glamping de tüm bu konfor sistemini tek alanda en iyi şekilde sizlere sunmaktadır. Günlük hayatın stresinden uzaklaşmanız ve kendinizi doğaya bırakmanızın tam zamanı! Farklı aktiviteler, doğa sporları, deniz, kum, güneş ve yeni maceralarla doğanın sizlere sunduğu her şeyi keşfedebilirsiniz.</p><p><strong>Yürüyüş Turu</strong></p><p><br>Tatil süresince dinlenmeyi tercih eden kişiler ve maceraya arayışında olan kişiler vardır. Macera ve etkinliklerin en iyi şekilde sunulduğu <strong>ANTALYA&nbsp; aktiviteleri</strong> ile yeni bir dünyaya kapılarınızı açacaksınız. Yürüyüş turları herkesin bildiği gibi sakin ve keşif amaçlı yapılmaktadır. Ama keşfedilmemiş bir doğa ve harika bir manzaraya karşı en huzurlu yürüyüşünüzü yapmanızı sağlıyoruz. İsterseniz rehber eşliğinde isterseniz kendi rotanızı oluşturarak bu etkinliği gerçekleştirebilirsiniz.</p><p><strong>Moto Cross</strong></p><p><br>Etkinlik arayışında olan ve hız tutkusu olan tüm herkesi bu etkinliğimize davet ediyoruz. Red Bull Sea to Sky organizasyonunun düzenlendiği parkurlarda, tüm motor tutkunlarına özel etkinlikler düzenliyoruz. Güvenlik ve keyifli bir süreç geçirmeniz için de rehberlerimiz eşliğinde sizlere özel bir anı oluşturuyoruz. Hız, tutku ve adrenalini tek bir ana sığdırmak isteyen herkesi etkinliklerimizde görmek istiyoruz.</p><p>&nbsp;</p>', '1'),
(35, '2021-09-17 06:34:21', '2022-03-22 14:17:31', 'Yeni Bir Tatil Rotası', 'yeni-bir-tatil-rotasi', '6142c7159493c.jpg', 1, '<p>Tatil yıl boyu herkesin beklediği anlardan biridir. Yaz aylarının gelmesi ile birlikte yavaş yavaş tatil başlamakta ve tatile gidilecek yer merak konusu olmaktadır. Bu yıl tatilinizin rotasını Antalya’ya çevirmeye ne dersiniz? <strong>Antalya </strong>eşsiz doğa harikası ve farklı kültür tatili ile sizlere yeni nesil bir çadır tatili sunmaktadır. En yeni etkinlikleri ve çingene kültürünü yaşatan tatil sistemimiz içerisinde yeni bir deneyim yaşayacaksınız.</p><h4><strong>Tatİl</strong></h4><p><br>Çingene ifadesi çok eski yıllarda bu toplum için verilmiş bir isimdir. Renkli kişilikleri, yaşam tarzları ve evleri ile de dikkat çeken çingeneler, günümüze de örnek olmuşlardır. <strong>Antalya&nbsp;</strong> tamamen bu toplumdan ilham alarak, tatil alanlarını oluşturmuş ve sizlere sunmuştur. Tatil bölgemizde çadır ve karavanlarla konaklamanızı sağlıyor, yeni bir deneyim yaşamanıza da olanak sağlıyoruz.</p><ol><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li></ol><p>Olympos doğa harikası bir yer olarak keşfedilmemiş alanlarla doludur. Bu alanları keşfetmenize olanak sağlarken, doğa içerisinde konforlu bir tatil yapmanızı da sağlıyoruz. <strong>Antalya&nbsp;</strong> denildiğinde ilk olarak kültür tatili gibi gelse de konfor alanını büyük oranda yaşatan alanlardan da biridir. Geniş çadırlarımız ve iç döşemelerimiz ile fermuarı çektikten sonra dış dünya ile bağınızı kesebilir ve konfor alanınıza çekilebilirsiniz.</p><p><strong>Tutkunun Adresi</strong><br>Antalya Olympos her yıl tatil yapmak isteyen kişiler tarafından akın edilen alanlardan biridir. Ancak otel kapsamında yapılan bu tatiller, doğayı ve bölgeyi keşfetmenizi sağlayamaz. Sizlere sunduğumuz yeni nesil çadır tatili anlayışı ile hem doğa içerisinde konforlu bir konaklama hem de keşfetme olanağı sağlıyoruz. <strong>Antalya&nbsp;</strong> sunduğu etkinlikler ve harika gastronomisi ile her anlamda en iyiyi sunmaktadır</p><p>&nbsp;</p><p>Karavanlarımız tamamen Gipsy ruhu ile hazırlanmıştır. Arkadaşlarınız ile birlikte kalabileceğiniz karavanlarımız 4 kişiliktir. Konforlu iç alanı ve teras yapısı ile aradığınız farklılıkları sizlere sunuyoruz. Aynı zamanda birlikte yapabileceğiniz aktivitelerimiz arasında sakinliği ve macerayı seçebilirsiniz. Herkese uygun etkinliklerimiz ile unutamayacağınız anlar yaşayabilirsiniz. <strong>Antalya&nbsp;</strong> sunduğu hizmetlerle birlikte alanında da en iyilerini sizlere sağlamaktadır.</p><p><strong>ULaşım</strong></p><p><br>Antalya’ya birçok farklı noktadan ulaşım sağlayabilirsiniz. Geleceğiniz bölge kapsamında uçak ya da otobüs yolculuklarını tercih edebilir ve dilediğiniz konforda gelebilirsiniz. Antalya’ya geldikten sonra ise tatil alanımıza gelmek için belirli otobüsler kullanabilirsiniz. Sizlere özel sağladığımız ulaşım araçları ile alanımıza gelebilir ya da farklı yollar tercih edebilirsiniz. Araç ile geliyorsanız, Olympos sınırlarını takip edip Yazır mahallesine ulaşmalısınız.</p><p>&nbsp;</p>', '1'),
(34, '2021-09-17 06:34:24', '2022-03-22 14:17:31', 'Olympos - Antalya', 'olympos-antalya', '6142c59687c50.jpg', 6, '<p>Antalya güney sahillerinde&nbsp;Phaselis’ten sonra ikinci önemli liman kenti&nbsp;Olympos’tur. Şehir adını 16 kilometre kuzeyindeki Toroslar\'ın batı uzantılarından biri olan 2 bin 375 metre yüksekliğe sahip&nbsp;Tahtalı Dağı’ndan alır.&nbsp;Beydağları-Olympos Milli Parkı&nbsp;sınırları içindedır. Kesin kuruluş tarihi bilinmemekle birlikte İ.Ö.167–168 yılarında basılan Likya Birlik sikkelerinde adı geçen Olympos,&nbsp;Likya Birliği’nde üç oy hakkına sahip altı şehirden biridir. Birlik\'te Likya’nın doğusunu temsil etmiştir. Kentin günümüze ulaşmış kalıntılarının çoğu orman içinde ağaç ve çalılarla örtülü olup&nbsp;Helenistik, Roma, Bizans&nbsp;dönemlerine aittir. Olympos’un günümüze kadar ulaşmış kalıntıları genellikle doğudan batıya doğru, hızla denize akan bir ırmağın ağzında ve her iki yakasında yer alır. Antik dönemde kenti ikiye bölen nehir yatağı bir kanal içine alınarak her iki yakası da iskele olarak kullanılmış ve köprü ile birbirine bağlanmıştır.&nbsp;</p><ul><li>Bugün köprünün bir ayağı yerinde durmaktadır. Güney kıyıda, Hellenistik Dönem\'in çokgen örgülü duvarı ile yanındaki Roma ve Bizans onarımlarını işaret eden bölümü görülmektedir. Nehir ağzına yakın bir yerde küçük ve dik akropolde geç dönemlerden kalan yapı kalıntıları yer alır. Irmağın güney kıyısındaki Hellenistik temelli ve Roma onarımlı küçük tiyatro oldukça harap olup, girişin bir yanı iyi korunmuş durumdadır.</li></ul><p>Şehrin görülebilir diğer önemli yapısı ise ırmak ağzının 150 metre batısında yer alan tapınak kapısıdır. İon düzeninde küçük bir tapınağa ait olduğu mimari parçalardan&nbsp;Roma İmparatoru Markus Aurellius&nbsp;(İ.S. 172–173) adına yapıldığı da kapı önündeki heykel kaidesinden anlaşılmaktadır. Kalıntılar arasında en ilginci&nbsp;Antalya Müzesi\'nce yürütülen kazılarla gün ışığına çıkarılmış olan&nbsp;Kaptan Eudomus’un Lahdi\'dir. Nehir ağzının hemen yanında kayalığın oyuğunda yer alan lahit hem duygu dolu şiirsel ithaf yazıtında kaptanın adını vermesi hem de uzun kenarındaki gemi kabartmasında gemisinin şeklini vermesi açısından da büyük önem göstermektedir.&nbsp;</p><ul><li><i>Olympos’un doğusunda, sahilden 300 metre ileride Carettaların yumurta bıraktığı muhteşem kumsalı ve pek çok bitkinin yaşadığı sahil kumulları ile ünlü Çıralı yerleşimi yer alır. Kentin birkaç kilometre güneybatısındaki Çakaltepe olarak anılan yükseltinin güney yamacından devamlı olarak alev çıkar. Özellikle geceleri çok etkileyici olan bu doğa olayı metan gazının asırlardır aynı noktadan yeryüzüne ulaşmasından başka bir şey değildir.&nbsp;</i></li></ul><p>&nbsp;</p><p>Bu doğa olayı&nbsp;Likya’da yaşayan ve soluğundan ateş püskürdüğüne inanılan&nbsp;Khimaira Canavarı&nbsp;ile özdeşleşmiş ve bu sayede Olympos,&nbsp;Bellerophontes Efsanesi\'ne ev sahipliği yapmıştır. Zamanla demirci&nbsp;Tanrı Hephaistos’un kült merkezi, Roma ve Bizans dönemlerinde de dini merkez olarak kullanılan alanda yer yer orijinal blokları görülebilen kutsal yol ile alevlerin etrafındaki bir takım yapıların temellerini görmek mümkündür. İç duvarları yer yer freskolarla süslü&nbsp;Bizans Kilisesi&nbsp;ise alandaki en anıtsal kalıntıdır.</p>', '1'),
(38, '2021-09-17 06:34:29', '2022-09-21 12:52:05', 'Antalya Turları', 'antalya-turlari', '6142c99bd74d7.jpg', 0, '<p>Tatil kişilerin iş stresinden ve gündelik sorunlardan uzaklaştığı alanlardan biridir. Ancak tatil öncesinde gidilecek yeri bulmak, iyi bir tatil imkânı yakalamak ve farklı olanaklardan yararlanmak çok önemlidir. Doğru tatili bulmak her zaman kolay olmasa da sizlere farklı deneyimler yaşatacak Chingene Glamping’i sunuyoruz. Olympos Plajı yakınlarında, doğanın ortasında yer alan çadır ve karavan tatilinin bir parçasıdır. Tatilinizde hem lükse hem de doğaya yer vermek isterseniz, hizmetlerimiz tam size göre!</p><p>Dünyanın dört bir yanından farklı etkinlikler ve tatil imkanları bizleri karşılamaktadır. Çöl festivalleri ve tatilleri, doğa tatilleri ya da hiç aklınıza dahi gelemeyecek farklı konseptler yer almaktadır. Türkiye’de ise en iyi ve yenilikçi konseptimiz olan Gipsy çadır tatili hizmetimizi size sunuyoruz. Tamamen kültürü yaşattığımız bu alanda, konaklama ve çadır hizmetlerimiz sizlerin konforuna göre düzenlenmektedir. Şehirden doğaya kaçmak ve farklı bir deneyim yaşamak istiyorsanız, Chingene Glamping Olympos’ta sizleri bekliyoruz!</p><p>Rezervasyonunuzu bizlere ait <strong>OTA</strong> (Otel Travel Agency) kanalından yapabilir ve müsaitlik durumunu kontrol edebilirsiniz. Sürekli olarak güncellenen yapımız ve extranet alanlarımız ile sizlere her zaman son bilgileri sunmaktayız. Bu sayede konaklama noktasında istenmeyen olaylar ya da sorunlu bir tatil sürecini sizlere yaşatmıyoruz. En iyi hizmeti alabileceğiniz tatil alanımızda sizler için en iyi etkinlikleri de düzenlemekteyiz.</p><p>&nbsp;</p><h4><strong>Yeni Nesil Çadır Tatili</strong></h4><p><br>Tatil denildiğinde her zaman akla gelen lüks otellerdir. Deniz, havuz ve tüm olanakların bir arada sunulduğu bu otellerden, yeni nesil çadır tatiline geçmenin tam sırası! Tatilin farklı bir boyutunu sizlere sunan &nbsp;ve diğer etmenleri ile yeni nesil bir konaklama hizmetini sizlere sunuyor. Yeni nesil çadır tatili ile alanında en iyiyi sunuyor, konforunuzu aynı şekilde devam ettiriyoruz. Macera ve lüksü aynı anda yaşamak istiyorsanız, sizlere sunduğumuz bu yeni nesil hizmeti denemelisiniz!</p><p>&nbsp;</p><ul><li>dsfsdf</li><li>sdfsdf</li></ul><p><i>sdfsdfsdf sdfsdf</i></p>', '1'),
(41, '2021-10-01 10:14:47', '2022-03-22 14:17:31', 'blog blog1', 'blog-blog1', '6156df972a73d.jpg', 2, '<p>Pellentesque placerat eleifend semper. Sed auctor in ligula ut eleifend. Nullam non diam eu ipsum dignissim tincidunt. Vestibulum non diam id tortor auctor efficitur eget tempus turpis. Fusce id convallis velit. Praesent rhoncus mi ut aliquet ultricies. Praesent ut luctus mauris. Integer rhoncus pretium ante, quis finibus augue commodo a. Vestibulum dignissim nisl nec semper volutpat. Nam non vestibulum massa. Vivamus nec ultrices massa, eget lacinia ex. Sed lobortis hendrerit nulla, quis dictum sapien gravida sed. Pellentesque a lorem a dolor fringilla ultricies quis ut enim. Mauris bibendum, lectus et dignissim ultricies, ligula ipsum luctus magna, at laoreet lorem magna a erat. Pellentesque laoreet aliquam elit vel dictum. Nullam vel enim non quam feugiat malesuada.</p><p>In mattis odio at dignissim fringilla. Maecenas vel varius nibh. Nunc dictum felis non sapien feugiat gravida imperdiet sit amet metus. Nullam felis tortor, pretium eu elit sed, tristique interdum neque. Donec gravida in tortor id condimentum. Nunc eget tortor eros. Aenean consectetur justo vel nibh vehicula imperdiet. Vivamus id justo iaculis, tincidunt nibh sit amet, hendrerit felis. Vivamus sapien lacus, consequat in lorem vel, rhoncus sagittis felis. Etiam et rutrum velit. In accumsan felis id elit eleifend pulvinar. Sed hendrerit, arcu et gravida fermentum, nunc ligula commodo ligula, at pharetra tortor est nec felis. Vestibulum feugiat et ante ut volutpat.</p><p>Curabitur porta id ex tristique commodo. Nullam gravida turpis vel neque scelerisque posuere. Nunc euismod rhoncus est, ac aliquet sapien finibus id. Curabitur varius, massa sit amet malesuada malesuada, nisi turpis scelerisque elit, quis accumsan nulla libero in magna. Sed blandit fringilla est vel dignissim. Fusce fermentum viverra viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi sed massa ultricies, sollicitudin mi id, efficitur elit. Praesent leo ligula, iaculis in lobortis nec, dictum vel tellus.</p><p>In malesuada vel velit accumsan elementum. Vestibulum id varius nisl. Pellentesque sollicitudin tellus vel finibus rutrum. Sed iaculis bibendum orci. Fusce venenatis, dui egestas consequat lacinia, risus metus pharetra turpis, quis tempus libero ante vulputate metus. Curabitur accumsan iaculis imperdiet. Curabitur in velit et urna lacinia molestie at sed magna. Nulla finibus nisl sapien, quis varius nunc venenatis quis. Mauris tincidunt tincidunt turpis, in posuere odio efficitur ut. Nulla nunc sem, porta vel imperdiet et, tristique id nibh. Vestibulum ante lectus, faucibus non felis sit amet, faucibus porta magna. Nullam non mollis metus. Nam ultricies finibus est aliquam consequat. Sed facilisis bibendum nulla vitae mollis.</p>', '1'),
(42, '2021-10-01 10:16:43', '2022-03-22 14:17:31', 'blog blog2', 'blog-blog2', '6156e00bcec9e.jpg', 3, '<p>Suspendisse aliquam efficitur tortor, id aliquet massa semper nec. Donec luctus auctor consectetur. Praesent pretium sit amet nunc eu aliquet. Quisque viverra neque ac massa viverra posuere. Ut a auctor orci, nec euismod nulla. In vitae lorem metus. Mauris sit amet faucibus augue. Fusce finibus, turpis quis tempus vulputate, lectus dolor imperdiet sapien, nec vestibulum dolor turpis volutpat leo.</p><p>Pellentesque dapibus malesuada quam id imperdiet. Praesent in placerat leo. In at metus in leo faucibus venenatis ac vitae est. Nulla tempus lorem et libero suscipit sodales. Duis tempus non diam quis aliquet. Pellentesque ut gravida arcu. Pellentesque eu laoreet nisi. Quisque luctus turpis nec lorem tincidunt vestibulum. Mauris accumsan, enim at gravida bibendum, enim ante porta nibh, id dictum mi nunc nec dolor. Aenean tristique egestas justo, non gravida orci semper ac. Ut sed leo enim. Duis id eleifend nisl. Pellentesque ac massa sodales, semper mauris sed, posuere dolor. Sed a velit convallis, tempus urna in, pulvinar neque. Morbi vel ligula porta, feugiat diam in, sodales nisi. Sed convallis leo id leo sagittis, et mollis dui maximus.</p>', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headerbg` varchar(255) DEFAULT NULL,
  `headertext` varchar(255) DEFAULT NULL,
  `footerbg` varchar(255) DEFAULT NULL,
  `footertext` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `colors`
--

INSERT INTO `colors` (`id`, `headerbg`, `headertext`, `footerbg`, `footertext`, `description`, `created_at`, `updated_at`) VALUES
(1, '#371363', '#ffffff', '#716a6a', '#f7f7f7', NULL, NULL, '2022-09-15 17:03:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapcode` text DEFAULT NULL,
  `sendmail` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `contacts`
--

INSERT INTO `contacts` (`id`, `mapcode`, `sendmail`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.2290432552177!2d30.78079241464258!3d36.860936071979424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39b40cc96e85f%3A0x516024537e9cefb7!2sResclick%20Channel%20Manager!5e0!3m2!1str!2str!4v1632927132488!5m2!1str!2str', 'deneme123@deneme.com', '1', NULL, '2021-09-29 08:17:08', '2022-06-29 10:27:26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `corparates`
--

CREATE TABLE `corparates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `corparates`
--

INSERT INTO `corparates` (`id`, `title`, `content`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Biz kimiz', '<h4>Kurumsal menüsünden düzenlenir</h4><p>Burada içerik olacak</p><p><i>Burada içerik olacak</i></p><ul><li>Burada içerik olacak</li><li>Burada içerik olacak</li><li>Burada içerik olacak</li><li>Burada içerik olacak</li></ul><p><i>Burada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacak</i></p><p><i>Burada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacakBurada içerik olacak</i></p>', '61447cb4d955f.jpg', '1', NULL, '2021-09-17 14:32:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallerys`
--

CREATE TABLE `gallerys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `must` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `gallerys`
--

INSERT INTO `gallerys` (`id`, `page`, `title`, `file`, `status`, `must`, `created_at`, `updated_at`) VALUES
(83, 'page-3', 'Page-3', '6142ccf32aacf.jpeg', '1', 1, '2021-09-17 04:49:55', '2021-10-01 13:12:18'),
(82, 'page-2', 'Page-2', '6142cc9e00a3d.jpg', '1', 5, '2021-09-17 04:48:30', '2022-12-03 12:42:58'),
(81, 'page-2', 'Page-2', '6142cc9ddf99b.jpg', '1', 3, '2021-09-17 04:48:29', '2022-12-03 12:42:58'),
(80, 'page-2', 'Page-2', '6142cc9dc2ee4.jpg', '1', 1, '2021-09-17 04:48:29', '2022-12-03 12:42:58'),
(79, 'page-2', 'Page-2', '6142cc9db274d.jpg', '1', 4, '2021-09-17 04:48:29', '2022-12-03 12:42:58'),
(78, 'page-2', 'Page-2', '6142cc9d7c462.jpg', '1', 0, '2021-09-17 04:48:29', '2022-12-03 12:42:58'),
(77, 'page-2', 'Page-2', '6142cc9d773ce.jpg', '1', 2, '2021-09-17 04:48:29', '2022-12-03 12:42:58'),
(76, 'page-1', 'Page-1', '6142cc5548863.jpg', '1', 0, '2021-09-17 04:47:17', NULL),
(75, 'page-1', 'Page-1', '6142cc553a2ea.jpg', '1', 1, '2021-09-17 04:47:17', '2021-10-04 15:06:09'),
(73, 'page-1', 'Page-1', '6142cc5502b35.jpg', '1', 5, '2021-09-17 04:47:17', '2022-10-03 17:25:09'),
(70, 'page-1', 'Page-1', '6142cc5495ef6.jpg', '1', 2, '2021-09-17 04:47:16', '2022-10-03 17:25:09'),
(69, 'page-1', 'Page-1', '6142cc547c53f.jpg', '1', 3, '2021-09-17 04:47:16', '2022-10-03 17:25:09'),
(68, 'page-1', 'Page-1', '6142cc544d197.jpg', '1', 6, '2021-09-17 04:47:16', '2022-06-14 11:44:44'),
(67, 'page-1', 'Page-1', '6142cc543d6cb.jpg', '1', 4, '2021-09-17 04:47:16', '2022-10-03 17:25:09'),
(63, 'kurumsal', 'Kurumsal', '6142c9e9384a4.jpg', '1', 3, '2021-09-17 04:36:57', '2022-12-03 12:42:55'),
(61, 'kurumsal', 'Kurumsal', '6142c9e903bfe.jpeg', '1', 6, '2021-09-17 04:36:57', '2022-12-03 12:42:55'),
(58, 'kurumsal', 'Kurumsal', '6142c9e88c0fc.jpg', '1', 1, '2021-09-17 04:36:56', '2022-12-03 12:42:55'),
(84, 'page-3', 'Page-3', '6142ccf336c7a.jpeg', '1', 2, '2021-09-17 04:49:55', '2021-10-01 13:12:18'),
(85, 'page-3', 'Page-3', '6142ccf36961c.jpeg', '1', 3, '2021-09-17 04:49:55', '2021-10-01 13:12:09'),
(86, 'page-3', 'Page-3', '6142ccf3896c0.jpeg', '1', 4, '2021-09-17 04:49:55', '2021-10-01 13:12:09'),
(87, 'page-3', 'Page-3', '6142ccf3af0b7.jpeg', '1', 5, '2021-09-17 04:49:55', '2021-10-01 13:11:41'),
(88, 'page-3', 'Page-3', '6142ccf3db84a.jpeg', '1', 6, '2021-09-17 04:49:55', '2021-10-01 13:11:41'),
(89, 'page-3', 'Page-3', '6142ccf3ed964.jpeg', '1', 0, '2021-09-17 04:49:55', '2021-10-01 13:12:12'),
(90, 'page-3', 'Page-3', '6142ccf41aeb2.jpeg', '1', 7, '2021-09-17 04:49:56', '2021-10-01 13:11:41'),
(91, 'page-3', 'Page-3', '6142ccf441f63.jpeg', '1', 8, '2021-09-17 04:49:56', '2021-10-01 13:11:41'),
(92, 'odalar', 'Genel Resimler', '61447ab18c1f5.jpg', '1', 1, '2021-09-17 11:23:29', '2022-06-14 11:44:53'),
(93, 'odalar', 'Genel Resimler', '61447ab193397.jpg', '1', 2, '2021-09-17 11:23:29', '2022-06-14 11:44:53'),
(94, 'odalar', 'Genel Resimler', '61447ab1afd75.jpg', '1', 5, '2021-09-17 11:23:29', '2022-06-09 09:52:11'),
(95, 'odalar', 'Genel Resimler', '61447ab1bb716.jpg', '1', 6, '2021-09-17 11:23:29', '2022-06-09 09:52:11'),
(97, 'kurumsal', 'Kurumsal', '614497230d8c9.jpg', '1', 0, '2021-09-17 13:24:51', '2022-12-03 12:29:05'),
(98, 'kurumsal', 'Kurumsal', '6144972321908.jpg', '1', 2, '2021-09-17 13:24:51', '2022-12-03 12:42:55'),
(100, 'kurumsal', 'Kurumsal', '614497233e25d.jpg', '1', 5, '2021-09-17 13:24:51', '2022-12-03 12:42:55'),
(102, 'odalar', 'Galeri', '6156df0f74383.JPG', '1', 3, '2021-10-01 10:12:31', '2022-06-14 11:44:53'),
(104, 'odalar', 'Galeri', '6156df108714f.JPG', '1', 4, '2021-10-01 10:12:32', '2022-06-14 11:44:53'),
(108, 'kurumsal', 'Kurumsal', '615eb0c175b4a.jpg', '1', 4, '2021-10-07 08:33:07', '2022-12-03 12:42:55'),
(106, 'kurumsal', 'Kurumsal', '615af31fdc212.jpg', '1', 7, '2021-10-04 12:27:12', '2022-12-03 12:29:03'),
(107, 'odalar', 'Galeri', '615af36bd25a8.jpg', '1', 0, '2021-10-04 12:28:28', '2021-10-04 15:28:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_10_104047_create_settings_table', 1),
(5, '2021_06_15_125305_create_blogs_table', 2),
(6, '2021_07_02_113154_create_pages_table', 3),
(7, '2021_07_02_115638_create_pages_table', 4),
(8, '2021_07_12_071949_create_sliders_table', 5),
(9, '2021_09_09_065222_create_corparates_table', 6),
(10, '2021_09_13_071307_create_gallerys_table', 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `must` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `created_at`, `updated_at`, `title`, `slug`, `file`, `must`, `content`, `status`) VALUES
(12, '2021-09-17 04:46:25', '2022-12-03 12:28:59', 'Konaklama', 'page-1', '6142cc2156725.jpg', 0, '<h3><strong>Villa 2 Bahçe Manzaralı ( 1 Banyolu )</strong></h3><p>2 Yatak Odası (1 Double Yataklı +1 tane 2 SNG Yataklı Oda ) / 2. ve 3. Katta</p><h3><strong>Villa 2 Bahçe Manzaralı ( 2 Banyolu )</strong></h3><p>2 Yatak Odası ( 1 Double Yataklı +1 Tane 2 SNG Yataklı Oda) / Giriş Katta</p><ul><li>4 Yetişkin +1 Çocuk</li><li>Uydu Yayınlı LCD TV</li><li>Direkt Hatlı Telefon</li><li>Halı veya Seramik Kaplı Zemin</li><li>Banyo Duşa Kabin/Küvet – WC</li><li>Saç Kurutma Makinesi</li><li>Elektronik Kasa (ücretsiz)</li><li>Balkon</li></ul>', '1'),
(13, '2021-09-17 04:48:11', '2022-12-03 12:42:48', 'Restaurant', 'page-2', '6142cc8b8c394.jpg', 2, '<h2>Lorem Ipsum Nedir?</h2><p><strong>Lorem Ipsum</strong>, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p><p>1500\'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.</p><p>sdfsdf</p>', '1'),
(17, '2021-09-17 11:22:57', '2022-12-03 12:42:48', 'Galeri', 'odalar', '61447a911bcb0.jpg', 1, '<p>afadfşknfadfnpafpafpafpa</p>', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mrstop68@gmail.com', '$2y$10$oLye3AUQwJHBhSAIFMx.BOQWn0kuv2osVi8kmzWqpcEz.5uRXNcmu', '2021-07-26 08:57:30'),
('deneme@gmail.com', '$2y$10$qNVzuZMBD/Jma5bt8eNGwuo2hqFdGbbypCmFIbfmusR.o9tYPQeRe', '2021-07-29 07:23:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` text NOT NULL,
  `must` varchar(255) NOT NULL,
  `delete` enum('0','1') NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `description`, `key`, `value`, `type`, `must`, `delete`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Belek River Villa | Side / ANTALYA', 'Title', 'Web panel', 'text', '0', '0', '1', NULL, '2022-10-03 17:25:00'),
(2, 'Belek River Villa,  170 odasıyla hizmet vermektedir. Antalya’nın en gözde turizm bölgesi Belek’te yemyeşil bir doğanın içinde ve Beşgöz Nehrinin kıyısında bulunan tesisimiz, Belek alışveriş ve eğlence merkezlerine yalnızca 3 km uzaklıktadır.', 'Description', 'hazır web site paneli', 'text', '3', '0', '1', NULL, '2022-03-22 14:13:21'),
(3, '6142bca79b2ea.svg', 'Logo', 'logo.png', 'file', '2', '0', '1', NULL, '2022-10-03 17:25:00'),
(4, '6142bc9064c5d.png', 'icon', 'icon.png', 'file', '1', '0', '1', NULL, '2022-10-03 17:25:00'),
(17, 'Kadriye Mah. Canada Cad. No:2-63/1P PK: 07500Serik / Antalya / TÜRKİYE', 'Adres', 'Açık Adres', 'textarea', '4', '0', '1', NULL, '2021-10-05 21:35:50'),
(24, '+90 533 666 99 66', 'Phone1', 'phone1', 'text', '5', '0', '1', NULL, '2021-10-05 21:35:50'),
(25, '+90 212 222 22 33', 'Phone2', 'phone2', 'text', '6', '0', '1', NULL, '2021-09-10 09:43:57'),
(26, 'deneme@resclick.com', 'Mail', 'mail', 'textarea', '7', '0', '1', NULL, '2021-09-10 10:31:50'),
(27, '<p>Ayarlar menüsünden düzenlenir-phone 1 yan taraftaki numaradır.</p><p>&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>', 'PhoneText', 'Ptext', 'textarea', '8', '0', '1', NULL, '2021-09-16 06:49:09'),
(28, 'Copyright © Belek River Villa', 'Copyright', 'copyright', 'text', '9', '0', '1', NULL, '2021-10-01 23:00:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `must` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `title`, `slug`, `url`, `file`, `must`, `content`, `status`) VALUES
(23, '2021-09-17 03:50:29', '2022-12-03 12:42:43', 'BELEK RİVER VİLLA', NULL, NULL, '6142bf05255ea.jpg', 2, '<p>Huzurun ve Konforun Adresi</p>', '1'),
(24, '2021-09-17 04:13:01', '2022-12-03 12:42:43', 'BELEK RİVER VİLLA', NULL, NULL, '6142c46de5bb2.jpg', 0, '<p>Muhteşem Tatil Fırsatı</p>', '1'),
(25, '2021-09-17 04:14:07', '2022-12-03 12:42:43', 'BELEK RİVER VİLLA', NULL, NULL, '6142c4a44df0f.jpg', 1, '<p>Özel Yemekler</p>', '1'),
(26, '2021-09-17 11:58:23', '2022-12-03 12:42:43', 'Sahil', NULL, NULL, '614482df5a252.jpg', 3, NULL, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'deneme ee', 'p@p', '$2y$10$lhx/1vhdCY9wlcoDhJgepuedFgyepP31DE20tUeasbCeWd9gT3Sfq', NULL, '2021-09-17 13:36:06', '2021-09-17 13:36:06'),
(7, 'harun isci', 'harun.isci@maxirez.com', '$2y$10$/ZkVsDHB7yQI8sj7Zg2ogeN0QVZLD25894l2bWcxOaOT5p9Uo6OZK', NULL, '2021-09-18 15:53:20', '2021-09-18 15:53:20'),
(2, 'deneme dene', 'deneme@gmail.com', '$2y$10$J5i0M.hHguj88JIS0mXwFum0CHmn0qkxr2E8jcsq.jZHj.JPQEUbK', NULL, '2021-07-29 06:26:31', '2021-07-29 06:26:31'),
(3, 'ali', 'a@a', '$2y$10$41iaqmhFcvJCFc4eH4fZPOuCeCWdafDEscRBysWKEVQ1qMMM5QTfy', 'HQM77O9Q9ilJwYQ2zZiAhZ6bZfLsc0ofMtSLA3Y7SJoVOzLKDMwnE6ADoTdL', '2021-07-29 06:28:11', '2021-07-29 06:28:11'),
(4, 'ali veli güzel insan', 'e@e', '$2y$10$/obpVn5Hwuf.OojBl8j4aOiyW6hpSbuVo8vTfym/os1TmzrpCMMnm', NULL, '2021-07-29 06:32:32', '2021-07-29 06:32:32'),
(5, 'resclick deneme', 'res@res', '$2y$10$Pdx4qASW77ME0DmB/YwZVeFK3GUOUaxzp33qxCsIu04pvEJiLoZua', 'juLdH1MYBvZbgZUyUmQGjbz4lemxIgiPO6TSB8SmGKa058dAOxqyyvhy8Nz7', '2021-08-13 05:40:33', '2021-08-13 05:40:33');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `corparates`
--
ALTER TABLE `corparates`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `corparates`
--
ALTER TABLE `corparates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
