<?php
$sources = [
	"vision 2030 official website" => "https://www.vision2030.gov.sa/",
	"vision 2030 official 2024 annual report" => "https://www.vision2030.gov.sa/media/r3ij40wu/en-annual-report-vision2030-2024.pdf",
	"Saudi Vision 2030 - Wikipedia " => "https://en.wikipedia.org/wiki/Saudi_Vision_2030"
];
?>
<html lang="EN">
<header>
<meta charset="UTF-8">
<style>
.img{
	object-fit: cover;
    height: auto;
}

.listitem{
	/*
	width: fit-content;
    height: 9vh;
    display: flex;
    font-size: 8vh;
    overflow: clip;
    margin-bottom: 1vh;
	*/
	width: auto;
    height: 9vh;
    display: grid;
    font-size: 5vh;
    overflow: clip;
    margin-bottom: 1vh;
	
	
	background: linear-gradient(45deg, #67ffc7, #28bdbd94);
    padding: 0.5vh;
    border: 0px;
    border-radius: 1vh;
	
	transition-duration: 1s;
    transition-timing-function: ease-in-out;
	
	animation-timing-function: ease-in-out;
    animation-name: url;
    animation-duration: 3s;
}
.listitem:hover{
	background: linear-gradient(45deg, #67ffc7, #00ffff94);
}
@keyframes url{
	0%{opacity:0;}
	100%{opacity:1;}
}
#back{
	width: fit-content;
    height: 5vh;
    display: flex;
    font-size: 3vh;
    overflow: clip;
    margin-bottom: 1vh;
	
	
	background: linear-gradient(45deg, red, white);
    padding: 0.5vh;
    border: 0px;
    border-radius: 1vh;
	
	transition-duration: 1s;
    transition-timing-function: ease-in-out;
	
	animation-timing-function: ease-in-out;
    animation-name: url;
    animation-duration: 3s;
}
#back:hover{
	background: linear-gradient(45deg, red , #ababab);
}
</style>
</header>
<body>
<button type="button" onclick="back();" id="back">&#8592 ارجع</button>
<div id="list">
<ul>
<?php
foreach($sources as $sourceindex => $source){
	?>
	<li>
	<button class="listitem" onclick="<?= htmlspecialchars(str_replace(" ","_",$sourceindex)); ?>();" >
	<img class="img" src='http://www.google.com/s2/favicons?domain=<?= $source ?>' />
	<?= $sourceindex; ?>
	</button>
	</li>
<?php
}
?>
</ul>
</div>
<script>
//this is how to creat an element in js
/*
const para = document.createElement("p");
para.innerText = "This is a paragraph";
document.body.appendChild(para);
*/
<?php
foreach($sources as $sourceindex => $source){?>
function <?= htmlspecialchars(str_replace(" ","_",$sourceindex)); ?>(){
	window.open("<?= $source; ?>" , "_self"); 
}
<?php
}
?>
function back(){
	window.open("2.html","_self");
}
</script>
</body>
</html>