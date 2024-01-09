<x-layout>
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-body">
                <form action="/user_forms/{{$user->id}}" method="POST" role="form" class="text-start">
                @csrf                 

                    <label class="form-label">Select Form to add</label>
                    <select class="form-select" name="form_id" required>
                        <option selected value="">&nbsp; Select...</option>
                        @foreach ($forms as $form)
                            <option value="{{$form->id}}">&nbsp; {{$form->form_name}}</option>
                        @endforeach                      
                    </select>
                  
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Add to User</button>
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
                <h6 class="text-white text-capitalize ps-3">User Forms</h6>
              </div>
            </div>            
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Form Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                      <th colspan="2" class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @unless (count($user_forms) == 0)
                    @foreach ($user_forms as $user_form)
                        <tr>                        
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$user_form->form->form_name}}</p>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">{{$user_form->form->category->category ?? 'none'}}</p>
                          </td>
                            <td class="ms-auto text-start"> 
                                <form method="POST" action="/user_forms/{{$user_form->id}}">
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
                                <p class="text-xs font-weight-bold mb-0">No form associated to this user.</p>
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