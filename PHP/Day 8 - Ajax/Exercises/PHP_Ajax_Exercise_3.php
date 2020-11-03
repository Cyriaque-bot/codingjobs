<?php 

/*

	-- Exercise : 

	In this exercise, you will use the 'moviedb' database.

	- Step 1 :
		Create two file : 'movies.html' and 'getMovies.php'.
		In 'movies.html' page will display all the movies using AJAX.

	- Step 2 :
		Let's implement some filters (using GET method).
		On the 'movies.html' page, create a button to order by title (you can choose DESC or ASC).

		To implement this, you should use the GET method to ask getMovies.php the correct datas.
		For example : 
			getMovies.php?sortby=title&order=desc
			getMovies.php?sortby=title&order=asc

	- Step 3 :
		Let's implement a last filter.
		You should be able to filter by director.
		To do that : 
			1. Create a dropdown in 'movies.html' that display all directors.
			By default, this dropdown have the value to "all directors".

			2. When you select one of those directors, in the list, it should only display movies from this director.

		To do that you have to use GET method also.
		Be carefull, you can combine order by title and filter by director.
		Examples :
			getMovies.php?director=1
			getMovies.php?sortby=title&order=desc
			getMovies.php?director=1&sortby=title&order=desc
*/
