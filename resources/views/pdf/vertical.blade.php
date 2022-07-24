<style>
    @font-face {
        font-family: migmix;
        font-style: normal;
        font-weight: normal;
        src: url('{{ storage_path('fonts/ipag.ttf') }}');
    }

    @page {
        font-family: ipag;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .p-page {
        page-break-after: always;
        white-space: normal;
        margin: 3em;
    }

    .p-page:last-child {
        page-break-after: auto;
    }

    .p-title {
        font-size: 3em;
    }

    .p-author {
        font-size: 2em;
    }

    .p-content {
    }
</style>

<div class="p-page">
    <div class="p-title">
        {{ $pdf->title }}
    </div>
    <div class="p-author">
        {{ $pdf->users->name }}
    </div>
    <div class="p-content">
        {!! nl2br(e($pdf->content)) !!}
    </div>
</div>
