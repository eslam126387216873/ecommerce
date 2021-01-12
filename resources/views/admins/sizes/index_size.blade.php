@extends('admins.layouts.master')

@section('title')
    Size Page
@endsection


@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                @lang('site.size_page')
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">

                         <h2 class="mr-auto">
                            <a style="text-underline-position: under;" href="{{route('create_size')}}">@lang('site.create_size')</a>
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
                                    <th>@lang('site.size')</th>
                                    <th>@lang('site.action')</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($sizes as $size)
                             <tr>
                                <td>{{$size->id}}</td>
                                <td>{{$size->size}}</td>
                                <td>                                    
                                    <a href="{{route('update_size',$size->id)}}" class="btn btn-info">@lang('site.button_update')</a>
                                    <a href="{{route('delete_size',$size->id)}}" class="btn btn-danger">@lang('site.button_delete')</a>
                                </td>
                              </tr> 
                        </tbody>
                             @endforeach
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