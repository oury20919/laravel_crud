

@extends("layouts.master")


@section("contenu")
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-4">listes des etudiant insrit</h6>
   <div>
    <div class="d-flex justify-content-end mb-4">
        <a href="#" class="btn btn-info">ajouter un nouvel etudiant</a>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">classe</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <a href="#" class="btn btn-info">editer</a>
                <a href="#" class="btn btn-danger">suprimer</a>
            </td>
          </tr>

        </tbody>
      </table>
   </div>
  </div>


    <small class="d-block text-end mt-3">
      <a href="#">All suggestions</a>
    </small>
  </div>
</main>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="{{ asset('offcanvas-navbar.js') }}"></script></body>
</html>







 @endsection
