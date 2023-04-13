 @extends('dashboard')

 @section('page_title', 'Create Event')

 @section('page_content')
    @parent
   <div class="container-fluid">
      <div class="col-md-12">
        <h3 style="    font-size: 24px;padding: 10px 0px; font-weight: 900;">Add Event</h5>
        <form method="POST" action="{{ url('event')}}" enctype="multipart/form-data">
           @csrf
           @method('POST')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="name" value="{{old('name')}}" required>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type" >
              <option value="">Please Select Type</option>
              @foreach($eventTypes as $type)
                <option value="{{$type->id}}" @if(old('type')==$type->id) selected='true' @endif required>{{$type->title}}</option>
              @endforeach
            </select>
            @error('type')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="descrption" >Descrption</label>
            <textarea class="form-control" id="descrption" name="descrption" rows="3" required>{{old('descrption')}}</textarea>
            @error('descrption')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
           <div class="form-group">
            <label for="Image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary" style="color: #fff;background-color: #007bff;border-color: #007bff;">Save</button>
          <button type="Reset" class="btn btn-danger" style="color: #fff; background-color: #dc3545;border-color: #dc3545;">Reset</button>
        </form>
        
      </div>
  
   </div>
  @endsection