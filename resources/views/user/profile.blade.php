<x-layout>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">My Profile</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">

            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-body p-3">
                  <div class="row">

                    <form method="POST" action="/profile/{{$user->id}}">
                    @csrf
                    @method('PUT')

                    <label class="form-label">Email</label>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="email" value="{{$user->email}}" readonly>
                      @error('email')
                        <code>{{$message}}</code>
                      @enderror    
                    </div>

                    <label class="form-label">Name</label>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="name" value="{{$user->name}}">
                      @error('name')
                        <code>{{$message}}</code>
                      @enderror    
                    </div>

                    <label class="form-label">Phone Number</label>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="phone_number" value="{{$user->phone_number}}">
                      @error('phone_number')
                        <code>{{$message}}</code>
                      @enderror    
                    </div>

                    <label class="form-label">Credentials</label>
                    <div class="input-group input-group-outline mb-3">
                      <input type="text" class="form-control" name="credentials" value="{{$user->credentials}}">
                      @error('credentials')
                        <code>{{$message}}</code>
                      @enderror    
                    </div>

                    <label class="form-label">Company</label>
                    <select class="form-select" name="company_id">
                      <option selected value="0">&nbsp; Select...</option>
                      @foreach ($companies as $company)
                          <option value="{{$company->id}}" {{$user->company_id == $company->id ? 'selected' : ''}}>&nbsp; {{$company->company_name}}</option>
                      @endforeach                      
                    </select><br />

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