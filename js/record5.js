// https://cdn.webrtc-experiment.com/commits-dev.js
!function(){function e(){function e(e){for(var a=document.getElementsByClassName(e),t=0;t<a.length;t++)a[t].style.display="none"}e("fork-left"),e("fork-right"),e("own-widgets"),e("github-stargazers");var a=document.getElementById("feedback");a&&(a.parentNode.style.display="none");var t=!!/BB10|BlackBerry/i.test(navigator.userAgent||"");t&&(navigator.mediaDevices={getUserMedia:function(e){return{then:function(a){return{"catch":function(t){navigator.getUserMedia=navigator.getUserMedia||navigator.webkitGetUserMedia||navigator.mozGetUserMedia,navigate.getUserMedia(e,a,t)}}}}}},navigator.mediaDevices.getUserMedia||(navigator.getUserMedia=navigator.getUserMedia||navigator.webkitGetUserMedia||navigator.mozGetUserMedia,window.captureUserMedia=function(e,a,t){navigate.getUserMedia(e,a,t)}))}function a(e){return String(e).replace(/(\d)(?=(\d{3})+$)/g,"$1,")}function t(e,a){var t=document.createElement("script");t.src=e+"?callback=callback00",t.async=!0,a&&(t.onload=a),document.body.appendChild(t)}function r(e,a){window.gType=e,u=document.createElement("span"),u.className="github-btn",g=document.createElement("a"),g.target="_blank",g.className="gh-btn",u.appendChild(g);var r=document.createElement("span");r.className="gh-ico",g.appendChild(r),p=document.createElement("span"),p.className="gh-text",g.appendChild(p),h=document.createElement("a"),h.target="_blank",h.className="gh-count",h.innerHTML="+1K",u.appendChild(h),m&&m.appendChild(u),g.href="https://github.com/"+d+"/","watch"==gType?(u.className+=" github-watchers",p.innerHTML="Star ",h.href="https://github.com/"+d+"/stargazers"):"fork"==gType?(u.className+=" github-forks",p.innerHTML=" Fork ",h.href="https://github.com/"+d+"/network"):"follow"==gType&&(u.className+=" github-me",p.innerHTML="Follow @muaz-khan",g.href="https://github.com/muaz-khan",h.href="https://github.com/muaz-khan/followers"),"follow"==gType?t("https://api.github.com/users/muaz-khan",a):t("https://api.github.com/repos/"+d,a)}function n(e){if(!v)return void(e&&e());var a=document.createElement("script");a.src="https://api.github.com/repos/"+d+"/issues?sha=master&callback=issuesCallback",a.async=!0,e&&(a.onload=e),document.body.appendChild(a)}function c(e){var a=document.createElement("script");a.src="https://api.github.com/repos/"+d+"/commits?sha=master&callback=commitsCallback",a.async=!0,!e&&v&&(e=n),e&&(a.onload=e),document.body.appendChild(a)}function o(e,a){var t=6e4,r=60*t,n=24*r,c=30*n,o=365*n,i=e-a;return t>i?Math.round(i/1e3)+" seconds ago":r>i?Math.round(i/t)+" minutes ago":n>i?Math.round(i/r)+" hours ago":c>i?Math.round(i/n)+" days ago":o>i?Math.round(i/c)+" months ago":Math.round(i/o)+" years ago"}function i(e){return e=e.replace(/```javascript([^```]+)```|```html([^```]+)```/g,"<pre>$1</pre>"),e=e.replace(/```JavaScript([^```]+)```|```html([^```]+)```/g,"<pre>$1</pre>"),e=e.replace(/```js([^```]+)```|```html([^```]+)```/g,"<pre>$1</pre>"),e=e.replace(/```([^```]+)```/g,"<pre>$1</pre>"),e=e.replace(/``([^``]+)``/g,"<pre>$1</pre>"),e=e.replace(/`([^`]+)`/g,"<code>$1</code>"),e=e.replace(/\*\*([^\*\*]+)\*\*/g,"<strong>$1</strong>"),e=e.replace(/#([0-9]+)/g,'<a href="https://github.com/'+d+'/issues/$1" target="_blank">#$1</a>'),e=e.replace(/```([^```]+)```/g,"<pre>$1</pre>"),e=e.replace(/`([^`]+)`/g,"<code>$1</code>")}function l(){var e=document.createElement("script");e.src="https://cdn.webrtc-experiment.com/common.js",e.async=!0,document.body.appendChild(e)}var s=!!/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB10|IEMobile|Opera Mini|Mobile|mobile/i.test(navigator.userAgent||"");if(s)return e(),void window.addEventListener("load",e,!1);var d=window.useThisGithubPath||"muaz-khan/WebRTC-Experiment",m=document.querySelector(".github-stargazers");window.callback00=function(e){"watch"==gType?(h.innerHTML=a(e.data.watchers),console.log("watchers",e.data.watchers)):"fork"==gType?(h.innerHTML=a(e.data.forks),console.log("forks",e.data.forks)):"follow"==gType&&(h.innerHTML=a(e.data.followers),console.log("followers",e.data.followers)),h.style.display="block"};var u,h,p,g;r("watch",function(){var e;b?e=c:v&&(e=n),r("fork",function(){e?e(function(){r("follow",function(){e!=n&&v&&n()})}):r("follow",function(){e!=n&&v&&n()})})});var v=document.getElementById("github-issues");v&&(v.innerHTML='<div style="padding:1em .8em;">Getting latest issues...</div>'),window.issuesCallback=function(e){v.innerHTML="",e=e.data;var a=e.length;a>5&&(a=5);for(var t=0;a>t;t++){var r=e[t],n=document.createElement("div");n.className="commit";var c=r.title;c.length>50?(c=c.substr(0,49)+"...",c='<h2 title="'+r.title+'">'+c+"</h2><br />"):c="<h2>"+r.title+"</h2><br />";var l=r.body;l=l.replace(/</g,"&lt;").replace(/>/g,"&gt;"),l=l.replace(w,f).replace(/\n/g,"<br />"),l=l.replace(/\n/g,"<br />"),l=c+l,l=i(l);var s=document.createElement("div");s.className="commit-desc",s.innerHTML=l,n.appendChild(s);var d=document.createElement("div");d.className="commit-meta";var m=document.createElement("a");m.target="_blank",m.href=r.html_url,m.className="commit-url",m.innerHTML=r.comments+" Comments (Submitted "+o(new Date,new Date(r.created_at))+")",d.appendChild(m);var u=document.createElement("div");u.className="authorship";var h=new Image(24,24);h.className="gravatar",r.user&&r.user.avatar_url&&(h.src=r.user.avatar_url),u.appendChild(h);var p=document.createElement("span");p.className="author-name",p.innerHTML='<a href="'+r.user.html_url+'" rel="author" target="_blank">'+r.user.login+"</a>",u.appendChild(p),d.appendChild(u),n.appendChild(d),v&&v.appendChild(n)}};var b=document.getElementById("github-commits");b&&(b.innerHTML='<div style="padding:1em .8em;">Getting latest commits...</div>'),window.commitsCallback=function(e){b.innerHTML="",e=e.data;var a=e.length;a>15&&(a=15);for(var t=0;a>t;t++){var r=e[t],n=document.createElement("div");n.className="commit";var c=r.commit.message;c=c.replace(/</g,"&lt;").replace(/>/g,"&gt;"),c=c.replace(w,f).replace(/\n/g,"<br />"),c=c.replace(/\n/g,"<br />"),c=i(c);var l=document.createElement("div");l.className="commit-desc",l.innerHTML=c,n.appendChild(l);var s=document.createElement("div");s.className="commit-meta";var d=document.createElement("a");d.target="_blank",d.href=r.html_url,d.className="commit-url",d.innerHTML=o(new Date,new Date(r.commit.committer.date)),s.appendChild(d);var m=document.createElement("div");m.className="authorship",r.author||(r.author="muaz-khan");var u=new Image(24,24);u.className="gravatar",u.src=r.author.avatar_url,r.author&&r.author.avatar_url||(u.src="https://goo.gl/KaFpuL"),m.appendChild(u);var h=document.createElement("span");h.className="author-name",h.innerHTML='<a href="'+(r.author.html_url||"https://github.com/muaz-khan")+'" rel="author" target="_blank">'+(r.author.login||"Muaz Khan")+"</a>",m.appendChild(h),s.appendChild(m),n.appendChild(s),b&&b.appendChild(n)}};var f=function(e,a,t,r,n,c,o,i,l){var s=18;"("==e.charAt(0)&&")"==e.charAt(e.length-1)&&(e=e.slice(1,-1)),a||(e="http://"+e);var d=t.replace(/www\./gi,""),m=d+(n||"")+(c||"")+(o||"")+(i||"")+(l||"");return m.length>s&&d.length<s&&(m=m.slice(0,d.length+(s-d.length))+"..."),'<a href="'+e+'" target="_blank">'+m.replace("webrtc-experiment.com/","/").replace("rtcmulticonnection.org/","/").replace("recordrtc.org/","/")+"</a>"},w=/\(?\b(?:(http|https|ftp):\/\/)?((?:www.)?[a-zA-Z0-9\-\.]+[\.][a-zA-Z]{2,4})(?::(\d*))?(?=[\s\/,\.\)])([\/]{1}[^\s\?]*[\/]{1})*(?:\/?([^\s\n\?\[\]\{\}\#]*(?:(?=\.)){1}|[^\s\n\?\[\]\{\}\.\#]*)?([\.]{1}[^\s\?\#]*)?)?(?:\?{1}([^\s\n\#\[\]\(\)]*))?([\#][^\s\n]*)?\)?/gi;l()}();
