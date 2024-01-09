<x-layout>
    <div class="row">
      <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="card-body">
            
            <form action="/videos/{{$course->id}}" method="POST" role="form" class="text-start">
            @csrf                 

                <x-input-text label="Title" name="title" value="{{old('title')}}"/>

                @if(\Session::has('error'))
                  <div class="alert alert-danger text-white" role="alert">
                    <strong>Error: </strong>{!! \Session::get('error') !!}
                  </div>
                @endif                

                <x-input-text label="Video Link" name="video_link" value="{{old('video_link')}}"/>

                <x-input-text label="Order Level" name="order_level" value="{{old('order_level')}}"/>
              
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Add to course</button>
              </div>                                    
            </form>
          </div>
        </div>
      </div>
    </div><br />

<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">                
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Videos for {{$course->course}}</h6>
          </div>
        </div>            
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Video Link</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order Level</th>
                  <th colspan="2" class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                </tr>
              </thead>
              <tbody>
                @unless (count($videos) == 0)
                @foreach ($videos as $video)
                    <tr>                        
                        <td>
                            <p class="text-xs font-weight-bold mb-0">{{$video->title}}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$video->video_link}}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$video->order_level}}</p>
                        </td>
                        <td class="ms-auto text-start"> 
                            <form method="POST" action="/videos/{{$video->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="material-icons text-sm me-2">delete</i>Delete</button>
                            </form>                                 
                        </td>
                    </tr>
                @endforeach     
                @else 
                    <tr>                        
                        <td colspan="2">
                            <p class="text-xs font-weight-bold mb-0">No video associated to this course.</p>
                        </td>
                    </tr>        
                @endunless       
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
</x-layout>