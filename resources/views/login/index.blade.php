 @extends('login.layouts.main')
 @section('contents')
     @if (session()->has('success'))
         <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
             <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
             <strong>{{ session('success') }}</strong> Change a <a href="#" class="alert-link">few things up</a>
             and submit again.
         </div>
     @endif

     @if (session()->has('LoginErorr'))
         <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
             <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
             <strong>{{ session('LoginErorr') }}</strong> Change a <a href="#" class="alert-link">few things up</a>
             and submit again.
         </div>
     @endif

     <!-- BEGIN: Content-->
     <div class="app-content content">
         <div class="content-overlay"></div>
         <div class="content-wrapper">
             <div class="content-header row">
             </div>
             <div class="content-body">
                 <section class="row flexbox-container">
                     <div class="col-12 d-flex align-items-center justify-content-center">
                         <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                             <div class="card border-grey border-lighten-3 px-1 py-1 m-2">
                                 <div class="card-header border-0">
                                     <div class="card-title text-center">
                                         <img src="{{ asset('img/Pertamina.png') }}" alt="branding logo" style="width: 30%">
                                     </div>
                                     <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                     </h6>
                                 </div>
                                 <div class="card-content mt-0">
                                     <div class="card-body">
                                         <form class="form-horizontal" action="/auth/login" method="POST">
                                             @csrf
                                             <fieldset class="form-group position-relative has-icon-left">
                                                 <input type="email"
                                                     class="form-control @error('email') is-invalid @enderror"
                                                     id="email" placeholder="Your Username" name="email" required>
                                                 @error('email')
                                                     <div class="invalid-feedback">
                                                         {{ $message }}
                                                     </div>
                                                 @enderror
                                                 <div class="form-control-position">
                                                     <i class="la la-user"></i>
                                                 </div>
                                             </fieldset>
                                             <fieldset class="form-group position-relative has-icon-left">
                                                 <input type="password"
                                                     class="form-control @error('password') is-invalid @enderror"
                                                     id="password" placeholder="Enter Password" name="password" required>
                                                 <div class="form-control-position">
                                                     <i class="la la-key"></i>
                                                 </div>
                                                 @error('password')
                                                     <div class="invalid-feedback">
                                                         {{ $message }}
                                                     </div>
                                                 @enderror
                                             </fieldset>
                                             {{-- <div class="form-group row">
                                                 <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                     <fieldset>
                                                         <input type="checkbox" id="remember-me" class="chk-remember">
                                                         <label for="remember-me"> Remember Me</label>
                                                     </fieldset>
                                                 </div>
                                                 <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a
                                                         href="recover-password.html" class="card-link">Forgot Password?</a>
                                                 </div>
                                             </div> --}}
                                             <button type="submit" class="btn btn-outline-info btn-block"><i
                                                     class="ft-unlock"></i> Login</button>
                                         </form>
                                     </div>
                                     <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                         <span>New
                                             ?</span>
                                     </p>
                                     <div class="card-body">
                                         <a href="{{ route('register') }}" class="btn btn-outline-danger btn-block"><i
                                                 class="la la-user"></i>
                                             Register</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>

             </div>
         </div>
     </div>
     <!-- END: Content-->
 @endsection
