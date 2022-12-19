@include('layouts.layout')
<section id="login">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 min-vh-10 left">
                <img src="https://timbangantruktornado.com/wp-content/uploads/2020/12/Timbangan-Ram-Kelapa-Sawit-Tbs-4.jpeg"
                    style="object-fit:fill; width:100%; height:100%; " alt="foto">
            </div>
            <div class="col-md-6">
                <div class="form-login m-auto ps-5">
                    <h2 class="fw-bold mb-4">Login</h2>
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                placeholder="Silahkan masukan email"
                                value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label
                                " for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                placeholder="Silahkan masukan password"
                                value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>" />
                        </div>

                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="check"
                                name="check" />
                            <label class="form-check-label" for="check">
                                Remember me
                            </label>
                        </div>

                </div>
                <div class="text-center text-lg-start mt-4 pt-2" style="margin-left: 50px;">
                    <button type="submit" class="btn btn-primary btn-lg" name="login"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Tidak punya akun? <a href="{{ 'register' }}"
                            class="link-danger">Register</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- footer -->
<footer class="text-center pt-3 bg-light mt-5">
    <img src="<?php echo '../assets/img/logo-ead.png'; ?>" alt="logoead" style="width:120px;">
    <p style="margin-top: 20px; font-size:10px;">Rivaldo_1202204044</p>
    </p>
</footer>
<!-- end footer -->
