@extends('layouts.app')

@section('title')
    Login
@endsection



@section('content')

            <div class="container">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>@lang('site.login')</h2>
                        </div>
                        <div class="body"style="height: 233px;">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="@lang('site.email')">
                                        @error('email')
                                            <p class='alert alert-danger'>{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group form-float">

                                    <div class="form-line">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="@lang('site.password')">                
                                    </div>
                                </div>
                              
                                <button class="btn btn-primary waves-effect" type="submit">@lang('site.submit')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
         </div>
        </div>
    </section>

    
@endsection
