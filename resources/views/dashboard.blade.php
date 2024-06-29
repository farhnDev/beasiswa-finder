@extends('layouts.user_type.auth')

@section('content')

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
          <div class="card-body p-3">
              <div class="row">
                  <div class="col-8">
                      <div class="numbers">
                          <p class="text-sm mb-0 text-capitalize font-weight-bold">Data User</p>
                          <h5 class="font-weight-bolder mb-0">
                              {{ $userCount }} Orang
                          </h5>
                      </div>
                  </div>
                  <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                          <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
          <div class="card-body p-3">
              <div class="row">
                  <div class="col-8">
                      <div class="numbers">
                          <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Beasiswa Terbaru</p>
                          <h5 class="font-weight-bolder mb-0">
                              {{ $recentScholarshipsCount }} Data
                          </h5>
                      </div>
                  </div>
                  <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                          <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
          <div class="card-body p-3">
              <div class="row">
                  <div class="col-8">
                      <div class="numbers">
                          <p class="text-sm mb-0 text-capitalize font-weight-bold">Beasiswa Di input</p>
                          <h5 class="font-weight-bolder mb-0">
                              {{ $totalScholarshipsCount }} Data
                          </h5>
                      </div>
                  </div>
                  <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                          <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-sm-6">
      <div class="card">
          <div class="card-body p-3">
              <div class="row">
                  <div class="col-8">
                      <div class="numbers">
                          <p class="text-sm mb-0 text-capitalize font-weight-bold">Perusahaan Bergabung</p>
                          <h5 class="font-weight-bolder mb-0">
                              5 Perusahaan
                          </h5>
                      </div>
                  </div>
                  <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                          <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-5 mb-lg-0 mb-4">
      <div class="card z-index-2">
        <div class="card-body p-3">
          <h6>Data Beasiswa Perhari</h6>
          <div class="mt-3 bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
            <div class="chart">
              <canvas id="chart-bars" class="chart-canvas" height="340"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- diagram bulan (batang) --}}
    <div class="col-lg-7">
      <div class="card z-index-2">
        <div class="card-header pb-0">
          <h6>Data Beasiswa Perbulan</h6>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="chart-bar-bulanan" class="chart-canvas" height="370"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- diagram tahunan (grafik) --}}
  <div class="row my-4">
    <div class="col-md-8 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Data Beasiswa Pertahun</h6>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="chart">
          <canvas id="chart-line" class="chart-canvas" height="372"></canvas>
        </div>
      </div>
    </div>
  </div>

@endsection
@push('dashboard')
  <script>
    window.onload = function() {
      // Chart data beasiswa perhari
      var ctx = document.getElementById("chart-bars").getContext("2d");
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400],
            maxBarThickness: 6
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 15,
                font: {
                  size: 14,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false
              },
              ticks: {
                display: false
              },
            },
          },
        },
      });

      // Chart data beasiswa perbulan
      var ctxBulanan = document.getElementById("chart-bar-bulanan").getContext("2d");
    new Chart(ctxBulanan, {
      type: "bar",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
        datasets: [{
          label: "Beasiswa Per Bulan",
          backgroundColor: "#5A69A6",
          data: [100, 120, 150, 180, 200, 250, 280, 300, 320, 350, 380, 400] // Dummy data
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
            suggestedMax: 500
          }
        }
      }
    });

      // Chart data beasiswa pertahun
      var ctx3 = document.getElementById("chart-line").getContext("2d");
      var gradientStroke1 = ctx3.createLinearGradient(0, 230, 0, 50);
      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)');
      var gradientStroke2 = ctx3.createLinearGradient(0, 230, 0, 50);
      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)');
      new Chart(ctx3, {
        type: "line",
        data: {
          labels: ["2021", "2022", "2023", "2024", "2025", "2026", "2027", "2028", "2029"],
          datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6
          }, {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    }
  </script>
@endpush

