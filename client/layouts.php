<head><meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Tiêu đề website </title>
</head>
<style>
header.row { height: 100px; }
nav.row { height: 45px; }
main.row { min-height: 500px; }
main.row > article {min-height: 100%}
main.row > aside{min-height: 100%}
footer.row { height: 120px;}
</style>
<body>
<div class="container">
    <header class="row bg-info"> </header>
    <nav class="row bg-warning  text-white"></nav>
    <main class="row">
        <article class="col-md-9 bg-light">
        	<?php if (file_exists($viewFile)) require_once "$viewFile";?>
        </article>
        <aside class="col-md-3 bg-secondary"></aside>
    </main>
    <footer class="row bg-primary"></footer>
</div>
 </body>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"> </script>