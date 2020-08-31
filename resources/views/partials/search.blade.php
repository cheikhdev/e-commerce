<form action="{{route('products.search')}}" class="d-flex mr-3 mt-4">
            <div class="form-group mb-0 mr-0">
                <input type="text" name="q" class="form-control" placeholder="Recherche de Produits" value="{{ request()->q ?? '' }}">
            </div>
            <button type="submit" class="btn btn-outline-warning"><i class="fa fa-search" aria-hidden="true"></i>
            </button>
              
          </form>