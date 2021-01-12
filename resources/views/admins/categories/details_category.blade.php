@extends('admins.layouts.master')

@section('title')
    Details Category
@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                @lang('site.details_category_page')
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">

                         <h2 class="mr-auto">
                            <a style="text-underline-position: under;" href="{{route('create_detalis_category')}}">@lang('site.create_details_category')</a>
                         </h2>

                         
                         <ul class="header-dropdown m-r--5">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                  <input type="search"name='search'value=""class="form-control form-control-navbar" placeholder="@lang('site.search')" aria-label="Search">
                                </div>
                            </form>
                        </ul>
                         
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            @if ($message = Session::get('message'))
                            <p class='alert alert-success text-center'>{{$message}}</p>
                          @endif
                          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>@lang('site.id')</th>
                                    <th>@lang('site.name')</th>
                                    <th>@lang('site.action')</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subcategory as $sub)
                                <tr>
                                    <td>{{$sub->id}}</td>
                                    <td>{{$sub->name}}</td>
                                    <td>                                    
                                        <a href="{{route('update_detalis_category',$sub->id)}}" class="btn btn-info">@lang('site.button_update')</a>
                                        <a href="{{route('delete_details_category',$sub->id)}}" class="btn btn-danger">@lang('site.button_delete')</a>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                           
                            {{-- <div class="d-flex justify-content-center text-center">
                                <small>{{$categories->links()}}</small> 
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>


@endsection