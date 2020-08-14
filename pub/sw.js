!function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="/",r(r.s=0)}({"../../../../../vendor/scandipwa/source/src/sw/handler/CacheFirstOneYear.js":function(e,t,r){"use strict";r.r(t),r.d(t,"cacheFirst",(function(){return n}));const n=e=>new workbox.strategies.CacheFirst({cacheName:CACHE_NAME,plugins:[new workbox.expiration.Plugin({maxAgeSeconds:e})]});t.default=e=>n(263e4).handle(e)},"../../../../../vendor/scandipwa/source/src/sw/handler/StaleWhileRevalidateHandler.js":function(e,t,r){"use strict";r.r(t),r.d(t,"RESPONSE_OK",(function(){return c}));var n=r("./node_modules/@babel/runtime/regenerator/index.js"),o=r.n(n),i=r("./node_modules/@babel/runtime/helpers/asyncToGenerator.js"),a=r.n(i);const c=200,s=(e,t)=>fetch(e).then(r=>{const n=r.status===c,o=r.clone();return n&&t.put(e.url,o),r}),u=(e,t)=>{const r=e.headers.get("Application-Model");return s(e,t).then(e=>{e.clone().json().then(e=>{const t=new BroadcastChannel(r);t.postMessage({payload:e,type:r}),t.close()},e=>console.log(e))},e=>console.log(e)),!0},l=function(){var e=a()(o.a.mark((function e(t){var r,n,i,a;return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.request,n=t.request,e.next=3,caches.open(self.CACHE_NAME);case 3:return i=e.sent,e.next=6,i.match(n);case 6:if(!(a=e.sent)){e.next=10;break}return u(r,i),e.abrupt("return",a);case 10:return e.abrupt("return",s(r,i));case 11:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}();t.default=e=>{const t=e.event;t.respondWith(l(t))}},"../../../../../vendor/scandipwa/source/src/sw/index.js":function(e,t,r){"use strict";r.r(t),r.d(t,"respondOffline",(function(){return l})),r.d(t,"onFetch",(function(){return f}));var n=r("./node_modules/@babel/runtime/regenerator/index.js"),o=r.n(n),i=r("./node_modules/@babel/runtime/helpers/asyncToGenerator.js"),a=r.n(i),c=r("../../../../../vendor/scandipwa/source/src/sw/handler/CacheFirstOneYear.js"),s=r("../../../../../vendor/scandipwa/source/src/sw/handler/StaleWhileRevalidateHandler.js"),u=r("../../../../../vendor/scandipwa/source/src/sw/util/Workbox.js");self.__precacheManifest&&(self.__precacheManifest.push({revision:(new Date).getTime(),url:"/"}),u.default.precaching.precacheAndRoute(self.__precacheManifest));const l=function(){var e=a()(o.a.mark((function e(t){var r,n,i;return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,caches.open(self.CACHE_NAME);case 2:return r=e.sent,e.next=5,r.match("/");case 5:if(n=e.sent,navigator.onLine){e.next=8;break}return e.abrupt("return",n);case 8:if(n){e.next=13;break}return e.next=11,fetch("/");case 11:(i=e.sent).status===s.RESPONSE_OK&&r.put("/",i.clone());case 13:return e.abrupt("return",fetch(t.request));case 14:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),f=e=>{const t=e.request,r=t.url,n=t.destination,o=new URL(r).hostname;"document"===n&&o===self.location.hostname&&e.respondWith(l(e))};self.addEventListener("fetch",f),self.addEventListener("install",()=>{self.skipWaiting()});self.addEventListener("activate",e=>{e.waitUntil(Promise.all([caches.keys().then(e=>Promise.all(e.map(e=>caches.delete(e)))),new Promise(e=>{indexedDB||e();const t=indexedDB.deleteDatabase(self.CACHE_NAME);t.onerror=()=>e(),t.onsuccess=()=>e()})]))}),self.CACHE_NAME="app-runtime-static",u.default.routing.registerRoute(new RegExp(/\/graphql/),s.default),u.default.routing.registerRoute(new RegExp(/(\/assets|\.css|\.js)/),c.default)},"../../../../../vendor/scandipwa/source/src/sw/util/Workbox.js":function(e,t,r){"use strict";r.r(t),"undefined"==typeof workbox&&importScripts("https://storage.googleapis.com/workbox-cdn/releases/3.6.3/workbox-sw.js"),workbox?(workbox.loadModule("workbox-core"),workbox.loadModule("workbox-routing"),workbox.loadModule("workbox-strategies"),workbox.loadModule("workbox-cache-expiration"),console.log("Yay! Workbox is loaded 🎉")):console.log("Boo! Workbox didn't load 😬"),t.default=workbox},"./node_modules/@babel/runtime/helpers/asyncToGenerator.js":function(e,t){function r(e,t,r,n,o,i,a){try{var c=e[i](a),s=c.value}catch(e){return void r(e)}c.done?t(s):Promise.resolve(s).then(n,o)}e.exports=function(e){return function(){var t=this,n=arguments;return new Promise((function(o,i){var a=e.apply(t,n);function c(e){r(a,o,i,c,s,"next",e)}function s(e){r(a,o,i,c,s,"throw",e)}c(void 0)}))}}},"./node_modules/@babel/runtime/regenerator/index.js":function(e,t,r){e.exports=r("./node_modules/regenerator-runtime/runtime.js")},"./node_modules/regenerator-runtime/runtime.js":function(e,t,r){var n=function(e){"use strict";var t=Object.prototype,r=t.hasOwnProperty,n="function"==typeof Symbol?Symbol:{},o=n.iterator||"@@iterator",i=n.asyncIterator||"@@asyncIterator",a=n.toStringTag||"@@toStringTag";function c(e,t,r,n){var o=t&&t.prototype instanceof l?t:l,i=Object.create(o.prototype),a=new _(n||[]);return i._invoke=function(e,t,r){var n="suspendedStart";return function(o,i){if("executing"===n)throw new Error("Generator is already running");if("completed"===n){if("throw"===o)throw i;return j()}for(r.method=o,r.arg=i;;){var a=r.delegate;if(a){var c=w(a,r);if(c){if(c===u)continue;return c}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if("suspendedStart"===n)throw n="completed",r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n="executing";var l=s(e,t,r);if("normal"===l.type){if(n=r.done?"completed":"suspendedYield",l.arg===u)continue;return{value:l.arg,done:r.done}}"throw"===l.type&&(n="completed",r.method="throw",r.arg=l.arg)}}}(e,r,a),i}function s(e,t,r){try{return{type:"normal",arg:e.call(t,r)}}catch(e){return{type:"throw",arg:e}}}e.wrap=c;var u={};function l(){}function f(){}function d(){}var h={};h[o]=function(){return this};var p=Object.getPrototypeOf,v=p&&p(p(E([])));v&&v!==t&&r.call(v,o)&&(h=v);var y=d.prototype=l.prototype=Object.create(h);function g(e){["next","throw","return"].forEach((function(t){e[t]=function(e){return this._invoke(t,e)}}))}function m(e,t){var n;this._invoke=function(o,i){function a(){return new t((function(n,a){!function n(o,i,a,c){var u=s(e[o],e,i);if("throw"!==u.type){var l=u.arg,f=l.value;return f&&"object"==typeof f&&r.call(f,"__await")?t.resolve(f.__await).then((function(e){n("next",e,a,c)}),(function(e){n("throw",e,a,c)})):t.resolve(f).then((function(e){l.value=e,a(l)}),(function(e){return n("throw",e,a,c)}))}c(u.arg)}(o,i,n,a)}))}return n=n?n.then(a,a):a()}}function w(e,t){var r=e.iterator[t.method];if(void 0===r){if(t.delegate=null,"throw"===t.method){if(e.iterator.return&&(t.method="return",t.arg=void 0,w(e,t),"throw"===t.method))return u;t.method="throw",t.arg=new TypeError("The iterator does not provide a 'throw' method")}return u}var n=s(r,e.iterator,t.arg);if("throw"===n.type)return t.method="throw",t.arg=n.arg,t.delegate=null,u;var o=n.arg;return o?o.done?(t[e.resultName]=o.value,t.next=e.nextLoc,"return"!==t.method&&(t.method="next",t.arg=void 0),t.delegate=null,u):o:(t.method="throw",t.arg=new TypeError("iterator result is not an object"),t.delegate=null,u)}function x(e){var t={tryLoc:e[0]};1 in e&&(t.catchLoc=e[1]),2 in e&&(t.finallyLoc=e[2],t.afterLoc=e[3]),this.tryEntries.push(t)}function b(e){var t=e.completion||{};t.type="normal",delete t.arg,e.completion=t}function _(e){this.tryEntries=[{tryLoc:"root"}],e.forEach(x,this),this.reset(!0)}function E(e){if(e){var t=e[o];if(t)return t.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length)){var n=-1,i=function t(){for(;++n<e.length;)if(r.call(e,n))return t.value=e[n],t.done=!1,t;return t.value=void 0,t.done=!0,t};return i.next=i}}return{next:j}}function j(){return{value:void 0,done:!0}}return f.prototype=y.constructor=d,d.constructor=f,d[a]=f.displayName="GeneratorFunction",e.isGeneratorFunction=function(e){var t="function"==typeof e&&e.constructor;return!!t&&(t===f||"GeneratorFunction"===(t.displayName||t.name))},e.mark=function(e){return Object.setPrototypeOf?Object.setPrototypeOf(e,d):(e.__proto__=d,a in e||(e[a]="GeneratorFunction")),e.prototype=Object.create(y),e},e.awrap=function(e){return{__await:e}},g(m.prototype),m.prototype[i]=function(){return this},e.AsyncIterator=m,e.async=function(t,r,n,o,i){void 0===i&&(i=Promise);var a=new m(c(t,r,n,o),i);return e.isGeneratorFunction(r)?a:a.next().then((function(e){return e.done?e.value:a.next()}))},g(y),y[a]="Generator",y[o]=function(){return this},y.toString=function(){return"[object Generator]"},e.keys=function(e){var t=[];for(var r in e)t.push(r);return t.reverse(),function r(){for(;t.length;){var n=t.pop();if(n in e)return r.value=n,r.done=!1,r}return r.done=!0,r}},e.values=E,_.prototype={constructor:_,reset:function(e){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(b),!e)for(var t in this)"t"===t.charAt(0)&&r.call(this,t)&&!isNaN(+t.slice(1))&&(this[t]=void 0)},stop:function(){this.done=!0;var e=this.tryEntries[0].completion;if("throw"===e.type)throw e.arg;return this.rval},dispatchException:function(e){if(this.done)throw e;var t=this;function n(r,n){return a.type="throw",a.arg=e,t.next=r,n&&(t.method="next",t.arg=void 0),!!n}for(var o=this.tryEntries.length-1;o>=0;--o){var i=this.tryEntries[o],a=i.completion;if("root"===i.tryLoc)return n("end");if(i.tryLoc<=this.prev){var c=r.call(i,"catchLoc"),s=r.call(i,"finallyLoc");if(c&&s){if(this.prev<i.catchLoc)return n(i.catchLoc,!0);if(this.prev<i.finallyLoc)return n(i.finallyLoc)}else if(c){if(this.prev<i.catchLoc)return n(i.catchLoc,!0)}else{if(!s)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return n(i.finallyLoc)}}}},abrupt:function(e,t){for(var n=this.tryEntries.length-1;n>=0;--n){var o=this.tryEntries[n];if(o.tryLoc<=this.prev&&r.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===e||"continue"===e)&&i.tryLoc<=t&&t<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=e,a.arg=t,i?(this.method="next",this.next=i.finallyLoc,u):this.complete(a)},complete:function(e,t){if("throw"===e.type)throw e.arg;return"break"===e.type||"continue"===e.type?this.next=e.arg:"return"===e.type?(this.rval=this.arg=e.arg,this.method="return",this.next="end"):"normal"===e.type&&t&&(this.next=t),u},finish:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.finallyLoc===e)return this.complete(r.completion,r.afterLoc),b(r),u}},catch:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.tryLoc===e){var n=r.completion;if("throw"===n.type){var o=n.arg;b(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(e,t,r){return this.delegate={iterator:E(e),resultName:t,nextLoc:r},"next"===this.method&&(this.arg=void 0),u}},e}(e.exports);try{regeneratorRuntime=n}catch(e){Function("r","regeneratorRuntime = r")(n)}},0:function(e,t,r){e.exports=r("../../../../../vendor/scandipwa/source/src/sw/index.js")}});
//# sourceMappingURL=sw.js.map