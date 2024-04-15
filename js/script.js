const body = document.querySelector('body'),
sidebar = body.querySelector('nav'),
toggle = body.querySelector(".toggle"),
searchBtn = body.querySelector(".search-box"),
modeSwitch = body.querySelector(".toggle-switch"),
modeText = body.querySelector(".mode-text");
logoutLink = document.getElementById('logout-link');
toggle.addEventListener("click" , () =>{
sidebar.classList.toggle("close");
})
searchBtn.addEventListener("click" , () =>{
sidebar.classList.remove("close");
})
modeSwitch.addEventListener("click" , () =>{
body.classList.toggle("dark");

if(body.classList.contains("dark")){
  modeText.innerText = "Light mode";
}else{
  modeText.innerText = "Dark mode";
  
}
});

logoutLink.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default form submission
  const confirmation = confirm("Are you sure you want to log out?");

  if (confirmation) {
    console.log("User confirmed logout. Redirecting...");
    window.location.href = "index.html";
  } else {
    console.log("User canceled logout.");
  }
});


$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});

