@if($pageTitle)
    @section('title', $pageTitle)
@endif

{!! $this->view() !!}
