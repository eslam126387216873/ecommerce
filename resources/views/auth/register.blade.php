@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')

<section class="content">
<div class="container">

    <div class="row clearfix">
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>@lang('site.Register')</h2>
                </div>
                <div class="body"style="height: 425px;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="email" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="@lang('site.name')">
                                @error('name')
                                    <p class='alert alert-danger'>{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        
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

                        <div class="form-group form-float">

                            <div class="form-line">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="@lang('site.Confirm_Password')" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group form-float">

                            <div class="form-line">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="@lang('site.phone')" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group form-float">

                            <div class="form-line">
                                <select name="role" class="form-control @error('role') is-invalid @enderror">
                                    <option value="user">@lang('site.user')</option>
                                    <option value="vendor">@lang('site.vendor')</option>
                                    @error('role')
                                    <small class='alert alert-danger'>{{$message}}</small>
                                  @enderror  
                                </select>   
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
</section>


@endsection
