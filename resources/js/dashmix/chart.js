/*
 *  Document   : be_pages_dashboard.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Default Dashboard Page
 */

export default class pageDashboard {
    /*
     * Chart.js, for more examples you can check out http://www.chartjs.org/docs
     *
     */
    static initChartsBars() {
        // Set Global Chart.js configuration
        Chart.defaults.global.defaultFontColor              = '#495057';
        Chart.defaults.scale.gridLines.color                = 'transparent';
        Chart.defaults.scale.gridLines.zeroLineColor        = 'transparent';
        Chart.defaults.scale.ticks.beginAtZero              = true;
        Chart.defaults.global.elements.line.borderWidth     = 1;
        Chart.defaults.global.legend.labels.boxWidth        = 12;

        // Get Chart Containers
        let chartBarsCon = jQuery('.js-chartjs-analytics-bars');

        // Set Chart and Chart Data variables
        let chartBars, chartLinesBarsData;

        // Bars Chart Data
        chartLinesBarsData = {
            labels: [chartBarsCon.data('mon'), chartBarsCon.data('tue'), chartBarsCon.data('wed'), chartBarsCon.data('thu'), chartBarsCon.data('fri'), chartBarsCon.data('sat'), chartBarsCon.data('sun')],
            datasets: [
                {
                    label: chartBarsCon.data('device'),
                    fill: true,
                    backgroundColor: 'rgba(6, 101, 208, .6)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(6, 101, 208, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(6, 101, 208, 1)',
                    data: [ chartBarsCon.data('fd'), 
                            chartBarsCon.data('sd'), 
                            chartBarsCon.data('td'), 
                            chartBarsCon.data('fod'), 
                            chartBarsCon.data('fid'), 
                            chartBarsCon.data('sid'), 
                            chartBarsCon.data('sev')]
                },
                {
                    label: chartBarsCon.data('income'),
                    fill: true,
                    backgroundColor: 'rgba(130, 181, 75, .6)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(130, 181, 75, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(130, 181, 75, 1)',
                    data: [ chartBarsCon.data('ffd'), 
                            chartBarsCon.data('ssd'), 
                            chartBarsCon.data('ttd'), 
                            chartBarsCon.data('ffod'), 
                            chartBarsCon.data('ffid'), 
                            chartBarsCon.data('ssid'), 
                            chartBarsCon.data('ssev')]
                }
            ]
        };

        // Init Chart
        if (chartBarsCon.length) {
            chartBars  = new Chart(chartBarsCon, {
                type: 'bar',
                data: chartLinesBarsData,
                options: {
                    tooltips: {
                        intersect: false,
                        callbacks: {
                            label: function(tooltipItems, data) {
                                return data.datasets[tooltipItems.datasetIndex].label + ': ' + tooltipItems.yLabel + ' Customers';
                            }
                        }
                    }
                }
            });
        }
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initChartsBars();
    }
}

// Initialize when page loads
jQuery(() => { pageDashboard.init(); });
