function myFunction(element) {
  var copyText = document.getElementById(element);
  copyText.select(element);
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
