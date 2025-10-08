<div id="panel-3" class="panel panel-icon">
    <div class="panel-hdr">
        <h2> Datetime X-Axis <span class="fw-light"><i>Area</i></span>
        </h2>
        <div class="panel-toolbar">
            <button type="button" class="btn btn-panel" data-action="panel-collapse" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-offset="0,10" data-bs-original-title="Toggle">
                <svg class="sa-icon">
                    <use class="panel-collapsed-icon" href="img/sprite.svg#minus-circle"></use>
                    <use class="panel-expand-icon" href="img/sprite.svg#plus-circle"></use>
                </svg>
            </button>
            <button type="button" class="btn btn-panel" data-action="panel-fullscreen" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-offset="0,10" data-bs-original-title="Fullscreen">
                <svg class="sa-icon">
                    <use href="img/sprite.svg#stop-circle"></use>
                </svg>
            </button>
            <button type="button" class="btn btn-panel" data-action="panel-close" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-offset="0,10" data-bs-original-title="Close">
                <svg class="sa-icon">
                    <use href="img/sprite.svg#x-circle"></use>
                </svg>
            </button>
        </div>
    </div>
    <div class="panel-container">
        <div class="panel-content position-relative">
            <div class="d-flex justify-content-center gap-1">
                <button id="one_month" type="button" class="btn btn-xs btn-outline-default">1M</button>
                <button id="six_months" type="button" class="btn btn-xs btn-outline-default">6M</button>
                <button id="one_year" type="button" class="btn btn-xs btn-outline-default">1Y</button>
                <button id="ytd" type="button" class="btn btn-xs btn-outline-default">YTD</button>
                <button id="all" type="button" class="btn btn-xs btn-outline-default">All</button>
            </div>
            <div id="datetime-area-chart"></div>
        </div>
    </div>
</div>