@extends('layouts.main')
@section('content')

      
      <div class="block-big">
                <div class="block-regis">
                    <div class="fadepage fadepage-enter-done">
                        <h2 class="rs regis-title">Đăng ký    </h2>

                    <form method="POST"  action="{{ route('register') }}">
                        @csrf

                        <div class="tt-row">
                            <div class="mui-textfield mui-textfield--float-label ">
                                <input class="form-control @error('name') is-invalid @enderror"  id="name" name="name" type="text" value="{{ old('name') }}"
                                    required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                                <label tabindex="-1" style="transition: all 0.15s ease-out 0s;">Name</label>
                            </div>
                            <p class="rs txt-err" style="margin-top: -10px;">&nbsp;</p>
                        </div>

                        <div class="tt-row">
                            <div class="mui-textfield mui-textfield--float-label ">
                                <input class="form-control @error('email') is-invalid @enderror"  id="email" name="email" type="text" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label tabindex="-1" style="transition: all 0.15s ease-out 0s;">Email</label>
                            </div>
                            <p class="rs txt-err" style="margin-top: -10px;">&nbsp;</p>
                        </div>
 
                        <div class="tt-row">
                                <div class="mui-textfield mui-textfield--float-label ">
                                    <input class="mui--is-untouched mui--is-pristine mui--is-empty" autocomplete="off" name="password" type="password" value="">
                                    <label tabindex="-1" style="transition: all 0.15s ease-out 0s;">Mật khẩu</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p class="rs txt-err" style="margin-top: -10px;">&nbsp;</p>
                        </div>

                        <div class="tt-row">
                                <div class="mui-textfield mui-textfield--float-label ">
                                    <input class="mui--is-untouched mui--is-pristine mui--is-empty" autocomplete="off" name="password_confirmation" type="password" value="">
                                    <label tabindex="-1" style="transition: all 0.15s ease-out 0s;">Xác nhận mật khẩu</label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-0">
                            <button class="mui-btn f-btn-orage f-btn-100 btn-h40" type="submit">Đăng ký<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span>
                            </button>
                            </div>
                        </div>

                    </form><br>
                </div>
                <div class="line-clear line-clear1"></div>
                    <h2 class="rs tit_3">Bạn đã có tài khoản</h2>
                    <a class="mui-btn f-btn-100 btn-h40 btn-h40-dark" href="/login" style="margin-left: auto;">Đăng nhập ngay</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
