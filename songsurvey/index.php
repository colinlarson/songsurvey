<?php

function GUID()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }
    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}
?>

<!doctype html>
<html>
<head>
	<title>Hikikomori EP Preview</title>
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="description" content="Help me choose the song order for my EP" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="//rubaxa.github.io/Sortable/Sortable.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:700|Roboto" rel="stylesheet">
	
	<style>
@media screen {
	
		body {
			background: url('/images/webbg.jpg') repeat;
			background-size: cover;
			font-family: 'Roboto', sans-serif;
			font-size: 115%;
		}
		
		h1, h2, h3, h4, h5, h6 {
			font-family: 'Raleway', sans-serif;
		}
		
		#mainContent {
			padding: 25px;
			margin: 25px;
			background: rgba(255,255,255,0.5);
			border-radius: 25px;
		}
		
		#textWrap {
			padding: 1px 10px;
			margin: 0px;
			background: rgba(255,255,255,0.7);
			border-radius: 10px;
		}
	
		.listen, .rank {
			float: left;
			width: 50%;
			box-sizing: border-box;
		}
		
		.audio-item {
		}
		
		#sort {
			padding: 0;
			margin: 0;
			list-style: none;
			background: #ccc;
			border: 2px solid #666;
		}
		
		.sortLabel {
			font-size: 0.8em;
		}
		
		.sortedItem {
			margin: 0;
			padding: 25px 10px;
			background: #eee;
			border-bottom: 2px solid #666;
			cursor: pointer;
		}
		
		.sortedItem:last-of-type {
			border-bottom: 0;
		}
		
		.button {
			text-align: center;
		}
		
		.btn-big-red {
		  background-color: #C63702;
		  background-image: linear-gradient(167deg, rgba(255, 255, 255, 0.1) 50%, rgba(0, 0, 0, 0) 55%), linear-gradient(to bottom, rgba(255, 255, 255, 0.15), rgba(0, 0, 0, 0));
		  border-radius: 6px;
		  box-shadow: 0 0 0 1px #C63702 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 8px 0 0 #AD3002, 0 8px 0 1px rgba(0, 0, 0, 0.4), 0 8px 8px 1px rgba(0, 0, 0, 0.5);
		  color: #FFF;
		  display: inline-block;
		  font-family: "Lucida Grande", Arial, sans-serif;
		  font-size: 22px;
		  font-weight: bold;
		  height: 61px;
		  letter-spacing: -1px;
		  line-height: 61px;
		  margin: 30px 0 10px;
		  position: relative;
		  text-align: center;
		  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
		  text-decoration: none !important;
		  top: 0;
		  width: 186px;
		  -moz-transition: 0.15s;
		  -o-transition: 0.15s;
		  -webkit-transition: 0.15s;
		  transition: 0.15s;
		}
		.btn-big-red:hover, .btn-big-red:focus {
		  background-color: #D13902;
		  box-shadow: 0 0 0 1px #C63702 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 10px 0 0 #AD3002, 0 10px 0 1px rgba(0, 0, 0, 0.4), 0 10px 8px 1px rgba(0, 0, 0, 0.6);
		  top: -2px;
		}
		.btn-big-red:active {
		  box-shadow: 0 0 0 1px #AD3002 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 0 0 1px rgba(0, 0, 0, 0.4);
		  -moz-transform: translateY(10px);
		  -ms-transform: translateY(10px);
		  -webkit-transform: translateY(10px);
		  transform: translateY(10px);
		}

		label {
		  display: inline-block;
		  width: 90px;
		  font-size: 0.7em;
		}

		input, textarea {
		  font-size: 1em;
		  font-family: 'Roboto', sans-serif;
		  width: 100%;
		  box-sizing: border-box;
		  border: 1px solid #666;
		}

		input:focus, textarea:focus {
		  border-color: blue;
		}

		textarea {
		  vertical-align: top;
		  height: 5em;
		}

		
}	

