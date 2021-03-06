@extends('layouts.app')

@section('title', 'Edit customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{$customer->name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action=" {{ route('customers.update', ['customer' => $customer]) }}" method="post" class="pb-5" enctype="multipart/form-data">
                @method('PATCH')
                @include('customers.form')

                <button class="btn btn-primary btn-block " type="submit">Save Customer</button>
            </form>
        </div>
    </div>
@endsection
