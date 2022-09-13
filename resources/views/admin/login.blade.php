@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{asset('css/admin/login_style.css')}}">
@endsection
@section('content')



            <div class="form-group">

                <form action="" method="post">

                    <div style="margin: 1% auto 2% auto;width: 30% ;">
                        <h2 style="margin-bottom: 10%;font-family: IRANSansXFaNum-Bold; font-size: 24px">ورود/<a href="{{route('admin.register')}}">ثبت نام</a></h2>
                        <input type="text" class="form-control" placeholder="نام کاربری" id="username-input" required>
                    </div>

                    <div style="margin: 3% auto 2% auto;width: 30%">
                        <input type="password" class="form-control " placeholder="رمزعبور" id="password-input" required>
                    </div>

                    <div style="margin: 6% auto 6% auto;width: 30%">

                        <label for="" class="px-2" style="font-family: IRANSansXFaNum-Medium;font-size: 14px">رمز عبور خود را فراموش کرده اید؟ <a href="#">فراموشی رمز عبور</a></label>
                    </div>

                    <div style="margin: 5% auto 4% auto;width: 30%">
                        <button>ثبت نام</button>
                    </div>


                </form>

            </div>



@endsection
