@extends('admin.admin_master')
 @section('admin')
@php
$pageTitle = 'Instant records';

@endphp

 <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <!-- <h5 class="breadcrumbs-title mt-0 mb-0"><span>{{ $pageTitle }}</span></h5> -->
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Admin Home</a>
                  </li>
                  <li class="breadcrumb-item active">{{ $pageTitle }}
                  </li>
                </ol>
              </div>
              <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">filter_list</i><span class="hide-on-small-onl">Record Filter</span><i class="material-icons right">filter_list</i></a>
                <ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>
            </div>
          </div>
        </div><br>

<div class="col s12">
  <div class="container">
  <!-- create invoice button-->
  <section class="users-list-wrapper section">
   <div class="users-list-table">
    <div class="card pt-1">
      <div class="card-content">
      <h4 style="padding-bottom: 2px" class="card-title center chip">Instant Records</h4>
      <div class="divider"></div>
        <!-- datatable start -->
        <div class="responsive-table mt-5">
          <table id="users-list-datatable" class="table" style="white-space: nowrap;">
            <thead>
              <tr>
                <th></th>
                <th>Record ID</th>
                <th>Name</th>
                <th>Amount (&#8358;)</th>
                <th>Purpose</th>
                <th>Status</th>
                <th>Transaction</th>
                <th>Date</th>
                <th>Verified</th>
                <th>Phone No.</th>
                <!-- <th>Edit</th> -->
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>

             

              @foreach($instaRecords as $instaRecord)

@php
  
  $allData = App\Models\InstantRecord::all();

  $id = $instaRecord->id;
  $numberOfZeros = 6;
  $donationId = makeIdNumber($id, $numberOfZeros);


  $allExpenses = $allData->where('transaction', '=', 'debit')
                         ->where('payment_status', '=', 'Paid');
  $totalExpenses = $allExpenses->sum('amount');

  $allDonation = $allData->where('transaction', '=', 'credit');

  $allDonation = $allDonation->sum('amount');

  $totalDonation = $allDonation - $totalExpenses;
  $totalDonation = number_format($totalDonation, 2, '.', ',');

  $date = \Carbon\Carbon::parse($instaRecord->updated_at);
  $date = $date->format('j M, Y');


  $amount = number_format($instaRecord->amount, 2, '.', ',');

             

@endphp
              <tr class="{{ ($instaRecord->transaction == 'debit')? 'grey lighten-5' : '' }}">
                <td></td>
                <td>{{ $donationId }}</td>
                <td>
                  {{$instaRecord->name}}
                </td>
                <td>{{ $amount }}</td>
                <td>{{ $instaRecord->purpose }}</td>
                <td>
              @if ($instaRecord->payment_status == 'Paid' && $instaRecord->verified == 1)
                  <span class="chip lighten-5 green green-text z-depth-1">
                    {{ $instaRecord->payment_status }}
                  </span>
              @elseif ($instaRecord->payment_status == 'Paid')
                  <span class="chip lighten-5 green green-text">
                    {{ $instaRecord->payment_status }}
                  </span>
              @else
                  <span class="chip lighten-5 red red-text">
                    {{ $instaRecord->payment_status }}
                  </span>
              @endif
                </td>
                <td>
              @if ($instaRecord->transaction == 'credit')
              <i class="material-icons green-text">arrow_drop_up</i>
              @else
              <i class="material-icons red-text">arrow_drop_down</i>
              @endif
                  
                </td>
                <td>{{$date}}</td>
                <td>{{ ($instaRecord->verified == 1)? 'Yes' : 'No' }}</td>
                <td><a href="page-users-view.html">{{ $instaRecord->phone }}</a>
                </td>
                <td><a href="#!" class="sidenav-trigger"  data-target="{{ $donationId }}"><i class="material-icons">edit</i></a></td>
              </tr>

        <!-- Donation info -->
  <div class="slide-out-right-sidenav sidenav rightside-navigation" id="{{ $donationId }}">

    <div class="col s12">
      <div id="placeholder" class="">
        <div class="card-content">
        <form  method="POST" id="update" action="{{ route('update.transaction') }}">
                  @csrf
            <input type="hidden" name="id" value="{{ $instaRecord->id }}">
            <input type="hidden" name="transaction" value="{{ ($instaRecord->transaction == 'credit')? 'credit' : 'debit' }}">
            <div class="row">
              <div class="input-field col s12">
                <input name="name" type="text" value="{{$instaRecord->name}}" id="fn">
                <label for="fn">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="phone" type="text" value="{{$instaRecord->phone}}" id="phone">
                <label for="phone">Phone Number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="amount" id="amount" type="text" value="{{ $instaRecord->amount }}">
                <label for="amount">Amount 

        @if ($instaRecord->transaction == 'credit' && $instaRecord->payment_status == 'Paid')
              paid in (&#8358;)
        @elseif ($instaRecord->transaction == 'credit' && $instaRecord->payment_status == 'Unpaid')
              pledged in (&#8358;)
        @elseif ($instaRecord->transaction == 'debit' && $instaRecord->payment_status == 'Paid')
              given in (&#8358;)
        @elseif ($instaRecord->transaction == 'debit' && $instaRecord->payment_status == 'Unpaid')
              promised in (&#8358;)
        @endif
                  
                </label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name="purpose" id="purpose" type="text" value="{{ $instaRecord->purpose }}">
                <label for="purpose">for</label>
              </div>
            </div>
            <div class="row">
                <div class="collection">
                 <div class="switch mt-5 mb-5">
                    <label>
                      <input id="payment" name="payment_status" value="Paid" type="checkbox" {{ ($instaRecord->payment_status == 'Paid')? 'checked' : '' }} >
                      <span class="lever"></span>
                      <span style="font-size:1.1em;"><b style="font-size:1.1em;">{{ ($instaRecord->payment_status == 'Paid')? 'Paid' : 'Unpaid' }}</b></span>
                    </label>
                  </div>
                </div>
                <div class="collection" style="padding: 1em;">
                    <p>
                      <label>
                        <input name="verified" type="checkbox" value="1" {{ ($instaRecord->verified == '1')? 'checked' : '' }} />
                        <span>{{ ($instaRecord->verified == '1')? 'Verified' : 'Not Verified' }}</span>
                      </label>
                    </p>
                </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn-large waves-effect waves-light right" type="submit">Update
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

        <!-- /Donation info ends -->

              @endforeach

            </tbody> 
              <tfoot>
                <tr>
                  <th></th>
                  <th>Gross Total</th>
                  <th colspan="5">&#8358; {{ $totalDonation }} 
                    <span class="light" style="opacity:0.5">(paid & unpaid)</span>
                  </th>
                  <!-- <th></th> -->
                  <!-- <th></th> -->
                  <!-- <th></th> -->
                  <!-- <th></th> -->
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </tfoot>
               <!--  <tfoot>
              <tr>
                <th></th>
                <th>record id</th>
                <th>name</th>
                <th>amount (&#8358;)</th>
                <th>purpose</th>
                <th>status</th>
                <th>date</th>
                <th>verified</th>
                <th>phone No.</th>
                <th>edit</th>
                <th>view</th>
              </tr>
                </tfoot> -->
          </table>
        </div>
        <!-- datatable ends -->



      </div>
    </div>
  </div>
</section>
<!-- </section> -->

  <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a href="" class="btn-floating btn-large gradient-45deg-purple-deep-orange gradient-shadow"><i class="material-icons">edit</i></a>
  </div>

          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

  <?php 
        function makeIdNumber($id, $numberOfZeros) {
            $idStr = str_pad($id, $numberOfZeros, "0", STR_PAD_LEFT);
            return $idStr;
        }
  ?>
  @endsection