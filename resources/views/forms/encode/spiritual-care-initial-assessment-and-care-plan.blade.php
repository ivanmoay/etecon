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

                    <form method="POST" action="/print_form/{{$userForm->id}}" target="_blank">
                    @csrf

                    <x-input-text label="Patient Name" name="patient_name"/>

                    <x-input-text label="ID #" name="id_number"/> 

                    <x-input-text label="Time In" name="time_in"/>
                    {{-- <x-input-select label="Time In" name="time_in_select" items="{{'AM,PM'}}"/><br/> --}}

                    <x-input-text label="Time Out" name="time_out"/>  
                    {{-- <x-input-select label="Time Out" name="time_out_select" items="{{'AM,PM'}}"/><br/> --}}

                    {{-- <x-input-select label="Assessment Obtained By" name="obtained_by" items="{{'Phone,Visit'}}"/><br/> --}}

                    {{-- <x-input-select label="Assessment Obtained From" name="obtained_from" items="{{'Patient,Caregiver Name'}}"/><br/>     --}}
                    <x-input-text label="Caregiver Name" name="obtained_from_name"/>
                    
                    <x-input-text label="Religious affiliation/denomination" name="religious_affiliation"/>

                    <x-input-text label="Congregation name" name="congregation_name"/>

                    <x-input-text label="Patient's Clergy" name="patients_clergy"/>

                    <x-input-text label="Phone" name="phone"/>

                    {{-- <x-input-select label="Request patient's clergy to be notified" name="notify_clergy" items="{{'Yes,No'}}"/><br/>     --}}

                    <x-input-text label="Guardian" name="guardian"/>

                    <x-input-text label="Spiritual Strengths Comments" name="comments"/>

                    <x-input-text label="Spiritual Issues Other" name="si_other"/>

                    <x-input-text label="Spiritual Issues Comments" name="si_comments"/>

                    <x-input-text label="Interventions Other Conflict Issues" name="interventions_other_conflict"/>

                    <x-input-text label="Interventions Other" name="interventions_other"/>

                    <x-input-text label="Interventions Frequency of Services" name="interventions_frequency"/>

                    <x-input-text label="Interventions Comments" name="interventions_comments"/>

                    <x-input-text label="Goals Other" name="goals_other"/>

                    <label class="form-label">Summary/Comments</label>    
                    <div class="input-group input-group-outline mb-3">
                        <textarea class="form-control" name="summary" rows="3"></textarea>
                    </div>

                    <x-input-text label="Date Signed by Spiritual Coordinator" name="date_coordinator"/>

                    <x-input-text label="Date Signed Visit Verified" name="date_verified"/>

                  
                        <br />
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Print</button>
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