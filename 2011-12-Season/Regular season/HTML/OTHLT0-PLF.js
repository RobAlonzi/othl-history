function STHS_JS_ToggleTeam(ToggleDiv) {var ele = document.getElementById(ToggleDiv);
if(ele.style.display == "block") {ele.style.display = "none";} else {ele.style.display = "block";}}
function STHS_JS_OpenAll() {var ele = document.getElementsByTagName("div");
for(var x=0; x<ele.length; x++) {name = ele[x].getAttribute("id"); if (name.substr(0,13) == 'STHS_JS_Team_') {ele[x].style.display = "block";}}}
function STHS_JS_CloseAll() {var ele = document.getElementsByTagName("div");
for(var x=0; x<ele.length; x++) {name = ele[x].getAttribute("id");if (name.substr(0,13) == 'STHS_JS_Team_') {ele[x].style.display = "none";}}}
function STHS_JS_ToggleAll() {var ele = document.getElementsByTagName("div");
for(var x=0; x<ele.length; x++) {name = ele[x].getAttribute("id");if (name.substr(0,13) == 'STHS_JS_Team_') {STHS_JS_ToggleTeam(name);}}}
