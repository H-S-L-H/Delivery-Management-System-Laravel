@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: #07509E">
                    <i class="fa fa-solid fa-users" style="color: #FFCE00; font-size: 30px;"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="color: #FFCE00; font-size: 15px;">Total Customers</p>
                        <h6 class="mb-0">{{count($user)}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: #07509E">
                <i class="fa fa-solid fa-users-gear" style="color: #FFCE00; font-size: 30px;"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="color: #FFCE00; font-size: 15px;">Total Admins</p>
                        <h6 class="mb-0">{{count($admin)}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: #07509E">
                    <i class="fa fa-sharp fa-solid fa-truck" style="color: #FFCE00; font-size: 30px;"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="color: #FFCE00; font-size: 15px;">Total Orders</p>
                        <h6 class="mb-0">{{count($order)}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: #07509E">
                <i class="fas fa-building" style="color: #FFCE00; font-size: 30px;"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="color: #FFCE00; font-size: 15px;">Total Branches</p>
                        <h6 class="mb-0">{{count($branch)}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="text-center rounded p-4" style="background-color: #07509E">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Monthly Customers</h6>
                    </div>
                    <canvas id="customerChart"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="text-center rounded p-4" style="background-color: #07509E">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Monthly Orders</h6>
                    </div>
                    <canvas id="orderChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script type="text/javascript">
    
        var label1 =  {{ Js::from($label1) }};
        var users =  {{ Js::from($data1) }};

        var label2 =  {{ Js::from($label2) }};
        var orders =  {{ Js::from($data2) }};
    
        const data1 = {
            labels: label1,
            datasets: [{
                label: 'Customers',
                backgroundColor: 'rgba(255, 206, 0, 1)',
                borderColor: 'rgba(255, 206, 0, 1)',
                data: users,
            }],
        };
    
        const config1 = {
            type: 'bar',
            data: data1,
            options: {
                plugins: {  // 'legend' now within object 'plugins {}'
                    legend: {
                        labels: {
                            color: "white", 
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: "white"
                        },
                        grid: {
                            color: 'white'
                        }
                    },
                    
                    y: {
                        ticks: {
                        color: "white"
                        },
                        grid: {
                            color: 'white'
                        }
                    }
                }
            }
        };
    
        const customerChart = new Chart(
            document.getElementById('customerChart'),
            config1
        );

        const data2 = {
            labels: label2,
            datasets: [{
                label: 'Orders',
                backgroundColor: 'rgba(255, 206, 0, 1)',
                borderColor: 'rgba(255, 206, 0, 1)',
                data: orders,
            }],
        };
    
        const config2 = {
            type: 'line',
            data: data2,
            options: {
                plugins: {  // 'legend' now within object 'plugins {}'
                    legend: {
                        labels: {
                            color: "white", 
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: "white"
                        },
                        grid: {
                            color: 'white'
                        }
                    },
                    
                    y: {
                        ticks: {
                        color: "white"
                        },
                        grid: {
                            color: 'white'
                        }
                    }
                }
            }
        };
    
        const orderChart = new Chart(
            document.getElementById('orderChart'),
            config2
        );
    
    </script>
@endsection