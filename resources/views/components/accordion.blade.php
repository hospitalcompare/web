@unless(!$showLinks)
<ul class="blue-dot">
    @foreach($cards as $card)
        <li>
            <a href="#heading_{{ $loop->iteration }}" class="btn-link">{{ $card['title'] }}</a>
        </li>
    @endforeach
</ul>
@endif

<div class="accordion" id="{{ $accordionTitle }}_accordion">

    @foreach($cards as $card)
        <div class="card">
            <div class="card-header" id="heading_{{ $loop->iteration }}">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapse_{{ $loop->iteration }}" aria-expanded="true" aria-controls="collapse_{{ $loop->iteration }}">
                        {{ $card['title'] }}
                    </button>
                </h2>
            </div>

            <div id="collapse_{{ $loop->iteration }}" class="collapse" aria-labelledby="heading_{{ $loop->iteration }}"
                 data-parent="#{{ $accordionTitle }}_accordion">
                <div class="card-body">
                    {!! !empty($card['content']) ? $card['content'] : '' !!}

                </div>
            </div>
        </div>
    @endforeach
</div>
