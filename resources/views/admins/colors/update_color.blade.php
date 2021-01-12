@extends('admins.layouts.master')

@section('title')
    Update Color
@endsection

@section('content')


    <section class="content ">
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
                            <h2>@lang('site.update_color')</h2>
                        </div>
                        <div class="body"style="min-height: 197px;">
                            <form method="POST" action="{{route('update_color_store',$colors->id)}}">
                                @csrf
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="color"  placeholder="@lang('site.create_color')" 
                                        value="{{$colors->color }}">
                                   
                                        @error('color')
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