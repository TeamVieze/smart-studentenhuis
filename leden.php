<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Frontpage layout example - UIkit documentation</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="css/uikit.min.css">
		<link rel="stylesheet" href="css/components/progress.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/uikit.min.js"></script>
        <link rel="stylesheet" href="css/style.css"> 
		<script type="text/javascript" src="js/components/sticky.min.js"></script>
		
    </head>

    <body>
	
			<!-- Navigatiebalk --> 
            <nav class="uk-navbar" data-uk-sticky data-uk-scrollspy="{cls:'uk-animation-slide-top',delay:300}">
				<div class="uk-container uk-container-center">
                <a class="uk-navbar-brand uk-hidden-small" href="home.php">StuDorm</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="keuken.php">Keuken</a>
                    </li>
                    <li>
                        <a href="badkamer.php">Badkamer</a>
                    </li>
                    <li>
                        <a href="woonkamer.php">Woonkamer</a>
                    </li>
                    <li>
                        <a href="energieverbruik.php">Energieverbruik</a>
                    </li>
                    <li class="uk-active">
                        <a href="instellingen.php">Instellingen</a>
                    </li>
                    <li>
                        <a href="index.php">Uitloggen</a>
                    </li>
                </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Instellingen</div>
				</div>
            </nav>
            <!-- Einde navigatiebalk --> 

         <div class="uk-container uk-container-center wrap">
        

        
            

   
            <!--Breadcrumbs-->
            <ul class="uk-breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="instellingen.php">Instellingen</a></li>
                <li><a href="huizen.php">Studentenhuizen</a></li>
                <li class="uk-active nu"><span>Leden</span></li>
            </ul>
            <!--Einde breadcrumbs-->

            <div class="uk-grid">
                <div class="uk-width-1-2 uk-margin-bottom">
                    <h2 class="uk-h1">Hoogstraat 9A</h2>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-push-1-4 uk-text-center">
                     <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="250" height="250" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjUwcHgiIGhlaWdodD0iMjUwcHgiIHZpZXdCb3g9IjAgMCAyNTAgMjUwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyNTAgMjUwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIyNTAiIGhlaWdodD0iMjUwIi8+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMjI3LjgxOCwyMDcuMjQ1Yy0xLjA0NS01Ljg0Ny0yLjM2OS0xMS4yNTktMy45NjUtMTYuMjUyYy0xLjU5OC00Ljk5NC0zLjc0Mi05Ljg1OS02LjQ0MS0xNC42MDYNCgkJYy0yLjY5Ny00Ljc0LTUuNzg5LTguNzg1LTkuMjgzLTEyLjEzMWMtMy41MDEtMy4zNDMtNy43NjgtNi4wMTUtMTIuODA5LTguMDEyYy01LjA0NS0xLjk5Ni0xMC42MTEtMi45OTUtMTYuNy0yLjk5NQ0KCQljLTAuODk3LDAtMi45OTQsMS4wNzQtNi4yOTEsMy4yMTljLTMuMjk1LDIuMTUtNy4wMTcsNC41NDYtMTEuMTU4LDcuMTg4Yy00LjE0NiwyLjY0Ni05LjUzNyw1LjA0NC0xNi4xNzYsNy4xODkNCgkJYy02LjY0MiwyLjE0OC0xMy4zMDgsMy4yMjEtMTkuOTk1LDMuMjIxYy02LjY4OSwwLTEzLjM1NC0xLjA3MS0xOS45OTUtMy4yMjFjLTYuNjQzLTIuMTQ2LTEyLjAzNi00LjU0My0xNi4xNzYtNy4xODkNCgkJYy00LjE0OC0yLjY0My03Ljg2My01LjAzNy0xMS4xNTgtNy4xODhjLTMuMjk1LTIuMTQ1LTUuMzkxLTMuMjE5LTYuMjkxLTMuMjE5Yy02LjA5NSwwLTExLjY2MSwwLjk5OS0xNi43MDEsMi45OTUNCgkJYy01LjA0MSwxLjk5Ny05LjMxMyw0LjY2OS0xMi44MDMsOC4wMTJjLTMuNTAxLDMuMzQ2LTYuNTkyLDcuMzkxLTkuMjg3LDEyLjEzMWMtMi42OTYsNC43NDctNC44NDcsOS42MTItNi40NDEsMTQuNjA2DQoJCWMtMS41OTcsNC45OTMtMi45MjIsMTAuNDA1LTMuOTcxLDE2LjI1MmMtMS4wNDYsNS44MzktMS43NDgsMTEuMjgtMi4wOTYsMTYuMzIzYy0wLjM0OSw1LjA0My0wLjUyNCwxMC4yMTMtMC41MjQsMTUuNQ0KCQljMCwzLjkyNSwwLjQzMiw3LjU1LDEuMjExLDEwLjkzMmgyMDguNDY0YzAuNzgxLTMuMzgyLDEuMjEzLTcuMDA3LDEuMjEzLTEwLjkzMmMwLTUuMjg3LTAuMTc2LTEwLjQ1Ny0wLjUyNi0xNS41DQoJCUMyMjkuNTY2LDIxOC41MjUsMjI4Ljg2OSwyMTMuMDg0LDIyNy44MTgsMjA3LjI0NXoiLz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMTI1LDE2Mi44MzRjMTUuODc1LDAsMjkuNDMtNS42MTcsNDAuNjY2LTE2Ljg1YzExLjIzMi0xMS4yMzUsMTYuODUtMjQuNzg5LDE2Ljg1LTQwLjY2Nw0KCQljMC0xNS44NzctNS42MTctMjkuNDI5LTE2Ljg1LTQwLjY2M0MxNTQuNDMsNTMuNDIyLDE0MC44NzUsNDcuODA0LDEyNSw0Ny44MDRzLTI5LjQzNCw1LjYxOS00MC42NjQsMTYuODUyDQoJCUM3My4xLDc1Ljg5LDY3LjQ4NCw4OS40NDEsNjcuNDg0LDEwNS4zMThjMCwxNS44NzgsNS42MTUsMjkuNDMxLDE2Ljg1Miw0MC42NjdDOTUuNTY2LDE1Ny4yMTcsMTA5LjEyNSwxNjIuODM0LDEyNSwxNjIuODM0eiIvPg0KPC9nPg0KPC9zdmc+DQo=" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Henk Brennink</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Huisbaas</p>
                </div>

                
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjAwcHgiIGhlaWdodD0iMjAwcHgiIHZpZXdCb3g9IjAgMCAyMDAgMjAwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyMDAgMjAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIi8+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMTgyLjI1NiwxNjUuNzk2Yy0wLjgzNi00LjY3Ny0xLjg5Ni05LjAwNy0zLjE3Mi0xMy4wMDFjLTEuMjc3LTMuOTk2LTIuOTk1LTcuODg4LTUuMTU0LTExLjY4Ng0KCQljLTIuMTU4LTMuNzkzLTQuNjMxLTcuMDI4LTcuNDI3LTkuNzA1Yy0yLjgwMS0yLjY3NC02LjIxMy00LjgxMi0xMC4yNDctNi40MDljLTQuMDM1LTEuNTk3LTguNDg4LTIuMzk2LTEzLjM1OS0yLjM5Ng0KCQljLTAuNzE5LDAtMi4zOTYsMC44NTgtNS4wMzIsMi41NzNjLTIuNjM2LDEuNzIyLTUuNjEyLDMuNjM4LTguOTI3LDUuNzVjLTMuMzE2LDIuMTE4LTcuNjMxLDQuMDM1LTEyLjk0LDUuNzUzDQoJCWMtNS4zMTIsMS43MTktMTAuNjQ2LDIuNTc2LTE1Ljk5NiwyLjU3NmMtNS4zNTIsMC0xMC42ODQtMC44NTctMTUuOTk2LTIuNTc2Yy01LjMxNC0xLjcxOC05LjYyOS0zLjYzNS0xMi45NC01Ljc1Mw0KCQljLTMuMzE5LTIuMTEyLTYuMjkxLTQuMDI4LTguOTI3LTUuNzVjLTIuNjM2LTEuNzE1LTQuMzEyLTIuNTczLTUuMDMzLTIuNTczYy00Ljg3NiwwLTkuMzI5LDAuNzk5LTEzLjM2MSwyLjM5Ng0KCQljLTQuMDMzLDEuNTk4LTcuNDUxLDMuNzM1LTEwLjI0Miw2LjQwOWMtMi44MDEsMi42NzctNS4yNzMsNS45MTItNy40Myw5LjcwNWMtMi4xNTcsMy43OTgtMy44NzcsNy42ODgtNS4xNTMsMTEuNjg2DQoJCWMtMS4yNzgsMy45OTQtMi4zMzcsOC4zMjQtMy4xNzcsMTMuMDAxYy0wLjgzNyw0LjY3MS0xLjM5OCw5LjAyNC0xLjY3NywxMy4wNmMtMC4yNzksNC4wMzMtMC40MTksOC4xNy0wLjQxOSwxMi4zOTkNCgkJYzAsMy4xNCwwLjM0NSw2LjA0LDAuOTY5LDguNzQ1aDE2Ni43NzFjMC42MjUtMi43MDUsMC45NzItNS42MDUsMC45NzItOC43NDVjMC00LjIyOS0wLjE0MS04LjM2Ni0wLjQyMi0xMi4zOTkNCgkJQzE4My42NTQsMTc0LjgyLDE4My4wOTYsMTcwLjQ2NywxODIuMjU2LDE2NS43OTZ6Ii8+DQoJPHBhdGggZmlsbD0iI0Q4RDhEOCIgZD0iTTEwMCwxMzAuMjY4YzEyLjcsMCwyMy41NDQtNC40OTQsMzIuNTMzLTEzLjQ3OWM4Ljk4NC04Ljk4OCwxMy40NzktMTkuODMsMTMuNDc5LTMyLjUzMg0KCQljMC0xMi43MDItNC40OTQtMjMuNTQzLTEzLjQ3OS0zMi41MzFDMTIzLjU0NCw0Mi43MzgsMTEyLjcsMzguMjQzLDEwMCwzOC4yNDNzLTIzLjU0Nyw0LjQ5NS0zMi41MzEsMTMuNDgxDQoJCWMtOC45ODksOC45ODgtMTMuNDgxLDE5LjgyOS0xMy40ODEsMzIuNTMxYzAsMTIuNzAyLDQuNDkyLDIzLjU0NCwxMy40ODEsMzIuNTMyQzc2LjQ1MywxMjUuNzczLDg3LjMsMTMwLjI2OCwxMDAsMTMwLjI2OHoiLz4NCjwvZz4NCjwvc3ZnPg0K" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Jorn Huisman</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Bewoner</p>
                </div>

                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjAwcHgiIGhlaWdodD0iMjAwcHgiIHZpZXdCb3g9IjAgMCAyMDAgMjAwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyMDAgMjAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIi8+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMTgyLjI1NiwxNjUuNzk2Yy0wLjgzNi00LjY3Ny0xLjg5Ni05LjAwNy0zLjE3Mi0xMy4wMDFjLTEuMjc3LTMuOTk2LTIuOTk1LTcuODg4LTUuMTU0LTExLjY4Ng0KCQljLTIuMTU4LTMuNzkzLTQuNjMxLTcuMDI4LTcuNDI3LTkuNzA1Yy0yLjgwMS0yLjY3NC02LjIxMy00LjgxMi0xMC4yNDctNi40MDljLTQuMDM1LTEuNTk3LTguNDg4LTIuMzk2LTEzLjM1OS0yLjM5Ng0KCQljLTAuNzE5LDAtMi4zOTYsMC44NTgtNS4wMzIsMi41NzNjLTIuNjM2LDEuNzIyLTUuNjEyLDMuNjM4LTguOTI3LDUuNzVjLTMuMzE2LDIuMTE4LTcuNjMxLDQuMDM1LTEyLjk0LDUuNzUzDQoJCWMtNS4zMTIsMS43MTktMTAuNjQ2LDIuNTc2LTE1Ljk5NiwyLjU3NmMtNS4zNTIsMC0xMC42ODQtMC44NTctMTUuOTk2LTIuNTc2Yy01LjMxNC0xLjcxOC05LjYyOS0zLjYzNS0xMi45NC01Ljc1Mw0KCQljLTMuMzE5LTIuMTEyLTYuMjkxLTQuMDI4LTguOTI3LTUuNzVjLTIuNjM2LTEuNzE1LTQuMzEyLTIuNTczLTUuMDMzLTIuNTczYy00Ljg3NiwwLTkuMzI5LDAuNzk5LTEzLjM2MSwyLjM5Ng0KCQljLTQuMDMzLDEuNTk4LTcuNDUxLDMuNzM1LTEwLjI0Miw2LjQwOWMtMi44MDEsMi42NzctNS4yNzMsNS45MTItNy40Myw5LjcwNWMtMi4xNTcsMy43OTgtMy44NzcsNy42ODgtNS4xNTMsMTEuNjg2DQoJCWMtMS4yNzgsMy45OTQtMi4zMzcsOC4zMjQtMy4xNzcsMTMuMDAxYy0wLjgzNyw0LjY3MS0xLjM5OCw5LjAyNC0xLjY3NywxMy4wNmMtMC4yNzksNC4wMzMtMC40MTksOC4xNy0wLjQxOSwxMi4zOTkNCgkJYzAsMy4xNCwwLjM0NSw2LjA0LDAuOTY5LDguNzQ1aDE2Ni43NzFjMC42MjUtMi43MDUsMC45NzItNS42MDUsMC45NzItOC43NDVjMC00LjIyOS0wLjE0MS04LjM2Ni0wLjQyMi0xMi4zOTkNCgkJQzE4My42NTQsMTc0LjgyLDE4My4wOTYsMTcwLjQ2NywxODIuMjU2LDE2NS43OTZ6Ii8+DQoJPHBhdGggZmlsbD0iI0Q4RDhEOCIgZD0iTTEwMCwxMzAuMjY4YzEyLjcsMCwyMy41NDQtNC40OTQsMzIuNTMzLTEzLjQ3OWM4Ljk4NC04Ljk4OCwxMy40NzktMTkuODMsMTMuNDc5LTMyLjUzMg0KCQljMC0xMi43MDItNC40OTQtMjMuNTQzLTEzLjQ3OS0zMi41MzFDMTIzLjU0NCw0Mi43MzgsMTEyLjcsMzguMjQzLDEwMCwzOC4yNDNzLTIzLjU0Nyw0LjQ5NS0zMi41MzEsMTMuNDgxDQoJCWMtOC45ODksOC45ODgtMTMuNDgxLDE5LjgyOS0xMy40ODEsMzIuNTMxYzAsMTIuNzAyLDQuNDkyLDIzLjU0NCwxMy40ODEsMzIuNTMyQzc2LjQ1MywxMjUuNzczLDg3LjMsMTMwLjI2OCwxMDAsMTMwLjI2OHoiLz4NCjwvZz4NCjwvc3ZnPg0K" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Tim Nijgaard</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Bewoner</p>
                </div>
                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjAwcHgiIGhlaWdodD0iMjAwcHgiIHZpZXdCb3g9IjAgMCAyMDAgMjAwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyMDAgMjAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIi8+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMTgyLjI1NiwxNjUuNzk2Yy0wLjgzNi00LjY3Ny0xLjg5Ni05LjAwNy0zLjE3Mi0xMy4wMDFjLTEuMjc3LTMuOTk2LTIuOTk1LTcuODg4LTUuMTU0LTExLjY4Ng0KCQljLTIuMTU4LTMuNzkzLTQuNjMxLTcuMDI4LTcuNDI3LTkuNzA1Yy0yLjgwMS0yLjY3NC02LjIxMy00LjgxMi0xMC4yNDctNi40MDljLTQuMDM1LTEuNTk3LTguNDg4LTIuMzk2LTEzLjM1OS0yLjM5Ng0KCQljLTAuNzE5LDAtMi4zOTYsMC44NTgtNS4wMzIsMi41NzNjLTIuNjM2LDEuNzIyLTUuNjEyLDMuNjM4LTguOTI3LDUuNzVjLTMuMzE2LDIuMTE4LTcuNjMxLDQuMDM1LTEyLjk0LDUuNzUzDQoJCWMtNS4zMTIsMS43MTktMTAuNjQ2LDIuNTc2LTE1Ljk5NiwyLjU3NmMtNS4zNTIsMC0xMC42ODQtMC44NTctMTUuOTk2LTIuNTc2Yy01LjMxNC0xLjcxOC05LjYyOS0zLjYzNS0xMi45NC01Ljc1Mw0KCQljLTMuMzE5LTIuMTEyLTYuMjkxLTQuMDI4LTguOTI3LTUuNzVjLTIuNjM2LTEuNzE1LTQuMzEyLTIuNTczLTUuMDMzLTIuNTczYy00Ljg3NiwwLTkuMzI5LDAuNzk5LTEzLjM2MSwyLjM5Ng0KCQljLTQuMDMzLDEuNTk4LTcuNDUxLDMuNzM1LTEwLjI0Miw2LjQwOWMtMi44MDEsMi42NzctNS4yNzMsNS45MTItNy40Myw5LjcwNWMtMi4xNTcsMy43OTgtMy44NzcsNy42ODgtNS4xNTMsMTEuNjg2DQoJCWMtMS4yNzgsMy45OTQtMi4zMzcsOC4zMjQtMy4xNzcsMTMuMDAxYy0wLjgzNyw0LjY3MS0xLjM5OCw5LjAyNC0xLjY3NywxMy4wNmMtMC4yNzksNC4wMzMtMC40MTksOC4xNy0wLjQxOSwxMi4zOTkNCgkJYzAsMy4xNCwwLjM0NSw2LjA0LDAuOTY5LDguNzQ1aDE2Ni43NzFjMC42MjUtMi43MDUsMC45NzItNS42MDUsMC45NzItOC43NDVjMC00LjIyOS0wLjE0MS04LjM2Ni0wLjQyMi0xMi4zOTkNCgkJQzE4My42NTQsMTc0LjgyLDE4My4wOTYsMTcwLjQ2NywxODIuMjU2LDE2NS43OTZ6Ii8+DQoJPHBhdGggZmlsbD0iI0Q4RDhEOCIgZD0iTTEwMCwxMzAuMjY4YzEyLjcsMCwyMy41NDQtNC40OTQsMzIuNTMzLTEzLjQ3OWM4Ljk4NC04Ljk4OCwxMy40NzktMTkuODMsMTMuNDc5LTMyLjUzMg0KCQljMC0xMi43MDItNC40OTQtMjMuNTQzLTEzLjQ3OS0zMi41MzFDMTIzLjU0NCw0Mi43MzgsMTEyLjcsMzguMjQzLDEwMCwzOC4yNDNzLTIzLjU0Nyw0LjQ5NS0zMi41MzEsMTMuNDgxDQoJCWMtOC45ODksOC45ODgtMTMuNDgxLDE5LjgyOS0xMy40ODEsMzIuNTMxYzAsMTIuNzAyLDQuNDkyLDIzLjU0NCwxMy40ODEsMzIuNTMyQzc2LjQ1MywxMjUuNzczLDg3LjMsMTMwLjI2OCwxMDAsMTMwLjI2OHoiLz4NCjwvZz4NCjwvc3ZnPg0K" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Koen Bakker</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Bewoner</p>
                </div>

                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjAwcHgiIGhlaWdodD0iMjAwcHgiIHZpZXdCb3g9IjAgMCAyMDAgMjAwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyMDAgMjAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIi8+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMTgyLjI1NiwxNjUuNzk2Yy0wLjgzNi00LjY3Ny0xLjg5Ni05LjAwNy0zLjE3Mi0xMy4wMDFjLTEuMjc3LTMuOTk2LTIuOTk1LTcuODg4LTUuMTU0LTExLjY4Ng0KCQljLTIuMTU4LTMuNzkzLTQuNjMxLTcuMDI4LTcuNDI3LTkuNzA1Yy0yLjgwMS0yLjY3NC02LjIxMy00LjgxMi0xMC4yNDctNi40MDljLTQuMDM1LTEuNTk3LTguNDg4LTIuMzk2LTEzLjM1OS0yLjM5Ng0KCQljLTAuNzE5LDAtMi4zOTYsMC44NTgtNS4wMzIsMi41NzNjLTIuNjM2LDEuNzIyLTUuNjEyLDMuNjM4LTguOTI3LDUuNzVjLTMuMzE2LDIuMTE4LTcuNjMxLDQuMDM1LTEyLjk0LDUuNzUzDQoJCWMtNS4zMTIsMS43MTktMTAuNjQ2LDIuNTc2LTE1Ljk5NiwyLjU3NmMtNS4zNTIsMC0xMC42ODQtMC44NTctMTUuOTk2LTIuNTc2Yy01LjMxNC0xLjcxOC05LjYyOS0zLjYzNS0xMi45NC01Ljc1Mw0KCQljLTMuMzE5LTIuMTEyLTYuMjkxLTQuMDI4LTguOTI3LTUuNzVjLTIuNjM2LTEuNzE1LTQuMzEyLTIuNTczLTUuMDMzLTIuNTczYy00Ljg3NiwwLTkuMzI5LDAuNzk5LTEzLjM2MSwyLjM5Ng0KCQljLTQuMDMzLDEuNTk4LTcuNDUxLDMuNzM1LTEwLjI0Miw2LjQwOWMtMi44MDEsMi42NzctNS4yNzMsNS45MTItNy40Myw5LjcwNWMtMi4xNTcsMy43OTgtMy44NzcsNy42ODgtNS4xNTMsMTEuNjg2DQoJCWMtMS4yNzgsMy45OTQtMi4zMzcsOC4zMjQtMy4xNzcsMTMuMDAxYy0wLjgzNyw0LjY3MS0xLjM5OCw5LjAyNC0xLjY3NywxMy4wNmMtMC4yNzksNC4wMzMtMC40MTksOC4xNy0wLjQxOSwxMi4zOTkNCgkJYzAsMy4xNCwwLjM0NSw2LjA0LDAuOTY5LDguNzQ1aDE2Ni43NzFjMC42MjUtMi43MDUsMC45NzItNS42MDUsMC45NzItOC43NDVjMC00LjIyOS0wLjE0MS04LjM2Ni0wLjQyMi0xMi4zOTkNCgkJQzE4My42NTQsMTc0LjgyLDE4My4wOTYsMTcwLjQ2NywxODIuMjU2LDE2NS43OTZ6Ii8+DQoJPHBhdGggZmlsbD0iI0Q4RDhEOCIgZD0iTTEwMCwxMzAuMjY4YzEyLjcsMCwyMy41NDQtNC40OTQsMzIuNTMzLTEzLjQ3OWM4Ljk4NC04Ljk4OCwxMy40NzktMTkuODMsMTMuNDc5LTMyLjUzMg0KCQljMC0xMi43MDItNC40OTQtMjMuNTQzLTEzLjQ3OS0zMi41MzFDMTIzLjU0NCw0Mi43MzgsMTEyLjcsMzguMjQzLDEwMCwzOC4yNDNzLTIzLjU0Nyw0LjQ5NS0zMi41MzEsMTMuNDgxDQoJCWMtOC45ODksOC45ODgtMTMuNDgxLDE5LjgyOS0xMy40ODEsMzIuNTMxYzAsMTIuNzAyLDQuNDkyLDIzLjU0NCwxMy40ODEsMzIuNTMyQzc2LjQ1MywxMjUuNzczLDg3LjMsMTMwLjI2OCwxMDAsMTMwLjI2OHoiLz4NCjwvZz4NCjwvc3ZnPg0K" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Nadja Regter</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Bewoner</p>
                </div>

            </div>

            <hr class="uk-grid-divider">

         
            
            
            
        </div>
            <!-- Footer --> 
        <hr class="uk-article-divider">
        <footer id="footer">
        
            <div id="section-3">
                <div class="uk-text-center">
                    <div class="StuDormlogo">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid">
                                <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                     <img data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:300}" width="200px" heigh="100px"  src="images/logowit3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid">
                                <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                    <p data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:300}">
                                        Copyright &copy; 2016 StuDorm</p>
                                    <a href="#section-0" data-uk-smooth-scroll class="uk-icon-button uk-icon-arrow-circle-up" data-uk-tooltip="{pos:'top'}" title="Go Top" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:300}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
                <!-- Off canvas menu -->    
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="keuken.php">Keuken</a>
                    </li>
                    <li>
                        <a href="badkamer.php">Badkamer</a>
                    </li>
                    <li>
                        <a href="woonkamer.php">Woonkamer</a>
                    </li>
                    <li class="uk-active">
                        <a href="energieverbruik.php">Energieverbruik</a>
                    </li>
                    <li>
                        <a href="instellingen.php">Instellingen</a>
                    </li>
                    <li>
                        <a href="index.php">Uitloggen</a>
                    </li>
                </ul>
        </div>
        
    </body>
</html>