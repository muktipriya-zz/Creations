(function(){
    'use strict';
	var $ = jQuery;
	$.fn.extend({
		filterTable: function(){
			return this.each(function(){
				$(this).on('keyup', function(e){
					$('.filterTable_no_results').remove();
					var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tbody tr');
                        
					if(search == '') {
						$rows.show(); 
					} else {
						$rows.each(function(){
							var $this = $(this);
							$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
						})
						if($target.find('tbody tr:visible').size() === 0) {
							var col_count = $target.find('tr').first().find('td').size();
							var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
							$target.find('tbody').append(no_results);
						}
					}
				});
			});
		}
	});
	$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
	$('[data-action="filter"]').filterTable();
	
	$('.container').on('click', '.panel-heading span.filter', function(e){
		var $this = $(this), 
			$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body input').focus();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
})

$(document).ready(function(){
        $("#achieve").hide();
        $("#total").hide();
        $("#WeekUpdate").hide();
        $("#status").click(function(){
            $("#total").hide();
            $("#achieve").hide();
            $("#WeekUpdate").show();
            $("#DailyUpdate").hide();
        });
        $("#achievement").click(function(){
            $("#total").hide();
            $("#achieve").show();
            $("#WeekUpdate").hide();
            $("#DailyUpdate").hide();
        });
        $("#totalcount").click(function(){
            $("#total").show();
            $("#achieve").hide();
            $("#WeekUpdate").hide();
            $("#DailyUpdate").hide();
        });
    });

            var chart;
            var chartData = [
                {
                    "Sector":"C.A",
                    "visits": 4025,
                    "color":"#FF0F00"
                },
                {
                    "Sector": "I.T",
                    "visits": 1882,
                    "color": "#2A0CD0"
                },
                {
                    "Sector": "Banking",
                    "visits": 1809,
                    "color": "#04D215"
                },
                {
                    "Sector": "Others",
                    "visits": 1322,
                    "color": "#8A0CCF"
                }
            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "Sector";
                chart.color = "#DAA520"
                // the following two lines makes chart 3D
                chart.depth3D = 20;
                chart.angle = 30;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.labelRotation = 90;
                categoryAxis.dashLength = 5;
                categoryAxis.gridPosition = "start";
                categoryAxis.color="#DAA520";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.title = "Call Counts";
                valueAxis.dashLength = 5;
                chart.addValueAxis(valueAxis);
                valueAxis.color ="#DAA520";

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.valueField = "visits";
                graph.colorField = "color";
                graph.balloonText = "<span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonEnabled = false;
                chart.addChartCursor(chartCursor);

                chart.creditsPosition = "top-right";


                // WRITE
                chart.write("chartdiv");
            });

    $(function () {
    $('#container').highcharts({
        title: {
            text: '',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: ['9', '10', '11', '12', '1', '3',
                '4', '5', '6', '7']
        },
        yAxis: {
            title: {
                text: 'Call Count'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: 'Calls'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'C.A',
            color: '#0000FF',
            data: [10, 15, 13, 11, 20, 35, 40, 45, 50, 55]
        },
        {
            name: 'Banking',
            color: '#FFA500',
            data: [10, 9, 8, 12, 23, 19, 24, 20, 10, 3]
        }, {
            name: 'Others',
            color: '#00FF00',
            data: [10, 05, 10, 15, 20, 25, 30, 35, 40, 45]
        }]
    });
});



    setTimeout(function(){
   window.location.reload(1);
}, 150000);

