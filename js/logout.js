function Logout() {
  var xhr = new XMLHttpRequest();
  var url = "logout.php";
  var data = JSON.stringify({ "Logout": "Yes" });

  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          // Handle the response here
          console.log(xhr.responseText);
          window.location.href="index.php";
      }
  };

  xhr.send(data);
}