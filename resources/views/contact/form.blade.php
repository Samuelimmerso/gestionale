    <div class="input-group flex-nowrap">
        <input type="text" name="name" class="form-control" placeholder="Example: Mario Rossi" aria-label="Username" aria-describedby="addon-wrapping" value="{{$customer->name ?? old('name')}}">
    </div>

    @if ($errors->has('name'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('name')}}
        </div>
    @endif

    <div class="input-group flex-nowrap">
        <input type="email" name="email" class="form-control" placeholder="example@email.com" aria-label="email" aria-describedby="addon-wrapping" value="{{$customer->email ?? old('email')}}">
    </div>

    @if ($errors->has('email'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('email')}}
        </div>
    @endif

    <select class="form-select mb-3" name="active" aria-label="Default select example">
        @foreach ($customer->ActiveOptions() as $ActiveOptionsKey => $ActiveOptionsValue)
            <option value="{{$ActiveOptionsKey}}" {{isset($customer->active) && $customer->active == $ActiveOptionsValue ? "selected" : ''}}>{{$ActiveOptionsValue}}</option>
        @endforeach
    </select>

    <div class="mb-3 mt-3">
        <label for="exampleFormControlTextarea1" class="form-label">description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$customer->description ?? old('description')}}</textarea>
    </div>

    @if ($errors->has('description'))
        <div class="alert alert-danger" role="alert">
            {{$errors->first('description')}}
        </div>
    @endif

    @csrf
    <button class="btn btn-primary">Save</button>
        </div>


