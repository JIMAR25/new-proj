<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bienvenue sur notre site d'aide et de donations</title>
  <!-- Link vers les styles CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" integrity="sha384-zTfHpF9Kv3HQyjmdFkSgx4yKkEJwfxpYYDYxB+4jzIa4KQZDzlwLJxKqdjNQr5Je" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-DJlAdpb1OfgJxCphE6bW0aMca0ojHYSJAzBwY+NyTt8yDJoSUg/zp+1vyyuX+q3q" crossorigin="anonymous">
</head>
<body>
  <div class="main">
      @include('layouts.header')
      <div class="hero-image">
        <div class="titles">

      </div>
  </div>
  <section class="home-section">
  <div class="container">
    <div class="row1">
      <div class="col-md-6">
        <h1 class="section-title">L'organisation marocaine ShareHope <br> d'aide et doantion</h1>
        <p>Notre organisation de donation et d'aide marocaine est déterminée à faire une différence <br> dans la vie de ceux qui ont besoin de soutien. Nous nous engageons à fournir <br> une aide efficace et à impact durable pour les communautés locales. <br> Rejoignez-nous dans notre mission de changer des vies aujourd'hui.</p>
        <a href="#" class="read-more">Lire plus</a>
      </div>
      <div class="tous-nb">
        <div class="stats-box">
          <div class="stats-number">10,000</div>
          <div class="stats-title">Titre du nombre</div>
        </div>
        <div class="stats-box">
          <div class="stats-number">10,000</div>
          <div class="stats-title">Titre du nombre</div>
        </div>
        <div class="stats-box">
          <div class="stats-number">10,000</div>
          <div class="stats-title">Titre du nombre</div>
        </div>
        <div class="stats-box">
          <div class="stats-number">10,000</div>
          <div class="stats-title">Titre du nombre</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="report-box">
            <span>
            <h3 class="report-title"><i class="far fa-file-pdf"></i> International Report 2021</h3>
              <a href="#" class="btn-read-report red">Lire le rapport</a>
            </span>
          </div>
      </div>
    </div>
  </div>
</section>
<div class="contain">
  <div class="image-container">
    <img src="./pics/back1.jpg" alt="your-image">
    <div class="card-container">
      <h5>Maroc</h5>
      <h2>Dans de nombreuses régions du Maroc, il existe des endroits où les populations sont dans le besoin et nécessitent une aide extérieure pour subvenir à leurs besoins les plus essentiels.</h2>
      <h6>13/06/2018</h6>
    </div>
  </div>
</div>
<section class="card-section">
  <div class="card">
    <img src="./pics/back5.jpg" alt="image1">
    <h3>Titre 1</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis eius quia ad corrupti vitae vel architecto distinctio, quam suscipit voluptatibus molestias. Aut sint veniam dignissimos itaque voluptates voluptas eaque delectus.</p>
    <h5>date</h5>
  </div>
  <div class="card">
    <img src="./pics/back6.jpg" alt="image2">
    <h3>Titre 2</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta vero accusantium earum distinctio cupiditate qui officiis blanditiis, quidem, voluptate nulla corrupti molestiae asperiores repellat natus! Officia hic eligendi iste ipsa?</p>
    <h5>date</h5>
  </div>
  <div class="card">
    <img src="./pics/back7.jpg" alt="image3">
    <h3>Titre 3</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi asperiores quasi, quo nulla blanditiis! Aperiam esse obcaecati aspernatur voluptate nulla sint sit et quam, deleniti veniam tempore repudiandae porro!</p>
    <h5>date</h5>
  </div>
</section>

<section class="custom-section">
  <div class="contai">
    <h2 class="custom-title">Titre de la section</h2>
    <p class="custom-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo turpis quis orci tristique, ac suscipit libero sagittis. In vel bibendum nisl. Praesent id tincidunt lectus. Etiam sollicitudin libero nec neque imperdiet malesuada.</p>
    <button class="custom-button">Mon bouton</button>
  </div>
</section>

<div class="map">
    <div class="newsletter_main">
        <button class="google"><i class="fa fa-globe"></i>{{__('Voir sur Google Maps')}}</button>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13299267.381865657!2d-10.226282878622082!3d31.25078278642567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd14938c80b3655f%3A0x98d02c63177a5f!2sMaroc!5e0!3m2!1sfr!2sma!4v1678205654086!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <p>{{__('Maroc')}}</p>
