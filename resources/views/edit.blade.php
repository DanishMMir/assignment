@extends('layout')
@section('content')
    <div class="container">
        @include('flash-message')
    <form action="{{ route('property.save') }}"  method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $property['id'] }}">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >County</label>
                <input type="text" class="form-control" id="county" name="county" value="{{ $property['county'] }}" placeholder="County" required>
            </div>
            <div class="form-group col-md-6">
                <label >Country</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ $property['country'] }}" placeholder="Country" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Town</label>
                <input type="text" class="form-control" id="town" name="town" value="{{ $property['town'] }}" placeholder="Town" required>
            </div>
            <div class="form-group col-md-6">
                <label >Post Code</label>
                <input type="text" class="form-control" id="post-code" name="post_code" required value="{{ isset($property['post_code'])?$property['post_code']:'' }}" placeholder="Post Code">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label >Description</label>
                <textarea class="form-control" id="description" rows="3" required name="description" placeholder="Description">{{ $property['description'] }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Address</label>
                <input type="text" class="form-control" id="address" required name="address" value="{{ $property['address'] }}" placeholder="Address">
            </div>
            <div class="custom-file form-group col-md-6" style="margin-top:30px;">
                <input type="file" class="custom-file-input" name="image" id="image">
                <label class="custom-file-label">{{ !empty($file) ? $file : 'Image' }}</label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputState">No of Bedrooms</label>
                <select id="inputState" name="num_bedrooms" required class="form-control">
                    <option {{ isset($property) ? 'selected' : '' }} > Choose... </option>
                    @for($i=1 ; $i < 50 ; $i++)
                        <option {{ $property['num_bedrooms'] == $i ? 'selected' : '' }} value="{{ $i }}"> {{$i}} </option>
                    @endfor
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">No of Bathrooms</label>
                <select id="inputState" name="num_bathrooms" required class="form-control">
                    <option {{ isset($property) ? 'selected' : '' }} > Choose... </option>
                    @for($i=1 ; $i < 50 ; $i++)
                        <option {{ $property['num_bathrooms'] == $i ? 'selected' : '' }} value="{{ $i }}"> {{$i}} </option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Price</label>
                <input type="text" class="form-control" id="price" name="price" required value="{{ $property['price'] }}" placeholder="Price">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Property Type</label>
                <select id="inputState" name="property_type" required class="form-control">
                    <option {{ isset($propertyType) ? 'selected' : '' }} > Choose... </option>
                    @foreach($propertyType as $type)
                        <option {{ $property['property_type'] == $type['id'] ? 'selected' : '' }} value="{{ $type['id'] }}"> {{ $type['title'] }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" {{ $property['type'] === 'rent' ? 'checked' : '' }} name="type" id="inlineRadio1" value="rent">
                <label class="form-check-label" for="inlineRadio1">For Rent</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" {{ $property['type'] === 'sale' ? 'checked' : '' }} name="type" id="inlineRadio2" value="sale">
                <label class="form-check-label" for="inlineRadio2">For Sale</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
@endsection
@push('scripts')
    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endpush
