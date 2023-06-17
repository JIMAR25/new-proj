@include('layouts.header')
<div class="row mt-5">
    <div class="col-md-12">
        <div class="sup">
        <h1>Contactez-nous</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis veritatis assumenda repellendus ex modi, alias, aspernatur provident, perferendis ratione officiis autem eaque ipsum facere inventore facilis voluptates odit cupiditate illum?</p>
        </div>
      <form>
        <div class="form-group">
          <label for="name">Nom complet</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="form-group">
          <label for="email">Adresse e-mail</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="5" required></textarea>
        </div>
        <button type="submit"  class="env">Envoyer</button>
      </form>
    </div>
  </div>
  <div class="footer">
  @include('layouts.footer')
</div>

<style>
form{
    background-color:#f0f0f0;
    border:solid 2px red;
    padding-top:50px;
    padding-bottom:20px;
    margin-left:100px;
    margin-top:40px;
    margin-right:100px;

}
.form-group {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 10px;
    margin-left:300px;
    margin-right:300px;


}

.form-group label {
    width: 180px;
    margin-right: 10px;
     margin-top: 15px;
    color:gray;
    font-size:19px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group #message {
    flex: 1;
    padding-top:15px;
    margin-top: 15px;
}
.env{
    padding:7px 40px;
    background-color:transparent;
    border: solid 1px red;
    color:gray;
    font-size:18px;
    margin-left:630px;
    margin-top: 25px;
}
    .sup {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  margin: 0 auto;
  border-radius: 10px;
  background-color: #f0f0f0;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  padding: 20px;
  margin-top:100px;
  text-align:center;
}

.sup p {
  color: #333;
  font-size:18px;
  width:1000px;
}
.sup h1{
  color:red;
}
.sup h1, .sup p {
  padding: 10px;
  border-radius: 5px;
  margin: 0;
}
</style>
  