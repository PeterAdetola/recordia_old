 @extends('admin.admin_master')
 @section('admin')
@php

$allData = App\Models\InstantRecord::all();

$allExpenses = $allData->where('transaction', '=', 'debit')
                       ->where('payment_status', '=', 'Paid');
$allExpenses = $allExpenses->sum('amount');



$allDonation = $allData->where('transaction', '=', 'credit');
$allDonation = $allDonation->sum('amount');
$totalLeft = $allDonation - $allExpenses;
$total = number_format($totalLeft, 2, '.', ',');



$pledges = $allData->where('transaction', '=', 'credit')
                       ->where('payment_status', '=', 'Unpaid');
$pledgeRaw = $pledges->sum('amount');
$pledges = number_format($pledgeRaw, 2, '.', ',');
$pledgePercent = ($pledgeRaw / $totalLeft) * 100;
$pledgePercent = number_format($pledgePercent, 3);

$totalpaid = $allData->where('transaction', '=', 'credit')->where('payment_status', '=', 'Paid');
$totalpaid = $totalpaid->sum('amount');
$totalpaid_r = $totalpaid - $allExpenses;
$totalpaidPercent = ($totalpaid_r / $totalLeft) * 100;
$totalpaidPercent = number_format($totalpaidPercent, 3);
$totalpaid = number_format($totalpaid_r, 2, '.', ',');

$totalVerified = $allData->where('payment_status', '=', 'Paid')
                         ->where('transaction', '=', 'credit')
                         ->where('verified', '=', '1');
$totalVerified = $totalVerified->sum('amount');
$totalVerified = $totalVerified - $allExpenses;
$totalVerifiedPercent = ($totalVerified / $totalpaid_r) * 100;
$totalVerifiedPercent = number_format($totalVerifiedPercent, 3);
$totalVerified = number_format($totalVerified, 2, '.', ',');

$totalUnverified = $allData->where('payment_status', '=', 'Paid')
                           ->where('transaction', '=', 'credit')
                           ->where('verified', '=', '0');
$totalUnverified = $totalUnverified->sum('amount');
$totalUnverifiedPercent = ($totalUnverified / $totalpaid_r) * 100;
$totalUnverifiedPercent = number_format($totalUnverifiedPercent, 3);
$totalUnverified = number_format($totalUnverified, 2, '.', ',');


@endphp


