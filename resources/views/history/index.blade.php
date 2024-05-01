@extends('layout.main')

@section('container')
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Riwayat Pasien</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="data-tab" data-bs-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="true">Data</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="graph-tab" data-bs-toggle="tab" href="#graph" role="tab" aria-controls="graph" aria-selected="false">Graph</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="feedback-tab" data-bs-toggle="tab" href="#feedback" role="tab" aria-controls="feedback" aria-selected="false">Feedback</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-3" id="data" role="tabpanel" aria-labelledby="data-tab">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table1">
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
                    <div class="tab-pane fade p-3" id="graph" role="tabpanel" aria-labelledby="graph-tab">
                        <canvas id="bar"></canvas>
                    </div>
                    <div class="tab-pane fade p-3" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form method="POST" action="{{ route('history.update-accuracy') }}">
                                        @csrf
                                        <table class="table table-striped" id="table2">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Top 3 Gangguan</th>
                                                    <th>Hasil Sistem Pakar</th>
                                                    <th>Akurat</th>
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
                                                    <td>
                                                        <input type="hidden" name="history_id[]" value="{{ $history->id }}">
                                                        <input type="checkbox" name="is_accurate[{{ $history->id }}]" value="1" {{ $history->patientHasAccurateCase() ? 'checked' : '' }}>
                                                    </td>                                                    
                                                    <td>{{ date_format($history->created_at,"d/m/Y") }}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">History Case Not Found</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-primary">Update Accuracy</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-header">
                                <h4 class="card-title">Akurasi Sistem Pakar</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="accuracy-table">
                                        <thead>
                                            <tr>
                                                <th>Gangguan</th>
                                                <th>Total Kasus</th>
                                                <th>Kasus Akurat</th>
                                                <th>Akurasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hypotesis as $hypo)
                                            <tr>
                                                <td>{{ $hypo->name }}</td>
                                                <td>
                                                    @php
                                                        $totalCases = $histores->where('hypothesis_id', $hypo->id)->unique('name')->count();
                                                    @endphp
                                                    {{ $totalCases }}
                                                </td>
                                                <td>
                                                    @php
                                                        $accurateCases = $histores->where('hypothesis_id', $hypo->id)->where('is_accurate', true)->unique('name')->count();
                                                    @endphp
                                                    {{ $accurateCases }}
                                                </td>
                                                <td>
                                                    @php
                                                        $accuracy = $totalCases > 0 ? round(($accurateCases / $totalCases) * 100, 2) : 0;
                                                    @endphp
                                                    {{ $accuracy }}%
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="{{ asset('mazer/vendors/chartjs/Chart.min.js') }}"></script>
<script>
var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    info: '#41B1F9',
    blue: '#3245D1',
    purple: 'rgb(153, 102, 255)',
    grey: '#EBEFF6'
};

var ctxBar = document.getElementById("bar").getContext("2d");
var myBar = new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: [
            @foreach ($hypotesis as $hypo)
                "{{ $hypo->name }}",
            @endforeach
        ],
        datasets: [{
            label: 'Hypothesis',
            backgroundColor: chartColors.blue,
            data: [
                @foreach ($hypotesis as $hypo)
                    {{ $histores->where('hypothesis_id', $hypo->id)->count() }},
                @endforeach
            ]
        }]
    },
    options: {
        responsive: true,
        barRoundness: 1,
        title: {
            display: true,
            text: "Diagram Batang Gangguan"
        },
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 40 + 20,
                    padding: 10,
                },
                gridLines: {
                    drawBorder: false,
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false
                }
            }]
        }
    }
});
</script>

@if (session()->has('updatedAccuracies'))
    <script>
        var updatedAccuracies = @json(session('updatedAccuracies'));
        Object.entries(updatedAccuracies).forEach(([historyId, isAccurate]) => {
            var checkbox = document.querySelector(`input[name="is_accurate[${historyId}]"]`);
            if (checkbox) {
                checkbox.checked = isAccurate;
            }
        });
    </script>
@endif

@endsection