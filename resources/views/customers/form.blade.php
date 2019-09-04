<div class="form-group">
    <div class="input-group mb-1">
    <input type="text" class="form-control" placeholder="Customer Name" name="name" aria-describedby="basic-addon1" value="{{old('name') ?? $customer->name ?? null}}">
        @if ($errors->first('name'))
        <div class="text-danger p-1"><small>* {{ $errors->first('name') }}</small></div>
        @endif
    </div>

    <div class="input-group mb-1">
        <input type="text" class="form-control" placeholder="Customer Email" name="email" aria-describedby="basic-addon1"  value="{{old('email') ?? $customer->email ?? null}}">
        @if ($errors->first('email'))
        <div class="text-danger p-1"><small>* {{ $errors->first('email') }}</small></div>
        @endif
    </div>
    <div class="input-group mb-1">
        <select class="custom-select form-control" name="company_id" id="company_id">
            @foreach ($companies as $company)
                <option value="{{$company->id}}" {{ $company->id == $customer->id ? 'selected' : '' }}>{{$company->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="input-group mb-1">
        <select class="custom-select form-control" name="active" id="active">
            <option value="" disabled>Select Customer Status</option>
            @foreach ($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
                <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : ''}}>{{ $activeOptionValue }}</option>
            @endforeach
            {{-- <option value="1" {{ $customer->active == 'Active' ? 'selected' : ''}}>Active</option>
            <option value="0" {{ $customer->active == 'Inactive' ? 'selected' : ''}}>Inactive</option> --}}
        </select>
    </div>

</div>
@csrf
