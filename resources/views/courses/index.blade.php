<x-layout>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Courses</h6>
            </div>
          </div>            
          <div class="card-body px-0 pb-2">

              <div class="row">
                  <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="/courses/create"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Course</a>
                  </div>
              </div>


            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Course</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                    <th colspan="2" class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                  </tr>
                </thead>
                <tbody>
                  @unless (count($courses) == 0)
                  @foreach ($courses as $course)
                      <tr>                        
                          <td>
                              <a href="/courses/{{$course->id}}/show"><p class="text-xs font-weight-bold mb-0">{{$course->course}}</p></a>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0">{{$course->description}}</p>
                        </td>
                          <td class="ms-auto text-end">                                
                              <a class="btn btn-link text-dark px-3 mb-0" href="/courses/{{$course->id}}/edit"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                          </td>
                          <td class="ms-auto text-start"> 
                              <form method="POST" action="/courses/{{$course->id}}">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="material-icons text-sm me-2">delete</i>Delete</button>
                              </form>                                 
                          </td>
                      </tr>
                  @endforeach     
                  @else 
                      <tr>                        
                          <td colspan="3">
                              <p class="text-xs font-weight-bold mb-0">No Courses found.</p>
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