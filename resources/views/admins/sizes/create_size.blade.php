@extends('admins.layouts.master')

@section('title')
    Create Size
@endsection

@section('content')


    <section class="content ">
        <div class="container">

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>@lang('site.create_size')</h2>
                        </div>
                        <div class="body"style="min-height: 197px;">
                            <form method="POST" action="{{route('create_size_store')}}">
                                @csrf
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="size"  placeholder="@lang('site.create_size')" 
                                        value="{{ old('size') }}">
                                   
                                        @error('size')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                       @enderror
                                    </div>
                                </div>
                              
                                <button class="btn btn-primary waves-effect" type="submit">@lang('site.button')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

        </div>
    </section>




    

@endsection