</div>



  <footer>
        <section class="footer">
            <div class="footer-top">
              <div class="hfoot">
                <h4>Comment vos dons sont utilisés</h4>
                <p>
                  Vos dons financent des millions de consultations,d'interventions <br> chirurgicales, de traitements et
                   de vaccinations chaque année.
                </p>
              </div>
                <div class="pource">
                  <span>50%</span>
                  <p>Votre nombre ici</p>
                </div>
                <div class="pource">
                  <span>75%</span>
                  <p>Votre nombre ici</p>
                </div>
                <div class="pource">
                  <span>100%</span>
                  <p>Votre nombre ici</p>
                </div>
            </div>
            <hr>
            <div class="box-container">
                <div class="box2">
                    <span class="flaticon-solidarity"></span>
                    <h2 class="navbar-brand">ShareHope</h2>
                </div>
                <div class="box2">
                    <h3>{{__('Liens Rapides')}}</h3>
                    <a href="#" class="a1">{{__('Accueil')}}</a>
                    <a href="#">{{__('Doantions')}}</a>
                    <a href="#">{{__('Benevolats')}}</a>
                    <a href="#">{{__('Evenements')}}</a>
                    <a href="#">{{__('À propos de nous')}}</a>
                    <a href="#">{{__('Services')}}</a>
                </div>
                <div class="box2">
                    <h3>{{__('Liens Supplémentaires')}}</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> {{__('Poser des questions')}}</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>{{__('fjbdsjhvsbdskvjbs')}}</a>
                    <a href="#"> <i class="fas fa-angle-right"></i>{{__('fergnekrgnvfkvj')}}</a>
                    <a href="#"> <i class="fas fa-angle-right"></i> {{__('4urfbui43fwkeb4f')}}</a>
                </div>
                <div class="box2">
                    <h3>{{__('Infos de contact')}}</h3>
                    <a href="#"> <i class="fas fa-phone"></i>+212 546372891</a>
                    <a href="#"> <i class="fas fa-phone"></i> +212 546738292 </a>
                    <a href="#"> <i class="fas fa-envelope"></i>sharehope@gmail.com</a>
                    <a href="#"> <i class="fas fa-map"></i>av Tetouan N 20 Tetouan Maroc</a>
                </div>
                <div class="box2">
                    <h3>{{__('Suivez-nous')}}</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>
            </div>
            <div class="credit">© 2023<span> ShareHope </span> | {{__('Tous les droits sont réservés!')}} </div>
        </section>
        </footer>
  <script src="path/to/font-awesome/js/all.js"></script>
</body>


        
<style>
  section {
  box-shadow: none;
}
.main {
  position: relative;
  width: 100%;
  height: 100%;
}
.hero-image {
  background-image: url('/pics/back2.jpeg');
  background-size: cover;
  background-position: center;
  height: 520px; 
  position: relative;
}

.titles {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
}

.titles h1 {
  font-size: 5em;
  margin: 0;
  padding: 0;
}

.titles h2 {
  font-size: 3em;
  margin: 0;
  padding: 0;
}

.titles h3 {
  font-size: 2em;
  margin: 0;
  padding: 0;
}

footer {
  background-color:#696969;
  padding: 50px;
  color:white;
  
}

.box-container {
  display: flex;
  
  gap:120px;
}

.box2 {
  width: 25%;
  padding: 10px;
  margin-bottom: 30px;
}

.box2 h3 {
  font-size: 1.2em;
  margin-bottom: 15px;
  color:#B22222;
}

.box2 a {
  display: block;
  margin-bottom: 5px;
  text-decoration: none;
  color:#DCDCDC;
}

.box2 a:hover {
  color:white;
}

.credit {
  margin-top: 50px;
  text-align: center;
  font-size: 0.8em;
  color: #999;
}

.credit span {
  font-weight: bold;
  color: #333;
}

.flaticon-solidarity {
  background-image: url('pics/solidarite.png');
  background-size: contain;
  width: 4em;
  height: 4em;
  margin-top:50px;
  display: inline-block;
  vertical-align: middle;

}
.box2 h2{
  color:white;
  margin-top:-16.5px;
margin-left:50px;
  font-family:"Comic Sans MS";
}

