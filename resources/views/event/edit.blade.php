 @extends('dashboard')

 @section('page_title', 'Update Event')

 @section('page_content')
    @parent

   <div class="container-fluid">
      <div class="col-md-12">
        <h3 style="    font-size: 24px;padding: 10px 0px; font-weight: 900;">Update Event</h5>
        <form method="POST" action="{{ url('event/'.Crypt::encryptString($event->id))}}" enctype="multipart/form-data">
           @csrf
           @method('PUT')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="name" value="@if(old('name')){{old('name')}}@else{{$event->name}}@endif">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type" >
              <option value="">Please Select Type</option>
              @foreach($eventTypes as $type)
                <option value="{{$type->id}}" @if(old('type')==$type->id) selected='true' @elseif($event->type==$type->id)) selected='true' @endif  >{{$type->title}}</option>
              @endforeach
            </select>
            @error('type')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="descrption" >Descrption</label>
            <textarea class="form-control" id="descrption" name="descrption" rows="3" >@if(old('descrption')){{old('descrption')}}@else{{$event->description}}@endif</textarea>
            @error('descrption')
                <p class="text-danger">{{ $message }}</p>
            @enderror

          </div>
           <div class="form-group">
            <label for="Image">Image</label>
             @if(!empty($event->image))
              <a href="{{url('storage/'.$event->image)}}" target="_blank"><img style="width: 200px; margin-bottom: 25px" src="{{url('storage/'.$event->image)}}" class="img-fluid" alt="Responsive image"></a> 
               
              @endif
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary" style="color: #fff;background-color: #007bff;border-color: #007bff;">Update</button>
          <a  href="{{url('/event')}}" class="btn btn-danger" style="color: #fff;">Back</a>
        </form>
        
      </div>
  
   </div>
 
  @endsection