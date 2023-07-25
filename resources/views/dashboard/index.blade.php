@extends('master.dashboard')

@section('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        $.ajax({
            type:"GET",
            url:"{{ url('/api/chart-data') }}",
            dataType: "json",
            success: function(result, status, xhr){
                // console.log();
                var options = {
                    chart: {
                        type: 'line'
                    },
                    series: [{
                        name: 'sales',
                        data: result['data']
                    }],
                    xaxis: {
                        categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
                    }
                }
                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();
            },
            error: function(xhr, status, error){
                console.log("ERROR", error);
            }
        });
    </script>
@endsection

@section('page-title', $user->name . ' (@' . $user->username . ')' . ' • ' . ' Dashboard')

@section('page-content')
    <p>Dashboard Page</p>
    <p>{{ session('user.role') }}</p>
    <div class="row">
        <div class="col-md-4">
            <div id="chart"></div>
        </div>
    </div>
    <pre>
        @php
            print_r($user);
        @endphp
    </pre>
@endsection
