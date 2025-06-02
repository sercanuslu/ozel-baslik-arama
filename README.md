# Özel Başlıkta Arama
**Eklenti Adı:** Özel Başlıkta Arama  
**Sürüm:** 1.0.0  
**Yazar:** [Sercan USLU](https://srcnx.com)  
**Eklenti Sayfası:** [https://wordpres.tr/ozel-baslikta-arama](https://wordpres.tr/ozel-baslikta-arama)

## Özellikler
- WordPress arama fonksiyonunu yalnızca gönderi başlıklarıyla sınırlar.
- Yönetici panelinde veya özel sorgularda etkileşim yapmaz.
- Dil dosyalarıyla (gettext) tam çeviri desteği sağlar.

## Kurulum
1. **Eklentiyi İndir:**  
   [GitHub'dan ZIP olarak indir](https://github.com/sercanuslu/ozel-baslik-arama/)
2. **Yükleme:**  
   WordPress yönetici paneline gir → `Eklentiler > Yeni Ekle > Eklenti Yükle` → ZIP dosyasını seç ve yükle.
3. **Etkinleştir:**  
   Yükleme sonrası eklentiyi etkinleştir.
4. **(Opsiyonel) Dil Dosyalarını Özelleştir:**  
   `ozel-baslik-arama/languages/` klasöründe `.pot` dosyası mevcut. Kendi çevirilerini .po/.mo olarak oluşturabilirsin.

## 🖥Kullanım
Eklenti aktif olduğu sürece:
- WordPress arama kutusuna yazılan anahtar kelimeler yalnızca gönderi başlıklarında aranır.
- İçerik veya özet (excerpt) gibi alanlarda arama yapılmaz.
- `AND` ile birleştirilmiş çoklu terimler desteklenir.

## Dil Desteği
- Türkçe (varsayılan)
- Diğer diller için `.pot` dosyasını kullanarak özelleştirme yapılabilir.

## Lisans
GPL v2 veya sonrası  
[https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)
