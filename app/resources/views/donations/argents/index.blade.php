@include('layouts.header')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="part1">
        <h1>{{__('Donations')}}</h1>
        <p>
            {{__('Un petit geste peut faire une grande différence. Chaque don compte,
            peu importe la taille ou la forme. Ensemble, nous pouvons changer des vies et faire du monde un endroit meilleur')}}.
        </p>
     </div>
<div class="row3">
    <div class="col-md-4">
        <a href="/donations/argents/create">
            <img src="/images/faim.jpg" alt="Image 3" class="img-thumbnail">
        </a>
        <h3>{{__('Intervention contre la faim dans le Maroc')}}</h3>
        <p>{{__('Vous pouvez aider à changer les choses dès maintenant en soutenant Vision Mondiale dans son intervention contre la faim dans le Maroc')}}</p>
      </div> 
      <div class="col-md-4">
        <a href="/donations/argents/create">
            <img src="/images/need.jpg" alt="Image 3" class="img-thumbnail">
        </a>
        <h3>{{__('Faire un don là où les besoins sont les plus urgents')}}</h3>
        <p>{{__('Mobilisant le personnel, les ressources et les fournitures de secours où ils sont les plus nécessaires, lorsqu\'ils sont les plus nécessaires.')}}</p>
      </div>
      <div class="col-md-5">
        <a href="{{ route('autres') }}" class="btn btn-primary">{{__('Autres')}}</a>
      </div>
</div>
<div class="footer">
  @include('layouts.footer')
</div>

<style>
  .part1 {
    margin-top:100px;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 20px;
    text-align: center;
    font-family: 'Arial', sans-serif;
    color: #333;
  }

  .part1 h1 {
    font-size: 2rem;
    color:gray;
    margin-top: 0;
    margin-bottom: 10px;
  }

  .part1 p {
    font-size: 16px;
    margin-bottom: 0;
    width:700px;
    margin-left: 300px;
    margin-top:30px;
    line-height:30px;
    
  }

  .row3 {
  margin-top:100px;
    margin-left:200px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.col-md-4 {
  flex-basis: calc(50% - 10px);
  margin-bottom: 20px;
  padding: 0 5px;
   margin-top: 80px;
}

.col-md-4 h2 {
  font-size: 20px;
  color:gray;
  margin-left:150px;
  margin-bottom: 10px;
}
.col-md-4 p {
  font-size: 20px;
  color:gray;
  width:450px;
  margin-bottom: 10px;
}

.col-md-4 img {
  width:400px;
  height: 300px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.col-md-5 {
  display: flex;
  align-items: center;
  margin-left:500px;
  margin-bottom:50px;
   margin-top:50px;

}

.col-md-5 .btn-primary {
  background-color: #ff0000;
  color: #fff;
  padding: 10px 20px;
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  border: 1px solid transparent;
  border-radius: 4px;
  text-decoration: none;
  margin-left: 10px;
}

</style>
