<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="" />
		<meta name="author" content="">

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="">

		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="<?php echo base_url();?>style/css2/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="<?php echo base_url();?>style/css2/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="<?php echo base_url();?>style/css2/bootstrap.css">
		<!-- Flexslider  -->
		<link rel="stylesheet" href="<?php echo base_url();?>style/css2/flexslider.css">
		<!-- Flaticons  -->
		<link rel="stylesheet" href="<?php echo base_url();?>style/fonts/flaticon/font/flaticon.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="<?php echo base_url();?>style/css2/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>style/css2/owl.theme.default.min.css">
		<!-- Theme style  -->
		<link rel="stylesheet" href="<?php echo base_url();?>style/css2/style.css">

		<!-- Modernizr JS -->
		<script src="<?php echo base_url();?>style/js2/modernizr-2.6.2.min.js"></script>

		<title>PT Pelindo Daya Sejahtera <?= $title; ?></title>
		<link rel="icon" href="<?= base_url('style/assets/images/icon.png'); ?>" type="image/gif">

		<!-- Bootstrap core CSS -->
		<!-- <link href="<?php echo base_url();?>style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

		<!-- <link href="<?php echo base_url();?>style/css/bootstrap.min.css" rel="stylesheet"> -->

		<!-- Custom styles for this template -->
		<!-- <link href="<?php echo base_url();?>style/css/shop.css" rel="stylesheet"> -->
		<!-- <link href="<?php echo base_url();?>style/css/grayscale.min.css" rel="stylesheet"> -->
		<!-- <link href="<?php echo base_url();?>style/css/reg-log.css" rel="stylesheet"> -->
		<!-- <link href="<?php echo base_url();?>style/css/mdb.css" rel="stylesheet"> -->
		<!-- <link href="<?php echo base_url();?>style/css/mdb.lite.css" rel="stylesheet"> -->
		<!-- <link href="<?php echo base_url();?>style/css/mdb.lite.min.css" rel="stylesheet"> -->
		<!-- <link href="<?php echo base_url();?>style/css/mdb.min.css" rel="stylesheet"> -->
		<!-- <link href="<?php echo base_url();?>style/css/animate.css" rel="stylesheet"> -->

		<!-- <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
   		<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Merriweather:900" rel="stylesheet"> -->

