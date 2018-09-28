@extends('layouts.app2')

@section('content')

<div class="tabs-container" style="margin:40px;">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#chart_tab">Pages Visits Chart</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="chart_tab" class="tab-pane active">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <label class="label label-success" style="font-weight: bold;font-size: 15px;">Pages Views Summary</label>
                                <div id="chart1" style="margin-bottom: 30px;"></div>
                            </div>
                            <div class="col-sm-6 col-sm-offset-3 text-center">
                                <label class="label label-success" style="font-weight: bold;font-size: 15px;">Pages Views by Country</label>
                                <div id="plot1" style="width:100%;height:300px;margin-top: 30px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
    function renderPie(data)
    {
        var chartData = [];
        chartData.push(['Country', 'Requests']);
        $.each(data, function(index, value){
            console.log(value);
            chartData.push({label: value.label, data: value.value});
        });
        var options = {
            series: {
                pie: {
                    offset: {
                        left: 10
                    },
                    show: true
                }
            },
            grid: {
                hoverable: true,
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            }
        };
        var chart = $.plot($("#plot1"), chartData, options);
        chart.draw();
    }
    $(document).ready(function(){
        $('#period_dropdown').on('change',function(){
            $('#form_chart_filter').submit();
        });
        Morris.Line({
            data: {!! json_encode($allData[0]) !!},
            element: 'chart1',
            xkey: 'date',
            ykeys: ['total'],
            resize: true,
            lineWidth: 2,
            labels: ['Pages Views'],
            lineColors: ['#1ab394'],
            pointSize:5,
            xLabels: "day"
        });
        renderPie({!! json_encode($allData[1]) !!});
    });
</script>

@endsection
