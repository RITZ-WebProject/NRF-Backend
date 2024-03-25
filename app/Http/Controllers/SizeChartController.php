<?php

namespace App\Http\Controllers;

use App\Models\SizeChart;
use Illuminate\Http\Request;

class SizeChartController extends Controller
{
    public function index()
    {
        $size_charts = SizeChart::get();
        return view('size_chart.index', compact('size_charts'));
    }

    public function create()
    {
        return view('size_chart.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'size_chart' => ['required', 'string', 'max:255'],
            'size_chart_long' => ['nullable', 'string', 'max:255'],
        ]);

        if($validator) {
            $size_chart = new SizeChart();
            $size_chart->size_chart = $request->size_chart;
            $size_chart->size_chart_long = $request->size_chart_long;
            $size_chart->save();

            return redirect('size_charts/')->with('info', 'New Size Chart is Added');
        }else {
            return redirect()->back()->withErrors($validator);
        }
    }

    public function edit($id)
    {
        $size_chart = SizeChart::find($id);
        return view('size_chart.edit', compact('size_chart'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'size_chart' => ['required', 'string', 'max:255'],
            'size_chart_long' => ['nullable', 'string', 'max:255'],
        ]);

        if($validator) {
            $size_chart = SizeChart::find($id);
            $size_chart->size_chart = $request->size_chart;
            $size_chart->size_chart_long = $request->size_chart_long;
            $size_chart->save();

            return redirect('size_charts/')->with('info', 'Existing Size Chart is Updated');
        }else {
            return redirect()->back()->withErrors($validator);
        }
    }

    public function destroy($id)
    {
        $size_chart = SizeChart::find($id);
        $size_chart->delete();
        return redirect('size_charts/')->with('info', 'Existing Size Chart is Deleted');
    }
}
