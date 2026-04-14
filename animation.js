const Top = document.getElementById("ToTheTop");//make sure this is the last animation to end
const Left = document.getElementById("ToTheLeft");//make sure this is the last animation to end
const glow = document.getElementById("glow");//make sure this is the last animation to end


Top.addEventListener("animationend", () => {
	Top.style.transform = "translate(-50%, -150%)";
	Top.style.opacity = "1";
});

Left.addEventListener("animationend", () => {
	Left.style.transform = "translate(190%, 50%)";
	Left.style.opacity = "1";
});

glow.addEventListener("animationend", () => {
    glow.style.background = "#ffffff00" ;
    glow.style.color = "#ffffff";
	glow.style.opacity = "1";
    glow.style.filter = 'blur(10px)';
	setTimeout(() => {
		window.open("2.html","_self");
	}, 2000);
});