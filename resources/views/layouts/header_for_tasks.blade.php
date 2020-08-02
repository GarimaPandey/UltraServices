<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UltraServices</title>

        <!-- Fonts -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

    .bg {
                /* The image used */
                background-image: url("homepage.jpg");
            }

             .hp {
                /* The image used */
                background-image: url("homepage.jpg");
            }
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

	.img_section figure img {
  			transform: scale(1);
  			transition: .3s ease-in-out;
  			height: 300;
  			width: 200;  			
  		}
		.img_section figure:hover img {
			transform: scale(1.3);
		}
		h2.zoom {
    padding-bottom: 33px;
    padding-left: 25px;
}
.img_section2 figure img {
	width: 300px;
	height: auto;
	transition: .3s ease-in-out;

}
.img_section2:hover figure img{
	width: 350px;
}
.img_section3 figure img{
	margin-left: 30px;
	width: 300px;
	transition: .3s ease-in-out;
}
.img_section3:hover figure img{
	margin-left: 0;
	
}
.img_section4 figure img{
	transform:  scale(1);
	transition: .3s ease-in-out;
}
.img_section4:hover figure img{
	transform: rotate(10deg) scale(1);
	
}
.img_section5 figure img{
	filter: blur(3px);
	transition: .3s ease-in-out;
}
.img_section5:hover figure img{
	filter: blur(0);
	
}

.img_section6 figure img{
	filter: grayscale(0) blur(0);
	transition: .3s ease-in-out;
	height: 300;
	width: 200;
}
.img_section6:hover figure img{
	filter: blur(3px) grayscale(100%);
	
}


/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
    </head>