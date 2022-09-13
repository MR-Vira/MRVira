
@extends('layouts.app')
@section('links')
    <link rel="stylesheet" href="{{asset('css/admin/register_style.css')}}">
@endsection
@section('content')



            <div class="form-group">

                <form action="" method="post">

                    <div style="margin: 0% auto 2% auto;width: 30% ;">
                        <h2 style="margin-bottom: 5%;font-family: IRANSansXFaNum-Bold; font-size: 24px"><a href="{{route('admin.login')}}">ورود</a>/ثبت نام</h2>
                        <input type="text" class="form-control" placeholder="نام کاربری" id="username-input" required>
                    </div>

                    <div style="margin: 3% auto 2% auto;width: 30%">
                        <input type="text" class="form-control " placeholder="موبایل" id="phone-input" required>
                    </div>

                    <div style="margin: 3% auto 2% auto;width: 30%">
                        <input type="password" class="form-control " placeholder="رمزعبور" id="password-input" required>
                    </div>

                    <div style="margin: 1% auto 6% auto;width: 30%">
                        <input type="checkbox" class="form-check-input" id="check">
                        <label for="" class="px-2" style="font-family: IRANSansXFaNum-Medium;font-size: 14px">تمامی <a href="#">شرایط و قوانین</a> را میپذیرم.</label>
                    </div>

                    <div style="margin: 3% auto 4% auto;width: 30%">
                        <button>ثبت نام</button>
                    </div>

                    <div  style="margin: -2% auto 2% auto;width: 40% ;text-align: center">
                        <div>
                            <label style="font-family: IRANSansXFaNum-Medium;font-size: 14px ; ">آیا قبلا ثبت نام کرده اید؟ <a href="{{route('admin.login')}}">ورود</a></label>
                        </div>

                    </div>

                </form>

            </div>



@endsection
