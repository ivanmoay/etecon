<x-layout>
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
                    </tr>
                  </thead>
                  <tbody>
                    @unless (count($user_forms) == 0)
                    @foreach ($user_forms as $user_form)
                        <tr>                        
                            <td>
                                <p class="text-m font-weight-bold mb-0"><a href="/encode_form/{{$user_form->id}}" target="_blank">{{$user_form->form->form_name}}</a></p>
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