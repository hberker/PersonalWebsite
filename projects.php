<?php
/* TODO: finish, and reformat this page */

	// This could also be manual, but only if you are a masochist
	// name, id, language, github_url, content
	function make_project($name, $id, $lang, $url, $content)
	{
		echo<<<html
<button class="projBtn" onclick="toggleNav('$id')"><h3>$name</h3></button>
<div id="$id" class="hidden">
	<div class="overlay" onclick="toggleNav('$id');"></div>
	<div class="modal">
		<div class="modal-header $lang">
			<a class="right" onclick="toggleNav('$id');">&times;</a>
			<strong>$name</strong>
		</div>
		<div class="text center wordy">
			$content
		</div>
		<div class="modal-header $lang" onclick="toggleNav('$id');">
			<a href ="https://github.com/hberker/$url"><img style="width: 3em" src="IMG/GitHub_Logo_White.png""></a>
		</div>
	</div>
</div>
html;
	}
?>
<div class="text center wordy">
	<h2>Projects</h2>
	<p>
		Ever since I started programming I have worked on various projects in my free time. 
		All of these projects stem from my interests in different computer science topics like machine learning, web scraping, data manipulation, and game development. Many 
		of my projects required me to first learn the languages' syntax before I could begin coding. 
	</p>
	<p>
		The complexity of these projects ranges from simple games to advanced machine learning algorithms.
		Some projects took weeks to code and required me to spend hours to overcome problems. Others only took a couple of days. Usually, these quicker projects consisted of me learning a specific language through a project like Snake or Minesweepers. 
	</p>
	<p>
		To find out more about a project or to even try them yourself just click on 
		a project name underneath and it will show you the description of the project. To check it 
		out on GitHub just click on the "GitHub" logo and it will direct you to the project on
		the site.
	</p>
	<p>
		Feel free to check out these projects and try them yourself. 
	</p>
</div>
<div class='center lang cpp'>
<h2>C++</h2>
<div class="projBox">
	<?php
		/* Small Snake */
		$content =<<<html
<p>
Small snake was coded in C++ with one mission: to make the most
confusing and unreadable code possible. 
</p>
<p>
I started this project first by actually coding the game, and
once that was finished I began slowly find portions that could
be shorted including variables. My goal was for in the end, the purpose of the code to be almost unrecognizable.
</p>
<p>
The following is an image from the game in action. To check out the
actual code check out my GitHub.
</p>
<img class="imgcenter"  src="IMG/snakePic.png">
html;

		make_project("Small Snake", "SmallSnake", "cpp", "Small-Snake", $content);
		
		$content =<<<html
<p>
After watching a couple of videos on the impressive power of ray tracing
I wanted to see if I could create my own. 
</p>
<p>
This project served to be one of the hardest I have ever attempt mostly 
due to the fact that at the time I had no taken calculus yet and was 
unfamiliar with the math. Out of all the projects I have done this one has 
proven the most research-heavy. 
</p>
<p>
The program works by casting a ray object through a camera point and a screen point
then returning what it hits. This seems easy but once you start adding light, reflectivity, 
roughness, and so on it becomes much much harder.
</p>
<p>
Here is a sketch of how ray tracing works:
</p>
<img class="imgcenter" src="IMG/rayTracingExample.png">
<p class="modalText">
Below is an image created by this ray-tracing program in the form of a BMP.
</p>
<img class="imgcenter"  src="IMG/scene.bmp">
html;
		make_project("Ray Tracer", "RayTracer", "cpp", "raytracer", $content);
		
		$content =<<<html
<p>
I began this project after being inspired by a gif of an image being converted into four versions
of depleted quality using only a pasta shredder and tape. I thought that the idea of this process was
both interesting and something that could be recreated through code.
</p>
<p>
I found the hardest part of this project was by far finding a good library to write and change png files, but 
after much searching and only almost changing to python in order to use the PIL library I found PNG++. It allowed
me to write and change pixels arrays and write them out as new images. 
</p>
<p>
In essence, the program works by taking an image like this:
</p>
<img class="imgcenter" src="IMG/mouse.png">
<p class="modalText">
And rearranging the pixels in order to create four new versions of the image like this:
</p>
<img class="imgcenter"  src="IMG/mouse_output.png">
html;
		make_project("Lossy Image Compression", "Lossy Image Compression", "cpp", "lossy-image-compression", $content);