.footer-top {
  display: flex;
  align-items: center;
  justify-content: space-around;
  margin-bottom: 30px;
}

.footer-top p {
  margin: 0;
}

.footer-top span {
  font-size: 24px;
  font-weight: 700;
  margin-left: 10px;
}

.footer-top hr {
  height: 1px;
  width: 100%;
  margin: 0;
  border: none;
  background-color: #d1d1d1;
}
.hfoot h4{
  font-family:Lucida Console;
  font-family:2rem;
}
.pource span{
  font-size:4.5rem;
  font-weight:bold;
}
.home-section {
  background-color: #f7f7f7;
  padding: 80px 0;

}

.section-title {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align:center;
  margin-top:100px;
}
.row1 p{
  text-align:center;
  font-size:20px;
  color:gray;
  text-indent: -1em; 
}
.stats-box {

  text-align: center;
  padding: 40px;


}

.stats-number {
  font-size: 60px;
  font-weight: bold;
  color: gray;
}

.stats-title {
  font-size: 24px;
  font-weight: bold;
  margin-top: 20px;
}

.report-box {
  display: flex;
  align-items: center;
  background-color: #f7f7f7;
  padding: 20px;
  margin-top:150px;
  border-radius: 5px;
  border:1px solid red;
  margin-left:200px;
  margin-right:200px;
}
.report-box span{
  display:flex;
  gap:600px;
}


.report-box .report-title {
  margin: 0;
}

.report-box .btn-read-report {
  background-color: red;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  margin-left: auto;
}

.report-box .btn-read-report:hover {
  background-color: darkred;
}


/* .read-more, .btn-read-report {
  display: inline-block;
  padding: 10px 20px;
  background-color: #ff5e14;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 30px;
  margin-top: 20px;
  transition: all 0.3s ease;
} */
.read-more{
  display: inline-block;
  padding: 10px 20px;
  border:1px solid red;
  color: black;
  font-size: 16px;
  font-weight: bold;
  text-decoration:none;
  text-transform: uppercase;
  margin-left:650px;

  margin-top: 20px;
  transition: all 0.3s ease;
}
.btn-read-more:hover, .btn-read-report:hover {
  background-color: #333;


  color: #fff;
}
.tous-nb{
  display:flex;
  gap:50px;
  margin-left:150px;
}

.contain {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin-top:-100px;
}

.image-container {
  position: relative;
}

.image-container img {
  display: block;
  width: 900px;
  height: auto;
}

.card-container {
  position: absolute;
  top: -70px;
  left: 600px;
  width:500px;
  height:250px;
  background-color: rgb(40, 39, 39);
  padding: 20px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  border-radius: 5px;
  text-align: center;
}
.card-container {
  color:red;
  font-size:16px;
}
.card-container h2{
  color:white;
}
.card-container h6{
  color:red;
  font-size:16px;
  margin-right:350px;
}
.card-container h5{
  color:red;
  font-size:16px;
}
.card-section {
  display: flex;
  justify-content: space-around;
  margin-bottom:50px;
}

.card {
  width: 30%;
  background-color: #f1f1f1;
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
}

.card img {
  width:400px;
  height: 300px;
  margin-bottom: 20px;
}

.custom-section {
  background-color: #f2f2f2;
  padding: 50px 0;
}

.contai {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

.custom-title {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 30px;
}

.custom-paragraph {
  font-size: 18px;
  margin-bottom: 40px;
}

.custom-button {
  background-color: #ff5a5f;
  color: #fff;
  border: none;
  padding: 10px 30px;
  font-size: 18px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.custom-button:hover {
  background-color: #ff7c81;
}

.map iframe {
  filter: grayscale(100%) invert(100%) sepia(0%) saturate(1000%) hue-rotate(355deg);
  width:950px;
}
.map {
  text-align: center;

}
iframe {
  display: block;
  margin: 0 auto;
}
.google {
  display: inline-block;
  margin-top: 20px;

  padding: 10px 20px;
  font-size: 18px;
  color: gray;
  background-color:transparent;
  border:1px solid red;
  border-radius: 4px;
  cursor: pointer;
}

.google:focus {
  outline: none;
}
.fa {
  margin-right: 10px;
}

</style>


    
