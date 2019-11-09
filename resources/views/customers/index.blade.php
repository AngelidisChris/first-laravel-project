@extends('layouts.app')

@section('title')
    Customers List
@endsection

@section('content')

        <div class="row">
            <div class="col-12">
                <h1>Customer List</h1>
{{--                @can('create', App\Customer::class)--}}
                <a href="/customers/create">Add new customer</a>
{{--                @endcan--}}
            </div>
        </div>


   @foreach($customers as $customer)
       <div class="row">
           <div class="col-2">{{  $customer->id }}</div>
           <div class="col-4">
                   <a href="/customers/{{  $customer->id }}">
                       {{ $customer->name }}
                   </a>
{{--               @cannot('view', $customer)--}}
{{--                       {{ $customer->name }}--}}
{{--               @endcannot--}}
           </div>
           <div class="col-4">{{ $customer->company->name }}</div>
           <div class="px-2 col-2">{{ $customer->active }}</div>
       </div>
   @endforeach
    <div class="row pt-4">
        <div class="col-12  d-flex justify-content-center">
            {{ $customers->links() }}
        </div>
    </div>
@endsection
