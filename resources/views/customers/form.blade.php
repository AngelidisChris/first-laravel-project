@csrf
<div class="form-group">
    <label class="col-form-label" for="name">Name</label>

    <input id="name" name="name" type="text" value="{{ old('name') ?? $customer->name }}" placeholder="Name" class="form-control @error('name') is-invalid @enderror">

    @error('name')
    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('name') }}</strong></span>
    @enderror
</div>

<div class="form-group">
    <label class="col-form-label" for="email">Email</label>

    <input id="email" name="email"  type="text" value="{{ old('email') ?? $customer->email}}" placeholder="Email" class="form-control @error('email') is-invalid @enderror">

    @error('email')
    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('email') }}</strong></span>
    @enderror

</div>

<div class="form-group">

    <label class="" >Status</label>

    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select Customer status</option>
        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : ''}}>{{ $activeOptionValue }}</option>
        @endforeach

    </select>

</div>

<div class="form-group">

    <label class="" >Company</label>

    <select name="company_id" id="company_id" class="form-control">
        @foreach($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $customer->company->id  ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
    </select>

</div>

<div class="form-group d-flex flex-column">

    <label for="image">Profile Image</label>

    <input id="image" type="file" name="image" class="form-control-file @error('image') is-invalid @enderror py-2">


    @error('image')
    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('image') }}</strong></span>
    @enderror
</div>



