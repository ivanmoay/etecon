<x-layout>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Hospice Eligibility Requirements</h6>
            </div>
          </div>            
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Diagnoses</th>
                  </tr>
                </thead>
                <tbody>
                  @unless (count($diagnoses) == 0)
                  @foreach ($diagnoses as $diagnosis)
                      <tr>                        
                          <td>
                              <a href="/her/{{$diagnosis->id}}/show"><p class="text-m font-weight-bold mb-0">{{$diagnosis->diagnosis}}</p></a>
                          </td>                          
                      </tr>
                  @endforeach     
                  @else 
                      <tr>                        
                          <td colspan="3">
                              <p class="text-xs font-weight-bold mb-0">No Diagnosis found.</p>
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