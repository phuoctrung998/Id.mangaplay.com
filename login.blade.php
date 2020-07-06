
@extends('layouts.main')
@section('content')

      
      <div class="block-big">
                <div class="block-regis">
                    <div class="fadepage fadepage-enter-done">
                        <h2 class="rs regis-title">Đăng nhập    </h2>

                    <form method="POST"  action="{{ route('login') }}">
                        @csrf
                        

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
                                <input class="form-control @error('password') is-invalid @enderror"   id="password" name="password" type="password" 
                                value=""  required autocomplete="new-password" autofocus>
                                <label tabindex="-1" style="transition: all 0.15s ease-out 0s;">Mật khẩu</label>
                            </div>
                           
                            <p class="rs txt-err" style="margin-top: -10px;">&nbsp;</p>
                        </div>


                        <button class="mui-btn f-btn-orage f-btn-100 btn-h40" type="submit">ĐĂNG NHẬP<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span>
                        </button>
                    </form><br>
                    <button class="mui-btn f-btn-100 btn-h40 btn-h40-fb" style="transition: opacity 0.5s ease 0s; cursor: pointer;">                           
                                Đăng nhập bằng Facebook<span class="mui-btn__ripple-container"><span class="mui-ripple"></span></span>
                    </button>
                    <div class="block-dk-bot"><a class="regis-new" href="{{ route('register') }}">Đăng ký mới</a><a href="{{ route('password.request') }}" class="quen-mk">Quên mật khẩu?</a></div>
                </div>
            </div>
        </div>
    </div>

    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
