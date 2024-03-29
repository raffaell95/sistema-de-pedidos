@extends('site.base')


@section('content')

<section class="dashboard section">

	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
		
			<div class="col-md-12 offset-md-1 col-lg-12 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">
					<a href="{{route('produto.create')}}" class="btn btn-primary">Cadastrar novo produto</a>
					</h3>

					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Imagem</th>
								<th>Nome do produto</th>
								<th class="text-center">Categoria</th>
								<th class="text-center">Opções</th>
							</tr>
						</thead>
						<tbody>

							@foreach ($produtos as $produto)	
						
							<tr>
								
								<td class="product-thumb">
									<img width="80px" height="auto" src="images/products/products-1.jpg" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">{{$produto->nome_produto}}</h3>
									<span class="add-id"><strong>Id do produto:</strong> {{$produto->id}}</span>
									<span><strong>Descrição</strong> {{$produto->descricao}}</span>
								</td>
								<td class="product-category"><span class="categories">{{$produto->categoria}}</span></td>

								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
				
											<li class="list-inline-item">
											<a class="edit" href="{{route('produto.edit', $produto->id )}}">
													<i class="fa fa-pencil"></i>
												</a>		
											</li>
											<li class="list-inline-item">
												<a class="delete" href="{{ route('produto.show', $produto->id) }}">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->



</section>
    
@endsection