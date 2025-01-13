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

        <div class="col-12">
            @if (Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @elseif(Session::has('danger'))
            <p class="alert alert-success">{{ Session::get('danger') }} </p><!-- here to 'withWarning()' -->
            @endif

            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header">Sub Category List</div>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('sub-category.create') }}" class="btn btn-info category-btn">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Order</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sub_categories as $row)


                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ isset($row->category->name) ? $row->category->name : 'Not found' }}</td>
                                <td>{{ $row->order }}</td>
                                <td>
                                    <span class ="btn {{ $row->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                    {{ $row->status == 1 ? 'Active' : 'Inactive'}}</span></td>
                                <td>
                                    <a href="{{ route('sub-category.edit', $row->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('sub-category.delete',$row->id) }}" onclick="return confirm('Do you want to delete this id?')" class="btn btn-dark">Delete</a>
                                </td>
                                @endforeach
                            </tr>
                            
                        </tbody>
                    </table>
                    {{ $sub_categories->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end striped table -->
@endsection
