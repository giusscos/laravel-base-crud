<div class="cards_wrapper">
    @forelse ($comics as $card)
        <div class="card">
            <a href="{{ route('comics.show', $card->id) }}" title="{{ $card['series'] }}"></a>
                <div class="img_wrapper">
                    <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}" />
                </div>
                <h3 class="card_series uppercase">
                    {{ $card['series'] }}
                </h3>
        </div>
    @empty
        <h4>
            Non sono presenti Comics :(
        </h4>
    @endempty
</div>
