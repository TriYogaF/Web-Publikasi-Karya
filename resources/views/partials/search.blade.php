<!-- Search -->
      <div class="row justify-content-end search_bar">
          <div class="col-4">
            <form action="/{{ $active }}">
                <div class="input-group mb-3">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" name="search" value="{{ request('search') }}"/>
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
          </div>
        
      </div>
  <!-- Akhir Search -->