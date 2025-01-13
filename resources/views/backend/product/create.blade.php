@extends('backend.master')

@section('title')
    Product
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
                    <h5 class="card-header">Add New Product</h5>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="inputText3" class="col-form-label  ">Product Name</label>
                                    <input id="inputText3" type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="short_description" class="col-form-label  ">Short Description</label>
                                    <textarea id="short_description" name="short_description"
                                        class="form-control @error('short_description') is-invalid @enderror"> </textarea>
                                </div>

                                <div class="form-group col-6">
                                    <label for="description" class="col-form-label">Description</label>
                                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"> </textarea>
                                </div>

                                <div class="form-group col-6">
                                    <label for="product_details" class="col-form-label">Product Details</label>
                                    <textarea id="product_details" name="product_details"
                                        class="form-control @error('product_details') is-invalid @enderror"> </textarea>
                                </div>

                                <div class="form-group col-6">
                                    <label for="quantity" class="col-form-label  ">Quantity</label>
                                    <input id="quantity" type="number" name="quantity"
                                        class="form-control @error('quantity') is-invalid @enderror">
                                </div>
                                @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="price" class="col-form-label ">Price</label>
                                    <input id="price" type="number" name="price"
                                        class="form-control @error('price') is-invalid @enderror">
                                </div>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="discount" class="col-form-label  ">Discount(%)</label>
                                    <input id="discount" type="number" name="discount"
                                        class="form-control @error('discount') is-invalid @enderror">
                                </div>
                                @error('discount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="delivery_policy" class="col-form-label">Delivery Policy</label>
                                    <input id="delivery_policy" type="text" name="delivery_policy"
                                        class="form-control @error('delivery_policy') is-invalid @enderror">
                                </div>
                                @error('delivery_policy')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="return_policy" class="col-form-label">Return Policy</label>
                                    <input id="return_policy" type="text" name="return_policy"
                                        class="form-control @error('return_policy') is-invalid @enderror">
                                </div>
                                @error('return_policy')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="order" class="col-form-label  ">Order</label>
                                    <input id="order" type="number" name="order"
                                        class="form-control @error('order') is-invalid @enderror">
                                </div>
                                @error('order')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="category" class="col-form-label">Select Category</label>
                                    <select class="form-control" id="category" name="category">

                                        <option value="">Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label for="sub_category">Select Sub Category</label>
                                    <select class="form-control" id="sub_category" name="sub_category" required>

                                        <option>Sub Category</option>
                                        <option></option>


                                    </select>
                                </div>


                                <div class="form-group col-6">
                                    <label for="inputEmail">Images</label>
                                    <input id="inputEmail" type="file" name="images[]" multiple class="form-control">
                                </div>

                                <div class="form-group col-6">
                                    <label for="status">Select Status</label>
                                    <select class="form-control @error('status') is-invalid @enderror" id="status"
                                        name="status" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>


                                <div class="form-group col-12 text-right">
                                    <input name="submit" value="Submit" type="submit" class="btn btn-warning">
                                </div>
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


@push('body-scripts')

    <script>
        $(document).ready(function() {

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            $("#category").on('change', function() {
                var category_id = $("#category").val();

                $.ajax({

                    data: {
                        category_id: category_id
                    },

                    url: "{{ route('product.sub-category') }}",

                    type: "POST",

                    dataType: 'json',

                    success: function(data) {
                        console.log(data.sub_categories);
                        var html ='';
                        $.each(data.sub_categories, function(index, val) {
                            html += "<option value="+val.id+">"+val.name+"</option>"
                            });

                            $('#sub_category').html(html);

                        
                    },

                    // error: function(data) {

                    //     console.log('Error:', data);

                    //     $('#saveBtn').html('Save Changes');

                    // },

                });
            });
        });
    </script>
    
@endpush
