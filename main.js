window.onload = function () {
    fetch("get_events.php")
      .then((res) => res.json())
      .then((data) => {
        let output = "<ul>";
        data.forEach((event) => {
          output += `<li>ID: ${event.id} - ${event.name} on ${event.date} at ${event.location}</li>`;
        });
        output += "</ul>";
        document.getElementById("events").innerHTML = output;
      });
  
    document.getElementById("registerForm").addEventListener("submit", function (e) {
      e.preventDefault();
      const formData = new FormData(this);
  
      fetch("register.php", {
        method: "POST",
        body: formData,
      })
        .then((res) => res.text())
        .then((msg) => alert(msg));
    });
  };
  