<div class="modal fade" id="becomeVenderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apply to Become a Vendor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="{{route('user.become_a_vendor')}}">
            @csrf
           <div class="modal-body">
               <div class="container profile-container">
                   <div class="login-screen-content">
                         <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                               <div class="form-label5">
                                  <h6 class="col-white"> Name *</h6>
                                  <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required>
                               </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                               <div class="form-label5">
                                  <h6 class="col-white"> Email  </h6>
                                  <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" disabled>
                               </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                               <div class="form-label5">
                                  <h6 class="col-white"> Phone number *</h6>
                                  <input type="number" class="form-control" name="phone" required>
                               </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                               <div class="form-label5">
                                  <h6 class="col-white"> Business Name *</h6>
                                  <input type="text" class="form-control" name="business_name" required>
                               </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                               <div class="form-label5">
                                  <h6 class="col-white"> Website Link *</h6>
                                  <input type="text" class="form-control" name="website_link" required>
                               </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                               <div class="form-label5">
                                  <h6 class="col-white"> Address *</h6>
                                  <input type="text" class="form-control" name="address" required>
                               </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                               <div class="form-label5">
                                  <h6 class="col-white"> Business Description *</h6>
                                  <textarea class="form-control" name="description" required></textarea>
                               </div>
                            </div>
                         </div>
                   </div>
                </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-success">Submit Request</button>
           </div>
         </form>
      </div>
    </div>
  </div>
