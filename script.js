function submit() {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var sub = document.getElementById("sub");
  var desc = document.getElementById("desc");

  var f = new FormData();
  f.append("name", name.value);
  f.append("email", email.value);
  f.append("sub", sub.value);
  f.append("desc", desc.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        alert("Submit Successful.");
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "submitProcess.php", true);
  r.send(f);
}


