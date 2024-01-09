<x-layout>
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">                
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">{{ $course->course }}</h6>
              </div>
            </div>            
            <div class="card-body px-0 pb-2">

              <div class="container">
                <div class="row">
                  <div class="col-8">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/{{$watch_link}}" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="col">
                    <ul class="list-group list-group-flush mt-2">
                      @foreach($videos as $video)                     
                      
                        <li class="list-group-item">
                          <a href="/learnings/{{$course->id}}/{{$video->id}}">{{$video->title}}</a>
                        </li>   
                      
                      @endforeach  
                  </ul>
                </div>                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
    </div>
</x-layout>