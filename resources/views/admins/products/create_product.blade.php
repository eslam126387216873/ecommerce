@extends('admins.layouts.master')

@section('title')
    Create Product
@endsection

@section('content')


    <section class="content ">
        <div class="container">

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>@lang('site.create_product')</h2>
                        </div>
                        <div class="body"style="min-height: 197px;">
                            <form method="POST" action="{{route('create_product_store')}}" enctype='multipart/form-data'>
                                @csrf
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name"  placeholder="@lang('site.name')" 
                                        value="{{ old('name') }}">
                                   
                                        @error('name')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                       @enderror
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea class="form-control" name="content"  cols="30" rows="10" placeholder="@lang('site.content')"></textarea>
                                        @error('content')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                       @enderror
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="price"  placeholder="@lang('site.price')" 
                                        value="{{ old('price') }}">
                                   
                                        @error('price')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                       @enderror
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="descount"  placeholder="@lang('site.descount')" 
                                        value="{{ old('descount') }}">
                                   
                                        @error('descount')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                       @enderror
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="quantity"  placeholder="@lang('site.quantity')" 
                                        value="{{ old('quantity') }}">
                                   
                                        @error('quantity')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                       @enderror
                                    </div>
                                </div>

                                <div class="form-group form-float">

                                    <div class="form-line">
                                        <input type="file" class="form-control" name='image[]' multiple placeholder="Upload Image">
                                        @error('image')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group form-float">

                                    <div class="form-line">
                                        <label>@lang('site.color')</label>
                                        <select name="color[]" class="form-control" multiple>
                                            @foreach ($colors as $color)
                                            <option value="{{$color->id}}">{{$color->color}}</option>
                                            @endforeach
                                        </select>   
                                        @error('color')
                                        <h6 class='alert alert-danger'>{{$message}}</h6>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group form-float">

                                    <div class="form-line">
                                        <label>@lang('site.size')</label>
                                        <select name="size[]" class="form-control" multiple>
                                            @foreach ($sizes as $size)
                                            <option value="{{$size->id}}">{{$size->size}}</option>
                                            @endforeach
                                            @error('size')
                                            <h6 class='alert alert-danger'>{{$message}}</h6>
                                            @enderror
                                        </select>   
                                    </div>
                                </div>

                                <div class="form-group form-float">

                                    <div class="form-line">
                                        <label style="color:rgb(104, 100, 100)">@lang('site.brand')</label>
                                        <select name="brand_id" class="form-control">
                                            @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>   
                                    </div>
                                </div>

                                <div class="form-group form-float">

                                    <div class="form-line">
                                        <label style="color:rgb(104, 100, 100)">@lang('site.category')</label>
                                        <select id="category_id" name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>   
                                    </div>
                                </div>

                                <div class="form-group form-float">

                                    <div class="form-line">
                                        <label style="color:rgb(104, 100, 100)">@lang('site.sub_category')</label>
                                        <select id="subcategory_id" name="subcategory_id" class="form-control">
                                            @foreach ($supcategories as $supcategory)
                                            <option value="{{$supcategory->id}}">{{$supcategory->name}}</option>
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