<?php

$question_page = '
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>{{title}}</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body class="bg-gray-400 p-4 font-sans flex flex-col gap-8">
		<div>
			<p class="text-center text-gray-500 italic">otázka</p>
			<h1 class="w-full text-center text-2xl">{{question}}</h1>
		</div>
		<form class="w-full flex flex-col gap-4" novalidate onsubmit="check()"> 
			<input type="text" id="input" class="w-full bg-gray-300 rounded-xl py-2 px-4 text-center" placeholder="tu napíš odpoveď" />
			<div onclick="check()" value="odoslat" class="bg-slate-500 text-white py-1 px-8 rounded-xl mx-auto block cursor-pointer text-center">odoslať</div>
		</form>

		<h3 id="chyba" class="hidden text-center text-xl text-red-600 font-bold">Chyba v odpovedi! <br />skús to znovu</h3>

		<script>
			function check() {
				let input = document.getElementById("input").value;
				if (input === "{{answer}}") {
					window.location.href = "{{page_url}}-solve.html";
				} else {
					document.getElementById("chyba").classList.remove("hidden");
				}
			}
		</script>
	</body>
</html>
';