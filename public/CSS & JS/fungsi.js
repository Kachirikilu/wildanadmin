$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 50);
}
 
function update() {
	$.getJSON("data.php", function(data) {
		$("home").empty();
		var no = 1;
		$.each(data.result, function() {
			$("home").append("<tr><td>"+(no++)+"</td><td>"+this['Judul']+"</td><td>"+this['Paragraf1']+"</td></tr>");
		});
	});
}