<!-- $total = Paid + Verified + Unverified + Unpaid -->
<!-- $totalPaid  = Paid + Verified + Unverified  -->
<!-- $totalVerified = Paid + Verified -->
<!-- $totalUnverified = Paid + Unverified -->
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
      <div class="col s12 m5 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons blue-text small-ico-bg mb-5">check</i>
            <h4 class="m-0 blue-text mb-3"><b>&#8358;{{ $totalpaid }}</b></h4>
              <div class="blue-text"  style="width: 100%; height: 2px; background-color: #ebebeb;">
                <div style="height: 2px; background-color: blue; width: {{$totalpaidPercent}}%;"></div>
              </div>
              <p class="chip mt-3 mb-1" style="font-size: 1.2em;">2023</p>
            <p>Total Cash & Transfer Donations</p>
            <p class="grey-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              &#8358;{{ $total }}(Paid & Unpaid)</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons green-text small-ico-bg mb-5">check_circle</i>
            <h4 class="m-0 green-text mb-2" style="font-size: 1.5em"><b>&#8358;{{ $totalVerified }}</b></h4>
              <div  style="width: 100%; height: 2px; background-color: #ebebeb;">
                <div style="height: 2px; background-color: green; width: {{$totalVerifiedPercent}}%;"></div>
              </div>
              <p class="chip mt-3" style="">2023</p>
            <p>Verified Donations</p>
            <p class="blue-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_up</i>
              &#8358;{{ $totalUnverified }}</p>
              <div  style="width: 100%; height: 2px; background-color: #ebebeb;">
                <div style="height: 2px; background-color: blue; width: {{$totalUnverifiedPercent}}%;"></div>
              </div>
              <p>Unverified Donations</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons red-text small-ico-bg mb-5">sentiment_dissatisfied</i>
            <h4 class="m-0 mb-2 red-text" style="font-size: 1.5em"><b>&#8358;{{$pledges}}</b></h4>
              <div  style="width: 100%; height: 2px; background-color: #ebebeb;">
                    <div style="height: 2px; background-color: red; width: {{$pledgePercent}}%;"></div>
              </div>
              <p class="chip mt-3" style="">2023</p>
            <p>Unpaid pledges</p>
            <p class="red-text  mt-3"><i class="material-icons vertical-align-middle">arrow_drop_down</i>
              {{$pledgePercent}}%</p>
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
                        <h4 class="card-title">Add Donation / Expenses</h4>
                      
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
              <!-- Add Donation* & Expenses form -->
                  <form id="donationForm" method="POST" action="{{ route('save.donation') }}">
                  @csrf
                                      <input type="hidden" value="credit" name="transaction">
                                      <div class="row">
                                        <div class="input-field col m6 s12">
                                          <input name="name" id="fullname" :value="old('fullname')" type="text" required>
                                          <label for="fullname">Name</label>
                  @error('name')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                        </div>
                                        <div class="input-field col m6 s12">
                                          <input name="phone" id="phone" :value="old('phone')" type="text">
                                          <label for="phone">Phone Number</label>
                  @error('phone')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="input-field col m6 s12">
                                          <input name="purpose" id="purpose" :value="old('purpose')" type="text" class="autocomplete" required>
                                          <label for="purpose">Purpose/Item</label>
                  @error('purpose')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                        </div>
                                        <div class="input-field col m6 s12">
                                          <input name="amount" id="amount" :value="old('amount')" type="text" required>
                                          <label for="amount">Amount</label>
                  @error('amount')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                        </div>
                                      </div>
                                      <div class="row">
                <fieldset class="collection">
                  <legend><h4 class="card-title">
                  &nbsp;&nbsp;Donation Status&nbsp;&nbsp;
                </h4></legend>
                            <div class="input-field col s12 m4">
                              <p>
                                <label>
                                  <input name="payment_status" value="Paid" id="paid" type="radio"/>
                                  <span>Paid</span>
                                </label>
                              </p>
                            </div>
                            <div class="input-field col s12 m4">
                              <p>
                                <label>
                                  <input name="payment_status" value="Unpaid" id="pledge" type="radio" checked/>
                                  <span>Pledge</span>
                                </label>
                              </p>
                            </div>
                <div class="collection">
                 <div class="switch mt-5 mb-5">
                    <label>
                      <input id="verified" name="verified" value="1" type="checkbox" disabled>
                      <span class="lever"></span>
                      <span style="font-size:1.1em;"><b id="textColor" style="font-size:1.1em; color: red;">Payment Verified</b></span>
                    </label>
                  </div>
                </div>
              </fieldset>
                                        <div class="row">
              <div class="progress collection">
                <div id="preloader" class="indeterminate"  style="display:none; 
                border:2px #ebebeb solid"></div>
              </div>
                                            @if (old('payment_status') === 'Unpaid')
                                            @if (empty(old(phone)))
                  @error('phone')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                            @endif
                                            @endif
                                          <div class="input-field col s12">
                                            <button class="btn-large cyan waves-effect waves-light right" type="submit" onclick="ShowPreloader()">Add Donation
                                              <i class="material-icons right">add</i>
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
              <!-- Add Donation & Expenses* form -->
            <form  method="POST" id="add" action="{{ route('save.expense') }}">
                  @csrf
                                      <input type="hidden" value="debit" name="transaction">
                                      <input type="hidden" value="0" name="verified">
                                      <div class="row">
                                        <div class="input-field col m6 s12">
                                          <input name="name" id="fullname" type="text" required>
                                          <label for="fullname">Name</label>
                  @error('name')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                        </div>
                                        <div class="input-field col m6 s12">
                                          <input name="phone" id="phone" type="text">
                                          <label for="phone">Phone Number</label>
                  @error('phone')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="input-field col m6 s12">
                                          <input name="purpose" id="purpose" type="text" class="autocomplete" required>
                                          <label for="purpose">Purpose/Item</label>
                  @error('purpose')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                        </div>
                                        <div class="input-field col m6 s12">
                                          <input name="amount" id="amount" type="text" required>
                                          <label for="amount">Amount</label>
                  @error('amount')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                                        </div>
                                      </div>
                                      <div class="row">
                <fieldset class="collection">
                  <legend><h4 class="card-title">
                  &nbsp;&nbsp;Payment Status&nbsp;&nbsp;
                </h4></legend>
                            <div class="input-field col s12 m4">
                              <p>
                                <label>
                                  <input name="payment_status" value="Paid" id="x-paid" type="radio"/>
                                  <span>Paid</span>
                                </label>
                              </p>
                            </div>
                            <div class="input-field col s12 m4">
                              <p>
                                <label>
                                  <input name="payment_status" value="Unpaid" id="x-pledge" type="radio" checked/>
                                  <span>Pledge</span>
                                </label>
                              </p>
                            </div>
              </fieldset>
              <div class="progress collection">
                <div id="preloader2" class="indeterminate"  style="display:none; 
                border:2px #ebebeb solid"></div>
              </div>
                                          <div class="input-field col s12">
                                            <button class="btn-large cyan waves-effect waves-light right" type="submit" name="action" onclick="ShowPreloader()">Submit
                                              <i class="material-icons right">send</i>
                                            </button>
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

  <!-- Record logs here -->

