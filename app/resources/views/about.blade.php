@include('layouts.header')
<div class="about1">
    <div class="b1">
        <img src="./pics/about5.jpg" alt="">
    </div>
    <div class="b2">
        <h4>ShareHope</h4>
        <h6>Partageons l'espoir ensemble : ShareHope, l'organisation de solidarité et de générosité</h6>
        <p>Nous sommes une organisation à but non lucratif dédiée à aider les personnes dans le besoin. Notre mission est d'apporter de l'aide et du soutien aux personnes qui en ont besoin, qu'il s'agisse de nourriture, de logement, de soins médicaux ou d'autres formes d'assistance.</p>
        <p>Nous avons été fondés en 2010 et depuis, nous avons aidé des milliers de personnes à travers le monde. Nous croyons que chacun mérite d'être traité avec dignité et respect, et nous nous engageons à faire une différence dans la vie de ceux que nous servons.</p>
        <p>Nous comptons sur le soutien de nos généreux donateurs et bénévoles pour aider à réaliser notre mission. Nous sommes reconnaissants à tous ceux qui nous soutiennent dans notre travail et nous espérons que vous vous joindrez à nous dans notre mission de faire du monde un endroit meilleur pour tous.</p>
    </div>
</div>
<div class="about2">
<h1>Les traveaux principaux</h1>
<div class="liste">
    <ul>
        <li onclick="changeImage('about1.jpg')"><span>01</span>conseils et astuces</li><hr>
        <li onclick="changeImage('about2.jpg')"><span>02</span>Cas d'urgence</li><hr>
        <li onclick="changeImage('about3.jpg')"><span>03</span>Aide Mediacal</li><hr>
        <li onclick="changeImage('about4.jpg')"><span>04</span>Services</li><hr>
        <li onclick="changeImage('about5.jpg')"><span>05</span>Aide generale</li>
    </ul>
</div>
<div class="image">
    <img id="mainImage" src="./pics/about1.jpg" alt="">
</div>
</div>

<script>
    function changeImage(imageName) {
    document.getElementById("mainImage").src = "./pics/" + imageName;
}
</script>

<section class="card-section">
    <h1>We are a global movement, with ShareHope from over 20 cities</h1>
    <div class="carte-roule">
    <div class="card">
        <img src="./pics/back11.jpg" alt="image1">
        <h3>Titre 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis eius quia ad corrupti vitae vel architecto distinctio, quam suscipit voluptatibus molestias. Aut sint veniam dignissimos itaque voluptates voluptas eaque delectus.</p>
        <h5>date</h5>
    </div>
    <div class="card">
        <img src="./pics/back12.jpg" alt="image2">
        <h3>Titre 2</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta vero accusantium earum distinctio cupiditate qui officiis blanditiis, quidem, voluptate nulla corrupti molestiae asperiores repellat natus! Officia hic eligendi iste ipsa?</p>
        <h5>date</h5>
    </div>
    <div class="card">
        <img src="./pics/back13.jpg" alt="image3">
        <h3>Titre 3</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi asperiores quasi, quo nulla blanditiis! Aperiam esse obcaecati aspernatur voluptate nulla sint sit et quam, deleniti veniam tempore repudiandae porro!</p>
        <h5>date</h5>
    </div>
    </div>
</section>


<div class="footer">
  @include('layouts.footer')
</div>



    <style>
        .about1 {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  margin: 20px;
  margin-top:50px;
  margin-bottom:100px;
}

.b1,.b2 {
  flex-basis: 45%;
  margin-bottom: 20px;
}
.b1{
    margin-left:50px;
}

.b2 h4 {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 20px;
  color:white;
  text-align:center;
}
h6{
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 20px;
    color:gray;
}
p {
  font-size: 1.2rem;
  line-height: 1.5;
  margin-bottom: 20px;
  color:white;
}

.b1 img {
  width:650px;
  height:auto;
  
}
.b2{
    padding:20px;
    background-color:rgb(33, 33, 82);
}
.about2 h1{
    margin-left:60px;
    font-size:3rem;
}
.liste {
  float: left;
  width: 30%;
  padding: 20px;
  margin: 20px;
 margin-left:20px;

}

.liste ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.liste ul hr{
    color:gray;
    margin-top:40px;
    width:300px;
}
.liste ul li span{
    color:red;
    font-size:18px;
    font-weight:bold;
    margin-right:20px;
}
.liste li {
  padding: 10px;
  margin-bottom: 5px;
  cursor: pointer;
  font-size:18px;
    font-weight:bold;
  text-align:center;
}

.image {
  float: left;
  width: 700px;
  height:600px;
  margin: 20px;
  margin-left:150px;
}

.image img {
  width: 100%;
  height: auto;
}
footer {
  background-color:#696969;
  padding: 50px;
  color:white;
  margin-top:100px;
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
.carte-roule{
    display:flex;
    gap:100px;
    margin-left:70px;
    

}
.carte-roule .card img {
  width:300px;
  height: 200px;
  margin-bottom: 20px;
  border-radius:60%;
}
.carte-roule .card p{
    color:gray;
}
.card-section h1{
    margin-bottom:80px;
    margin-right:200px;
    margin-left:80px;
    font-size:2.5rem;
} 
.carte-roule .card h3{
    color:red;
    margin-left:120px;
}

    </style>