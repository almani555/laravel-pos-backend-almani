var data = [], totalPoints = 110;
var updateInterval = 320;
var realtime = 'on';

$(function () {
    //BAR CHART ==========================================================================================
    var barChartData = [];
    for (var i = 0; i <= 10; i += 1) {
        barChartData.push([i, parseInt(Math.random() * 30)]);
    }

    $.plot('#bar_chart', [barChartData], {
        series: {
            stack: 0,
            lines: {
                show: false,
                fill: true,
                steps: false
            },
            bars: {
                show: true,
                barWidth: 0.6
            },
            color: '#00BCD4'
        },
        grid: {
            hoverable: true,
            autoHighlight: false,
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor: '#f3f3f3'
        }
    });
    //====================================================================================================
});

function getRandomData() {
    if (data.length > 0) data = data.slice(1);

    while (data.length < totalPoints) {
        var prev = data.length > 0 ? data[data.length - 1] : 50, y = prev + Math.random() * 10 - 5;
        if (y < 0) { y = 0; } else if (y > 100) { y = 100; }

        data.push(y);
    }

    var res = [];
    for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
    }

    return res;
}
