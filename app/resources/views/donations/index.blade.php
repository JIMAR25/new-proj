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
        <a href="/donations/argents/index">
            <img src="/images/argent.jpg" alt="Image 3" class="img-thumbnail">
        </a>
        <h2>{{__('Argent')}}</h2>
      </div>
      <div class="col-md-4">
        <a href="/donations/vetements/create">
        <img src="/images/vetements.jpg" alt="Image 3" class="img-thumbnail">
        </a>
        <h2>{{__('Vêtements')}}</h2>
    </div>
    <div class="col-md-4">
        <a href="/donations/alimentations/create">
          <img src="/images/alimentation.jpg" alt="Image 3" class="img-thumbnail">
        </a>
        <h2>{{__('Alimentations')}}</h2>
      </div>
    <div class="col-md-4">
        <a href="/donations/meubles/create">
        <img src="/images/meubles.jpg" alt="Image 1" class="img-thumbnail">
        </a>
        <h2>{{__('Meubles')}}</h2>
    </div>
    <div class="col-md-4" id="forniture">
        <a href="/donations/scolaires/create">
        <img src="/images/fourniturescolaire.jpg" alt="Image 2" class="img-thumbnail">
        </a>
        <h2>{{__('Fourniture scolaires')}}</h2>
    </div>

</div>

<div class="col-md-5">
  <div><h2>{{__('Si vous avez quelque chose d\'autre pour rendre quelqu\'un heureux, ne vous inquiétez pas, cliquez ici !')}}</h2></div>
  <div><a href="{{ route('autres') }}" class="btn btn-primary">{{__('Autres')}}</a></div>
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

.col-md-4 img {
  width:400px;
  height: 300px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
#forniture{
  margin-left:300px;
}
.col-md-5 {
  display: flex;
  align-items: center;
  margin-left:200px;
   margin-bottom:50px;

}

.col-md-5 h2 {
  flex-grow: 1;
  font-size: 20px;
  margin-bottom: 10px;
}

.col-md-5 .btn-primary {
  background-color: #ff0000;
  color: #fff;
  padding: 6px 12px;
  font-size: 14px;
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
  