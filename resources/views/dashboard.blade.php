@extends('sneat/template')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-4 col-lg-8 col-xl-4  ">
        <div class="col-9 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                                <h5 class="text-nowrap mb-2">Proposal Skripsi</h5>
                                {{-- <span class="badge bg-label-warning rounded-pill">Year 2021</span> --}}
                            </div>
                            {{-- <div class="mt-sm-auto">
                                <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                                <h3 class="mb-0">$84,686k</h3>
                            </div> --}}
                            <iconify-icon icon="solar:book-linear"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      </div>
      <div class="col-md-4 col-lg-8 col-xl-4  ">
        <div class="col-9 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Skripsi</h5>
                  {{-- <span class="badge bg-label-warning rounded-pill">Year 2021</span> --}}
                </div>
                {{-- <div class="mt-sm-auto">
                  <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
                  <h3 class="mb-0">$84,686k</h3>
                </div> --}}
              </div>
              {{-- <div id="profileReportChart"></div> --}}
            </div>
          </div>
        </div>
      </div>
      </div>
      
     
     

      <!-- Transactions -->
    
      <!--/ Transactions -->
    </div>
  </div>
  @endsection