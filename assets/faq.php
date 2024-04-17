<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <style>
body{
    font-family: 'Work Sans', sans-serif;
}
.faq-heading{
    border-bottom: #777;
    padding: 20px 60px;
}
.faq-container{
display: flex;
justify-content: center;
flex-direction: column;

}
.hr-line{
  width: 60%;
  margin: auto;
  
}
/* Style the buttons that are used to open and close the faq-page body */
.faq-page {
    /* background-color: #eee; */
    color: #444;
    cursor: pointer;
    padding: 30px 20px;
    width: 60%;
    border: none;
    outline: none;
    transition: 0.4s;
    margin: auto;

}
.faq-body{
    margin: auto;
    /* text-align: center; */
   width: 60%; 
   padding: auto;
   
}


/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active,
.faq-page:hover {
    background-color: #F9F9F9;
}

/* Style the faq-page panel. Note: hidden by default */
.faq-body {
    padding: 0 18px;
    background-color:#C7C7C7;
    display: none;
    overflow: hidden;
}

.faq-page:after {
    content: '\02795';
    /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2796";
    /* Unicode character for "minus" sign (-) */
}

    </style>

</head>

<body>
    <main>
        <section class="faq-container" style="margin-top:100px;">
            <div class="faq-one">

                <!-- faq question -->
                <h1 class="faq-page">Why Should You Choose Shantiniketan Vidhyalaya For Your Son/Daughter?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Shantiniketan Vidhyalaya is one of the best school located in Kalol; School Atmosphere is very healthy in case of Student's Future,Student's Goals,Student's Health. School provides opportunities for bright students as well as for students who have not so good as study, We provides extra class for them. School Fees is Comparatively Less Than Anyother School.</p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

                <!-- faq question -->
                <h1 class="faq-page">What Is The Procedure For Taking Admission?</h1>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>Shantiniketan Vidhyalaya Is For Students Who Want to Apply For Class 1 to Class 12. </p>
		<ul> Process For Admission 
		<li>First Fill Up The Admission Form Carefully(form is provided on website itself)</li>
		<li>School Will Check Details And According To Our Criteria Students, Who Are Eligible First Get Informed</li>
		<li>If You Have Any Query You Can Go to <a href='help.php'>Help</a> Page!!</li>
		</ul>
                </div>
            </div>
            <hr class="hr-line">


            <div class="faq-three">

                <!-- faq question -->
<h1 class="faq-page">Shantiniketan Vidhyalaya Is Known For --</h1>

                <!-- faq answer -->
                <div class="faq-body">
		<p>Our School organizes These Events Every Year</p>
                    <ul>NON-TECHNICAL
			<li>POSTER MAKING</li>
			<li>PHOTOGRAPHY</li>
			<li>DEBATE</li>
		</ul>
                    <ul>CULTURE
			<li>DANCING</li>
			<li>SINGING</li>
			<li>STORY TELLING</li>
			<li>RANGOLI</li>
		</ul>
                    <ul>Educational
			<li>Essay Competitions</li>
			<li>Sanskrit Slok Competition</li>
		</ul>
                    <ul>Others
			<li>Sports Events</li>
			<li>Annual Functions</li>
		</ul>
                </div>
            </div>

        </section>
    </main>
    <script src="js/faq.js"></script>
</body>


</html>