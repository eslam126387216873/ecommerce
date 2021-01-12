@extends('admins.layouts.master')

@section('title')
    Color Page
@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                @lang('site.color_page')
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">

                         <h2 class="mr-auto">
                            <a style="text-underline-position: under;" href="{{route('create_color')}}">@lang('site.create_color')</a>
                         </h2>
                         
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
                                @foreach ($colors as $color)
                                <tr>
                                    <td>{{$color->id}}</td>
                                    <td>{{$color->color}}</td>
                                    <td>                                    
                                        <a href="{{route('update_color',$color->id)}}" class="btn btn-info">@lang('site.button_update')</a>
                                        <a href="{{route('delete_color',$color->id)}}" class="btn btn-danger">@lang('site.button_delete')</a>
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