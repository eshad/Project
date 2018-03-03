$(document).ready(function(){
    $.ajax({
        url: "http://localhost/project/inventory/getSearches",
        method: "POST",
        success: function(data) {
            var product = [];
            var searches = [];
            var color_chart = [];

            for(var i in data) {
                product.push(data[i].product_name);
                searches.push(data[i].times_searched);
            }

            var dynamicColors = function() {
                var r = Math.floor(Math.random() * 255);
                var g = Math.floor(Math.random() * 255);
                var b = Math.floor(Math.random() * 255);
                return "rgb(" + r + "," + g + "," + b + ")";
            };

            for (var i in data) {
                color_chart.push(dynamicColors());
            }

            var chartdata = {
                labels: product,
                datasets : [{
                    label: 'Times searched',
                    data: searches,
                    backgroundColor: color_chart,
                    borderWidth: 1,
                    hoverBorderColor: 'rgba(0, 0, 0, 1)',
                    hoverBorderWidth: 4
                },
                    {
                        label: 'Times searched',
                        data: [12, 58, 33, 24, 41],
                        backgroundColor: color_chart,
                        borderWidth: 1,
                        hoverBorderColor: 'rgba(0, 0, 0, 1)',
                        hoverBorderWidth: 4
                    }
                ]};

            var ctx = $("#productSearch");
            //Chart.defaults.global.defaultFontFamily = "Helvetica";
            //Chart.defaults.global.defaultFontSize = 12;
            var barGraph = new Chart(ctx, {
                type: 'horizontalBar',
                data: chartdata,
                options: {
                    legend: {
                        display: false,
                        position: "right"
                    },
                    scales: {
                        yAxes: [{
                            stacked: true,
                            gridLines: {
                                drawOnChartArea: false
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                drawOnChartArea: false
                            },
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
})