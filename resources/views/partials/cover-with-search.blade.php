<div class="container-fluid cover">
    <div class="container">
        <div class="cover-title-wrapper">
            <h1 class="cover-heading heading white-text">Skærddersyet Træning</h1>
        <h2 class="heading sub-heading white-text">Vælg mellem 10.000 trænere</h2>
        </div>
    </div>
            <div class="search-overlay">
            
            <h2 class="white-text"><i>Find en træner nær dig</i></h2>
            <div class="form-group col-md-6">
                {!! Form::text('search', null, ['class' => 'col-md-12 search-field', 'placeholder' => 'Find din nærmeste træner']) !!}
                
                
                {!! Form::button('<i class="glyphicon glyphicon-search"></i>Søg', ['type' => 'submit', 'class' => 'search-submit']) !!}
                
                
            </div>
            </div>
</div>