@extends('layouts.homelayout')
<head>
<title>
 KAYIT OL
</title>
</head>

@section('content')
<div id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <section class="page-title">
                        <h1>KAYIT OL - İŞLETME</h1>
                    </section><!--end page-title-->
                    <section>
                        <form class="form inputs-underline">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="first_name">İşletme Adı</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="İşletme Adı">
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">İşletme Adresi</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="İşletme Adresi">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="last_name">Şehir</label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Şehir">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                            <!--enr row-->
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input type="text" class="form-control" name="tel" id="tel" placeholder="Telefon">
                            </div>
                            <div class="form-group">
                                <label for="email">Mail</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Mail">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="password">Şifre</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Şifre">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="confirm_password">Şifre Tekrarı</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Şifre Tekrarı">
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="text" class="form-control" name="logo" id="logo" placeholder="logo">
                            </div>
                            <div class="form-group">
                                <label for="cover">Kapak</label>
                                <input type="text" class="form-control" name="cover" id="cover" placeholder="Kapak">
                            </div>
                            <div class="form-group">
                                <label for="biografi">Biyografi</label>
                                <input type="text" class="form-control" name="bio" id="bio" placeholder="Biyografi">
                            </div>
                            <div class="form-group">
                                <label for="start-time">Randevu Başlangıç Saati</label>
                                <input type="time" class="form-control" name="start-time" id="start-time" placeholder="Randevu Başlangıç Saati">
                            </div>
                            <div class="form-group">
                                <label for="end-time">Randevu Bitiş Saati</label>
                                <input type="time" class="form-control" name="end-time" id="end-time" placeholder="Randevu Bitiş Saati">
                            </div>
                            <div class="form-group">
                                <label for="appıintment-time">Randevu Aralığı</label>
                                <input type="time" class="form-control" name="a-time" id="a-time">
                                <input type="time" class="form-control" name="a-time" id="a-time"">
                            </div>
                            <div class="form-group">
                                <label for="b-days">Çalışma Günleri</label>
                                <input type="date" class="form-control" name="b-days" id="b-days">
                            </div>
                            <div class="form-group">
                                <label for="language">Dil Bilgileri</label>
                                <input type="text" class="form-control" name="lng" id="lng" placeholder="Dil Bilgileri">
                            </div>
                            <div class="form-group">
                                <label for="price">Ödeme Bilgileri</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Ödeme Bilgileri">
                            </div>
                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin">
                            </div>
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook">
                            </div>
                            <div class="form-group">
                                <label for="instagram">İnstagram</label>
                                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="İnstagram">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter">
                            </div>
                            <div class="form-group">
                                <label for="since">Kuruluş Tarihi</label>
                                <input type="date" class="form-control" name="since" id="since" placeholder="Kuruluş Tarihi">
                            </div>
                            <div class="form-group">
                                <label for="price-range">Fiyat Aralığı</label>
                                <input type="number" class="form-control" name="price-range" id="price-range" placeholder="Fiyat Aralığı">
                                <input type="number" class="form-control" name="price-range" id="price-range" placeholder="Fiyat Aralığı">
                            </div>
                            <!--end form-group-->
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100">Kayıt Ol</button>
                            </div>
                            
                            <!--end form-group-->
                        </form>

                        <hr>

                        <p class="center">By clicking on “Register Now” button you are accepting the <a href="terms-conditions.html">Terms & Conditions</a></p>
                    </section>
                </div>
                <!--col-md-4-->
            </div>
            <!--end ro-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@endsection





