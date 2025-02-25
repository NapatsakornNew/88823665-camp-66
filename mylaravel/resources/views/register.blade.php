@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}" method="post" onsubmit="return checkValue();">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name" oninput="checkname();"
                                class="form-control" placeholder="Full Name" required />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">กรุณาระบุข้อมูล ชื่อ-นามสกุล</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" oninput="checkemail();"
                                class="form-control" placeholder="Email" required />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">กรุณาระบุอีเมล หรือ กรอกอีเมลให้ถูกต้อง</div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" oninput="checkPassword();"
                                class="form-control" placeholder="Password" required />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            <div class="valid-feedback">รหัสผ่านปลอดภัยมาก เยี่ยมจริงๆ</div>
                            <div class="invalid-feedback">กรุณาระบุรหัสผ่าน หรือ รหัสผ่าน ต้องมีตัวพิมพ์เล็กพิมพ์ใหญ่อย่างน้อย 8 ตัวอักษร</div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" required />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary d-grid gap-2">Sign In</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-0">
                        <a href="login.html" class="text-center"> I already have a membership </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function checkname() {
            let name = $('#name');
            name.removeClass('is-invalid is-valid');
            name.val().trim() === '' ? name.addClass('is-invalid') : name.addClass('is-valid');
        }

        function checkemail() {
            let email = $('#email');
            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/;
            email.removeClass('is-invalid is-valid');
            email.val().trim() === '' || !emailPattern.test(email.val().trim())
                ? email.addClass('is-invalid')
                : email.addClass('is-valid');
        }

        function checkPassword() {
            let password = $('#password');
            let passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            password.removeClass('is-invalid is-valid');
            password.val().trim() === '' || !passwordPattern.test(password.val().trim())
                ? password.addClass('is-invalid')
                : password.addClass('is-valid');
        }

        function checkValue(event) {
            let checkbox = document.getElementById("flexCheckDefault");
            if (!checkbox.checked) {
                event.preventDefault();
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please check the CheckBox!",
                    footer: '<a href="#">Why do I have this issue?</a>'
                });
                return false;
            }
            return true;
        }
    </script>
@endsection
