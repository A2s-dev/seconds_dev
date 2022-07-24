@if ($paginator->lastPage() > 10)

    {{-- When the current page is left of the center position of the link to be displayed --}}
    @if ($paginator->currentPage() <= floor(10 / 2))
        <?php $start_page = 1; ?>
        <?php $end_page = 10; ?>

        {{-- When the current page is to the right of the center position of the link to be displayed --}}
    @elseif ($paginator->currentPage() > $paginator->lastPage() - 10 / 2)
        <?php $start_page = $paginator->lastPage() - 11; ?>
        <?php $end_page = $paginator->lastPage(); ?>

        {{-- When the current page is at the center position of the link to be displayed --}}
    @else
        <?php $start_page = $paginator->currentPage() - floor(10 / 2); ?>
        <?php $end_page = $paginator->currentPage() + floor(10 / 2); ?>
    @endif
@else
    <?php $start_page = 1; ?>
    <?php $end_page = $paginator->lastPage(); ?>
@endif


@if ($paginator->lastPage() > 1)
    <div class="paginate-wrap">
        <ul class="global-paginate">

            <li class="page-items">
                <a class="page-links  {{ $paginator->currentPage() == 1 ? 'edge' : '' }}"
                    href="{{ $paginator->url(1) }}">
                    {{-- Previous --}}
                    <span aria-hidden="true">«</span>
                </a>
            </li>

            @for ($i = $start_page; $i <= $end_page; $i++)
                <li class="page-items">
                    <a class="page-links  {{ $paginator->currentPage() == $i ? 'currentPage' : '' }}"
                        href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            <li class="page-items">
                <a class="page-links {{ $paginator->currentPage() == $paginator->lastPage() ? 'edge' : '' }}"
                    href="{{ $paginator->url($paginator->lastPage()) }}">
                    {{-- Next --}}
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
        <p class="text-light"> {{ ($paginator->currentPage() - 1) * $paginator->perPage() + 1 }} -
            {{ ($paginator->currentPage() - 1) * $paginator->perPage() + 1 + (count($paginator) - 1) }} of
            {{ $paginator->total() }}
        </p>
    </div>
@endif
