@extends('layouts.app_master_admin')
<link rel="apple-touch-icon" href="{{ asset('admin/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/vendors.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/file-uploaders/dropzone.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }} ">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/colors.cs') }}s">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/core/colors/palette-gradient.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/plugins/file-uploaders/dropzone.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/app-assets/css/pages/data-list-view.css') }} ">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Create Product</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Product List</a>
                                </li>
                                <li class="breadcrumb-item active">{{ isset($product) ? "Update" : "Create" }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Inputs start -->
            <form role="form" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Products Inputs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <form role="form" method="POST" action=" " enctype="multipart/form-data">
                                                @csrf
                                            <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                <fieldset class="form-group" ></fieldset>
                                                    <label>Input Product Name: <span class="text-danger"> *</span></label>
                                                    <input type="text" name="pro_name" class="form-control" id="" placeholder="Enter Product Name: "
                                                    value="{{ $product->pro_name ?? old('pro_name') }}" >
                                                    @if ($errors->first('pro_name'))
                                                        <span class="text-danger">{{ $errors->first('pro_name') }}</span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                <div class="row">
                                                    <div class="col-xl-8 col-md-8 col-8 mb-1">
                                                        <label for="data-price">Price</label>
                                                            <input type="text" name="pro_price" class="form-control" id="data-price"
                                                            value="{{ $product->pro_price ?? old('pro_price') }}" placeholder="Enter Price Products" }}>
                                                            @if ($errors->first('pro_price'))
                                                                    <span class="text-danger">{{ $errors->first('pro_price') }}</span>
                                                            @endif
                                                    </div>
                                                    <div class="col-xl-4 col-md-4 col-4 mb-1">
                                                        <label for="data-price">Sale</label>
                                                        <input type="text" name="pro_sale" class="form-control" id="data-price"
                                                        value="{{ $product->pro_sale ?? old('pro_sale') }}" placeholder="Enter the discounted product price" }}>
                                                            @if ($errors->first('pro_sale'))
                                                                    <span class="text-danger">{{ $errors->first('pro_sale') }}</span>
                                                            @endif
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                <label for="data-status">Order Status</label>
                                                <select class="form-control" id="data-status">
                                                    <option>Pending</option>
                                                    <option>Canceled</option>
                                                    <option>Delivered</option>
                                                    <option>On Hold</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="data-price">Description</label>
                                                    <textarea class="form-control" id="basicTextarea" name="pro_description" rows="3" placeholder="Enter Discription ...">
                                                        {{ $product->pro_description ?? old('pro_description') }}
                                                    </textarea>
                                                </fieldset>
                                                @if ($errors->first('pro_description'))
                                                        <span class="text-danger">{{ $errors->first('k_description') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                <label for="data-status">Danh mục sản phẩm</label>
                                                <select class="form-control" id="data-status">
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ ($product->pro_category_id ?? 0) == $category->id ? "selected='selected'" : "" }}>
                                                    {{  $category->c_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                             {{-- <div class="col-xl-12 col-md-12 col-12 mb-1 data-list-upload">
                                                <div action="#" class="dropzone dropzone-area" id="dataListUpload">
                                                    <div class="dz-message" href="javascript:;">Upload Image</div>
                                                </div>
                                            </div> --}}
                                            <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="data-status">Content</label>

                                                    <textarea class="form-control" id="basicTextarea" name="pro_content" rows="3" placeholder="Textarea">
                                                        {{ $product->pro_content ?? old('pro_content') }}
                                                    </textarea>
                                                </fieldset>
                                                @if ($errors->first('pro_content'))
                                                        <span class="text-danger">{{ $errors->first('pro_content') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="box box-warning">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">Ảnh đại diện</h3>
                                                    </div>
                                                    <div class="box-body block-images">
                                                        <div style="margin-bottom: 10px"> <img src="" onerror="this.onerror=null;this.src='';" alt="" class="img-thumbnail" style="width: 200px;height: 200px;"> </div>
                                                        <div style="position:relative;">
                                                             <a class="btn btn-primary" > Choose File... <input type="file" style="position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:&quot;progid:DXImageTransform.Microsoft.Alpha(Opacity=0)&quot;;opacity:0;background-color:transparent;color:transparent;" name="pro_avatar" size="40" class="js-upload"> </a> &nbsp; <span class="label label-info" id="upload-file-info"></span> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 offset-md-5">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">{{ isset($product) ? "Update" : "Submit" }}</button>
                                                <button type="" class="btn btn-outline-warning mr-1 mb-1"><a href="{{ route('admin.product.index') }}">Back</a></button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


    <!-- Basic Horizontal form layout section start -->

<!-- BEGIN: Vendor JS-->
<script src="{{ asset('admin/app-assets/vendors/js/vendors.min.js') }} "></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin/app-assets/vendors/js/extensions/dropzone.min.js') }} "></script>
<script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.min.js') }} "></script>
<script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }} "></script>
<script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }} "></script>
<script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }} "></script>
<script src="{{ asset('admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }} "></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('admin/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('admin/app-assets/js/core/app.js') }} "></script>
<script src="{{ asset('admin/app-assets/js/scripts/components.js') }} "></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin/app-assets/js/scripts/ui/data-list-view.js') }} "></script>
<!-- END: Page JS-->
</div>

@stop
