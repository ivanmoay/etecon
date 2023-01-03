<x-layout>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Users</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact #</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Credentials</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User Type</th>
                      <th colspan="2" class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                        <tr>                        
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                    <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$user->phone_number}}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$user->credentials}}</p>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{$user->user_type}}</h6>
                                    @if ($user->user_type < 2)
                                        <a href="/users/{{$user->id}}/promote">
                                        <p class="text-xs text-secondary mb-0">Promote</p></a>
                                    @else
                                        <a href="/users/{{$user->id}}/demote">
                                        <p class="text-xs text-secondary mb-0">Demote</p></a>
                                    @endif                                     
                                </div>
                                </div>
                            </td>
                             @if ($user->activated == 0)
                                <td class="align-middle">                                
                                    <span class="badge badge-sm bg-gradient-secondary">Inactive</span>
                                </td>
                                <td class="align-middle">
                                    
                                    <a href="/users/{{$user->id}}/activate" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="deactivate">
                                    Activate
                                    </a>
                                </td>
                            @else
                                <td class="align-middle">                                
                                    <span class="badge badge-sm bg-gradient-success">Active</span>
                                </td>
                                <td class="align-middle">
                                    <a href="/users/{{$user->id}}/deactivate" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="deactivate">
                                    Deactivate
                                    </a>
                                </td>
                            @endif

                            
                        </tr>
                    @endforeach                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-layout>