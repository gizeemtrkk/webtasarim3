         <div>
             <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Yönetici bilgilerini giriniz.</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Ad</label>
                                            <input class="form-control" type="text" placeholder="Ahmet" id="example-text-input" name="y_adi">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Soyad</label>
                                            <input class="form-control" type="text" placeholder="Veli" id="example-text-input" name="y_soyadi">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Email</label>
                                            <input class="form-control" type="email"  placeholder="example@gmail.com" id="example-email-input" name="y_mail">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="">Şifre</label>
                                            <input type="password" class="form-control" id="inputPassword"  placeholder="Password" name="y_sifre">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-tel-input" class="col-form-label">Telefon</label>
                                            <input class="form-control" type="tel" placeholder="Telefon" id="example-tel-input" name="y_tel">
                                        </div>
                                        <fieldset disabled>
                                        <div class="form-group">
                                                    <label for="disabledTextInput">Yetki</label>
                                                    <input type="text" name="2" id="disabledTextInput" class="form-control" placeholder="Yönetici">
                                                </div>
                                         </fieldset>
                                        <button type="submit" class="btn btn-primary mt-4 pl-4 pr-4" name="ekle">Ekle</button>
                                    </div>
                                    
                                </div>
            </div>
            <!--yönetici ekleme-->
<?php
if (isset($_POST['ekle'])){
    $y_adi=$_POST["y_adi"];
    $y_soyadı=$_POST["y_soyadi"];
    $y_mail=$_POST["y_mail"];
    $y_sifre=$_POST["y_sifre"];
    $y_tel=$_POST["y_tel"];

if($db)//bağlantı gerçekleşti mi?
    {
        echo "Veri tabanı bağlantısı başarılı !! <br>";
    }


    $ekle = $db->exec("INSERT INTO yönetici (y_adi,y_soyadi,y_mail,y_sifre,y_tel) VALUES ('$y_adi', '$y_soyadı', '$y_mail','$y_sifre','$y_tel')"); //ekleme kodu


    if($ekle)

    {

       echo 'Yeni Kayıt Eklendi.';

    }
    else

    {

        echo 'Kayıt İşlemi Başarısız Olmuştur.';

    }
}
?>