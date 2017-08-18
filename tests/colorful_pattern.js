function show_pattern(){
	var top_pos = 125;
	var left_pos = 500;
	var width = 500;
	var height = 500;
	var colors = ["red","blue","cyan","green","yellow","indigo","orange"];
	var the_body = document.getElementById("theBody");

	while (width > 50)
	{
		var this_div = document.createElement("div");
		var random_color = Math.random() * 7;
		random_color = Math.floor(random_color);
		this_div.style.top = top_pos + "px";
		this_div.style.left = left_pos + "px";
		this_div.style.width = width + "px";
		this_div.style.height = height + "px";
		this_div.style.background = colors[random_color];
		the_body.appendChild(this_div);
		top_pos += 10;
		left_pos += 10;
		width -= 20;
		height -= 20;
	}
}