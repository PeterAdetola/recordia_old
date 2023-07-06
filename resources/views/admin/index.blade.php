 @extends('admin.admin_master')
 @section('admin')

            <!-- Content -->

         <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <div class="section">
   
              <!-- Financial Summary starts -->
   <div id="card-with-analytics" class="section mt-5">
    <div class="row">
      <div class="col s12 m6 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons amber-text small-ico-bg mb-5">check</i>
            <h4 class="m-0"><b>21.5k</b></h4>
            <p>Total Cash & Transfer Donations</p>
            <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              119.71%</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons amber-text small-ico-bg mb-5">radio_button_unchecked</i>
            <h4 class="m-0"><b>890</b></h4>
            <p>Total Donations & Pledges</p>
            <p class="green-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_down</i>
              24.4%</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons amber-text small-ico-bg mb-5">favorite_border</i>
            <h4 class="m-0"><b>22.5%</b></h4>
            <p>Unpaid pledges</p>
            <p class="red-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              112.43%</p>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- /Financial Summary ends -->
      <!-- Record form starts -->
  <div class="row">
      <div class="col s12 m12 l12">
         <div id="basic-tabs" class="card card card-default scrollspy">
            <div class="card-content">
               <div class="card-title">
                  <div class="row">
                     <div class="col s12 m6 l10">
                        <h4 class="card-title">Record Donation and Expenses</h4>
                      
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col s12">
                     <div class="row" id="main-view">
                        <div class="col s12">
                           <ul class="tabs tab-demo collection">
                              <li class="tab col m3"><a class="active" href="#test1">Add Donation</a></li>
                              <li class="tab col m3"><a href="#test2">Add Expenses</a></li>
                           </ul>
                        </div>
                        <div class="col s12">
                           <div id="test1" class="col s12">
                             
    <div class="col s12 m12 l12">
      <div id="Form-advance" class="">
        <div class="card-content">
          <h4 class="card-title">Add Donation</h4>
          <form>
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="first_name01" type="text">
                <label for="first_name01">Name</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="last_name" type="text">
                <label for="last_name">Phone Number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="first_name01" type="text" class="autocomplete">
                <label for="first_name01">Purpose/Item</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="last_name" type="text">
                <label for="last_name">Amount</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m4">
                <p>
                  <label>
                    <input name="group1" type="radio" checked/>
                    <span>Paid</span>
                  </label>
                </p>
              </div>
              <div class="input-field col s12 m4">
                <p>
                  <label>
                    <input name="group1" type="radio" checked/>
                    <span>Pledge</span>
                  </label>
                </p>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn-large cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


                           </div>
                           <div id="test2" class="col s12">
                              <div class="col s12 m12 l12">
      <div id="Form-advance" class="">
        <div class="card-content">
          <h4 class="card-title">Add Expense</h4>
          <form>
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="first_name01" type="text">
                <label for="first_name01">Name</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="last_name" type="text">
                <label for="last_name">Phone Number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="first_name01" type="text" class="autocomplete">
                <label for="first_name01">Purpose/Item</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="last_name" type="text">
                <label for="last_name">Amount</label>
              </div>
            </div>
            <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn-large cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
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

            </div>
         </div>
      </div>
   </div>
   <!-- /Record form ends -->


  <!-- /Record logs here -->
  
</div><!-- START RIGHT SIDEBAR NAV -->

<!-- END RIGHT SIDEBAR NAV -->

          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
            <!-- / Content -->

            <script type="text/javascript">
              $(document).ready(function(){
                  $('input.autocomplete').autocomplete({
                    data: {
                      "Apple": null,
                      "Microsoft": null,
                      "Google": 'https://placehold.it/250x250'
                    },
                  });
                });
            </script>

  @endsection