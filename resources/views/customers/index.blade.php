@extends('layouts.app')


@section('content')

    <div class="container bg-light">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
            <div class="col-9 d-flex align-items-center">
                <img class="mr-3" src="img/customers-icon.png" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Customers</h6>
                    <small>list of customers</small>
                </div>
            </div>
            <div class="col-3">
                <a class="btn btn-light" href="/customers/create">+ Add New Customer</a>
            </div>
        </div>

        <div class="my-3 p-3 bg-white rounded box-shadow">
                <h5 class="border-bottom border-gray pb-2 mb-0 font-weight-bold">Customers List</h6>

                <div class="media text-muted pt-3 d-flex align-items-center">
                  <img src="/img/circle-green.png" alt=""  width="24" height="24" class="mr-3 rounded ">
                  <p class="media-body pb-3 mb-0 small lh-125 ">
                    <strong class="d-block text-gray-dark">Active Customers</strong>
                    List for active users.
                  </p>
                </div>

                <div class="media text-muted pt-3 border-bottom border-gray">
                    <ul class="">
                        @foreach ($activeCustomers as $customer)
                    <li class="small lh-125"><a href="{{ Route('customers.show',['customer' => $customer])}}">{{ $customer->name }}</a><span class="text-muted small">({{ $customer->company->name }})</span></li>
                        @endforeach
                    </ul>
                </div>

                <div class="media text-muted pt-3 d-flex align-items-center">
                  <img src="/img/circle-red.png" alt=""  width="24" height="24" class="mr-2 rounded">
                  <p class="media-body pb-3 mb-0 small lh-125">
                    <strong class="d-block text-gray-dark">Inactive Customers</strong>
                    List for inactive users.
                  </p>
                </div>

                <div class="media text-muted pt-3 border-bottom border-gray">
                    <ul>
                        @foreach ($inactiveCustomers as $customer)
                            <li class="small lh-125"><a href="/customers/{{$customer->id}}">{{ $customer->name }}</a><span class="text-muted small">({{ $customer->company->name }})</span></li>
                        @endforeach
                    </ul>
                </div>


                <small class="d-block text-right mt-3">
                  <a href="/customers/create">Add New Customer</a>
                </small>
              </div>


        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h5 class="border-bottom border-gray pb-2 mb-0 font-weight-bold">Companies List</h6>

                @foreach ($companies as $company)
                    <div class="border-bottom border-gray">
                        <div class="media text-muted pt-3 d-flex align-items-center">
                            <img src="/img/company-icon.png" alt=""  width="24" height="24" class="mr-2 rounded">
                            <p class="media-body pb-3 mb-0 small lh-125 ">
                                <strong class="d-block text-gray-dark">{{ $company->name }}</strong>
                                {{ $company->phone }}
                            </p>
                        </div>

                        <ul class="pt-2">
                            @foreach ($company->customers as $customer)
                                        <li class="small lh-125">{{ $customer->name }} <span class="text-muted small">({{ $customer->company->name }})</span></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
        </div>



    </div>
@endsection
