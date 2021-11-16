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
		      <div class="ctrlnav">
			       <h1>DASHBOARD</h1>
			         <a href="{{route('deconnecticut')}}">Deconnection</a>
		      </div>
		      <div class="container">
			       <table class="table">
                <thead>
                      <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Email</th>
                          <th>Numero</th>
                          <th>Pays</th>
                          <th>Ville</th>
                          <th>CodePostal</th>
                          <th>Statut</th>
                          <th>Produit</th>
                          <th>Quantité</th>
                          <th>Supp Commande</th>
                      </tr>
                </thead>
                <tbody>
                  @foreach($clients as $client)
                    <tr>
                      <th scope="row">{{$client->id}}</th>
                      <td>{{$client->nom}}</td>
                      <td>{{$client->email}}</td>
                      <td>{{$client->numeroTel}}</td>
                      <td>{{$client->pays}}</td>
                      <td>{{$client->ville}}</td>
                      <td>{{$client->codePostal}}</td>
                      @foreach($client->commandes as $com)
                      <td>{{$com->statut}}</td>
                      @endforeach
                      <td>prod->nameProd</td>
                        <td>
      	                     <form method="POST" action="{{ route('dlC',['id'=>$client->id]) }}" >
        	                     <input type="hidden" class="form-control" name="numaut" value="1">
                                <button class="btn btn-danger btn-flat btn-sm" onclick="return confirm('Êtes-vous sûr ?');" type="submit" name="supp">
                    	           <em class="fa fa-trash"> </em>Supprimer
                                </button>
                            </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
          </table>
		    </div>
	     </div>
  </body>
</html>