?>
</div>
</div>

<div class='center lang java'>
	<h2>Java</h2>
	<div class="projBox">
	<?php
/* Small Snake */
$content =<<<html
<p>
Conway's Game of Life is a cellular automaton created by John Conway.
It works by using basic logic to simulate whether cells in a 2D landscape
survive, die, or reproduce. 
</p>
<p>
I was fascinated by Conway's Game of Life and wanted to try and create my own version in Java following the game's basic rules. For this project, I used Java's 
JFrame to create a User Interface that allows the users to pick locations for new cells.
</p>
<p>
The simulation can result in many unique and interesting patterns.
</p>
<img class="imgcenter" src="IMG/Gospers_glider_gun.gif">
<p>
To learn more about Conway's Game of Life see the <a href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life">wikipedia page</a>.
</p>
html;

make_project("Conway's Game of Life", "gol", "java", "conwaysgameoflife", $content);

$content = <<<html
<p>
The objective of this project was to train an A.I. that could play against a human relatively well.
</p>
<p>
The A.I. learned by playing against individuals in a population. Each individual was given a random move for each possible board state and then played against another individual. The winner would then go on to play another winner until only two were left. These two would then have their moves for particular board states traded randomly and multiple different ways in order to create the next generation. The next
generation would continue this cycle.
</p>
<img class="imgcenter" src="IMG/geneticAlgo.jpg">
<p> 
In order to make sure that the A.I. was learning I would, evert X generations, have the A.I. play against 
itself from past generations in order to see if it was improving. 
</p>
<p> 
The end result of two days of training was an A.I. that would win if given the chance and block against potential
loses.
</p>
html;
make_project("Tic-Tac-Toe Genetic Algorithm", "ttt", "java", "TicTacToeGeneticAlgo", $content);

$content =  <<<html
<p>
Minesweepers was my second G.U.I. based program I ever did and like most of my Java projects was done 
well completing Advanced Placement Computer Science A. It was fun and interesting at the time since I had 
not done a lot with G.U.I.s and thus was different. 
</p>
<p>
The game, if you didn't know, is about clearing a board without clicking on any mines going off the fact that 
each board piece that isn't a mine shows a number based on the mines nearby as depicted in the image below:
</p>
<img class="imgcenter" src="IMG/minesweeper.png"">
<p>
If you are interested in the code behind the game feel free to check out my GitHub page.
</p>
html;
make_project("Minesweeper", "ms", "java", "MIneSweeperGUI", $content);
$content =  <<<html
<p>
I started using Discord at the end of my junior year and soon found that it offered support for bots. The need
for this bot began when my friend told me he wanted to start a Discord channel to run tournaments. He asked me if
I could build something that would assist with making and running tournaments.
</p>
<p>
The result of the bot was fairly impressive. The final version of the bot could:
<ol>
	<li>Start tournaments</li>
	<li>End tournaments</li>
	<li>Add users to a tournament</li>
	<li>Remove users from a tournament</li>
	<li>Get an image of a tournaments bracket</li>
	<li>Allow users to report scores</li>
	<li>Move users to talk channel with their opponent</li>
</ol>
</p>
<p>
the bot was able to do all of this with the help of a service called Challonge. This website helps facilitate 
the running of tournaments and all I had to do was facilitate the communication of the user to the bot, the bot 
to Challonge, and Challonge back to the user.
</p> 
<p>
Here is how an admin would tell the bot to end a tournament:
</p> 
<img class ="imgcenter" src="IMG/discordbotEndTourn.png">
<p>
In this case the tournament running is called "ckforttest".
</p>
<p>
Here is how a user would ask the bot to move one into a chat room with their opponent:
</p>
<img class ="imgcenter" src="IMG/discordBotMoveMe.png">
<p> 
If you are interested in checking out the Challonge website <a href="https://challonge.com/">here</a> is the link
</p>
html;
make_project("Discord Bot", "db", "java", "Discord-Challonge-Bot", $content);
$content=<<<html
<p>
I wanted to learn about machine learning but didn't want to begin delving into neural networks. I 
built this project as a proof of concept for a genetic algorithm. This program was given a word and asked to find it while only being given a fitness score based on the word it presents. Over time it gets closer and closer to the real world.
</p>
<p>
 <ol>

 <li>The program starts by generating a random population each with random character.</li>
 <li>Then each individual is assigned a fitness based on how close it is to the target word.</li>
 <img class="imgcenter" src="IMG/fittestInd.png">
 <li>It then creates a new population based off of these two individuals using crossovers of both individuals 
 as well as random mutations of character
 <img style="height:300px" class="imgcenter" src="IMG/gen1gen2.png"></li>
 <li>This process is then repeated until the word is found.</li>
 </ol>

