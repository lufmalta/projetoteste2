var c = document.getElementById("canvas");
	var ctx = c.getContext("2d");
	
	ctx.moveTo(70,230);
	ctx.lineTo(70,150); 

	ctx.moveTo(70,230);
	ctx.lineTo(130,230);

	ctx.moveTo(150,230);
	ctx.lineTo(150,150); 

	ctx.moveTo(150,230);
	ctx.lineTo(200,230);

	ctx.lineTo(200, 150);

	ctx.moveTo(220, 230);
	ctx.lineTo(220, 150);

	ctx.moveTo(250,150);
	ctx.lineTo(300, 150);

	ctx.lineTo(243,230);

	ctx.lineTo(303,230);

	ctx.stroke();