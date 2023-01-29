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

                    <x-input-text label="Date of First Visit" name="date_first_visit"/>

                    <x-input-text label="Team Leader" name="team_leader"/>

                    <x-input-text label="Frequency" name="frequency"/>

                    <x-input-text label="Caregiver Name" name="caregiver_name"/>

                    <x-input-text label="Diagnosis/Patient Problems" name="diagnosis"/>

                    <x-input-text label="Address" name="address"/>

                    <x-input-text label="Phone #" name="phone_number"/>

                    <x-input-text label="Date of Birth" name="dob"/>

                    <label class="form-label">Directions</label>    
                    <div class="input-group input-group-outline mb-3">
                        <textarea class="form-control" name="directions" rows="3"></textarea>
                    </div>

                    <x-input-text label="Temperature" name="temperature"/>

                    <x-input-text label="BP" name="bp"/>

                    <x-input-text label="Pulse" name="pulse"/>

                    <x-input-text label="Respiration" name="respiration"/>

                    <x-input-text label="Frequency Tub/Shower" name="f_tub"/>

                    <x-input-text label="Frequency Bed" name="f_bed"/>

                    <x-input-text label="Frequency Assist Bath-Chair" name="f_bath"/>

                    <x-input-text label="Frequency Shampoo Hair" name="f_shampoo"/>

                    <x-input-text label="Frequency Comb Hair" name="f_comb"/>

                    <x-input-text label="Frequency Mouth Care" name="f_mouth"/>

                    <x-input-text label="Frequency Shave" name="f_shave"/>

                    <x-input-text label="Frequency Clean/File Nails" name="f_clean_nails"/>

                    <x-input-text label="Frequency Perineal Care" name="f_perineal_care"/>

                    <x-input-text label="Frequency External Cath Care" name="f_cath_care"/>

                    <x-input-text label="Frequency Measure Cath Output" name="f_measure_cath"/>

                    <x-input-text label="Frequency Empty Drainage Bag" name="f_empty_drainage"/>

                    <x-input-text label="Frequency Apply Lotion" name="f_apply_lotion"/>

                    <x-input-text label="Frequency Ambulation/Mobility" name="f_ambulation"/>

                    <x-input-text label="Frequency Walker/Wheelchair/Cane" name="f_walker"/>

                    <x-input-text label="Frequency Chair/Bed" name="f_chair"/>

                    <x-input-text label="Frequency Dangle/Commode" name="f_dangle"/>

                    <x-input-text label="Frequency Exercise" name="f_exercise"/>

                    <x-input-text label="Frequency Reposition Patient" name="f_reposition"/>

                    <x-input-text label="Frequency Others" name="f_others"/>

                    <x-input-text label="Frequency Prepare Meals" name="f_prepare_meals"/>

                    <x-input-text label="Frequency Feed" name="f_feed"/>

                    <x-input-text label="Frequency Setup" name="f_setup"/>

                    <x-input-text label="Frequency Offer Oral Supplement" name="f_offer_oral"/>

                    <x-input-text label="Frequency Change Bed Linens" name="f_change_linens"/>

                    <x-input-text label="Frequency Make Bed" name="f_make_bed"/>

                    <x-input-text label="Frequency Straighten Room" name="f_straighten"/>

                    <x-input-text label="Frequency Laundry" name="f_laundry"/>

                    <x-input-text label="Frequency Shopping" name="f_shopping"/>

                    <x-input-text label="Pertinent Information Lives with Other" name="p_lives"/>

                    <x-input-text label="Pertinent Information Amputee" name="p_amputee"/>

                    <x-input-text label="Pertinent Information Amputee Diet" name="p_diet"/>

                    <x-input-text label="Pertinent Information Prosthesis" name="p_prosthesis"/>

                    <x-input-text label="Pertinent Information Special Equipment" name="p_special_equipment"/>

                    <x-input-text label="Pertinent Information Vision Deficit Others" name="p_vision_others"/>

                    <x-input-text label="Pertinent Information Allergies" name="p_allergies"/>

                    <x-input-text label="Safety Fall Precautions Other" name="so_precautions"/>
                    <x-input-text label="Safety Fall Precautions Special Instructions" name="si_precautions"/>

                    <x-input-text label="Safety 24° Supervision Other" name="so_supervision"/>
                    <x-input-text label="Safety 24° Supervision Special Instructions" name="si_supervision"/>

                    <x-input-text label="Safety Emergency Call System Other" name="so_emergency"/>
                    <x-input-text label="Safety Emergency Call System Special Instructions" name="si_emergency"/>

                    <x-input-text label="Safety Other" name="s_other"/>

                    <x-input-text label="Safety Other (specify)" name="so_other"/>
                    <x-input-text label="Safety Other Special Instructions" name="si_other"/>

                    <label class="form-label">Parameters/Special Conditions to report to RN/Therapist Special Instructions</label>    
                    <div class="input-group input-group-outline mb-3">
                        <textarea class="form-control" name="special_instructions" rows="3"></textarea>
                    </div>

                    <x-input-text label="Date" name="date"/>
                    
                  
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