<style>
    @font-face {
        font-family: migmix;
        font-style: normal;
        font-weight: normal;
        src: url('{{ storage_path('fonts/ipag.ttf') }}');
    }

    @page {
        font-family: ipag;
        white-space: no-wrap;
        word-wrap: break-word;
        margin: 3em;
    }

    .p-page {
        page-break-after: always;
    }

    .p-page:last-child {
        page-break-after: auto;
    }

    .first {
        height: 1000px;
        text-align: center;
    }

    .p-blank {
        height: 400px;
    }

    .p-title {
        font-size: 3em;
    }

    .p-author {
        font-size: 2em;
    }

    .p-content{
        line-height: 1.2;
    }

</style>

<div>
    <section class="p-page first">
        <div class="p-blank">
        </div>
        <div class="p-title">
            {{ $pdf->title }}
        </div>
        <div class="p-author">
            {{ $pdf->users->name }}
        </div>
    </section>
    <section class="p-page p-content">
        {!! nl2br(e($pdf->content)) !!}
    </section>
</div>
