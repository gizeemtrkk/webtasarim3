                                                    <!-- Tablo Kısmı -->
<div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Yöneticiler</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Ad Soyad</th>
                                                    <th scope="col">Mail</th>
                                                    <th scope="col">Telefon</th>
                                                    <th scope="col">Düzenle</th>
                                                    <th scope="col">Sil</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Gizem Türk</td>
                                                    <td>gzmtrk123@gmail.com</td>
                                                    <td>0531 498 28 00</td>
                                                    <td><button type="button" class="btn btn-primary mb-1">Seç</button></td>
                                                    <td><button type="button" class="btn btn-danger mb-1" >Sil</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Gürkan Gerçek</td>
                                                    <td>grkngercek@gmail.com</td>
                                                    <td>0534 391 27 75</td>
                                                    <td><button type="button" class="btn btn-primary mb-1">Seç</button></td>
                                                    <td><button type="button" class="btn btn-danger mb-1">Sil</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Gürolcan Altaş</td>
                                                    <td>grlcnalts@gmail.com</td>
                                                    <td>05310817665</td>
                                                    <td><button type="button" class="btn btn-primary mb-1">Seç</button></td>
                                                    <td><button type="button" class="btn btn-danger mb-1">Sil</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Berkay Çağın Kuru</td>
                                                    <td>brkycgn@gmail.com</td>
                                                    <td>05412646042</td>
                                                    <td><button type="button" class="btn btn-primary mb-1">Seç</button></td>
                                                    <td><button type="button" class="btn btn-danger mb-1">Sil</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Mehmet Batuhan Gülümser</td>
                                                    <td>********gmail.com</td>
                                                    <td>05319180316</td>
                                                    <td><button type="button" class="btn btn-primary mb-1">Seç</button></td>
                                                    <td><button type="button" class="btn btn-danger mb-1" >Sil</button></td>
                                        </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                                        <!-- Bilgi düzenleme bölümü -->

            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bilgiler</h4>
                                        <fieldset disabled>
                                        <div class="form-group">
                                                    <label for="disabledTextInput">ID</label>
                                                    <input type="text" name="0" id="disabledTextInput" class="form-control" placeholder="">
                                                </div>
                                         </fieldset>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Ad</label>
                                            <input class="form-control" type="text" placeholder="" id="example-text-input" name="y_adi" >
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Soyad</label>
                                            <input class="form-control" type="text" placeholder="" id="example-text-input" name="y_soyadi">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Email</label>
                                            <input class="form-control" type="email" placeholder="" id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="">Şifre</label>
                                            <input type="password" class="form-control" id="inputPassword"  placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-tel-input" class="col-form-label">Telefon</label>
                                            <input class="form-control" type="tel" placeholder="" id="example-tel-input">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Değiştir</button>
                                        
                                    </div>
                                </div>
                            </div>








                            <!--yönetici silme-->
        <?php
        if (isset($_POST['sil']))
{
    
    $tc=$_POST["tc"];
    $y_adi=$_POST["y_adi"];

    if($db)//bağlantı gerçekleşti mi?
    {
        echo "Veri tabanı bağlantısı başarılı !! <br>";
    }


    $sil = $db->exec("DELETE FROM ogrencikayit WHERE tc='$tc'"); //ekleme kodu


    if($sil)

    {

       echo 'Kayıt Silindi.';

    }
    else

    {

        echo 'Silme işlemi Başarısız Olmuştur.';

    }
}
     
     ?>           