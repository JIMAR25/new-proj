@include('layouts.header')
<div class="row mt-5">
    <div class="col-md-12">
      <h2 class="mb-3">Contactez-nous</h2>
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
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
  </div>
  