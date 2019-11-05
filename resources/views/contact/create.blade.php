@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>

   @if(! session()->has('message'))
       <form action="{{ route('contact.store')}}" method="post">
           @csrf
           <div class="form-group">
               <label class="col-form-label" for="name">Name</label>

               <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Name" class="form-control @error('name') is-invalid @enderror">

               @error('name')
               <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('name') }}</strong></span>
               @enderror
           </div>

           <div class="form-group">
               <label class="col-form-label" for="email">Email</label>

               <input id="email" name="email"  type="text" value="{{ old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror">

               @error('email')
               <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('email') }}</strong></span>
               @enderror
           </div>

           <div class="form-group">
               <label class="col-form-label" for="message">Message</label>

               <textarea id="message" name="message" value="" placeholder="Write a message" class="form-control md-textarea @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
               @error('message')
               <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('message') }}</strong></span>
               @enderror
           </div>

           <button class="btn btn-primary btn-block" type="submit">Submit</button>

       </form>
   @endif

@endsection
