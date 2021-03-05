<?php require_once("header.php"); ?>

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

		<section>

			<div id="call-to-action">
				
				<div class="container">

					<div class="row text-center">

						<h2>Videos</h2>
						
					</div>

					<div class="row">
						<hr>
					</div>

					<div class="row"></div>

					<div class="row">
						
						<div class="player">
							<video src="mp4/highlights.mp4" poster="jpg/highlights.jpg" controls>

								<track kind="subtitles" labe="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default></track>

							</video>
						</div>


						<!-- <audio src="mp3/audio.mp3" controls style=display:none></audio> -->

					</div>

					<div class="row toggle-volume">

						<input type="range" min="0" max="1" step="0.01" name="" id="volume" value="1">

					</div>

					<div class="row">

						<button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>

					</div>

				</div>

			</div>

			<div id="news" class="container" style="top:0">
				
				<div class="row text-center">
					<h2>Latest News</h2>
				</div>


				<div class="row">
					<hr>
				</div>
			
				<div class="row thumbnails">					
					<div class="item" data-video="highlights">
						<div class="item-inner">
							<img src="jpg/highlights.jpg" alt="Notícia">
							<h3>HighLights</h3>								
						</div>
					</div>

					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
							<img src="jpg/Orlando_City_Foundation_2015.jpg" alt="Notícia">
							<h3>Orlando City Foundation 2015</h3>								
						</div>
					</div>

					<div class="item" data-video="highlights">
						<div class="item-inner">
							<img src="jpg/highlights.jpg" alt="Notícia">
							<h3>HighLights</h3>								
						</div>
					</div>

					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
							<img src="jpg/Orlando_City_Foundation_2015.jpg" alt="Notícia">
							<h3>Orlando City Foundation 2015</h3>								
						</div>

					</div>

					<div class="item" data-video="highlights">
						<div class="item-inner">
							<img src="jpg/highlights.jpg" alt="Notícia">
							<h3>HighLights</h3>								
						</div>
					</div>

					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
							<img src="jpg/Orlando_City_Foundation_2015.jpg" alt="Notícia">
							<h3>Orlando City Foundation 2015</h3>								
						</div>
					</div>
				</div>

			</div>

		</section>

<?php include_once("footer.php"); ?>		

<script src="lib/plyr/dist/plyr.js"></script>	

		<script>
			(function(d, p){
				var a = new XMLHttpRequest(),
					b = d.body;
				a.open("GET", p, true);
				a.send();
				a.onload = function(){
					var c = d.createElement("div");
					c.style.display = "none";
					c.innerHtml = a.responseText;
					b.insertBefore(c, b.childNodes[0]);
				}

			}) (document, "https://cdn.plyr.io/3.4.7/plyr.svg");			
		</script>

		<script>

			$(function(){

				$(".thumbnails .item").on("click", function(){

					console.log($(this).data('video'));
					$("video").attr({
						"src":"mp4/"+ $(this).data('video') + ".mp4",
						"poster":"jpg/" + $(this).data('video') + ".jpg"
					});
				});

				$("#volume").on("mousemove", function(){
					
					$("video")[0].volume = parseFloat($(this).val());
				});

				$("#btn-play-pause").on("click", function(){

					$(this).toggleClass("btn-danger btn-success");

					var video = $("video")[0];

					if($(this).hasClass("btn-success")){

						$(this).text("PLAY");
						video.pause();

					} else {
						$(this).text("PAUSE");
						video.play();
					}
				});

				plyr.setup(); //disparando player PLYR
			});
		</script>
