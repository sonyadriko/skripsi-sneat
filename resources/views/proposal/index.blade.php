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
                                <h5 class="text-nowrap mb-2">Semester</h5>
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
                  <h5 class="text-nowrap mb-2">SKS Ditempuh</h5>
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

      <div class="col-md-4 col-lg-8 col-xl-4  ">
        <div class="col-9 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Pengajuan Dilakukan</h5>
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
      
     <div class="row">
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
              <div class="row row-bordered g-0">
                <div class="col-md-8">
                  <h5 class="card-header m-0 me-2 pb-3">Info Penting</h5>
                  {{-- <div id="totalRevenueChart" class="px-2"></div> --}}
                </div>
                <p>Pengajuan proposal skripsi hanya dapat dilakukan oleh mahasiswa yang sudah melewati semester 6, dan sudah menempuh mata kuliah yang akan dijadikan sebagai topik proposal skripsi</p>
                
              </div>
            </div>
          </div>
     </div>
     

      <!-- Transactions -->
    
      <!--/ Transactions -->
    </div>
  </div>
  @endsection