<!-- baryu -->

		<!--  -->

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
     	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
     	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->
     	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

     	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"> -->

		<!-- <script src="<?php echo base_url();?>style/js/grayscale.min.js"></script> -->
		<!-- <script src="<?php echo base_url();?>style/js/wow.min.js"></script> -->
		<!-- <script src="<?php echo base_url();?>style/js/wow.js"></script> -->

		<script>
			function myMap() {
			var mapProp= {
			  center:new google.maps.LatLng(-7.197304,112.7271303),
			  zoom:5,
			};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			}
		</script>


		<script type="text/javascript">
			(function() {
				  var MutationObserver, Util, WeakMap, getComputedStyle, getComputedStyleRX,
				    bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; },
				    indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; };

				  Util = (function() {
				    function Util() {}

				    Util.prototype.extend = function(custom, defaults) {
				      var key, value;
				      for (key in defaults) {
				        value = defaults[key];
				        if (custom[key] == null) {
				          custom[key] = value;
				        }
				      }
				      return custom;
				    };

				    Util.prototype.isMobile = function(agent) {
				      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
				    };

				    Util.prototype.createEvent = function(event, bubble, cancel, detail) {
				      var customEvent;
				      if (bubble == null) {
				        bubble = false;
				      }
				      if (cancel == null) {
				        cancel = false;
				      }
				      if (detail == null) {
				        detail = null;
				      }
				      if (document.createEvent != null) {
				        customEvent = document.createEvent('CustomEvent');
				        customEvent.initCustomEvent(event, bubble, cancel, detail);
				      } else if (document.createEventObject != null) {
				        customEvent = document.createEventObject();
				        customEvent.eventType = event;
				      } else {
				        customEvent.eventName = event;
				      }
				      return customEvent;
				    };

				    Util.prototype.emitEvent = function(elem, event) {
				      if (elem.dispatchEvent != null) {
				        return elem.dispatchEvent(event);
				      } else if (event in (elem != null)) {
				        return elem[event]();
				      } else if (("on" + event) in (elem != null)) {
				        return elem["on" + event]();
				      }
				    };

				    Util.prototype.addEvent = function(elem, event, fn) {
				      if (elem.addEventListener != null) {
				        return elem.addEventListener(event, fn, false);
				      } else if (elem.attachEvent != null) {
				        return elem.attachEvent("on" + event, fn);
				      } else {
				        return elem[event] = fn;
				      }
				    };

				    Util.prototype.removeEvent = function(elem, event, fn) {
				      if (elem.removeEventListener != null) {
				        return elem.removeEventListener(event, fn, false);
				      } else if (elem.detachEvent != null) {
				        return elem.detachEvent("on" + event, fn);
				      } else {
				        return delete elem[event];
				      }
				    };

				    Util.prototype.innerHeight = function() {
				      if ('innerHeight' in window) {
				        return window.innerHeight;
				      } else {
				        return document.documentElement.clientHeight;
				      }
				    };

				    return Util;

				  })();

				  WeakMap = this.WeakMap || this.MozWeakMap || (WeakMap = (function() {
				    function WeakMap() {
				      this.keys = [];
				      this.values = [];
				    }

				    WeakMap.prototype.get = function(key) {
				      var i, item, j, len, ref;
				      ref = this.keys;
				      for (i = j = 0, len = ref.length; j < len; i = ++j) {
				        item = ref[i];
				        if (item === key) {
				          return this.values[i];
				        }
				      }
				    };

				    WeakMap.prototype.set = function(key, value) {
				      var i, item, j, len, ref;
				      ref = this.keys;
				      for (i = j = 0, len = ref.length; j < len; i = ++j) {
				        item = ref[i];
				        if (item === key) {
				          this.values[i] = value;
				          return;
				        }
				      }
				      this.keys.push(key);
				      return this.values.push(value);
				    };

				    return WeakMap;

				  })());

				  MutationObserver = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (MutationObserver = (function() {
				    function MutationObserver() {
				      if (typeof console !== "undefined" && console !== null) {
				        console.warn('MutationObserver is not supported by your browser.');
				      }
				      if (typeof console !== "undefined" && console !== null) {
				        console.warn('WOW.js cannot detect dom mutations, please call .sync() after loading new content.');
				      }
				    }

				    MutationObserver.notSupported = true;

				    MutationObserver.prototype.observe = function() {};

				    return MutationObserver;

				  })());

				  getComputedStyle = this.getComputedStyle || function(el, pseudo) {
				    this.getPropertyValue = function(prop) {
				      var ref;
				      if (prop === 'float') {
				        prop = 'styleFloat';
				      }
				      if (getComputedStyleRX.test(prop)) {
				        prop.replace(getComputedStyleRX, function(_, _char) {
				          return _char.toUpperCase();
				        });
				      }
				      return ((ref = el.currentStyle) != null ? ref[prop] : void 0) || null;
				    };
				    return this;
				  };

				  getComputedStyleRX = /(\-([a-z]){1})/g;

				  this.WOW = (function() {
				    WOW.prototype.defaults = {
				      boxClass: 'wow',
				      animateClass: 'animated',
				      offset: 0,
				      mobile: true,
				      live: true,
				      callback: null
				    };

				    function WOW(options) {
				      if (options == null) {
				        options = {};
				      }
				      this.scrollCallback = bind(this.scrollCallback, this);
				      this.scrollHandler = bind(this.scrollHandler, this);
				      this.resetAnimation = bind(this.resetAnimation, this);
				      this.start = bind(this.start, this);
				      this.scrolled = true;
				      this.config = this.util().extend(options, this.defaults);
				      this.animationNameCache = new WeakMap();
				      this.wowEvent = this.util().createEvent(this.config.boxClass);
				    }

				    WOW.prototype.init = function() {
				      var ref;
				      this.element = window.document.documentElement;
				      if ((ref = document.readyState) === "interactive" || ref === "complete") {
				        this.start();
				      } else {
				        this.util().addEvent(document, 'DOMContentLoaded', this.start);
				      }
				      return this.finished = [];
				    };

				    WOW.prototype.start = function() {
				      var box, j, len, ref;
				      this.stopped = false;
				      this.boxes = (function() {
				        var j, len, ref, results;
				        ref = this.element.querySelectorAll("." + this.config.boxClass);
				        results = [];
				        for (j = 0, len = ref.length; j < len; j++) {
				          box = ref[j];
				          results.push(box);
				        }
				        return results;
				      }).call(this);
				      this.all = (function() {
				        var j, len, ref, results;
				        ref = this.boxes;
				        results = [];
				        for (j = 0, len = ref.length; j < len; j++) {
				          box = ref[j];
				          results.push(box);
				        }
				        return results;
				      }).call(this);
				      if (this.boxes.length) {
				        if (this.disabled()) {
				          this.resetStyle();
				        } else {
				          ref = this.boxes;
				          for (j = 0, len = ref.length; j < len; j++) {
				            box = ref[j];
				            this.applyStyle(box, true);
				          }
				        }
				      }
				      if (!this.disabled()) {
				        this.util().addEvent(window, 'scroll', this.scrollHandler);
				        this.util().addEvent(window, 'resize', this.scrollHandler);
				        this.interval = setInterval(this.scrollCallback, 50);
				      }
				      if (this.config.live) {
				        return new MutationObserver((function(_this) {
				          return function(records) {
				            var k, len1, node, record, results;
				            results = [];
				            for (k = 0, len1 = records.length; k < len1; k++) {
				              record = records[k];
				              results.push((function() {
				                var l, len2, ref1, results1;
				                ref1 = record.addedNodes || [];
				                results1 = [];
				                for (l = 0, len2 = ref1.length; l < len2; l++) {
				                  node = ref1[l];
				                  results1.push(this.doSync(node));
				                }
				                return results1;
				              }).call(_this));
				            }
				            return results;
				          };
				        })(this)).observe(document.body, {
				          childList: true,
				          subtree: true
				        });
				      }
				    };

				    WOW.prototype.stop = function() {
				      this.stopped = true;
				      this.util().removeEvent(window, 'scroll', this.scrollHandler);
				      this.util().removeEvent(window, 'resize', this.scrollHandler);
				      if (this.interval != null) {
				        return clearInterval(this.interval);
				      }
				    };

				    WOW.prototype.sync = function(element) {
				      if (MutationObserver.notSupported) {
				        return this.doSync(this.element);
				      }
				    };

				    WOW.prototype.doSync = function(element) {
				      var box, j, len, ref, results;
				      if (element == null) {
				        element = this.element;
				      }
				      if (element.nodeType !== 1) {
				        return;
				      }
				      element = element.parentNode || element;
				      ref = element.querySelectorAll("." + this.config.boxClass);
				      results = [];
				      for (j = 0, len = ref.length; j < len; j++) {
				        box = ref[j];
				        if (indexOf.call(this.all, box) < 0) {
				          this.boxes.push(box);
				          this.all.push(box);
				          if (this.stopped || this.disabled()) {
				            this.resetStyle();
				          } else {
				            this.applyStyle(box, true);
				          }
				          results.push(this.scrolled = true);
				        } else {
				          results.push(void 0);
				        }
				      }
				      return results;
				    };

				    WOW.prototype.show = function(box) {
				      this.applyStyle(box);
				      box.className = box.className + " " + this.config.animateClass;
				      if (this.config.callback != null) {
				        this.config.callback(box);
				      }
				      this.util().emitEvent(box, this.wowEvent);
				      this.util().addEvent(box, 'animationend', this.resetAnimation);
				      this.util().addEvent(box, 'oanimationend', this.resetAnimation);
				      this.util().addEvent(box, 'webkitAnimationEnd', this.resetAnimation);
				      this.util().addEvent(box, 'MSAnimationEnd', this.resetAnimation);
				      return box;
				    };

				    WOW.prototype.applyStyle = function(box, hidden) {
				      var delay, duration, iteration;
				      duration = box.getAttribute('data-wow-duration');
				      delay = box.getAttribute('data-wow-delay');
				      iteration = box.getAttribute('data-wow-iteration');
				      return this.animate((function(_this) {
				        return function() {
				          return _this.customStyle(box, hidden, duration, delay, iteration);
				        };
				      })(this));
				    };

				    WOW.prototype.animate = (function() {
				      if ('requestAnimationFrame' in window) {
				        return function(callback) {
				          return window.requestAnimationFrame(callback);
				        };
				      } else {
				        return function(callback) {
				          return callback();
				        };
				      }
				    })();

				    WOW.prototype.resetStyle = function() {
				      var box, j, len, ref, results;
				      ref = this.boxes;
				      results = [];
				      for (j = 0, len = ref.length; j < len; j++) {
				        box = ref[j];
				        results.push(box.style.visibility = 'visible');
				      }
				      return results;
				    };

				    WOW.prototype.resetAnimation = function(event) {
				      var target;
				      if (event.type.toLowerCase().indexOf('animationend') >= 0) {
				        target = event.target || event.srcElement;
				        return target.className = target.className.replace(this.config.animateClass, '').trim();
				      }
				    };

				    WOW.prototype.customStyle = function(box, hidden, duration, delay, iteration) {
				      if (hidden) {
				        this.cacheAnimationName(box);
				      }
				      box.style.visibility = hidden ? 'hidden' : 'visible';
				      if (duration) {
				        this.vendorSet(box.style, {
				          animationDuration: duration
				        });
				      }
				      if (delay) {
				        this.vendorSet(box.style, {
				          animationDelay: delay
				        });
				      }
				      if (iteration) {
				        this.vendorSet(box.style, {
				          animationIterationCount: iteration
				        });
				      }
				      this.vendorSet(box.style, {
				        animationName: hidden ? 'none' : this.cachedAnimationName(box)
				      });
				      return box;
				    };

				    WOW.prototype.vendors = ["moz", "webkit"];

				    WOW.prototype.vendorSet = function(elem, properties) {
				      var name, results, value, vendor;
				      results = [];
				      for (name in properties) {
				        value = properties[name];
				        elem["" + name] = value;
				        results.push((function() {
				          var j, len, ref, results1;
				          ref = this.vendors;
				          results1 = [];
				          for (j = 0, len = ref.length; j < len; j++) {
				            vendor = ref[j];
				            results1.push(elem["" + vendor + (name.charAt(0).toUpperCase()) + (name.substr(1))] = value);
				          }
				          return results1;
				        }).call(this));
				      }
				      return results;
				    };

				    WOW.prototype.vendorCSS = function(elem, property) {
				      var j, len, ref, result, style, vendor;
				      style = getComputedStyle(elem);
				      result = style.getPropertyCSSValue(property);
				      ref = this.vendors;
				      for (j = 0, len = ref.length; j < len; j++) {
				        vendor = ref[j];
				        result = result || style.getPropertyCSSValue("-" + vendor + "-" + property);
				      }
				      return result;
				    };

				    WOW.prototype.animationName = function(box) {
				      var animationName;
				      try {
				        animationName = this.vendorCSS(box, 'animation-name').cssText;
				      } catch (_error) {
				        animationName = getComputedStyle(box).getPropertyValue('animation-name');
				      }
				      if (animationName === 'none') {
				        return '';
				      } else {
				        return animationName;
				      }
				    };

				    WOW.prototype.cacheAnimationName = function(box) {
				      return this.animationNameCache.set(box, this.animationName(box));
				    };

				    WOW.prototype.cachedAnimationName = function(box) {
				      return this.animationNameCache.get(box);
				    };

				    WOW.prototype.scrollHandler = function() {
				      return this.scrolled = true;
				    };

				    WOW.prototype.scrollCallback = function() {
				      var box;
				      if (this.scrolled) {
				        this.scrolled = false;
				        this.boxes = (function() {
				          var j, len, ref, results;
				          ref = this.boxes;
				          results = [];
				          for (j = 0, len = ref.length; j < len; j++) {
				            box = ref[j];
				            if (!(box)) {
				              continue;
				            }
				            if (this.isVisible(box)) {
				              this.show(box);
				              continue;
				            }
				            results.push(box);
				          }
				          return results;
				        }).call(this);
				        if (!(this.boxes.length || this.config.live)) {
				          return this.stop();
				        }
				      }
				    };

				    WOW.prototype.offsetTop = function(element) {
				      var top;
				      while (element.offsetTop === void 0) {
				        element = element.parentNode;
				      }
				      top = element.offsetTop;
				      while (element = element.offsetParent) {
				        top += element.offsetTop;
				      }
				      return top;
				    };

				    WOW.prototype.isVisible = function(box) {
				      var bottom, offset, top, viewBottom, viewTop;
				      offset = box.getAttribute('data-wow-offset') || this.config.offset;
				      viewTop = window.pageYOffset;
				      viewBottom = viewTop + Math.min(this.element.clientHeight, this.util().innerHeight()) - offset;
				      top = this.offsetTop(box);
				      bottom = top + box.clientHeight;
				      return top <= viewBottom && bottom >= viewTop;
				    };

				    WOW.prototype.util = function() {
				      return this._util != null ? this._util : this._util = new Util();
				    };

				    WOW.prototype.disabled = function() {
				      return !this.config.mobile && this.util().isMobile(navigator.userAgent);
				    };

				    return WOW;

				  })();

				}).call(this);

						</script>


						<script>
				              new WOW().init();
        </script>

        <script type="text/javascript">
		        	/*! WOW - v1.1.2 - 2015-04-07
			* Copyright (c) 2015 Matthieu Aussaguel; Licensed MIT */(function(){var a,b,c,d,e,f=function(a,b){return function(){return a.apply(b,arguments)}},g=[].indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(b in this&&this[b]===a)return b;return-1};b=function(){function a(){}return a.prototype.extend=function(a,b){var c,d;for(c in b)d=b[c],null==a[c]&&(a[c]=d);return a},a.prototype.isMobile=function(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)},a.prototype.createEvent=function(a,b,c,d){var e;return null==b&&(b=!1),null==c&&(c=!1),null==d&&(d=null),null!=document.createEvent?(e=document.createEvent("CustomEvent"),e.initCustomEvent(a,b,c,d)):null!=document.createEventObject?(e=document.createEventObject(),e.eventType=a):e.eventName=a,e},a.prototype.emitEvent=function(a,b){return null!=a.dispatchEvent?a.dispatchEvent(b):b in(null!=a)?a[b]():"on"+b in(null!=a)?a["on"+b]():void 0},a.prototype.addEvent=function(a,b,c){return null!=a.addEventListener?a.addEventListener(b,c,!1):null!=a.attachEvent?a.attachEvent("on"+b,c):a[b]=c},a.prototype.removeEvent=function(a,b,c){return null!=a.removeEventListener?a.removeEventListener(b,c,!1):null!=a.detachEvent?a.detachEvent("on"+b,c):delete a[b]},a.prototype.innerHeight=function(){return"innerHeight"in window?window.innerHeight:document.documentElement.clientHeight},a}(),c=this.WeakMap||this.MozWeakMap||(c=function(){function a(){this.keys=[],this.values=[]}return a.prototype.get=function(a){var b,c,d,e,f;for(f=this.keys,b=d=0,e=f.length;e>d;b=++d)if(c=f[b],c===a)return this.values[b]},a.prototype.set=function(a,b){var c,d,e,f,g;for(g=this.keys,c=e=0,f=g.length;f>e;c=++e)if(d=g[c],d===a)return void(this.values[c]=b);return this.keys.push(a),this.values.push(b)},a}()),a=this.MutationObserver||this.WebkitMutationObserver||this.MozMutationObserver||(a=function(){function a(){"undefined"!=typeof console&&null!==console&&console.warn("MutationObserver is not supported by your browser."),"undefined"!=typeof console&&null!==console&&console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.")}return a.notSupported=!0,a.prototype.observe=function(){},a}()),d=this.getComputedStyle||function(a){return this.getPropertyValue=function(b){var c;return"float"===b&&(b="styleFloat"),e.test(b)&&b.replace(e,function(a,b){return b.toUpperCase()}),(null!=(c=a.currentStyle)?c[b]:void 0)||null},this},e=/(\-([a-z]){1})/g,this.WOW=function(){function e(a){null==a&&(a={}),this.scrollCallback=f(this.scrollCallback,this),this.scrollHandler=f(this.scrollHandler,this),this.resetAnimation=f(this.resetAnimation,this),this.start=f(this.start,this),this.scrolled=!0,this.config=this.util().extend(a,this.defaults),this.animationNameCache=new c,this.wowEvent=this.util().createEvent(this.config.boxClass)}return e.prototype.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0,callback:null},e.prototype.init=function(){var a;return this.element=window.document.documentElement,"interactive"===(a=document.readyState)||"complete"===a?this.start():this.util().addEvent(document,"DOMContentLoaded",this.start),this.finished=[]},e.prototype.start=function(){var b,c,d,e;if(this.stopped=!1,this.boxes=function(){var a,c,d,e;for(d=this.element.querySelectorAll("."+this.config.boxClass),e=[],a=0,c=d.length;c>a;a++)b=d[a],e.push(b);return e}.call(this),this.all=function(){var a,c,d,e;for(d=this.boxes,e=[],a=0,c=d.length;c>a;a++)b=d[a],e.push(b);return e}.call(this),this.boxes.length)if(this.disabled())this.resetStyle();else for(e=this.boxes,c=0,d=e.length;d>c;c++)b=e[c],this.applyStyle(b,!0);return this.disabled()||(this.util().addEvent(window,"scroll",this.scrollHandler),this.util().addEvent(window,"resize",this.scrollHandler),this.interval=setInterval(this.scrollCallback,50)),this.config.live?new a(function(a){return function(b){var c,d,e,f,g;for(g=[],c=0,d=b.length;d>c;c++)f=b[c],g.push(function(){var a,b,c,d;for(c=f.addedNodes||[],d=[],a=0,b=c.length;b>a;a++)e=c[a],d.push(this.doSync(e));return d}.call(a));return g}}(this)).observe(document.body,{childList:!0,subtree:!0}):void 0},e.prototype.stop=function(){return this.stopped=!0,this.util().removeEvent(window,"scroll",this.scrollHandler),this.util().removeEvent(window,"resize",this.scrollHandler),null!=this.interval?clearInterval(this.interval):void 0},e.prototype.sync=function(){return a.notSupported?this.doSync(this.element):void 0},e.prototype.doSync=function(a){var b,c,d,e,f;if(null==a&&(a=this.element),1===a.nodeType){for(a=a.parentNode||a,e=a.querySelectorAll("."+this.config.boxClass),f=[],c=0,d=e.length;d>c;c++)b=e[c],g.call(this.all,b)<0?(this.boxes.push(b),this.all.push(b),this.stopped||this.disabled()?this.resetStyle():this.applyStyle(b,!0),f.push(this.scrolled=!0)):f.push(void 0);return f}},e.prototype.show=function(a){return this.applyStyle(a),a.className=a.className+" "+this.config.animateClass,null!=this.config.callback&&this.config.callback(a),this.util().emitEvent(a,this.wowEvent),this.util().addEvent(a,"animationend",this.resetAnimation),this.util().addEvent(a,"oanimationend",this.resetAnimation),this.util().addEvent(a,"webkitAnimationEnd",this.resetAnimation),this.util().addEvent(a,"MSAnimationEnd",this.resetAnimation),a},e.prototype.applyStyle=function(a,b){var c,d,e;return d=a.getAttribute("data-wow-duration"),c=a.getAttribute("data-wow-delay"),e=a.getAttribute("data-wow-iteration"),this.animate(function(f){return function(){return f.customStyle(a,b,d,c,e)}}(this))},e.prototype.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),e.prototype.resetStyle=function(){var a,b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(a.style.visibility="visible");return e},e.prototype.resetAnimation=function(a){var b;return a.type.toLowerCase().indexOf("animationend")>=0?(b=a.target||a.srcElement,b.className=b.className.replace(this.config.animateClass,"").trim()):void 0},e.prototype.customStyle=function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a},e.prototype.vendors=["moz","webkit"],e.prototype.vendorSet=function(a,b){var c,d,e,f;d=[];for(c in b)e=b[c],a[""+c]=e,d.push(function(){var b,d,g,h;for(g=this.vendors,h=[],b=0,d=g.length;d>b;b++)f=g[b],h.push(a[""+f+c.charAt(0).toUpperCase()+c.substr(1)]=e);return h}.call(this));return d},e.prototype.vendorCSS=function(a,b){var c,e,f,g,h,i;for(h=d(a),g=h.getPropertyCSSValue(b),f=this.vendors,c=0,e=f.length;e>c;c++)i=f[c],g=g||h.getPropertyCSSValue("-"+i+"-"+b);return g},e.prototype.animationName=function(a){var b;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=d(a).getPropertyValue("animation-name")}return"none"===b?"":b},e.prototype.cacheAnimationName=function(a){return this.animationNameCache.set(a,this.animationName(a))},e.prototype.cachedAnimationName=function(a){return this.animationNameCache.get(a)},e.prototype.scrollHandler=function(){return this.scrolled=!0},e.prototype.scrollCallback=function(){var a;return!this.scrolled||(this.scrolled=!1,this.boxes=function(){var b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],a&&(this.isVisible(a)?this.show(a):e.push(a));return e}.call(this),this.boxes.length||this.config.live)?void 0:this.stop()},e.prototype.offsetTop=function(a){for(var b;void 0===a.offsetTop;)a=a.parentNode;for(b=a.offsetTop;a=a.offsetParent;)b+=a.offsetTop;return b},e.prototype.isVisible=function(a){var b,c,d,e,f;return c=a.getAttribute("data-wow-offset")||this.config.offset,f=window.pageYOffset,e=f+Math.min(this.element.clientHeight,this.util().innerHeight())-c,d=this.offsetTop(a),b=d+a.clientHeight,e>=d&&b>=f},e.prototype.util=function(){return null!=this._util?this._util:this._util=new b},e.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},e}()}).call(this);
        </script>



		<script> 
	        // wait for the DOM to be loaded 
			function addToCart(product_id) {
				var quantity = "#quantity_"+product_id;
				quantity = $(quantity).val();
				// alert(product_id);
				// alert(quantity);
				if (quantity == "") {
						$("#alert_modal").modal("show");
						$("#modal_body").html("Please enter the quantity");
						$("#modal_title").html("Warning");
						$("#modal_footer").html("<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>");
				} else if (quantity <= 0) {
						$("#alert_modal").modal("show");
						$("#modal_body").html("Quantity cannot be less than 0!");
						$("#modal_title").html("Warning");
						$("#modal_footer").html("<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>");
				} else {
					$.post("<?= site_url('cart/addToCart'); ?>", {"quantity":quantity, "product_id":product_id},
						function(data) {
							console.log(data);
							$("#alert_modal").modal("show");
							$("#modal_body").html(data.message);
							$("#modal_title").html(data.title);
							if (data.success == true) {
								var footer = "<a href='<?= site_url('user/your_cart');?>'>";
								footer += "<button type='button' class='btn btn-success'>Checkout</button>";
								footer += "</a>";
								footer += "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>";
							} else {
								var footer = "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>";
							}
							$("#modal_footer").html(footer);
						}, 'json'
					)
				}
			}
		</script> 


		<!-- <script type="text/javascript">
			
 			function collapseNavbar(){
 				if($(".navbar").offset().top>50){
 					$(".fixed-top").addClass("top-nav-collapse");
 				}else{
 					$(".fixed-top").removeClass("top-nav-collapse");
 				}
 			}
 			$(window).scroll(collapseNavbar);
 			$(document).ready(collapseNavbar);			
 			$(function(){
 				$('a.scroll').bind('click',function(event){
 					var $anchor=$(this);
 					$('html, body').stop().animate({
 						scrollTop:$($anchor.attr('href')).offset().top},1500,'easeInOutExpo');
 					event.preventDefault();
 				});});
 			$('.navbar-collapse ul li a').click(function(){
 				$(".navbar-collapse").collapse('hide');});
 			var map=null;
 			google.maps.event.addDomListener(window,'load',init);
 			google.maps.event.addDomListener(window,'resize',function(){
 				map.setCenter(new google.maps.LatLng(40.6700,-73.9400));});
 			function init(){
 				var mapOptions={
 					zoom:15,center:new google.maps.LatLng(40.6700,-73.9400),disableDefaultUI:true,scrollwheel:false,draggable:false,styles:[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]}]};var mapElement=document.getElementById('map');map=new google.maps.Map(mapElement,mapOptions);var image='img/map-marker.png';var myLatLng=new google.maps.LatLng(40.6700,-73.9400);var beachMarker=new google.maps.Marker({position:myLatLng,map:map,icon:image});}

		</script> -->

		<!-- // <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

	</head>

<body>
	<div id="colorlib-page">
		<!-- Navigation -->
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo">
				<a href="<?= site_url('shop'); ?>">
					<img src="<?= base_url('style/assets/images/icon.png'); ?>" width="130" height="100">	
				</a>
			</h1>
			

			<nav id="colorlib-main-menu" role="navigation" >
				<!-- <div class="container"> -->
					<!-- <a class="navbar-brand" href="<?= site_url('shop'); ?>">PT PDS</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button> -->
					<!-- <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="navbarResponsive"> -->
						<ul>
							<li class="colorlib-active <?= $home; ?>">
								<a href="<?= site_url('shop'); ?>"><b>Beranda</b>
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="<?= $about; ?>">
								<a href="<?= site_url('shop/about');?>"><b>Tentang</b></a>
							</li>
							<li class="<?= $contact; ?>">
								<a href="<?= site_url('shop/contact');?>"><b>Kontak</b></a>
							</li>
							<li>
								<?php 	if ($this->session->userdata('usertype') == "admin") : ?>
									<li><a href="<?php echo base_url()?>index.php/admin"><b>Dashboard Admin</b></a></li>
									<li><a style="margin-left:5px" data-toggle="modal" data-target="#logout"><!-- <button class="btn btn-danger py-1"></button> -->Logout</a></li>
								<?php elseif ($this->session->userdata('usertype') == "user") : ?>
									<li><a href="<?php echo base_url()?>index.php/user/dashboard"><b>Profil</b></a></li>
									<li><a style="margin-left:5px" data-toggle="modal" data-target="#logout"><!-- <button class="btn btn-danger py-1"></button> -->Logout</a></li>
								<?php else : ?>
									<a href="<?php echo base_url()?>index.php/Account"><!-- <button class="btn btn-primary py-1"></button> -->Login</a>
								<?php endif; ?>
							</li>
						</ul>
					<!-- </div> -->
				<!-- </div> -->
			</nav>

			<div class="colorlib-footer">
				<p><small>
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved. <br>PT Pelindo Daya Sejahtera 
				 </small>	
			</p>
				<ul>
					<li><a href="https://www.facebook.com/pelindodayasejahtera/"><i style="color:#1B4B73;" class="icon-facebook2"></i></a></li>
					<li><a href="#"><i style="color:#1B4B73;" class="icon-twitter2"></i></a></li>
					<li><a href="https://www.instagram.com/pelindodayasejahtera/"><i style="color:#1B4B73;" class="icon-instagram"></i></a></li>
					<li><a href="#"><i style="color:#1B4B73;" class="icon-linkedin2"></i></a></li>
				</ul>
			</div>
		</aside>

		<!-- <header class="intro">
	        <div class="intro-body">
	            <div class="container">
                    <h1 class="brand-heading">maintenance</h1>
                    <a href="#content" class="btn btn-circle page-scroll">
                    	<i class="fa fa-angle-double-down animated"></i>
                	</a>
	            </div>
	        </div>
	    </header>  -->

		<div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(<?= base_url('style/assets/images/headline/bg-11.jpg')?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1 style="color:white;">Service and Solution</h1>
						   					<h2 style="color:white;">Serve with Safety, Fast and Quality Excellent</h2>
												<p><a class="btn btn-primary btn-learn">View Details <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(<?= base_url('style/assets/images/headline/bg-22.jpg')?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1 style="color:white;">Service and Solution</h1>
												<h2 style="color:white;">Serve with Safety, Fast and Quality Excellent</h2>
												<p><a class="btn btn-primary btn-learn">View Details <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(<?= base_url('style/assets/images/headline/bg-33.jpg')?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1 style="color:white;">Service and Solution</h1>
												<h2 style="color:white;">Serve with Safety, Fast and Quality Excellent</h2>
												<p><a class="btn btn-primary btn-learn">View Details <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>

</body>