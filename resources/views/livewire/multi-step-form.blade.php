<div>
    
     <form wire:submit.prevent="register">

         {{-- STEP 1 --}}

         @if ($currentStep == 1)
             
      
         <div class="step-one">
             <div class="card">
                 <div class="card-header bg-secondary text-white">STEP 1/4 - Personal Details</div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">First name</label>
                                 <input type="text" class="form-control" placeholder="Enter first name" wire:model="first_name">
                                <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last name</label>
                                <input type="text" class="form-control" placeholder="Enter last name" wire:model="last_name">
                                <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Gender</label>
                                 <select  class="form-control" wire:model="gender">
                                        <option value="" selected>Choose gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                 </select>
                                 <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Age</label>
                                 <input type="text" class="form-control" placeholder="Enter your age" wire:model="age">
                                 <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="">Description</label>
                         <textarea class="form-control" cols="2" rows="2" wire:model="description"></textarea>
                         <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                     </div>
                 </div>
             </div>
         </div>
         @endif

         {{-- STEP 2 --}}

         @if ($currentStep == 2)
             
        
         <div class="step-two">
             <div class="card">
                 <div class="card-header bg-secondary text-white">STEP 2/4 - Address & Contacts</div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Email Address</label>
                                 <input type="text" class="form-control" placeholder="Enter email address" wire:model="email">
                                 <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter phone number" wire:model="phone">
                                <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                            </div>
                        </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Country of residence</label>
                                 <select class="form-control" wire:model="country">
                                     <option value="" selected>Select country</option>
                                     <option value="United States">United States</option>
                                     <option value="India">India</option>
                                     <option value="Rwanda">Rwanda</option>
                                     <option value="Nigeria">Nigeria</option>
                                     <option value="Phillipines">Phillipines</option>
                                     <option value="Canada">Canada</option>
                                     <option value="Bangladesh">Bangladesh</option>
                                 </select>
                                 <span class="text-danger">@error('country'){{ $message }}@enderror</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">City</label>
                                 <input type="text" class="form-control" placeholder="Enter city" wire:model="city">
                                 <span class="text-danger">@error('city'){{ $message }}@enderror</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         @endif
         {{-- STEP 3 --}}

         @if ($currentStep == 3)
             
     
         <div class="step-three">
             <div class="card">
                 <div class="card-header bg-secondary text-white">STEP 3/4 - Frameworks experience</div>
                 <div class="card-body">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur explicabo, impedit maxime possimus excepturi veniam ut error sit, molestias aliquam repellat eos porro? Sit ex voluptates nemo veritatis delectus quia?
                     <div class="frameworks d-flex flex-column align-items-left mt-2">
                         <label for="laravel">
                             <input type="checkbox" id="laravel" value="laravel" wire:model="frameworks"> Laravel
                         </label>
                         <label for="codeigniter">
                            <input type="checkbox" id="codeigniter" value="codeigniter" wire:model="frameworks"> Codeigniter
                        </label>
                        <label for="vuejs">
                            <input type="checkbox" id="vuejs" value="vuejs" wire:model="frameworks"> Vue Js
                        </label>
                        <label for="cakePHP">
                            <input type="checkbox" id="cakePHP" value="cakePHP" wire:model="frameworks"> CakePHP
                        </label>
                     </div>
                     <span class="text-danger">@error('frameworks'){{ $message }}@enderror</span>
                 </div>
             </div>
         </div>
         @endif

         {{-- STEP 4 --}}
         @if ($currentStep == 4)
             
     
         <div class="step-four">
             <div class="card">
                 <div class="card-header bg-secondary text-white">STEP 4/4 - Attachments</div>
                 <div class="card-body">
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque delectus officia inventore id facere at aspernatur ad corrupti asperiores placeat, fugiat tempora soluta optio recusandae eligendi impedit ipsam ullam amet!
                     <div class="form-group">
                         <label for="cv">CV</label>
                         <input type="file" class="form-control" wire:model="cv">
                         <span class="text-danger">@error('cv'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="terms" class="d-block">
                             <input type="checkbox"  id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                         </label>
                         <span class="text-danger">@error('terms'){{ $message }}@enderror</span>
                     </div>
                 </div>
             </div>
         </div>

         @endif

         <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif
            
            @if ($currentStep == 4)
                 <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif
                
               
         </div>

     </form>


</div>
