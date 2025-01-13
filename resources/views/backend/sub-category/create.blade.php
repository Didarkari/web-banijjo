@extends('backend.master')

@section('title')
    Category
@endsection

@section('DashBoardContainer')
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- basic form  -->
        <!-- ============================================================== -->
        <div class="row">
            @if (Session::has('success'))
                <p class="text-success">{{ Session::get('success') }}</p>
            @elseif(Session::has('danger'))
                <p class="text-danger">{{ Session::get('danger') }} </p><!-- here to 'withWarning()' -->
            @endif


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">



                <div class="card">
                    <h5 class="card-header">Add New Sub Category</h5>
                    <div class="card-body">
                        <form action="{{ route('sub-category.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label  ">Sub Category Name</label>
                                <input id="inputText3" type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="opt">Select Category</label>
                                <select class="form-control" id="opt"
                                    name="category" required>

                                    <option>Category</option>
                                    
                                    @foreach ($categories as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="inputEmail">Order</label>
                                <input id="inputEmail" type="number" name="order"
                                    class="form-control @error('order') is-invalid @enderror">
                            </div>
                            @error('order')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="status">Select Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" id="status"
                                    name="status" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            
                            <div class="form-group text-right">
                                <input name="submit" value="Submit" type="submit" class="btn btn-warning">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic form  -->
    </div>
    <!-- ============================================================== -->
    <!-- end striped table -->
@endsection
