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
                        <h1>KAYIT OL - KULLANICI</h1>
                    </section><!--end page-title-->
                    <section>
                        <form class="form inputs-underline">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="first_name">isim</label>
                                        <input id="name" type="text" class="form-control" name="first_name" id="first_name" placeholder="İsim">
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">Soyisim</label>
                                        <input id="surname" type="text" class="form-control"  placeholder="Soyisim">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                            <!--enr row-->
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input id="phone" type="text" class="form-control" name="email"  placeholder="Telefon">
                            </div>
                            <div class="form-group">
                                <label for="email">Mail</label>
                                <input id="email" type="email" class="form-control" name="email" id="email" placeholder="Mail">
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
                                <label for="logo">Avatar</label>
                                <input type="text" class="form-control" id="avatar" placeholder="Avatar">
                            </div>
                            <div class="form-group">
                                <label for="cover">Kapak</label>
                                <input type="cover" class="form-control" name="cover" id="cover" placeholder="Kapak">
                            </div>
                            <div class="form-group">
                                <label for="email">Biyografi</label>
                                <input type="email"  class="form-control" name="email" id="email" placeholder="Biyografi">
                            </div>
                            <div class="form-group">
                                <label for="email">Randevu Başlangıç Saati</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Randevu Başlangıç Saati">
                            </div>
                            <div class="form-group">
                                <label for="email">Randevu Bitiş Saati</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Randevu Bitiş Saati">
                            </div>
                            <div class="form-group">
                                <label for="email">Randevu Aralığı</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Randevu Aralığı">
                            </div>
                            <div class="form-group">
                                <label for="email">Çalışma Günleri</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Çalışma Günleri">
                            </div>
                            <div class="form-group">
                                <label for="email">Dil Bilgileri</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Dil Bilgileri">
                            </div>
                            <div class="form-group">
                                <label for="email">Ödeme Bilgileri</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Ödeme Bilgileri">
                            </div>
                            <div class="form-group">
                                <label for="email">Linkedin</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Linkedin">
                            </div>
                            <div class="form-group">
                                <label for="email">Facebook</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Facebook">
                            </div>
                            <div class="form-group">
                                <label for="email">İnstagram</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="İnstagram">
                            </div>
                            <div class="form-group">
                                <label for="email">Twitter</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Twitter">
                            </div>
                            <div class="form-group">
                                <label for="email">Kuruluş Tarihi</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Kuruluş Tarihi">
                            </div>
                            <div class="form-group">
                                <label for="email">Fiyat Aralığı</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Fiyat Aralığı">
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





