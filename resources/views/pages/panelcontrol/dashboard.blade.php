<!DOCTYPE html>
<html>
  <head>
	 <meta charset="utf-8">
	 <title>Admin Control</title>
	 <link rel="stylesheet" type="text/css" href="/css/sty.css">
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  </head>
<body>
    	<div class="conteneurCtrl">
		      <div class="ctrlnavv">
            <div><h2>DASHBOARD</h2></div>
            <div><a href="{{route('deconnecticut')}}">Deconnection</a></div>
		      </div>
          <div class="tta"><table class="content-table">
                <thead>
                      <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Email</th>
                          <th>Numero</th>
                          <th>Pays</th>
                          <th>Ville</th>
                          <th>CodePostal</th>
                          <th>Date commande</th>
                          <th>Statut</th>
                          <th>Produit</th>
                          <th>Quantité</th>
                          <th>Supp Commande</th>
                      </tr>
                </thead>
                <tbody>
                  @foreach($stampede as $vash)
                    <tr>
                      <th scope="row">{{$vash->id}}</th>
                      <td>{{$vash->nom}}</td>
                      <td>{{$vash->email}}</td>
                      <td>{{$vash->numeroTel}}</td>
                      <td>{{$vash->pays}}</td>
                      <td>{{$vash->ville}}</td>
                      <td>{{$vash->codePostal}}</td>
                      <td>{{$vash->created_at}}</td>
                      <td>{{$vash->statut}}</td>
                      <td>{{$vash->nameProd}}</td>
                      <td>{{$vash->qteProd}}</td>
                        <td>
                             <form method="post" action="{{ route('dlc',['id'=>$vash->id]) }}" >
                                @csrf
                               <input type="hidden" class="form-control" name="_method" value="delete">
                                <button class="btn btn-danger btn-flat btn-sm" onclick="return confirm('Êtes-vous sûr ?');" type="submit" name="supp">
                                 <em class="fa fa-trash"> </em>Supprimer
                                </button>
                            </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
          </table></div>
			       
	     </div>
  </body>
</html>