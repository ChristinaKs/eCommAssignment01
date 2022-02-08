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
    <div class="btn-group" style="margin-left:250px">
        <a href="http://localhost/A01/Main/Timeline#Existence" class="btn btn-primary active" aria-current="page">First Time Acknowledging Each Other's Exisetence</a>
        <a href="http://localhost/A01/Main/Timeline#Meet" class="btn btn-primary">First Time Meeting</a>
        <a href="http://localhost/A01/Main/Timeline#Summer" class="btn btn-primary">Summer of 2021</a>
        <a href="http://localhost/A01/Main/Timeline#FallSem" class="btn btn-primary">Fall Semester of 2021</a>
        <a href="http://localhost/A01/Main/Timeline#Winter" class="btn btn-primary">Winter Break</a>
        <a href="http://localhost/A01/Main/Timeline#Current" class="btn btn-primary">Where we are Now</a>
    </div>
<br><br>
    <div id="Existence" style="margin-left: 30px">
        <h2> First Time Acknowledging Each Other's Exisetence </h2>
        <p>
            &emsp;The first time that the two creators of this entertaining php based assignment ever actually spoke to each other was in the very beginning of the 
            summer of 2021. Both of us were employed at CGI for an internship under the ATE (Alternance Etudes-Travail) program and, during the orientation and training 
            day, Sarah needed help with a document in our orientation. She reached out to Christina, knowing that she was in her grade and, from then on after they 
            bonded over a number of things and became quick friends. 
            <br>
            &emsp; Essentially, although we were in certain classes together during the first two semesters in college, we became friends afterwards, due to work 
            bringing us together.
        </p>
    </div> <br><br>
    <div id="Meet" style="margin-left: 30px">
        <h2> First Time Meeting </h2>
        <p>
            &emsp;The first time that the we met each other was soon after our first online interactions. The day went a bit like this:<br>
            &emsp; - Meeting up at Station Mont-Royal<br>
            &emsp; - Crystal shopping<br>
            &emsp; - Getting coffee<br>
            &emsp; - Meeting up with a third friend<br>
            &emsp; - The third friend and Christina got a helix and double helix piercings<br>
            &emsp; - Getting drunk in downtown (at a specific spot that would later be known as "stairs")<br>
        </p>
    </div><br><br>
    <div id="Summer" style="margin-left: 30px">
        <h2> Summer of 2021 </h2>
        <p>
        &emsp; During the summer, apart from talking online during dead hours at our internships, we would quite often meet up with a third friend or a group of friends.
        All of the meetups ended up at the drinking spot nicknamed "stairs". It became a regular hangout spot for our friendgroup and became a staple of our summer as 
        we would hang out at least once a week every week until school started. </p>
    </div><br><br>
    <div id="FallSem" style="margin-left: 30px">
        <h2> Fall Semester of 2021 </h2>
        <p>
        &emsp; During the fall semester, our third one in this program, Sarah, Christina and a third friend constantly hung out, both in school and outside of school. 
        During this semester, going to "stairs" continued to be a staple in the friendship until snow prevented us from being able to access our hangout spot. It is still 
        our spot, but we simply were not able to go to it as much anymore. </p>
    </div><br><br>
    <div id="Winter" style="margin-left: 30px">
        <h2> Winter Break </h2>
        <p>&emsp; Not much is to be said about winter break as apart for a sleepover with our friend in the very beginning, COVID did not allow us to hang out.</p>
    </div><br><br>
    <div id="Current" style="margin-left: 30px">
        <h2> Where we are Now </h2>
        <p>&emsp; Currently, we are still friends, asking our other friends uncomfortable questions as well as trying to have fun with our school projects, such as this one 
            keep us happy during the hardest semester we will have to face in this program. We are both looking into internships for the summer and hope to find one together 
            again so we can relive last summer. </p>
    </div>
</body>
    <?php require APPROOT . '/views/includes/footer.php'; ?>