</p>
<p>For more about genetic algorithms check it out <a href="https://en.wikipedia.org/wiki/Genetic_algorithm">here</a></p>
html;
make_project("Genetic algorithm Word Finder", "gwf", "java", "GeneticAlgoWordFinder", $content);
$content=<<<html
<img class="imgcenter" src="IMG/cnet.png"></li>
<p>
I created this project to try and extend my programming knowledge into real-world "problems". The problem,
in this case, was not wanting to log on to check what homework I had for that day and instead, being able to run a 
program that would show me.
</p>
<p> 
I had to find a way to interface with the website's login page and be able to navigate it. For this I found
a library called <a href="https://selenium.dev/">Selenium</a> which allows one to navigate webpages through code.
</p>
html;
make_project("Cranbrook Homework Application", "cha", "java", "CNETAPP", $content);
?>

	</div>
</div>


<div class='center lang python'>

	<h2>Python</h2>
	<div class="projBox">
		<?php
$content = <<<html
<p>
To start this project I first had to code an Instagram scraper that would give me a CSV of users that could then be followed and unfollowed.
The goal of which is that the notification of a new follower would leave some to follow the account. 
</p>
<p>
I build the scrapper to work off of a hashtag to find users that would have a higher chance of being interested in your account, i.e. if 
you have a photography account you would search users under the "photography" or "photo" hashtag.
</p>
<p>
The bot compiles the list of usernames into a CSV file, then it can read through this CSV and follow/unfollow the user. The result is
that a small portion of users will see the notification and check out the account. 
</p> 
<p>
I built this bot for one of my brother's friends who owns a company and wanted a way to bring in more internet traffic to his companies Instagram.
</p>
<p>
The code for this is on GitHub but I do warn you this was my first project and the code is fairly rough.
<p/>
html;
make_project("Instagram Bot", "ib", "python", "Instagram-Follow-Bot", $content);

$content = <<<html
<p>
This game was one of the first projects I did outside of class just for fun, and being a newer coder
it's a game.
</p>
<p>
The architecture for this game came from Sendex, a python youtuber, who creates coding tutorials. I followed
one to create a racing game using pygame. I followed this tutorial and then after rewrote the card into the one
you see today. 
</p>
<p>
This top down shooter has gone through a multitude of changes as I made the game more and more complicated by:
<ol>
<li>Adding a health bar</li>
<li>Adding a fixed amount of ammunition</li>
<li>More guns with different advantages and weaknesses</li>
<li>A kill counter</li> 
<li>Increasing difficulty rounds</li>
<li>Textures and sprites</li>
<li>Etc...</li>
</ol>
</p>
<p>
Here's a picture of the game in action:
</p>
<img class="imgcenter" src="IMG/gamePic.png">
<p>
Check it out on github to play!
</p>
html;
make_project("Zombie Assault", "za", "python", "Topdown-Shooter", $content);
$content=<<<html
<p>
The Terminal Coding Challenge is a global A.I. competition based around creating a program
that will beat other programs in the "terminal" game.
</p>
<p>
Each player takes a turn placing offensive and defensive units and then submits their game state 
of which the computer simulates the resulting turn and gives the A.I. the board state after.
</p>
<img class="imgcenter" src="IMG/terminalBoard.png">
<p>The bot plays against opponents constantly and gains/loses points based on the ranking of the bot 
it played against. So although you might be 5-5 you could sill have a better ranking than someone 5-0 depending on
the ranking of your opponents
</p>
<img class="imgcenter" src="IMG/terminalBot.png">
<p>
My bot in this competition is currently #33 at the time of writing this which is actually 20 places lower
then the last time I checked.
</p>
<img class="imgcenter" src="IMG/terminalLeader.png">
<p>click <a href="https://terminal.c1games.com/home">here</a> to check out Terminal's Site and learn more about how the game works</p>
html;
make_project("Terminal Coding Challenge", "tcc", "python", "TerminalAIBot", $content);
?>
	</div>
</div>
