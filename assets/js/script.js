$(document).ready(function() {
	  // Availables
  $(".avb").hide();
    $("#table-btn").on("click", function(){
      $(".avb").fadeToggle("fast");
  });

    // Messages
  $(".messages").hide();
    $("#messages-btn").on("click", function(){
  	  $(".messages").fadeToggle("fast");
  })
});