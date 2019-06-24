<!--<div class="col-lg-4 col-md-2" style="background-color: gray;">-->
<div class="col-lg-4 col-md-2"  id="my_sidebar">
    
    <h4 class="mt-3 ml-2" id="sidebar_header">Articles by authors:</h4>
    
    @if( count($authorsWithArticles) > 0 )
    <div>
      <ul class="list-group list-group-flush">
         @foreach( $authorsWithArticles as $author )
            <li class="list-group-item">
                <a href="{{ route('articles_by_author', ['user' => $author->id, 'author' => Str::slug($author->name, '-')  ]) }}">
                    {{ $author->name }}
                </a>
            </li>
         @endforeach
      </ul>
    </div>
    @endif
    
</div>