<?php

$answer_page = '
<!DOCTYPE html>
<html lang="sk">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>{{$title}}</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body class="bg-gray-400 p-4 font-sans flex flex-col gap-8">
		<div>
			<p class="text-center text-gray-500 italic">odpoveď</p>
			<h1 class="w-full text-center text-2xl">{{solved_text}}</h1>
		</div>

		<div class="p-4 bg-slate-600 rounded-xl">
			<p class="text-center text-gray-400 italic">zodpovedz si / prečítaj si</p>
			<h1 class="w-full text-center text-2xl text-white">{{read_more}}</h1>
		</div>
	</body>
</html>
';