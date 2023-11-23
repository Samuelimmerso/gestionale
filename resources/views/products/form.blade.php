<div class="input-group flex-nowrap">
    <input type="text" name="name" class="form-control" placeholder="Product name" aria-label="Username" aria-describedby="addon-wrapping" value="{{$product->name ?? old('name')}}">
</div>

<div class="mb-3 mt-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$product->description ?? old('description')}}</textarea>
</div>

@if ($errors->has('name'))
<div class="alert alert-danger" role="alert">
    {{$errors->first('name')}}
</div>
@endif

@if ($errors->has('description'))
<div class="alert alert-danger" role="alert">
    {{$errors->first('description')}}
</div>
@endif

<select class="form-select mb-3" name="active" aria-label="Default select example">
    @foreach ($product->ActiveOptions() as $ActiveOptionsKey => $ActiveOptionsValue)
        <option value="{{$ActiveOptionsKey}}" {{isset($product->active) && $product->active == $ActiveOptionsValue ? "selected" : ''}}>{{$ActiveOptionsValue}}</option>
    @endforeach
</select>


{{$categories}}
<select class="form-select mb-3" name="category_id" aria-label="Default select example">
    @foreach ($categories as $category)
        <option value="{{$category->id}}" {{isset($product->category_id) && $product->category_id == $category->id ? "selected" : ''}}>{{$category->name}}</option>
    @endforeach
</select>


<button class="btn btn-success">Save</button>
</div>
@csrf
