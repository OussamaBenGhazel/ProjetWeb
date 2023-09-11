<?php
    include_once 'C:\xampp\htdocs\Sarra_Avis\Model\Avis.php';
    include_once 'C:\xampp\htdocs\Sarra_Avis\Controller\AvisC.php';

    $error = "";

    // create avis
    $avis = null;

    // create an instance of the controller
    $avisc = new AvisC();
    if (
        isset($_POST["cin"]) &&
        isset($_POST["nbetoile"]) &&
		isset($_POST["texte"])
    ) {
        if (
            !empty($_POST["cin"]) &&
            !empty($_POST["nbetoile"]) && 
			!empty($_POST["texte"])
        ) {
            $avis = new Avis(
                $_POST['cin'],
                $_POST['nbetoile'], 
				$_POST['texte']
            );
            $avisc->ajouteravis($avis);
            header('Location:customers_reviews.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Custumors_Reviews</title>
  <link rel='stylesheet' type='text/css' media='screen' href=''>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="pictures/logo.png" type="image/png">
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
  
</head>
<body>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
.rev-section{
    top: 80px;
    margin: auto;
    max-width: 1100px;
    text-align: center;
    height: 50%;
    padding: 70px 0;
}

.title{
  font-size: 2.5rem;
  text-transform: uppercase;
  color: #af082c;
  margin-bottom: .5rem;
  
}
.note{
  font-size: 1.1rem;
  color: rgb(150, 150, 150);
  font-style: italic;
    color: #af082c;


}

.reviews{
  margin: 10px 2px;
  display: flex;
  flex-wrap: wrap;
}
.review{
  margin: 0 1rem;
  min-width: 300px;
  flex: 1;
}

.head-review{
  margin: 1.75rem auto;
  width: 150px;
  height: 150px;
}
img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
}

.body-review{
  background-color: rgb(238, 238, 238);
  padding: 2.5rem;
  box-shadow: 2px 2px 10px 3px rgb(225, 225, 225);
}
.name-review{
  font-size: 1.5rem;
  color: rgb(50, 50, 50);
  margin-bottom: .25rem;
}
.place-review{
  color: red;
  font-style: italic;
}
.rating{
  color: rgb(253, 180, 42);
  margin: 1rem 0;
}
.desc-review{
  line-height: 1.5rem;
  letter-spacing: 1px;
  color: rgb(150, 150, 150);
  text-align: justify;
  
}

@media (max-width: 678px){
  .review{
    margin-top: 1.5rem;
  }
}

form {
	margin: 20px auto;
    padding:  30px ;
	width: 80%;
    color:black;
    cursor: pointer;
    box-shadow: 0 0 8px #550B17;
}
form i:hover{

    color: rgb(253, 180, 42);
    cursor: pointer;
}

label {
	display: block;
	margin-bottom: 5px;
}

input[type="text"], input[type="text"], input[type="email"], input[type="url"], textarea {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 4px;
    
}

input[type="submit"] {
	color: white;
	padding: 10px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
    box-shadow: 0 0 8px #550B17;
}

input[type="submit"]:hover {
	background-color: #ccc;
}

#comments {
	margin: 20px auto;
	width: 80%;
}

ul {
	list-style: none;
	padding: 0;
}

li {
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 4px;
	padding: 10px;
}

h4{
	margin :20px;
    padding: 20px;
    text-align: left;
    font-size: 1.3rem;
    
}
h2{
    font-family: 'Times New Roman', Times, serif;
    
}

p {
	margin-bottom: 0;

}
span{
    color: #af082c;
}

/*Footer*/

footer{
    width: 200%;
    background: #eaeaea;
}

footer .footer_main{
    width: 100%;
    display: flex;
    justify-content: space-around;
    cursor: pointer;
    margin: 0 0 10PX;
    padding: 0 0 10px;

}

footer .footer_main .tag{
    margin: 10px 0 10px;
    width: 50%;
    height: 50%;
    cursor: pointer;
    color: #af082c;
    padding: 0 0 0;
}

footer .footer_main .tag img{
    width: 150px;
    margin-bottom: 10px;
    cursor: pointer;
}

footer .footer_main .tag p{
    width: 250px;
    line-height: 22px;
    text-align: justify;
    cursor: pointer;
}

footer .footer_main .tag h1{
    font-size: 25px;
    margin: 25px 0;
    color: #af082c;
    cursor: pointer;
}

footer .footer_main .tag a{
    display: block;
    color: #550B17;
    text-decoration: none;
    margin: 10px 0;
    cursor: pointer;
}

footer .footer_main .tag i{
    margin-right: 10px;
    cursor: pointer;
}

footer .footer_main .tag .social_link i{
    margin: 0 5px;
    cursor: pointer;
    color: #550B17;
}
footer .footer_main .tag .social_link i :hover{
    margin: 0 5px;
    color: #089da1;
    cursor: pointer;
}

footer .footer_main .tag .search{
    width: 230px;
    height: 30px;
    background: rgba(202,202,202);
    border-radius: 25px;
}

footer .footer_main .tag .search input{
    width: 200px;
    padding: 2px 0;
    position: relative;
    top: 17%;
    left: 6%;
    border: none;
    outline: none;
    font-size: 13px;
    background: none;
    cursor: pointer;
    
}

footer .footer_main .tag .search button{
    padding: 7px 15px;
    background: #550B17;
    border: none;
    margin-top: 15px;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
}

footer .end{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    color: #000;
    cursor: pointer;
}

footer .end span{
    color: #550B17;
    margin-left: 10px;
    cursor: pointer;
}
.button {
			background-color: #af082c;
			color: white;
			padding: 10px 20px;
			text-align: center;
			display: inline-block;
			font-size: 16px;
			margin: 20px;
			cursor: pointer;
			border: none;
			border-radius: 5px;
            box-shadow: 0 0 8px #550B17;
		}


</style>
    <button class="button" onclick="location.href='BOOKLY.html'">HOME</button>
    
            
        
        </div>
    </nav>
<div class="rev-section">
    <div class="wrapper">
        <h2 class="title">Some Feedbacks</h2>
    </div>
    <div class="reviews">
        <div class="rating">
            
        </div>
        <div class="review">
           <div class="head-review">
              <img src="pictures/amen.jpg" width="250px">
           </div>
           <div class="body-review">
              <div class="name-review">Amen</div>
              <div class="name-review">14660879</div>
              
              <div class="rating">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half"></i>
              </div>
              <div class="desc-review">"I recently discovered <span>BOOKLY</span>and it's quickly become my go-to for finding new books to read. I love that I can read reviews from other readers and get a sense of whether a book is right for me. The reading lists are also a great way to discover new authors and genres."</div>
           </div>
        </div>
        <div class="review">
           <div class="head-review">
              <img src="pictures/nour.JPG" width="250px">
           </div>
           <div class="body-review">
              <div class="name-review">Nour</div>
              <div class="name-review">00123458</div>
              
              <div class="rating">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
              </div>
              <div class="desc-review"> "I am absolutely in love with <span>BOOKLY!</span>The selection of books is vast and the user interface is so easy to navigate. I love that I can access it from any device, anytime, anywhere. Thank you for creating such an amazing platform for book lovers like me!".</div>
           </div>
        </div>
        <div class="review">
           <div class="head-review">
              <img src="pictures/amal.jpg" width="250px">
           </div>
           <div class="body-review">
              <div class="name-review">Amal</div>
              <div class="name-review">15228657</div>
              
              <div class="rating">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half"></i>
              </div>
              <div class="desc-review">"I can't say enough good things about <span>BOOKLY!</span> I've been using it for a few months now and it has completely transformed my reading habits. The personalized book recommendations are spot-on and the reading challenges keep me motivated to read more. Plus,it's a great way to connect with other readers."</div>
           </div>
        </div>
        
        
        <h4><strong> Value your feedback and would love to hear your thoughts, 
            Please feel free to share your comments with us!</strong></h4>
            
            
        <!-- Comment form -->
        <form method="post">
        <input type="text" placeholder="ID" maxlength="10" name="id" id ="id" required>
            <input type="text" maxlength="8" placeholder="cin" name="cin" id ="cin" required>
            <input type="text"  placeholder="nb_etoile" min="0" max="5" name="nbetoile" id="nbetoile"  Required>
            <i class="fa-regular fa-star" style= "color: rgb(253, 180, 42);"></i>
            <i class="fa-regular fa-star" style=" color: rgb(253, 180, 42);"></i>
            <i class="fa-regular fa-star" style=" color: rgb(253, 180, 42);"></i>
            <i class="fa-regular fa-star" style=" color: rgb(253, 180, 42);"></i>
            <i class="fa-regular fa-star" style=" color: rgb(253, 180, 42);"></i>
            <textarea id="comment" placeholder="Comments" name="texte" required></textarea>
            <input type="submit" value="Send" style="background-color: #af082c;" >
        </form>
    </div>
</div>

</body>
<script>
function validerChamp() {
  var valeur = document.getElementById("nbetoile").value;

  // Vérifier si la valeur est un nombre entre 0 et 5
  if (isNaN(valeur) || valeur < 0 || valeur > 5) {
    alert("La valeur doit être un nombre entre 0 et 5.");
    return false;
  }
  var valeur = document.getElementById("nbetoile").value;
  // Vérifier si la valeur est strictement positive
  if (valeur <= 0) {
    alert("La valeur doit être strictement positive.");
    return false;
  }
  var c = document.getElementById("cin").value;

  // Vérifier si la longueur de la chaîne est inférieure ou égale à 8
  if (c.toString().length > 8) {
    alert("La valeur ne doit pas dépasser 8 caractères.");
    return false;
  }

  // Si toutes les conditions sont satisfaites, retourner true pour valider le champ
  return true;
}
</script>

</html>
