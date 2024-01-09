<x-layout>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Edit Course</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">

          <div class="col-md-12 mb-lg-0 mb-4">
            <div class="card mt-4">
              <div class="card-body p-3">
                <div class="row">

                  <form method="POST" action="/courses/{{$course->id}}">
                  @csrf
                  @method('PUT')

                  <x-input-text label="Course" name="course" value="{{$course->course}}"/>

                  <x-input-text label="Description" name="description" value="{{$course->description}}"/>
                  

                      <div class="text-center">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <button type="reset" class="btn btn-secondary">Reset</button>
                      </div>
                  </form>                    

                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
</x-layout>