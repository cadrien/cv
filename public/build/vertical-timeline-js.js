/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/build/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/vertical-timeline-master/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/vertical-timeline-master/js/main.js":
/*!****************************************************!*\
  !*** ./assets/vertical-timeline-master/js/main.js ***!
  \****************************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

(function () {
    function VerticalTimeline(element) {
        this.element = element;
        this.blocks = this.element.getElementsByClassName("js-cd-block");
        this.images = this.element.getElementsByClassName("js-cd-img");
        this.contents = this.element.getElementsByClassName("js-cd-content");
        this.offset = 0.8;
        this.hideBlocks();
    };

    VerticalTimeline.prototype.hideBlocks = function () {
        //hide timeline blocks which are outside the viewport
        if (!"classList" in document.documentElement) {
            return;
        }
        var self = this;
        for (var i = 0; i < this.blocks.length; i++) {
            (function (i) {
                if (self.blocks[i].getBoundingClientRect().top > window.innerHeight * self.offset) {
                    self.images[i].classList.add("cd-is-hidden");
                    self.contents[i].classList.add("cd-is-hidden");
                }
            })(i);
        }
    };

    VerticalTimeline.prototype.showBlocks = function () {
        if (!"classList" in document.documentElement) {
            return;
        }
        var self = this;
        for (var i = 0; i < this.blocks.length; i++) {
            (function (i) {
                if (self.contents[i].classList.contains("cd-is-hidden") && self.blocks[i].getBoundingClientRect().top <= window.innerHeight * self.offset) {
                    // add bounce-in animation
                    self.images[i].classList.add("cd-timeline__img--bounce-in");
                    self.contents[i].classList.add("cd-timeline__content--bounce-in");
                    self.images[i].classList.remove("cd-is-hidden");
                    self.contents[i].classList.remove("cd-is-hidden");
                }
            })(i);
        }
    };

    var verticalTimelines = document.getElementsByClassName("js-cd-timeline"),
        verticalTimelinesArray = [],
        scrolling = false;
    if (verticalTimelines.length > 0) {
        for (var i = 0; i < verticalTimelines.length; i++) {
            (function (i) {
                verticalTimelinesArray.push(new VerticalTimeline(verticalTimelines[i]));
            })(i);
        }

        //show timeline blocks on scrolling
        window.addEventListener("scroll", function (event) {
            if (!scrolling) {
                scrolling = true;
                !window.requestAnimationFrame ? setTimeout(checkTimelineScroll, 250) : window.requestAnimationFrame(checkTimelineScroll);
            }
        });
    }

    function checkTimelineScroll() {
        verticalTimelinesArray.forEach(function (timeline) {
            timeline.showBlocks();
        });
        scrolling = false;
    };
})();

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgYWI0ZWUzNjYyMDFlZGQwMTg2Y2UiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3ZlcnRpY2FsLXRpbWVsaW5lLW1hc3Rlci9qcy9tYWluLmpzIl0sIm5hbWVzIjpbIlZlcnRpY2FsVGltZWxpbmUiLCJlbGVtZW50IiwiYmxvY2tzIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImltYWdlcyIsImNvbnRlbnRzIiwib2Zmc2V0IiwiaGlkZUJsb2NrcyIsInByb3RvdHlwZSIsImRvY3VtZW50IiwiZG9jdW1lbnRFbGVtZW50Iiwic2VsZiIsImkiLCJsZW5ndGgiLCJnZXRCb3VuZGluZ0NsaWVudFJlY3QiLCJ0b3AiLCJ3aW5kb3ciLCJpbm5lckhlaWdodCIsImNsYXNzTGlzdCIsImFkZCIsInNob3dCbG9ja3MiLCJjb250YWlucyIsInJlbW92ZSIsInZlcnRpY2FsVGltZWxpbmVzIiwidmVydGljYWxUaW1lbGluZXNBcnJheSIsInNjcm9sbGluZyIsInB1c2giLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJyZXF1ZXN0QW5pbWF0aW9uRnJhbWUiLCJzZXRUaW1lb3V0IiwiY2hlY2tUaW1lbGluZVNjcm9sbCIsImZvckVhY2giLCJ0aW1lbGluZSJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7QUFFQTtBQUNBOzs7Ozs7Ozs7Ozs7O0FDN0RBLENBQUMsWUFBWTtBQUNULGFBQVNBLGdCQUFULENBQTBCQyxPQUExQixFQUFtQztBQUMvQixhQUFLQSxPQUFMLEdBQWVBLE9BQWY7QUFDQSxhQUFLQyxNQUFMLEdBQWMsS0FBS0QsT0FBTCxDQUFhRSxzQkFBYixDQUFvQyxhQUFwQyxDQUFkO0FBQ0EsYUFBS0MsTUFBTCxHQUFjLEtBQUtILE9BQUwsQ0FBYUUsc0JBQWIsQ0FBb0MsV0FBcEMsQ0FBZDtBQUNBLGFBQUtFLFFBQUwsR0FBZ0IsS0FBS0osT0FBTCxDQUFhRSxzQkFBYixDQUFvQyxlQUFwQyxDQUFoQjtBQUNBLGFBQUtHLE1BQUwsR0FBYyxHQUFkO0FBQ0EsYUFBS0MsVUFBTDtBQUNIOztBQUVEUCxxQkFBaUJRLFNBQWpCLENBQTJCRCxVQUEzQixHQUF3QyxZQUFZO0FBQ2hEO0FBQ0EsWUFBSSxDQUFDLFdBQUQsSUFBZ0JFLFNBQVNDLGVBQTdCLEVBQThDO0FBQzFDO0FBQ0g7QUFDRCxZQUFJQyxPQUFPLElBQVg7QUFDQSxhQUFLLElBQUlDLElBQUksQ0FBYixFQUFnQkEsSUFBSSxLQUFLVixNQUFMLENBQVlXLE1BQWhDLEVBQXdDRCxHQUF4QyxFQUE2QztBQUN6QyxhQUFDLFVBQVVBLENBQVYsRUFBYTtBQUNWLG9CQUFJRCxLQUFLVCxNQUFMLENBQVlVLENBQVosRUFBZUUscUJBQWYsR0FBdUNDLEdBQXZDLEdBQTZDQyxPQUFPQyxXQUFQLEdBQXFCTixLQUFLTCxNQUEzRSxFQUFtRjtBQUMvRUsseUJBQUtQLE1BQUwsQ0FBWVEsQ0FBWixFQUFlTSxTQUFmLENBQXlCQyxHQUF6QixDQUE2QixjQUE3QjtBQUNBUix5QkFBS04sUUFBTCxDQUFjTyxDQUFkLEVBQWlCTSxTQUFqQixDQUEyQkMsR0FBM0IsQ0FBK0IsY0FBL0I7QUFDSDtBQUNKLGFBTEQsRUFLR1AsQ0FMSDtBQU1IO0FBQ0osS0FkRDs7QUFnQkFaLHFCQUFpQlEsU0FBakIsQ0FBMkJZLFVBQTNCLEdBQXdDLFlBQVk7QUFDaEQsWUFBSSxDQUFDLFdBQUQsSUFBZ0JYLFNBQVNDLGVBQTdCLEVBQThDO0FBQzFDO0FBQ0g7QUFDRCxZQUFJQyxPQUFPLElBQVg7QUFDQSxhQUFLLElBQUlDLElBQUksQ0FBYixFQUFnQkEsSUFBSSxLQUFLVixNQUFMLENBQVlXLE1BQWhDLEVBQXdDRCxHQUF4QyxFQUE2QztBQUN6QyxhQUFDLFVBQVVBLENBQVYsRUFBYTtBQUNWLG9CQUFJRCxLQUFLTixRQUFMLENBQWNPLENBQWQsRUFBaUJNLFNBQWpCLENBQTJCRyxRQUEzQixDQUFvQyxjQUFwQyxLQUF1RFYsS0FBS1QsTUFBTCxDQUFZVSxDQUFaLEVBQWVFLHFCQUFmLEdBQXVDQyxHQUF2QyxJQUE4Q0MsT0FBT0MsV0FBUCxHQUFxQk4sS0FBS0wsTUFBbkksRUFBMkk7QUFDdkk7QUFDQUsseUJBQUtQLE1BQUwsQ0FBWVEsQ0FBWixFQUFlTSxTQUFmLENBQXlCQyxHQUF6QixDQUE2Qiw2QkFBN0I7QUFDQVIseUJBQUtOLFFBQUwsQ0FBY08sQ0FBZCxFQUFpQk0sU0FBakIsQ0FBMkJDLEdBQTNCLENBQStCLGlDQUEvQjtBQUNBUix5QkFBS1AsTUFBTCxDQUFZUSxDQUFaLEVBQWVNLFNBQWYsQ0FBeUJJLE1BQXpCLENBQWdDLGNBQWhDO0FBQ0FYLHlCQUFLTixRQUFMLENBQWNPLENBQWQsRUFBaUJNLFNBQWpCLENBQTJCSSxNQUEzQixDQUFrQyxjQUFsQztBQUNIO0FBQ0osYUFSRCxFQVFHVixDQVJIO0FBU0g7QUFDSixLQWhCRDs7QUFrQkEsUUFBSVcsb0JBQW9CZCxTQUFTTixzQkFBVCxDQUFnQyxnQkFBaEMsQ0FBeEI7QUFBQSxRQUNJcUIseUJBQXlCLEVBRDdCO0FBQUEsUUFFSUMsWUFBWSxLQUZoQjtBQUdBLFFBQUlGLGtCQUFrQlYsTUFBbEIsR0FBMkIsQ0FBL0IsRUFBa0M7QUFDOUIsYUFBSyxJQUFJRCxJQUFJLENBQWIsRUFBZ0JBLElBQUlXLGtCQUFrQlYsTUFBdEMsRUFBOENELEdBQTlDLEVBQW1EO0FBQy9DLGFBQUMsVUFBVUEsQ0FBVixFQUFhO0FBQ1ZZLHVDQUF1QkUsSUFBdkIsQ0FBNEIsSUFBSTFCLGdCQUFKLENBQXFCdUIsa0JBQWtCWCxDQUFsQixDQUFyQixDQUE1QjtBQUNILGFBRkQsRUFFR0EsQ0FGSDtBQUdIOztBQUVEO0FBQ0FJLGVBQU9XLGdCQUFQLENBQXdCLFFBQXhCLEVBQWtDLFVBQVVDLEtBQVYsRUFBaUI7QUFDL0MsZ0JBQUksQ0FBQ0gsU0FBTCxFQUFnQjtBQUNaQSw0QkFBWSxJQUFaO0FBQ0MsaUJBQUNULE9BQU9hLHFCQUFULEdBQWtDQyxXQUFXQyxtQkFBWCxFQUFnQyxHQUFoQyxDQUFsQyxHQUF5RWYsT0FBT2EscUJBQVAsQ0FBNkJFLG1CQUE3QixDQUF6RTtBQUNIO0FBQ0osU0FMRDtBQU1IOztBQUVELGFBQVNBLG1CQUFULEdBQStCO0FBQzNCUCwrQkFBdUJRLE9BQXZCLENBQStCLFVBQVVDLFFBQVYsRUFBb0I7QUFDL0NBLHFCQUFTYixVQUFUO0FBQ0gsU0FGRDtBQUdBSyxvQkFBWSxLQUFaO0FBQ0g7QUFDSixDQXJFRCxJIiwiZmlsZSI6InZlcnRpY2FsLXRpbWVsaW5lLWpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7XG4gXHRcdFx0XHRjb25maWd1cmFibGU6IGZhbHNlLFxuIFx0XHRcdFx0ZW51bWVyYWJsZTogdHJ1ZSxcbiBcdFx0XHRcdGdldDogZ2V0dGVyXG4gXHRcdFx0fSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiL2J1aWxkL1wiO1xuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IFwiLi9hc3NldHMvdmVydGljYWwtdGltZWxpbmUtbWFzdGVyL2pzL21haW4uanNcIik7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgYWI0ZWUzNjYyMDFlZGQwMTg2Y2UiLCIoZnVuY3Rpb24gKCkge1xuICAgIGZ1bmN0aW9uIFZlcnRpY2FsVGltZWxpbmUoZWxlbWVudCkge1xuICAgICAgICB0aGlzLmVsZW1lbnQgPSBlbGVtZW50O1xuICAgICAgICB0aGlzLmJsb2NrcyA9IHRoaXMuZWxlbWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwianMtY2QtYmxvY2tcIik7XG4gICAgICAgIHRoaXMuaW1hZ2VzID0gdGhpcy5lbGVtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJqcy1jZC1pbWdcIik7XG4gICAgICAgIHRoaXMuY29udGVudHMgPSB0aGlzLmVsZW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcImpzLWNkLWNvbnRlbnRcIik7XG4gICAgICAgIHRoaXMub2Zmc2V0ID0gMC44O1xuICAgICAgICB0aGlzLmhpZGVCbG9ja3MoKTtcbiAgICB9O1xuXG4gICAgVmVydGljYWxUaW1lbGluZS5wcm90b3R5cGUuaGlkZUJsb2NrcyA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgLy9oaWRlIHRpbWVsaW5lIGJsb2NrcyB3aGljaCBhcmUgb3V0c2lkZSB0aGUgdmlld3BvcnRcbiAgICAgICAgaWYgKCFcImNsYXNzTGlzdFwiIGluIGRvY3VtZW50LmRvY3VtZW50RWxlbWVudCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIHZhciBzZWxmID0gdGhpcztcbiAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCB0aGlzLmJsb2Nrcy5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICAgKGZ1bmN0aW9uIChpKSB7XG4gICAgICAgICAgICAgICAgaWYgKHNlbGYuYmxvY2tzW2ldLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcCA+IHdpbmRvdy5pbm5lckhlaWdodCAqIHNlbGYub2Zmc2V0KSB7XG4gICAgICAgICAgICAgICAgICAgIHNlbGYuaW1hZ2VzW2ldLmNsYXNzTGlzdC5hZGQoXCJjZC1pcy1oaWRkZW5cIik7XG4gICAgICAgICAgICAgICAgICAgIHNlbGYuY29udGVudHNbaV0uY2xhc3NMaXN0LmFkZChcImNkLWlzLWhpZGRlblwiKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KShpKTtcbiAgICAgICAgfVxuICAgIH07XG5cbiAgICBWZXJ0aWNhbFRpbWVsaW5lLnByb3RvdHlwZS5zaG93QmxvY2tzID0gZnVuY3Rpb24gKCkge1xuICAgICAgICBpZiAoIVwiY2xhc3NMaXN0XCIgaW4gZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50KSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cbiAgICAgICAgdmFyIHNlbGYgPSB0aGlzO1xuICAgICAgICBmb3IgKHZhciBpID0gMDsgaSA8IHRoaXMuYmxvY2tzLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgICAgICAoZnVuY3Rpb24gKGkpIHtcbiAgICAgICAgICAgICAgICBpZiAoc2VsZi5jb250ZW50c1tpXS5jbGFzc0xpc3QuY29udGFpbnMoXCJjZC1pcy1oaWRkZW5cIikgJiYgc2VsZi5ibG9ja3NbaV0uZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkudG9wIDw9IHdpbmRvdy5pbm5lckhlaWdodCAqIHNlbGYub2Zmc2V0KSB7XG4gICAgICAgICAgICAgICAgICAgIC8vIGFkZCBib3VuY2UtaW4gYW5pbWF0aW9uXG4gICAgICAgICAgICAgICAgICAgIHNlbGYuaW1hZ2VzW2ldLmNsYXNzTGlzdC5hZGQoXCJjZC10aW1lbGluZV9faW1nLS1ib3VuY2UtaW5cIik7XG4gICAgICAgICAgICAgICAgICAgIHNlbGYuY29udGVudHNbaV0uY2xhc3NMaXN0LmFkZChcImNkLXRpbWVsaW5lX19jb250ZW50LS1ib3VuY2UtaW5cIik7XG4gICAgICAgICAgICAgICAgICAgIHNlbGYuaW1hZ2VzW2ldLmNsYXNzTGlzdC5yZW1vdmUoXCJjZC1pcy1oaWRkZW5cIik7XG4gICAgICAgICAgICAgICAgICAgIHNlbGYuY29udGVudHNbaV0uY2xhc3NMaXN0LnJlbW92ZShcImNkLWlzLWhpZGRlblwiKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KShpKTtcbiAgICAgICAgfVxuICAgIH07XG5cbiAgICB2YXIgdmVydGljYWxUaW1lbGluZXMgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwianMtY2QtdGltZWxpbmVcIiksXG4gICAgICAgIHZlcnRpY2FsVGltZWxpbmVzQXJyYXkgPSBbXSxcbiAgICAgICAgc2Nyb2xsaW5nID0gZmFsc2U7XG4gICAgaWYgKHZlcnRpY2FsVGltZWxpbmVzLmxlbmd0aCA+IDApIHtcbiAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCB2ZXJ0aWNhbFRpbWVsaW5lcy5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICAgKGZ1bmN0aW9uIChpKSB7XG4gICAgICAgICAgICAgICAgdmVydGljYWxUaW1lbGluZXNBcnJheS5wdXNoKG5ldyBWZXJ0aWNhbFRpbWVsaW5lKHZlcnRpY2FsVGltZWxpbmVzW2ldKSk7XG4gICAgICAgICAgICB9KShpKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vc2hvdyB0aW1lbGluZSBibG9ja3Mgb24gc2Nyb2xsaW5nXG4gICAgICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwic2Nyb2xsXCIsIGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICAgICAgaWYgKCFzY3JvbGxpbmcpIHtcbiAgICAgICAgICAgICAgICBzY3JvbGxpbmcgPSB0cnVlO1xuICAgICAgICAgICAgICAgICghd2luZG93LnJlcXVlc3RBbmltYXRpb25GcmFtZSkgPyBzZXRUaW1lb3V0KGNoZWNrVGltZWxpbmVTY3JvbGwsIDI1MCkgOiB3aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lKGNoZWNrVGltZWxpbmVTY3JvbGwpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBmdW5jdGlvbiBjaGVja1RpbWVsaW5lU2Nyb2xsKCkge1xuICAgICAgICB2ZXJ0aWNhbFRpbWVsaW5lc0FycmF5LmZvckVhY2goZnVuY3Rpb24gKHRpbWVsaW5lKSB7XG4gICAgICAgICAgICB0aW1lbGluZS5zaG93QmxvY2tzKCk7XG4gICAgICAgIH0pO1xuICAgICAgICBzY3JvbGxpbmcgPSBmYWxzZTtcbiAgICB9O1xufSkoKTtcblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9hc3NldHMvdmVydGljYWwtdGltZWxpbmUtbWFzdGVyL2pzL21haW4uanMiXSwic291cmNlUm9vdCI6IiJ9