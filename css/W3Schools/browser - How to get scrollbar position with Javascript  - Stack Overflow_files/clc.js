(function(a,b,c){"use strict";function d(a){const d=I(location.hash.substr(1)),e=/^ads:/;for(let c in b(K).forEach((a)=>{e.test(a)||(K[`ads:${a}`]=K[a],delete K[a])}),d)0===c.indexOf("ads:")&&(K[c]=d[c]);c(a,K)}function e(a,b,c){return new Promise((d,e)=>{function f(){const h=Date.now()-g;c()?d(h):h>=b?e(h):setTimeout(f,a)}if(c())return void d(0);const g=Date.now();setTimeout(f,a)})}function f(){const a=document.getElementById("clc-abd");return!!a&&0===a.offsetHeight}function g(){const a=document.getElementById("clc-abd");!a||a.parentElement.removeChild(a)}function h(){if(P){const a={ab:f()?"1":"0"};g();const b=document.querySelector("#dfp-tsb, #clc-tsb");!b||b.setAttribute("data-clc-stalled","true"),new Image().src=`https://${Q}/timeout.gif?${J(a)}`}}function i(a,b=!0,c=null){return new Promise((b)=>{const c=document.createElement("script");c.src=a,c.async=!0,c.addEventListener("load",()=>b(c)),document.body.appendChild(c)})}function j(a){let b="stylesheet";/\.less$/.test(a)&&(b+="/less",U&&setTimeout(k,10));const c=document.createElement("link");c.rel=b,c.href=a,c.type="text/css",document.head.appendChild(c),U||(window.less=window.less||{},window.less.sheets=window.less.sheets||[],window.less.sheets.push(c),"function"==typeof window.less.refresh&&window.less.refresh())}function k(){U&&(window.less={env:"development",relativeUrls:!0},i("/Content/less.js"))}function l(){const a=[].slice.call($()),c=b(Y).map((a)=>document.getElementById(a)).filter((a)=>!!a&&"none"!==getComputedStyle(a).display);return[...a,...c]}function m(){let a=l().map((a)=>({element:a,zone:n(a),prefilled:o(a)}));f()&&(a=a.filter((a)=>1!==a.zone&&2!==a.zone),S("#dfp-tlb, #dfp-mlb"));const b=[{zones:a}],d=a.filter((a)=>8===a.zone||16===a.zone).every((a)=>!a.prefilled);if(d){const d={zones:a.map((a)=>{switch(a.zone){case 8:return c({},a,{zone:0});case 16:return c({},a,{zone:4});default:return a;}})};b.push(d)}return b}function n(a){const b=a.getAttribute("id");return b in Y?Y[b]():b in Z?Z[b]:0}function o(a){return a.hasAttribute("data-clc-prefilled")}function p(a){return a.reduce((a,b)=>b.prefilled?a|b.zone:a,0)}function q(a){if(document.getElementById("hireme")){const b=m(),c=aa(b),e=ba(b);if(c!==e.toString()){X(b);const f={};window.clc_request&&(f.omni=window.clc_request),f.zc=c,f.pf=e,f.lw=a,d(f),da("markupStart");const g=J(f);return`${L}?${g}`}}}function r(a=0){const b=q(a);da("markupDuration"),i(b)}async function s(){const a=document.getElementById("dfp-tsb");return await e(20,M,()=>f()?(t(),!0):!!a.hasAttribute("data-clc-ready"))}function t(){const a=window.googletag;a&&"function"==typeof a.destroySlots&&a.destroySlots()}async function u(a,b){const c="string"==typeof b?b:ga(b),d=await fetch(a,{method:"POST",credentials:"include",mode:"cors",body:c});if(d.ok)return await d.json();throw new ha(d.status,(await d.text()))}async function v(a,b,c){if(-1===c.className.indexOf("error"))try{const b=c.previousElementSibling;if(!b)return;ka(c.querySelector(".clc-tooltip")),la(c);const d=await u(a);la(c,!1),ka(c),x(b,d)}catch(a){la(c,!1),c.classList.add("error"),c.title=R}}async function w(a,b,c){let d=c;for(;!d.classList.contains("clc-dismissed-container");)d=d.parentNode;if(d){const b=d.querySelector(".clc-dismissed-overlay");try{const c=d.nextElementSibling,e=c.querySelector(".clc-tooltip"),f=b.querySelector(".clc-spinner");if(f.classList.contains("error"))return;ka(f,!1),await u(a),ka(f),await y(b),ka(c,!1),ka(e,!1)}catch(a){b.classList.add("error"),b.innerHTML=`<div>${R}</div>`}}}function x(a,b){a.classList.add("clc-dismissed-container");const c=document.createElement("div");c.className="clc-dismissed-overlay clc-hidden",c.innerHTML=b.content,a.appendChild(c),setTimeout(()=>{ka(c,!1)},20)}function y(a){return new Promise((b)=>{a.addEventListener("transitionend",function c(){a.removeEventListener("transitionend",c),a.parentNode.removeChild(a),b()},!1),ka(a)})}function z(a,b){if("undefined"!=typeof StackExchange&&"undefined"!=typeof StackExchange.ga&&"function"==typeof StackExchange.ga.track)return void StackExchange.ga.track("Jobs Traffic",a,b,{nonInteraction:!1})}function A(a){const c=W();if(null!==c){if(a.disp&&0<a.disp.length){const b=a.disp.map((a)=>c[a]).filter((a)=>!!a).map((a)=>a.element.id);0<b.length&&window.clc.loadDisplayAds(b)}b(c).forEach((b)=>{const d=parseInt(b,10),e=c[d];if(!e.prefilled){const b=a.zones[e.zone];b&&B(e.zone,e.element,b,a.analytics)}}),T(document,"clc:ads-loaded")}}function B(a,b,c,d){if(c.cn){H(b,c),b.addEventListener("mousedown",C),b.addEventListener("click",D),d&&b.addEventListener("click",E);const a=getComputedStyle(b);"none"===a.display&&(b.style.display="block")}else;}function C(a){const b=F(a);if(null!=b){const a=G(b);a.click&&!a["meta-target"]&&(b.setAttribute("data-clc-target-url",b.href),b.href=a.click)}}function D(a){const b=F(a);if(null!=b){const c=G(b);if(c.click&&c["meta-target"]){a.preventDefault();const d=parseInt(c["meta-target"],10);if(!(0<=d)){const e=ia[d];"function"!=typeof e||e(c.click,a,b)}}}}function E(a){const b=F(a);if(null!=b){const c=b.getAttribute("data-clc-target-url");if(c){const b=a.currentTarget;b.classList.contains("clc-jobs-multi")?z("Ad Paid | Jobs",c):b.classList.contains("clc-cp-container")&&z("Ad Paid | Company",c)}}}function F(a){let b=a.target;for(;"A"!==b.tagName&&b!==a.currentTarget;)b=b.parentNode;return b===a.currentTarget?null:b}function G(a){return[].filter.call(a.attributes,(b)=>/^data-clc-/.test(b.name)).reduce((a,b)=>(a[b.name.replace(/^data-clc-/,"")]=b.value,a),{})}function H(a,{cl:b,cn:c}){b&&0<b.length&&b.forEach((b)=>a.classList.add(b)),a.style.minHeight=null;const d=ea("markupStart");a.innerHTML=c.replace("&md=0",`&md=${d||0}`)}b=b&&b.hasOwnProperty("default")?b["default"]:b,c=c&&c.hasOwnProperty("default")?c["default"]:c;const I=(a,b)=>a.split(/&/g).filter((a)=>""!==a).reduce((a,b)=>{const c=b.split("=");return a[decodeURIComponent(c[0])]=decodeURIComponent(c[1]),a},b||{}),J=(a)=>b(a).map((b)=>[encodeURIComponent(b),encodeURIComponent(a[b])]).filter((b)=>!!b[1]).map((b)=>`${b[0]}=${b[1]}`).join("&"),K=window.clc.overrides||{},{u:L,kt:M,wa:N,style:O,tto:P,h:Q}=a.options,R="Oops! Something went wrong. Don't worry, our best people are on it!",S=(a)=>{for(const b of document.querySelectorAll(a))b.style.display="none"},T=(a,b)=>{const c=document.createEvent("Event");c.initEvent(b,!0,!1),a.dispatchEvent(c)};let U=!window.less,V=null;const W=()=>V,X=(a)=>{V=a.reduce((a,b)=>(b.zones.forEach((b)=>{0<b.zone&&(a[b.zone]=b)}),a),{})},Y={"clc-tlb":()=>1,"clc-mlb":()=>2,"clc-tsb":()=>8,hireme:()=>-1===location.hostname.indexOf("codinghorror")?16:128},Z={"dfp-tlb":1,"dfp-mlb":2,"dfp-tsb":8,"dfp-isb":8},$=()=>document.querySelectorAll("[id^=dfp].everyonelovesstackoverflow"),_=()=>0===$().length,aa=(a)=>a.map(({zones:a})=>a.reduce((a,b)=>a|b.zone,0)).filter((a)=>0!==a).join(";"),ba=(a)=>a.reduce((a,b)=>a|p(b.zones),0),ca={},da=(a)=>{const b=Date.now();return ca[a]=()=>Date.now()-b},ea=(a)=>{const b=ca[a];return!b?0:b()},fa=(a,b)=>`${encodeURIComponent(a)}=${encodeURIComponent(b)}`,ga=(a)=>!a?void 0:b(a).map((b)=>fa(b,a[b])).join("&");class ha extends Error{constructor(a,b){super("Error received from server"),this.statusCode=a,this.responseBody=b}}const ia={[-1]:v,[-2]:w,[-3]:v,[-4]:w},ja=(a)=>(b,c=!0)=>{b.classList[c?"add":"remove"](a)},ka=ja("clc-hidden"),la=ja("spinner");a.cmd=clc.cmd||[],setTimeout(()=>{const b=window.clc.cmd||[];b.forEach((a)=>a(window.clc));let c=a.cmd.length;a.cmd={push(a){return a(clc),++c}}},0),a.overrides=K,a.load=async function(){if(j(O),_()||!N)return void r();try{const a=await s();r(a)}catch(a){h(a)}},a.place=A,a.addStyle=j,a.addScript=i,a.addScripts=function(a){return Promise.all(a.map((a)=>i(a)))}})(this.clc=this.clc||{},Object.keys,Object.assign);