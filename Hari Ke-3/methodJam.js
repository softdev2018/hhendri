function printTime() {
  var d = new Date();
  var hours = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  var msecs = d.getMilliseconds();
  document.body.innerHTML = hours+":"+mins+":"+secs+":"+msecs;
}
setInterval(printTime, 1);
