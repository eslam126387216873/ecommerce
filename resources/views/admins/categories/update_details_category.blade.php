@extends('admins.layouts.master')

@section('title')
    Update Details Category
@endsection

@section('content')


    <section class="content ">
        <div class="container">

            <!-- Basic Validation -->
            <div class="row clearfix">
                <br>
                <br>
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>@lang('site.create_details_category')</h2>
                        </div>
                        <div class="body"style="min-height: 197px;">
                            <form method="POST" action="{{ route('update_detalis_category_store',$subcategory->id) }}" enctype='multipart/form-data'>
                                @csrf
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name"  placeholder="@lang('site.name')" 
                                        value="{{$subcategory->name}}">
                                   
                                        @error('name')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                       @enderror
                                    </div>
                                </div>

                                <div class="form-group form-float">

                                    <div class="form-line">
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>   
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