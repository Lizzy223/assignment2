// $(document).ready(function(){
// 	while(true){
// 		if ($("#name").hasClass("active")){

// 			$("#name").parents("div.mother").addClass("space2");
// 		}
// 		else {
// 			$("#name").parents("div.mother").removeClass("space2");
// 		}
// 	}
// });


$(".one").on("click", function() {
    $("p").hide();
});

$(".two").on("click", function() {
    $("p").show()

    // mousehover: function(){
    // 	$("p").css("background-color", "grey");
    // }
});

$(".container").on("click", function() {
    $("p").css("background-color", "red");
    $("p").fadeIn("slow");
});

$(document).ready(function() {
    $(".div").click(function() {
        $("p").slideToggle("slow");
    });
});