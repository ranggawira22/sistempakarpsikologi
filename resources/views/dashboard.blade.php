@extends('layout.main')

@section('container')
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('user.index') }}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldUser"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">User</h6>
                                        <h6 class="font-extrabold mb-0">{{ $count_user }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('evidence.index') }}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldSearch"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Gejala</h6>
                                        <h6 class="font-extrabold mb-0">{{ $count_evidence }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('hypothesis.index') }}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldStar"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Gangguan</h6>
                                        <h6 class="font-extrabold mb-0">{{ $count_hypotesis }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('history.index') }}">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldTime-Circle"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Riwayat Pasien</h6>
                                        <h6 class="font-extrabold mb-0">{{ $histores->unique('name')->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Riwayat Pasien</h4>
                        </div>
                        <div class="card-body px-3 py-0-5">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Top 3 Gangguan</th>
                                                <th>Hasil Sistem Pakar</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($histores->unique('name') as $history)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $history->name }}</td>
                                                <td>
                                                    @foreach ($histores->where('name', $history->name)->sortByDesc('value')->take(3) as $topHypothesis)
                                                        {{ $topHypothesis->hypothesis->name }}<br>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($histores->where('name', $history->name)->sortByDesc('value')->take(3) as $topHypothesis)
                                                        {{ $topHypothesis->value }}%<br>
                                                    @endforeach
                                                </td>
                                                <td>{{ date_format($history->created_at,"d/m/Y") }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">History Case Not Found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Grafik Gangguan</h4>
                        </div>
                        <div class="card-body px-3 py-0-5">
                            <div class="row">
                                <canvas id="bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">History of Hypothesis</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="graph-tab" data-bs-toggle="tab" href="#graph" role="tab" aria-controls="graph" aria-selected="true">Graph</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="data-tab" data-bs-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="false">Data</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show p-3" id="graph" role="tabpanel" aria-labelledby="graph-tab">
                        <canvas id="bar"></canvas>
                    </div>
                    <div class="tab-pane fade p-3" id="data" role="tabpanel" aria-labelledby="data-tab">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Hypothesis</th>
                                        <th>Expert Value Result</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @forelse ($histores as $history)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $history->name }}</td>
                                        <td>{{ $history->hypothesis->name }}</td>
                                        <td class="text-end">{{ $history->value }} %</td>
                                        <td>{{ date_format($history->created_at, "d/m/Y") }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">History Case Not Found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</div>
<script src="{{ asset('mazer/vendors/chartjs/Chart.min.js') }}"></script>
<script>
    
var chartColors = {
    red: '#ffadad',
    orange: '#ffd6a5',
    yellow: '#fdffb6',
    green: '#caffbf',
    blue: '#9bf6ff',
    youngblue: '#a0c4ff',
    purple: '#bdb2ff',
    pink: '#ffc6ff',
};

var ctxBar = document.getElementById("bar").getContext("2d");
var myBar = new Chart(ctxBar, {
    type: 'pie',
    data: {
        labels: [
            @foreach ($hypotesis as $hypo)
                "{{ $hypo->name }}",
            @endforeach
        ],
        datasets: [{
            label: 'Hypothesis',
            backgroundColor: [
                chartColors.red, 
                chartColors.orange, 
                chartColors.yellow, 
                chartColors.green, 
                chartColors.blue,
                chartColors.youngblue,
                chartColors.purple,
                chartColors.pink,
            ],
            data: [
                @foreach ($hypotesis as $hypo)
                    {{ $history->where('hypothesis_id', $hypo->id)->count() }},
                @endforeach
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Pie Chart'
            }
        }
    },
});

</script>
@endsection