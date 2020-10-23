<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Пасха!</title>
  </head>
  <body>
    <h1>Алгоритм Пасхи!</h1>
	<script>
		var date = new Date();
		var year = date.getFullYear();
		var paskha = 0;

		let a = (year % 19);
		let b = (year % 4);
		let c = (year % 7);
		let d = ((19*a + 15) % 30);
		let e = ((2*b + 4*c + 6*d + 6) % 7);
		let f = (d+e);
		if (f<=26 && date<=paskha){
			paskha = "April (4+f), year";
		}else if(f>26 && date<=paskha){
			paskha = "May (f-26), year";
		}if(f<=26 && date>paskha){
			paskha = "April (4+f), (year+1)";
		}else if(f>26 && date<=paskha){
			paskha = "May (f-26), (year+1)";
		}
		var target_date = new Date(paskha).getTime();
		console.log(paskha);
	</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
