<x-layout>
    <div class="row">
      <div class="col-8">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Hospice Eligibility Requirements for {{$diagnosis->diagnosis}}</h6>
            </div>
            <br />
            
            @isset($counter)
                @if ($counter >= 3)

                <div class="alert alert-success alert-dismissible text-white" role="alert">
                    <span class="text-sm">Client Shows To Be Appropriate For Hospice Admission, Coordinate With Your Hospice Medical Director For Final Approval To Admit To Hospice.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                    
                @elseif($counter >= 2)

                <div class="alert alert-warning alert-dismissible text-white" role="alert">
                    <span class="text-sm">Client May Meet Criteria For Hospice Admission But Will Require A Consultation.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                @else

                <div class="alert alert-primary alert-dismissible text-white" role="alert">
                    <span class="text-sm">Client Is Not Hospice Appropriate, Please Contact The Clinical Director To Evaluate For Eligibility.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                    
                @endif

                <p>
                    <b>
                    This finding is only for preliminary information into hospice eligibility. The Hospice Medical Director will make final determination whether the patient qualifies for hospice or not.
                    </b>
                </p>
                
                
            @endisset
            
          </div>
          <div class="card-body px-0 pb-2">
          <div class="col-md-8 mb-lg-0 mb-4">
            <div class="card mt-4">                
              <div class="card-body p-3">
                <div class="row">

                    <p>Please check on the box if the corresponding statement/s below are present or true with the client</p>

                  <form method="POST" action="/her/{{$diagnosis->id}}">
                  @csrf

                    @foreach ($questions as $question)                        
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" name="{{$question->id}}" {{@$anwers[$question->id] == 'on' ? 'checked' : ''}}>
                            <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">{{$question->question}}</label>
                        </div>
                    @endforeach      

                      <div class="text-center">
                          <button type="submit" class="btn btn-primary">Check</button>
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