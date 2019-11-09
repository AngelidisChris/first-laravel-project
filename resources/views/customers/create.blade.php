@extends('layouts.app')

@section('title', 'Add new customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add new customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{route('customers.store')}}" method="post" class="pb-5" enctype="multipart/form-data">
                @include('customers.form')

                <button class="btn btn-primary btn-block" type="submit">Add Customer</button>
            </form>
        </div>
    </div>
@endsection
