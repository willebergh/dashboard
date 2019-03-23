function openDropdown() {
  document.getElementById("nav_dropdown").style.display = "grid";
  document.getElementById("nav_button").setAttribute( "onClick", "closeDropdown();" );
}

function closeDropdown() {
  document.getElementById("nav_dropdown").style.display = "none";
  document.getElementById("nav_button").setAttribute( "onClick", "openDropdown();" );
}
