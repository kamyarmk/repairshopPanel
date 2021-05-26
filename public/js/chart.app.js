/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/dashmix/chart.js ***!
  \***************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ pageDashboard)
/* harmony export */ });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/*
 *  Document   : be_pages_dashboard.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Default Dashboard Page
 */
var pageDashboard = /*#__PURE__*/function () {
  function pageDashboard() {
    _classCallCheck(this, pageDashboard);
  }

  _createClass(pageDashboard, null, [{
    key: "initChartsBars",
    value:
    /*
     * Chart.js, for more examples you can check out http://www.chartjs.org/docs
     *
     */
    function initChartsBars() {
      // Set Global Chart.js configuration
      Chart.defaults.global.defaultFontColor = '#495057';
      Chart.defaults.scale.gridLines.color = 'transparent';
      Chart.defaults.scale.gridLines.zeroLineColor = 'transparent';
      Chart.defaults.scale.ticks.beginAtZero = true;
      Chart.defaults.global.elements.line.borderWidth = 1;
      Chart.defaults.global.legend.labels.boxWidth = 12; // Get Chart Containers

      var chartBarsCon = jQuery('.js-chartjs-analytics-bars'); // Set Chart and Chart Data variables

      var chartBars, chartLinesBarsData; // Bars Chart Data

      chartLinesBarsData = {
        labels: [chartBarsCon.data('mon'), chartBarsCon.data('tue'), chartBarsCon.data('wed'), chartBarsCon.data('thu'), chartBarsCon.data('fri'), chartBarsCon.data('sat'), chartBarsCon.data('sun')],
        datasets: [{
          label: chartBarsCon.data('device'),
          fill: true,
          backgroundColor: 'rgba(6, 101, 208, .6)',
          borderColor: 'transparent',
          pointBackgroundColor: 'rgba(6, 101, 208, 1)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgba(6, 101, 208, 1)',
          data: [chartBarsCon.data('fd'), chartBarsCon.data('sd'), chartBarsCon.data('td'), chartBarsCon.data('fod'), chartBarsCon.data('fid'), chartBarsCon.data('sid'), chartBarsCon.data('sev')]
        }, {
          label: chartBarsCon.data('income'),
          fill: true,
          backgroundColor: 'rgba(130, 181, 75, .6)',
          borderColor: 'transparent',
          pointBackgroundColor: 'rgba(130, 181, 75, 1)',
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#fff',
          pointHoverBorderColor: 'rgba(130, 181, 75, 1)',
          data: [chartBarsCon.data('ffd'), chartBarsCon.data('ssd'), chartBarsCon.data('ttd'), chartBarsCon.data('ffod'), chartBarsCon.data('ffid'), chartBarsCon.data('ssid'), chartBarsCon.data('ssev')]
        }]
      }; // Init Chart

      if (chartBarsCon.length) {
        chartBars = new Chart(chartBarsCon, {
          type: 'bar',
          data: chartLinesBarsData,
          options: {
            tooltips: {
              intersect: false,
              callbacks: {
                label: function label(tooltipItems, data) {
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

  }, {
    key: "init",
    value: function init() {
      this.initChartsBars();
    }
  }]);

  return pageDashboard;
}(); // Initialize when page loads



jQuery(function () {
  pageDashboard.init();
});
/******/ })()
;