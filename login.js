function Account() {
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    if (username.value == "user" && password.value == "123") {
        alert("Login successful");
        window.location.replace("index.html");
    } else alert("Login failed");
}
