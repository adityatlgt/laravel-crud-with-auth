@extends('dashboard')
 @section('page_title', 'Event List')
 @section('page_content')
    @parent
   <div class="container-fluid">
      <div class="col-md-12">
        <h3 style="    font-size: 24px;padding: 10px 0px; font-weight: 900;">Events</h5>
        <a class="btn btn-info pull-right" href="{{url('event/create')}}" style="float: right;  padding: 12px; margin-top: -40px;">Add Event</a>
         @if(Session::has('success'))
           <div class="alert alert-success alert-dismissible" style="margin-top:25px">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Success!</strong> {{ Session::get('success') }}
            </div>
         @endif
         @if(Session::has('error'))
           <div class="alert alert-danger alert-dismissible" style="margin-top:25px">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Error!</strong> {{ Session::get('error') }}
            </div>
         @endif
        <table class="table" style="margin-top:25px">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Descrption</th>
            <th scope="col">Type</th>
            <th scope="col">Image</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
           @foreach($events as $event)
               <tr>
                  <th scope="row">{{(($events->currentPage()-1)*$events->perPage())+$loop->index+1}}</th>
                  <th scope="row">{{$event->id}}</th>
                  <td>{{$event->name}}</td>
                  <td>{{$event->description}}</td>
                  @if(!empty($event->evenType))
                    <td>{{$event->evenType->title}}</td>
                  @else
                     <td></td>
                  @endif
                  <td>
                     @if(!empty($event->image))
                         <img width="75" src="{{url('storage/'.$event->image)}}" class="img-fluid" alt="Responsive image">
                     @endif
                  </td>
                  <td>{{$event->created_at->diffForHumans()}}</td>
                  <td>{{$event->updated_at->diffForHumans()}}</td>
                  <td>
                     <a class="btn btn-info btn-sm text-info" style="color:#fff !important" href="{{url('event/'.Crypt::encryptString($event->id).'/edit')}}"> <i class="fas fa-pen"></i></a>
                     </a>
                      <a class="btn btn-danger btn-sm del-form" style="color:#fff" href="javaScript:void(0)" data-id="{{Crypt::encryptString($event->id)}}"> <i class="fas fa-trash"></i></a>
                     </a>
                  </td>
              </tr>
           @endforeach
        </tbody>
      </table>
       <div class="col-md-12" style="text-align: center; margin-bottom:  20px">
          <nav aria-label="pagination">
              <ul class="pagination" style=" justify-content: center;">
                @if($events->currentPage()==1)
                   <li class="page-item disabled">
                     <a class="page-link" href="#" tabindex="-1">Previous</a>
                   </li>
                 @else
                   <li class="page-item">
                   <a class="page-link" href="{{url('/event?page='.$events->currentPage()-1)}}">Previous</a>
                   </li>
                 @endif
                @for($i=1; $i <= $events->lastPage(); $i++)
                  @if($events->currentPage()==$i)
                     <li class="page-item active">
                        <a class="page-link" href="#">{{$i}}<span class="sr-only">{{$i}}</span></a>
                      </li>
                  @else
                   <li class="page-item"><a class="page-link" href="{{url('/event?page='.$i)}}">{{$i}}</a></li>
                  @endif
                @endfor
                 @if($events->currentPage()==$events->lastPage())
                   <li class="page-item disabled">
                     <a class="page-link" href="#" tabindex="-1">Next</a>
                   </li>
                 @else
                   <li class="page-item">
                   <a class="page-link" href="{{url('/event?page='.$events->currentPage()+1)}}">Next</a>
                   </li>
                 @endif
                  
              </ul>
            </nav>
       </div>
      </div>
   </div>
   <form style="display:none" url="{{url('event')}}" id="del-form" method="post">
      @csrf
      @method('DELETE')
   </form>
@endsection


            