@php
$data = App\Models\InstantRecord::orderBy('updated_at', 'desc')->get();
$instaRecords = $data->where('verified', '=', '0')
                     ->where('transaction', '=', 'credit')
                     ->where('payment_status', '=', 'Paid');
@endphp

  <section class="users-list-wrapper section">
   <div class="users-list-table">
    <div class="card pt-1">
      <div class="card-content">
      <h4 class="card-title center chip">Unverified Payments</h4>
      <div class="divider"></div>
        <!-- datatable start -->
        <div class="responsive-table mt-5">
          <table id="users-list-datatable" class="table" style="white-space: nowrap;">
            <thead>
              <tr>
                <th></th>
                <th>record id</th>
                <th>fullname</th>
                <th>amount (&#8358;)</th>
                <th>purpose</th>
                <th>status</th>
                <th>date</th>
                <th>verified</th>
                <th>phone No.</th>
                <th>edit</th>
                <th>view</th>
              </tr>
            </thead>
            <tbody>
              @foreach($instaRecords as $instaRecord)
@php


$id = $instaRecord->id;
$numberOfZeros = 6;
$donationId = makeIdNumber($id, $numberOfZeros);
$amount = number_format($instaRecord->amount, 2, '.', ',');
$date = \Carbon\Carbon::parse($instaRecord->updated_at);
$date = $date->format('j M, Y');
@endphp
              <tr>
                <td></td>
                <td>{{ $donationId }}</td>
                <td>
                  {{$instaRecord->name}}
                </td>
                <td>{{ $amount }}</td>
                <td>{{ $instaRecord->purpose }}</td>
                <td>
              @if ($instaRecord->payment_status == 'Paid')
                  <span class="chip lighten-5 green green-text">
                    {{ $instaRecord->payment_status }}
                  </span>
                  @elseif ($instaRecord->payment_status == 'Incomplete')
                  <span class="chip lighten-5 orange orange-text">
                    {{ $instaRecord->payment_status }}
                  </span>
                  @elseif ($instaRecord->payment_status == 'Unpaid')
                  <span class="chip lighten-5 red red-text">
                    {{ $instaRecord->payment_status }}
                  </span>
              @endif
                </td>
                <td>{{ $date }}</td>
                <td>{{ ($instaRecord->verified == 1)? 'Yes' : 'No' }}</td>
                <td><a href="page-users-view.html">{{ $instaRecord->phone }}</a>
                </td>
                <td><a href="#!" class="sidenav-trigger"  data-target="{{ $donationId }}"><i class="material-icons">edit</i></a></td>
                <td><a href="page-users-view.html"><i class="material-icons">remove_red_eye</i></a></td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
      </div>
    </div>
  </div>
</section>

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
    // Verification Script
      const pledgeButton = document.getElementById("pledge");
      const paidButton = document.getElementById("paid");
      const checkbox = document.getElementById("verified");
      // const checkbox1 = document.querySelector('input[type="checkbox"]');
      const checkboxText = checkbox.nextElementSibling;

      pledgeButton.addEventListener("click", function(){
        checkbox.checked = false;
        checkbox.disabled = true;
      })

      paidButton.addEventListener("change", function(){
        checkbox.disabled = false;

      // checkboxText.addEventListener("change", function(){
      //     if(checkbox1.checked){
      //       checkboxText.style.color = 'red';
      //     } else {
      //       checkboxText.style.color = 'green';          
      //     }
      //   });

      });


      // Preloader Script
      function ShowPreloader() {
        document.getElementById('preloader').style.display = "block";
        document.getElementById('preloader2').style.display = "block";
      }


</script>
  <?php 
        function makeIdNumber($id, $numberOfZeros) {
            $idStr = str_pad($id, $numberOfZeros, "0", STR_PAD_LEFT);
            return $idStr;
        }
  ?>

  @endsection