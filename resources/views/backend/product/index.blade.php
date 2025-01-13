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

        <div class="col-12">
            @if (Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @elseif(Session::has('danger'))
                <p class="alert alert-success">{{ Session::get('danger') }} </p><!-- here to 'withWarning()' -->
            @endif

            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header">Product List</div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Short D.</th>
                                <th scope="col">Img</th>
                                <th scope="col">Price</th>
                                <th scope="col">Order</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->quantity }}</td>
                                    <td>{{ $row->short_description }}</td>
                                    <td class="img-table">
                                        @foreach ($row->images as $image)
                                            <img src="{{ asset($image->path) }}" class=" product-img img-responsive"
                                                width="15%">
                                        @endforeach
                                    </td>
                                    {{-- <td>{{ $row->images->images }}</td> --}}
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->order }}</td>

                                    <td>
                                        <span class ="btn {{ $row->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                            {{ $row->status == 1 ? 'Active' : 'Inactive' }}</span>
                                    </td>
                                    <td>

                                        <a href="{{ route('product.edit', $row->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('product.delete', $row->id) }}"
                                            onclick="return confirm('Do you want to delete this id?')"
                                            class="btn btn-dark">Delete</a>
                                    </td>
                            @endforeach
                            </tr>

                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end striped table -->
@endsection
