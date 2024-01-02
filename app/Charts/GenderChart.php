<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class GenderChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $data = Mahasiswa::select(DB::raw('gender, COUNT(*) as jumlah'))
        ->groupBy('gender')
            ->pluck('jumlah', 'gender')
            ->toArray();

        $dataPria = isset($data['Pria']) ? $data['Pria'] : 0;
        $dataWanita = isset($data['Wanita']) ? $data['Wanita'] : 0;

        return $this->chart->barChart()
            // ->setTitle('Perbandingan Pria dan Wanita')
            ->addData('Pria', [$dataPria])
            ->addData('Wanita', [$dataWanita])
            ->setColors(['#435ebe', '#5a8dee'])
            ->setFontFamily('Nunito')
            ->setHeight(370)
            ->setXAxis(['Mahasiswa'])
            ->setMarkers(['#FF5722', '#E040FB'], 7, 10);
    }
}
