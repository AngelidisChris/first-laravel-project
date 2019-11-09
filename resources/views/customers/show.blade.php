@extends('layouts.app')

@section('title', 'Customer Details')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{ $customer->name }}</h1>
            <p><a href="/customers/{{ $customer->id }}/edit">Edit</a></p>
{{--            @can('delete', $customer)--}}
            <form action="/customers/{{$customer->id}}" method="post">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Delete</button>

            </form>
{{--            @endcan--}}
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name: </strong>{{ $customer->name }}</p>
            <p><strong>Email: </strong>{{ $customer->email }}</p>
            <p><strong>Status: </strong>{{ $customer->active }}</p>
            <p><strong>Company: </strong>{{ $customer->company->name }}</p>
        </div>
    </div>

    @if($customer->image)
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('storage/' . $customer->image) }}" alt="" class="img-thumbnail">
            </div>
        </div>
    @endif

@endsection
