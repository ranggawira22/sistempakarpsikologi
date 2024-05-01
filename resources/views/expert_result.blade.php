@extends('layout.main')
@section('container')
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
            </div>
            <div class="card-body">
                <?php
                // Array untuk menampung nilai CF dan hipotesis setelah perhitungan
                $cf_calculations = array();
                ?>

                @foreach ($hypothesyes as $hypothesis)
                <h6>Hypothesis: {{ $hypothesis->name }}</h6>
                <div class="table-responsive">
                    <table class="w-100 table-bordered mb-0 js-serial">
                        <thead>
                            <tr>
                                <th>Evidence</th>
                                <th>CF Expert</th>
                                <th>CF User</th>
                                <th>CF(H|E)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $arrid = 0; ?>
                            <?php $cf_old = 0; ?>
                            @foreach ($roles as $key => $role)
                            @if ($hypothesis->id == $role->hypothesis_id)
                            <?php $ard = $arrid++; ?>
                            @if ($request->evidance_value[$ard] != 0)
                            <tr>
                                <td>{{ $role->evidence->name }}</td>
                                <td class="text-end">{{ $role->value }}</td>
                                <td class="text-end">{{ $request->evidance_value[$ard] }}</td>
                                <td class="text-end">{{ $cfhe = $role->value * $request->evidance_value[$ard] }}</td>
                            </tr>
                            <?php $cf_old === 1 ? $cfhe : $cf_old = $cf_old + $cfhe * (1 - $cf_old); ?>
                            @endif
                            @endif
                            @endforeach
                            <tr>
                                <td colspan="3">CF Combination</td>
                                <td class="text-end">{{ number_format($cf_old, 2, '.', '') }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">CF Result (%)</td>
                                <td class="text-end">{{ $cf_result = number_format($cf_old * 100, 2, '.', '') }}%</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                </div>
                <?php
                // Menambahkan nilai CF dan hipotesis ke dalam array jika nilai CF > 0
                if ($cf_result > 0) {
                    $cf_calculations[] = array(
                        'value' => $cf_result,
                        'hypothesis' => $hypothesis
                    );
                }
                ?>
                @endforeach

                <?php
                // Mengurutkan array berdasarkan nilai CF (descending)
                usort($cf_calculations, function($a, $b) {
                    return $b['value'] - $a['value'];
                });
                ?>

                <h6>Top 3 Gangguan:</h6>
                <ol>
                    @foreach (array_slice($cf_calculations, 0, 3) as $item)
                    <li>
                        <strong>{{ $item['hypothesis']->name }}</strong> Nilai: {{ $item['value'] }}%
                        <br>
                        Penanganan: {{ $item['hypothesis']->solution }}
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>
</div>
@endsection