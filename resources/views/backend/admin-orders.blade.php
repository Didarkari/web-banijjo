@extends('backend.master')

@section('title')
Order List
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
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                    <div class="col-md-6 text-right">
                        <a href="{{ route('product.create') }}" class="btn btn-info category-btn">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <th class="li-product-remove">Date</th>
                              <th class="cart-product-name">Customer</th>
                              <th class="li-product-price">Order Notes</th>
                              <th class="li-product-quantity">Quantity</th>
                              <th class="li-product-subtotal">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($orders as $order)
                          <tr>

                              <td class="li-product-name"><a href="#">{{ $order->date }}</a>
                              </td>
                              <td class="li-product-name"><a href="#">{{ $order->customer_name }}</a>
                              </td>
                              <td class="li-product-name"><a href="#">{{ $order->order_notes }}</a>
                              </td>
                              <td class="li-product-name"><a href="#">{{ $order->total_quantity }}</a>
                              </td>
                              <td class="li-product-name"><a href="#">{{ $order->total_amount }}</a>
                              </td>
                              
                          </tr>
                      @endforeach
                            </tr>

                        </tbody>
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end striped table -->
@endsection
