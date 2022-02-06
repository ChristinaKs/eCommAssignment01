<?php require APPROOT . '/views/includes/header.php'; 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body> <!-- using https://getbootstrap.com/docs/5.1/components/dropdowns/ but its not working -->
    <h1>Timeline of our Friendship</h1>
    <div class="btn-group dropend">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropright
        </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="http://localhost/A01/Main/timeline#Existence">First Time Acknowledging Each Other's Exisetence</a></li>
        <li><a class="dropdown-item" href="http://localhost/A01/Main/timeline#Meet">First Time Meeting</a></li>
        <li><a class="dropdown-item" href="http://localhost/A01/Main/timeline#Summer">Summer of 2021</a></li>
        <li><a class="dropdown-item" href="http://localhost/A01/Main/timeline#FallSem">Fall Semester of 2021</a></li>
        <li><a class="dropdown-item" href="http://localhost/A01/Main/timeline#WinterBreak">Winter Break</a></li>
        <li><a class="dropdown-item" href="http://localhost/A01/Main/timeline#Current">Where we are Now</a></li>
    </ul>
    </div>

    <div id="Existence">
        <h2> First Time Acknowledging Each Other's Exisetence </h2>
    </div>
    <div id="Meet">
        <h2> First Time Meeting </h2>
    </div>
    <div id="Summer">
        <h2> Summer of 2021 </h2>
    </div>
    <div id="FallSem">
        <h2> Fall Semester of 2021 </h2>
    </div>
    <div id="Winter Break">
        <h2> Winter Break </h2>
    </div>
    <div id="Current">
        <h2> Where we are Now </h2>
    </div>
</body>
    <?php require APPROOT . '/views/includes/footer.php'; ?>