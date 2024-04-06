<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 70%;
        }
        mark { 
            background-color: #D3D3D3;
  
        }
        table td, th {
          border: 1px solid ;
          text-align: left;
          padding: 8px;
        }
        .renk{background-color:#D3D3D3 }
        pre {
            font-size: 125%;

        }
        .button {
            background-color: #ff4040;
            border: none;
            border-radius: 12px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
}
        
        </style>
</head>
<body>
    <form id="myForm" action="connect.php" method="post">
    <img src="https://upload.wikimedia.org/wikipedia/tr/a/ae/TUBITAK-UZAY-Logo-JPG.jpg" height="68" align="left">
    <h4><bold><pre>YENİ PERSONEL BİLDİRİM FORMU/Rev. No:1.10                                                       Kayıt No:.........</pre></bold></h4>
    <hr>
    <br><br>
    <table>
        <tr>
            
            <td> <label for="isim">Adı Soyadı:</label></td>
            <td colspan="2">  <input type="text" name="name" id="isim" ></label></td>
                   
            <td><label for="tc">T.C. Kimlik No:</label></td>
            <td><input type="text" name="tc" id="tc"></td>
		

        </tr>
        <tr>
            <td><label for="sicil">Sicil Numarası:</label></td>
            <td colspan="2"><input type="text" name="sicil" id="sicil" > </td>

            <td><label for="is">İşe Giriş Tarihi:</label></td>
            <td colspan="4"><input type="date" name="is" id="is" ></td>
           
        </tr>
        <tr>
            <td >İmzası:</td>
            <td colspan="4" > </td>
        </tr>
        <tr>
            <td ><label for="grup">Grubu/Birimi:</label></td>
            <td colspan="4"><input type="text" name="grup" id="grup" > </td>
        </tr>
        <tr>
            <td >Kadrosu/Unvanı:</td>
            <td><input type="radio" id="Araştırmacı" name="radio" value="Araştırmacı"/>  
                <label>Araştırmacı</label></td>

            <td><input type="radio" id="Teknisyen" name="radio" value="Teknisyen"/>  
                <label>Teknisyen</label></td>

            <td><input type="radio" id="İdari" name="radio" value="İdari"/>  
                <label>İdari</label></td>

            <td><input type="radio" id="Diğer:" name="radio" value="Diğer:"/>  
                <label>Diğer:</label></td>

        </tr>
        <tr>
            <td >Sendika Durumu:<p>Kadro Durumu:</p></td>
            
            <td><input type="radio" id="Sendikalı" name="x" value="Sendikalı"/>  
                <label>Sendikalı</label></td>
            <td><input type="radio" id="Kadrolu" name="x" value="Kadrolu"/>  
                <label>Kadrolu</label></td>
            <td><input type="radio" id="Sendikalı Değil" name="x" value="Sendikalı Değil"/>  
                <label>Sendikalı Değil</label></td>
            <td><input type="radio" id="Proje Personeli" name="x" value="Proje Personeli"/>  
                <label>Proje Personeli</label></td>
                
        </tr>
    </table>
      <br>
      <table>
        <tr>
        <td colspan="4" class="renk"><i>Grup Lideri/Birim Amiri Tarafından Doldurulacaktır</i></td>
        </tr>
        <tr>
            <td ><label for="pro">Görev Alacağı Proje(ler):</label></td>
            <td colspan="4"><input type="text" name="pro" id="pro" ></td>
        </tr>
        <tr>
            <td rowspan="2">Telefon Bağlantı Talebi:</td>
            <td rowspan="2"><input type="radio" id="Yok" name="tel" value="Yok"/>  
                <label>Yok</label></td>
            <td rowspan="2"><input type="radio" id="Var" name="tel" value="Var"/>  
                <label>Var</label></td>
                </td>
            <td class="renk"><u><i>Tesis İşletme Birimi tarafından doldurulacaktır(G15 no.'lu oda )</i></u></td>
         </tr>
        <tr>
            <td><label for="no">Verilen Telefon Numarası: </label><input type="text" name="no" id="no" ></td>
        </tr>
        <tr>
        <tr>
            <td rowspan="2">Etki Alanı Kullanıcı Hesabı:</td>
            <td rowspan="2"><input type="radio" id="Açılmayacak" name="etki" value="Açılmayacak"/>  
                <label>Açılmayacak</label></td>
            <td rowspan="2"><input type="radio" id="Açılacak" name="etki" value="Açılacak"/>  
                <label>Açılacak</label></td>
                </td>
            <td class="renk"><u><i>Bilgi Teknolojileri Grubu tarafından doldurulacaktır(211 no.'lu oda )</i></u></td>
        </tr>
        <tr>
            <td><label for="user">Açılan Kullanıcı adı: </label><input type="text" name="user" id="user" ></td>
        </tr>
        <tr>
            <td >İç E-posta Hesabı:</td>
            <td><input type="radio" id="Açılmayacak" name="ic" value="Açılmayacak"/>  
                <label>Açılmayacak</label></td>
            <td><input type="radio" id="Açılacak" name="ic" value="Açılacak"/>  
                <label>Açılacak</label></td>
            <td><label for="mail">Açılan E-posta adresi: </label><input type="text" name="mail" id="mail" ></td>
            
        </tr>
        <tr>
            <td >Dış E-posta Hesabı:</td>
            <td><input type="radio" id="Açılmayacak" name="dis" value="Açılmayacak"/>  
                <label>Açılmayacak</label></td>
            <td><input type="radio" id="Açılacak" name="dis" value="Açılacak"/>  
                <label>Açılacak</label></td>
            <td><label for="adres">Açılan E-posta adresi: </label><input type="text" name="adres" id="adres" ></td>
            
        </tr>
        <tr>
            <td >YBS Hesabı:</td>
            <td><input type="radio" id="Açılmayacak" name="ybs" value="Açılmayacak"/>  
                <label>Açılmayacak</label></td>
            <td><input type="radio" id="Açılacak" name="ybs" value="Açılacak"/>  
                <label>Açılacak</label></td>
                <td></td>
        </tr>
        <tr>
            <td >EBYS Hesabı:</td>
            <td><input type="radio" id="Açılmayacak" name="ebys" value="Açılmayacak"/>  
                <label>Açılmayacak</label></td>
            <td><input type="radio" id="Açılacak" name="ebys" value="Açılacak"/>  
                <label>Açılacak</label></td>
            <td></td>
        </tr>
        <tr>
            <td>Grup/Birim Listesi dışında üye yapılması istenen e-posta listeleri:</td>
            <td colspan="3">(Proje Listeleri için Proje Yöneticisinin onayı gerekmektedir.)</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
          <td colspan="3" class="renk"><i>Ayniyat ve Stok Kontrol Birimi</i></td>
          
        </tr>
        <tr>
          <td>Veri Tabanına Giriş Durumu::</td>
          <td><input type="radio" id="Giriş Yapıldı" name="giris" value="Giriş Yapıldı"/>  
              <label>Giriş Yapıldı</label></td>
          <td><input type="radio" id="Giriş Yapılmadı" name="giris" value="Giriş Yapılmadı"/>  
              <label>Giriş Yapılmadı</label></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td colspan="3"><mark><i>Grup Lideri</mark></i></td>
                
            </tr>
            <tr>
                <td>Kişi Güvenlik Belgesi:</td>
                <td><input type="radio" id="Gerekiyor" name="sec" value="Gerekiyor"/>  
                    <label>Gerekiyor</label></td>
                <td><input type="radio" id="Gerekmiyor" name="sec" value="Gerekmiyor"/>  
                    <label>Gerekmiyor</label></td>
            </tr>
          </table>
          <br>
          <table>
            <tr>
                <td colspan="4" class="renk"><i>Tesis Güvenlik Koordinatörü Tarafından Doldurulacaktır (Z038 No'lu Oda)</i></td>
                
            </tr>
            <tr>
                <td>El Yazısı:</td>
                <td><input type="radio" id="Alındı" name="el" value="Alındı"/>  
                    <label>Alındı</label></td>
                <td><input type="radio" id="Alınmadı" name="el" value="Alınmadı"/>  
                    <label>Alınmadı</label></td>
                <td>İmza:</td>
            </tr>
            <tr>
                <td>Kişi Güvenlik Belgesi:</td>
                <td colspan="2"><input type="checkbox" id="security" name="security" value="security"/>  
                    <label>Girişimlere başlandı. (Belge gerekiyor ise)</label></td>
                <td>İmza:</td>
            </tr>
          </table>
          <br>

          <table>
            <tr>
                <td colspan="4" class="renk"><i>Enstitü Oryantasyon</i></td>
                
            </tr>
            <tr>
                <td>Eğitim ve Kaynak Yönetimi Grubu::</td>
                <td><input type="radio" id="Alındı" name="ed" value="Alındı"/>  
                    <label>Alındı</label></td>
                <td><input type="radio" id="Alınmadı" name="ed" value="Alınmadı"/>  
                    <label>Alınmadı</label></td>
                <td>İmza:</td>
            </tr>
            <tr>
                <td>Grup/Birim Eğitimi(İlk Amiri):</td>
                <td><input type="radio" id="Alındı" name="birim" value="Alındı"/>  
                    <label>Alındı</label></td>
                <td><input type="radio" id="Alınmadı" name="birim" value="Alınmadı"/>  
                    <label>Alınmadı</label></td>
                <td>İmza:</td>
            </tr>
          </table>
          <p><u>*Grup Lideri/Birim Amiri tarafından onaylandıktan sonra form İnsan Kaynakları birimine iletilir</u></p>
          <br><pre>                                                                                                             <button class="button" id="gonder">gönder</button></pre><br><br><br>
          <hr>
          <p><b>Uzay-SurecY-SBLN- Form / Sürüm No:11</b></p>

        </form>
        <script src="form.js"></script>

</body>
</html>