@media screen and (max-width: 800px) {
		.listen, .rank {
			float: none;
			width: auto;
			box-sizing: border-box;
			display: block;
		}
}
		
		.clearfix:after {
		  content: "";
		  display: table;
		  clear: both;
		}
	</style>
</head>
<body>
	<div id="mainContent" class="clearfix">
		<div id="textWrap">
			<h1>Hikikomori EP Song Survey</h1>
			<p>Hey all, I just wanted to get a quick feel for which songs people are into more than others, as I've lost any and all sense of subjective value for these songs somewhere around the 500th listen of each.  You know how it is.</p>
			<p>Note: Not all the songs are on here, and some that are here are still a bit unfinished.  I'm just looking for general first impressions really to help me with track order, and hoping for some consistency with the highest ranked results in order to pick a single.</p>
			<p>I also wanted to test my web skills by making this page: the songs appear in random order with each refresh, therefore helping eliminate order of presentation bias among the results.  You simply listen to the songs using the players on the left, then drag and drop the ranking list until you're happy with the order.  Once you're ready to submit just click the Submit Rankings button.</p>
			<p>If this is something you'd be interested in using for your own benefit, let me know and I can post it on GitHub.  Also let me know if it seems broken in any way.  Thanks for all the help!!<br/>-Colin</p>
		</div>
		<div class="listen">
			<h2>Listen</h2>
			<?php
			$numbers = range(0, 4);
			$songs = array("bye-june","im-yours","invisible-way","loser-talk","pull-the-peg");
			$songTitles = array("Bye June","I'm Yours","Invisible Way","Loser Talk","Pull The Peg");
			shuffle($numbers);
			foreach ($numbers as $number) {
				echo '<div class="audio-item"><h3>' . $songTitles[$number] . '</h3><audio controls><source src="/music/' . $songs[$number] . '.mp3" type="audio/mpeg"/></audio></div>';
			}
			?>
		</div>
		<div class="rank">
			<h2>Rank</h2>
			<form action="/form.php" method="post" id="rank-form">
				<p class="sortLabel">Drag higher ranked songs higher.  Ranks go from 1 through 5 going top to bottom.</p>
				<ul id="sort">
					<?php
					foreach ($numbers as $number) {
						echo '<li class="sortedItem"><input type="hidden" value="' . $songs[$number] . '" name="' . $songs[$number] . '">' . $songTitles[$number] . '</li>';
					}
					?>
				</ul>	
				<p class="sortLabel">Drag lower ranked songs lower.</p>
				<div>
					<label for="notes">Notes:</label>
					<textarea id="notes" name="notes" placeholder="Wait! I've got something to say!"></textarea>
				</div>
				<div class="button">
				  <a id="testBtn" class="btn-big-red" onclick="submitList()" href="#">Submit Rankings</a>
				</div>
				<?php 
					$myGUID = GUID(); 
					echo '<input type="hidden" value="' . $myGUID . '" name="GUID" />';
				?>
			</form>
		</div>
	
		<script>
		Sortable.create(sort, {
		  group: 'sort',
		  animation: 100
		});
		  
		  function submitList() {
			// Fire yes/no alert to confirm submission
			if (confirm('Are you sure you want to submit these results?')) {
				
				// Get List Items, hopefully in order
				var list = document.getElementsByClassName("sortedItem");
				
				// Spit out the list items in order to ranking variables value0 through value4
				var count = 0;
				for (var item of list) {
					var input = document.createElement("input");
					input.setAttribute("type", "hidden");
					var nameValue = 'value' + count;
					input.setAttribute("name", nameValue);
					input.setAttribute("value", item.innerText);
					//append to form element that you want .
					document.getElementById("rank-form").appendChild(input);	
					console.log(item);
					count++;
				}

				// Assign everything to form syntax and post away
				document.getElementById("rank-form").submit();			
				
			} else {
				// Do nothing!
			}
			
		  };

		</script>

	</div>
</body>
</html>
