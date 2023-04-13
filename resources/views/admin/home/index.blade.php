@extends('layouts.admin')

@section('title')
    <title>
        {{ __('messages.admin.home') }}
    </title>
    <meta name="description" content="Cao Sơn" />
    <meta name="keywords" content="Cao Sơn">
    <meta name="author" content="{{ config('setting.author') }}" />
@endsection

@section('body')
    <div class="content-wrapper">
        <x-breadcrumb name="Home" />

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-3 col-lg-6">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h4 class="m-b-5 text-white fw-bold">Users</h4>
                                        <h5 class="m-b-0 text-white">
                                            <span>
                                                $1,783
                                                <span class="align-top fs-7 text-danger">
                                                    <i class="fas fa-arrow-down"></i> 23%
                                                </span>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users text-white fs-2"></i>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-white" role="progressbar"
                                        style="width: 70%" aria-valuemin="0" aria-valuemax="100">70%</div>
                                </div>
                                <div class="text-white mt-3 d-flex justify-content-between">
                                    <span>This month: </span>
                                    <span>30,345
                                        <span class="align-top fs-7">
                                            <i class="fas fa-arrow-up"></i> 23%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h4 class="m-b-5 text-white fw-bold">Articles</h4>
                                        <h5 class="m-b-0 text-white">
                                            <span>
                                                $1,783
                                                <span class="align-top fs-7 text-danger">
                                                    <i class="fas fa-arrow-down"></i> 23%
                                                </span>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users text-white fs-2"></i>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-white" role="progressbar"
                                        style="width: 70%" aria-valuemin="0" aria-valuemax="100">70%</div>
                                </div>
                                <div class="text-white mt-3 d-flex justify-content-between">
                                    <span>This month: </span>
                                    <span>30,345
                                        <span class="align-top fs-7">
                                            <i class="fas fa-arrow-up"></i> 23%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h4 class="m-b-5 text-white fw-bold">Jobs</h4>
                                        <h5 class="m-b-0 text-white">
                                            <span>
                                                $1,783
                                                <span class="align-top fs-7 text-danger">
                                                    <i class="fas fa-arrow-down"></i> 23%
                                                </span>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users text-white fs-2"></i>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-white" role="progressbar"
                                        style="width: 70%" aria-valuemin="0" aria-valuemax="100">70%</div>
                                </div>
                                <div class="text-white mt-3 d-flex justify-content-between">
                                    <span>This month: </span>
                                    <span>30,345
                                        <span class="align-top fs-7">
                                            <i class="fas fa-arrow-up"></i> 23%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h4 class="m-b-5 text-white fw-bold">Codes</h4>
                                        <h5 class="m-b-0 text-white">
                                            <span>
                                                $1,783
                                                <span class="align-top fs-7 text-danger">
                                                    <i class="fas fa-arrow-down"></i> 23%
                                                </span>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users text-white fs-2"></i>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-white" role="progressbar"
                                        style="width: 70%" aria-valuemin="0" aria-valuemax="100">70%</div>
                                </div>
                                <div class="text-white mt-3 d-flex justify-content-between">
                                    <span>This month: </span>
                                    <span>30,345
                                        <span class="align-top fs-7">
                                            <i class="fas fa-arrow-up"></i> 23%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-12 mt-5">
                        <canvas id="myChart1"></canvas>
                    </div>

                    <div class="col-xl-6 col-lg-12 mt-5">
                        <canvas id="myChart"></canvas>
                    </div>

                    <div class="col-xl-6 col-lg-12 mt-5">
                        <canvas id="myChart2"></canvas>
                    </div>

                    <div class="col-xl-6 col-lg-12 mt-5">
                        <canvas id="myChart3"></canvas>
                    </div>

                    <div class="col-xl-6 col-lg-12 mt-5">
                        <canvas id="myChart4"></canvas>
                    </div>

                    <div class="col-xl-6 col-lg-12 mt-5">
                        <canvas id="myChart5"></canvas>
                    </div>
                </div>


            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script src="path/to/chartjs/dist/chart.umd.js"></script> --}}

    <script>
        const ctx = document.getElementById('myChart');

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Users',
                    data: [120, 90, 30, 90, 53.4, 60, 70],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    x: {
                        border: {
                            color: 'red'
                        }
                    },
                },
                plugins: {
                    subtitle: {
                        display: true,
                        text: 'Chart Users',
                        color: '#520dc2',
                    }
                }
            }
        });

        myChart.data.datasets[0].data.push(80, 90, 100);
        myChart.update();

        const ctx1 = document.getElementById('myChart1');

        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    x: {
                        border: {
                            color: 'red'
                        }
                    },
                },
                plugins: {
                    subtitle: {
                        display: true,
                        text: 'Custom Chart Subtitle'
                    }
                }
            }
        });

        function months({
            count,
            step = 1,
            dateFormat = 'long'
        } = {}) {
            const d = new Date();
            const year = d.getFullYear();
            const months = [];
            for (let i = 0; i < count; i++) {
                const month = new Date(year, d.getMonth() + i * step, 1);
                months.push(month.toLocaleDateString(undefined, {
                    month: dateFormat
                }));
            }
            return months;
        }

        // Usage:
        const labels = months({
            count: 7,
            dateFormat: 'long'
        });
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        new Chart(document.getElementById('myChart2'), {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    x: {
                        border: {
                            color: 'red'
                        },
                    }
                },
                plugins: {
                    subtitle: {
                        display: true,
                        text: 'Custom Chart Subtitle'
                    }
                }
            }
        });

        var myChart = new Chart(document.getElementById('myChart3'), {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Users',
                    data: [10, 90, 30, 60, 50, 60, 70],
                    borderColor: 'rgb(54, 162, 235)',
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    x: {
                        border: {
                            color: 'red'
                        }
                    },
                },
                plugins: {
                    subtitle: {
                        display: true,
                        text: 'Chart Users',
                        color: '#520dc2',
                    }
                }
            }
        });

        var myChart = new Chart(document.getElementById('myChart4'), {
            type: 'doughnut',
            data: {
                labels: [
                    'Red',
                    'Blue',
                    'Yellow'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    x: {
                        border: {
                            color: 'red'
                        }
                    },
                },
                plugins: {
                    subtitle: {
                        display: true,
                        text: 'Chart Users',
                        color: '#520dc2',
                    }
                }
            }
        });

        var myChart = new Chart(document.getElementById('myChart5'), {
            type: 'polarArea',
            data: {
                labels: [
                    'Red',
                    'Green',
                    'Yellow',
                    'Grey',
                    'Blue'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [11, 16, 7, 3, 14],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)'
                    ]
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    x: {
                        border: {
                            color: 'red'
                        }
                    },
                },
                plugins: {
                    subtitle: {
                        display: true,
                        text: 'Chart Users',
                        color: '#520dc2',
                    }
                }
            }
        });
    </script>
@endsection
