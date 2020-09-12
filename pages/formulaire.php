        
       <form action="" method="post"> 
        <h4 class="mb-3">Ajouter un article</h4>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="art-nom">Nom</label>
            <input type="text" class="form-control" id="art-nom" placeholder="" required>
            <small class="text-muted">Entrez le nom de l'article</small>
            <div class="invalid-feedback">
              Nom est requis!
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="art-description">Description</label>
            <input type="text" class="form-control" id="art-description" placeholder="" required>
            <div class="invalid-feedback">
              Description est requise!
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="art-prix">Prix</label>
            <input type="text" class="form-control" id="art-prix" placeholder="" required>
            <div class="invalid-feedback">
              Prix est requis!
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="art-qte">Quantité</label>
            <input type="text" class="form-control" id="art-qte" placeholder="" required>
            <div class="invalid-feedback">
              Quantité requise!
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="art-categorie">Catégorie</label>
            <input type="text" class="form-control" id="art-code" placeholder="" required>
            <div class="invalid-feedback">
             Code requis!
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-dark btn-lg btn-block" type="submit">AJOUTER L'ARTICLE</button>
      </form>
    </div>